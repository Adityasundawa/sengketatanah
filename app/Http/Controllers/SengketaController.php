<?php

namespace App\Http\Controllers;

use App\Models\SengketaTanah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SengketaController extends Controller
{
    public function index()
    {
        $data['sengketa'] = SengketaTanah::get();
        return view('sengketa.index',$data);   
    }
    public function store(Request $req)
    {
        //   return $req;
        Validator::make($req->all(), [
            'nama' => 'required',
            'alamat'=>'required',
            'no_hp' => 'required',
            'objek_sengketa' => 'required',
            'status_pelapor' => 'required',
            'luas' => 'required',
            'lokasi' => 'required',
            'kronologi' => 'required',
            'status_pelapor' => 'required',
            'keb_dana' => 'required',
            'pengembalian_dana_sponsor' => 'required',
            'jaminan' => 'required',
            'foto_ktp' => 'required|mimes:png,jpg|max:3048',
            'dokumen_tanah' => 'required|mimes:png,jpg|max:3048',
             'foto_lokasi' => 'required|mimes:png,jpg|max:3048',
          
        ])->validate();

        if($req->jaminan == 'iya' && $req->jaminan_berupa == ''){
            return redirect()->back()->with('error','Data Jaminan Wajib Di isi');
        }

        if ($req->file('foto_ktp')) {
            $ktp = time().$req->file('foto_ktp')->getClientOriginalName();
            $req->foto_ktp->move(public_path('uploads'), $ktp);
        }
        if ($req->file('dokumen_tanah')) {
            $dokumen = time().$req->file('dokumen_tanah')->getClientOriginalName();
            $req->dokumen_tanah->move(public_path('uploads'), $dokumen);
        }
         if ($req->file('foto_lokasi')) {
            $foto_lokasi = time().$req->file('foto_lokasi')->getClientOriginalName();
            $req->foto_lokasi->move(public_path('uploads'), $foto_lokasi);
        }
    
    
       $sengketaTanah = SengketaTanah::create([
        'nama' => $req->nama,
        'alamat'=> $req->alamat,
        'no_hp' => $req->alamat,
        'objek_sengketa' => $req->objek_sengketa,
        'status_pelapor' => $req->status_pelapor,
        'luas' => $req->luas,
        'lokasi' => $req->lokasi,
        'kronologi' => $req->kronologi,
        'status_laporan' => 1, // 1 = data masuk / mengunggu verifikasi, 2 = Terverfikasi , 3 = Sedang diproses ,4 = Selesai
       'foto_ktp' => $ktp,
        'dokumen_tanah' => $dokumen,
          'foto_lokasi' => $foto_lokasi,
          'kebutuhan_dana_sponsor' =>$req->keb_dana,
          'pengembalian_dana_sponsor' =>$req->pengembalian_dana_sponsor,
          "jaminan"=>$req->jaminan,
          'jaminan_berupa'=>$req->jaminan_berupa
       ]);
        return redirect()->back()->with('success','Berhasil Mengirim data sengketa');
    }
    public function dataSengketa()
    {
        $data['sengketa'] = SengketaTanah::limit(10)->get();
        return view('sengketa.all-data',$data);
    }
    
    public function formKorban()
    {
        $data['sengketa'] = SengketaTanah::get();
        return view('sengketa.form-korban',$data);   
    }
    public function formPenyelesai()
    {
        $data['sengketa'] = SengketaTanah::get();
        return view('sengketa.form-penyelesai',$data);   
    }
    public function formLawFirm()
    {
        $data['sengketa'] = SengketaTanah::get();
        return view('sengketa.form-law-firm',$data);   
    }
}
