<?php

namespace App\Http\Controllers\Utama;

use App\Http\Controllers\Controller;
use App\Models\Bid_Sengketa;
use App\Models\KorbanUser;
use App\Models\Sponsoruser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class SponsorController extends Controller
{
    public function index()
    {
        $data['sengketa'] = KorbanUser::join('users','users.id','=','korban_user.user_id')->where('jenis_pertolongan','sponsor')->get();
        return view('sponsor.index',$data);
    }

    public function bid_sengketa(Request $request,$id)
    {
         $id = Crypt::decrypt($id);
         $validate = Bid_Sengketa::where('sponsor_id',Auth::id())->get();
       
     
         if(count($validate) == 0){
            $create = Bid_Sengketa::create([
               'sengketa_id' => $id,
               'sponsor_id' => Auth::id(),
            ]);
            $request->session()->flash('status', 'Sukses!');
            return redirect(route('sponsor.index'));
         }else{
            $request->session()->flash('status', 'Anda Sudah Ngebid!');
            return redirect(route('sponsor.index'));
         };
    }
}
