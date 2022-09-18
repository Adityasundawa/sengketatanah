<?php

namespace App\Http\Controllers\Utama;

use App\Http\Controllers\Controller;
use App\Models\KorbanUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KorbanController extends Controller
{
  

   public function index()
    {
        $data['sengketa'] = KorbanUser::join('users','users.id','=','korban_user.user_id')->where('jenis_pertolongan','sponsor')->get();
        return view('korban.utama',$data);
    }
    
    public function list_sengketa_saya()
    {
        // $data['sengketa'] = KorbanUser::join('users','users.id','=','korban_user.user_id')->where('jenis_pertolongan','sponsor')->get();
        $data['sengketa'] = KorbanUser::join('users','users.id','=','korban_user.user_id')->where('user_id',Auth::id())->get();
        return view('korban.index',$data);
    }

    public function add_korban(Request $request)
    {

        if($request['file_kronologi'] == NULL){    
            $create = KorbanUser::create([
                'user_id' => Auth::id(),
                'objek_sengketa' => $request['objek_sengketa'],
                'luas' => $request['luas'],
                'lokasi' => $request['lokasi'],
                'kronologi' => $request['kronologi'],
                'file_kronologi' =>  'NULL',
                'status_pelapor' => $request['status_pelapor'],
                'jenis_pertolongan' => $request['jenis_pertolongan'],
                'status_sengketa' => 1,
                'jumlah_dana' => $request['jumlah_dana'],
                'pengembalian_dana' => $request['pengembalian_dana'],
                'jaminan_dana' => $request['jaminan'],
                'jaminan_berupa' => $request['jaminan_berupa'],
                'status_pelapor' => $request['status_pelapor'],
            ]);
            return redirect(route('korban.index'));
            }else{
                $file_kronologi = time().'.'.$request->file_kronologi->extension();
                $request->file_kronologi->move(public_path('files/users/file_kronologi'), $file_kronologi);
                $create = KorbanUser::create([
                    'user_id' => Auth::id(),
                    'objek_sengketa' => $request['objek_sengketa'],
                    'luas' => $request['luas'],
                    'lokasi' => $request['lokasi'],
                    'kronologi' => $request['kronologi'],
                    'file_kronologi' =>  $file_kronologi,
                    'status_pelapor' => $request['status_pelapor'],
                    'jenis_pertolongan' => $request['jenis_pertolongan'],
                    // 'foto_ktp' => $imageKtp,
                    // 'foto_lokasi' => $imageLokasi,
                    // 'foto_dokumen_hak_tanah' =>  $image_dokumen_hak_tanah,
                    'status_sengketa' => 1,
                    'jumlah_dana' => $request['jumlah_dana'],
                    'pengembalian_dana' => $request['pengembalian_dana'],
                    'jaminan_dana' => $request['jaminan'],
                    'jaminan_berupa' => $request['jaminan_berupa'],
                    'status_pelapor' => $request['status_pelapor'],
                ]);
                User::where('id',Auth::id())->update([
                    'role' => 'korban',
                ]);
                return redirect(route('korban.index'));
            }


    }
}
