<?php

namespace App\Http\Controllers;


use App\Models\Bid_Sengketa;
use App\Models\JadwalMeeting;
use App\Models\SengketaTanah;
use App\Models\TimeStatus;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use MacsiDigital\Zoom\Facades\Zoom;

class AdminController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data['jumlah_sengketa'] = SengketaTanah::where('status_laporan',1)->count();
        $data['jumlah_terverifikasi'] = SengketaTanah::where('status_laporan',2)->count();
        $data['jumlah_proses'] = SengketaTanah::where('status_laporan',3)->count();
        $data['jumlah_selesai'] = SengketaTanah::where('status_laporan',4)->count();
        return view('admin.index',$data);
    }
    public function sengketa()
    {
        $data['sengketa'] = SengketaTanah::get();
        return view('admin.sengketa',$data);
    }
    public function selengkapnya($id)
    {
        $id = decrypt($id);
        $data['selengkapnya'] = SengketaTanah::find($id)->first();
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
        $data['korban'] = SengketaTanah::find($sengketa);
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
        return redirect(url('/admin/bid_sponsor/'.$sponsor.'/'.$sengketa.''))->with(['success' => 'Sukses Menambahkan Jadwal']);
    }

    public function create_zoom_meeting()
    {
     $data['zoomlink'] = Zoom::user()->find('adityasundawa.co@gmail.com')->meetings()->create([
        'topic' => 'Meeting Sengketa Tanah',
        'duration' => 40, // In minutes, optional
        'start_time' => new Carbon('2022-09-15 03:00:00'),
        'timezone' => 'Asia/Jakarta',
        ]);
     return view('admin.create_zoom_meeting',$data);
    }
    
}
