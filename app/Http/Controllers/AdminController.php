<?php

namespace App\Http\Controllers;


use App\Models\Bid_Sengketa;
use App\Models\JadwalMeeting;
use App\Models\KorbanUser;
use App\Models\SengketaTanah;
use App\Models\TimeStatus;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use \MacsiDigital\Zoom\Facades\Zoom;

class AdminController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data['jumlah_sengketa'] = KorbanUser::where('status_sengketa',1)->count();
        $data['jumlah_terverifikasi'] = KorbanUser::where('status_sengketa',2)->count();
        $data['jumlah_proses'] = KorbanUser::where('status_sengketa',3)->count();
        $data['jumlah_selesai'] = KorbanUser::where('status_sengketa',4)->count();
        return view('admin.index',$data);
    }
    public function sengketa()
    {
        $data['sengketa'] = KorbanUser::join('users','users.id','=','korban_user.user_id')->get();
        return view('admin.sengketa',$data);
        // dd($data);
    }
    public function selengkapnya($id)
    {
        $id = decrypt($id);
        $data['selengkapnya'] = KorbanUser::join('users','users.id','=','korban_user.user_id')->where('user_id',$id)->first();
        $data['sponsor'] = Bid_Sengketa::join('users', 'users.id', '=', 'bid_sengketa.sponsor_id')->where('sengketa_id',$id)->get();
        return view('admin.selengkapnya',$data);
    }
    public function prosesVerif(Request $req,$id)
    {
        $status = decrypt($req->status);
        $id = decrypt($id);
        $data_statusVerif = TimeStatus::where('sengketa_tanah_id',$id)
      
        ->whereNotNull('time_verifikasi')
        ->first();
        if($data_statusVerif != null){
            return redirect()->back()->with('error','data telah diverifikasi oleh Admin sebelumnya');
        }   
        $data_statusProses = TimeStatus::where('sengketa_tanah_id',$id)
      
        ->whereNotNull('time_diproses')
        ->first();
        if($data_statusProses != null){
            return redirect()->back()->with('error','data telah diproses oleh Admin sebelumnya');
        }   
        $data_statusSelesai = TimeStatus::where('sengketa_tanah_id',$id)
      
        ->whereNotNull('time_selesai')
        ->first();
        if($data_statusSelesai != null){
            return redirect()->back()->with('error','data telah selesai diproses oleh Admin sebelumnya');
        }   

        SengketaTanah::where('id',$id)->update([
            'status_laporan'=>$status
        ]);
        if($status == 2){
            TimeStatus::create([
                'sengketa_tanah_id' => $id,
                'time_verifikasi'=> Carbon::now(),
                'user_id'=>Auth::user()->id
            
            ]);
        }elseif($status == 3){
            TimeStatus::create([
                'sengketa_tanah_id' => $id,
                'time_diproses'=> Carbon::now(),
                'user_id'=>Auth::user()->id
            
            ]);
        }else{
            TimeStatus::create([
                'sengketa_tanah_id' => $id,
                'time_selesai'=> Carbon::now(),
                'user_id'=>Auth::user()->id
            
            ]);
        }

        return redirect()->back()->with('success','Status Berhasil Di rubah');
    }

    public function hasil_bid_sengketa()
    {
        $data['sengketa'] = SengketaTanah::get();
        return view('admin.hasilbid',$data);
    }


    public function admin_bid_sponsor($id,$sengketa)
    {
        $id = Crypt::decrypt($id);
        $sengketa = Crypt::decrypt($sengketa);
        $data['korban'] = KorbanUser::join('users','users.id','=','korban_user.user_id')->where('user_id',$sengketa)->first();
        $data['sponsor'] = User::find($id);
        $data['meeting'] = JadwalMeeting::where([
            'users_id' => $id,
            'sengketa_id' => $sengketa,
        ])->get();
        return view('admin.admin_bid_sponsor',$data);
    }

    public function add_meeting(Request $request,$sponsor,$sengketa)
    {
        JadwalMeeting::create([
            'jenis_meeting' => $request['jenis'],
            'sengketa_id' => Crypt::decrypt($sengketa),
            'users_id' => Crypt::decrypt($sponsor),
            'location' => $request['location'],
            'deskripsi' => $request['deskripsi'],
            'date' => $request['date'],
            'time' => $request['time'],
        ]);
        return redirect(url('/administrator/bid_sponsor/'.$sponsor.'/'.$sengketa.''))->with(['success' => 'Sukses Menambahkan Jadwal']);
    }

    public function create_zoom_meeting(Request $request,$sponsor,$sengketa)
    {

        $zoom = Zoom::user()->find('adityasundawa.co@gmail.com')->meetings()->create([
            'topic' => 'Meeting Sengketa Tanah',
            'duration' => 40, // In minutes, optional
            'start_time' => new Carbon(''.$request['date'].' '.$request['time'].':00'),
            'timezone' => 'Asia/Jakarta',
            ]);
        JadwalMeeting::create([
            'jenis_meeting' => 'online',
            'sengketa_id' => Crypt::decrypt($sengketa),
            'users_id' => Crypt::decrypt($sponsor),
            'location' => $zoom->start_url,
            'deskripsi' => $request['deskripsi'],
            'date' => $request['date'],
            'time' => $request['time'],
        ]);
        return redirect(url('/administrator/bid_sponsor/'.$sponsor.'/'.$sengketa.''))->with(['success' => 'Sukses Menambahkan Jadwal']);
    
    }
    
}
