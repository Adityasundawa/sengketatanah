<?php

namespace App\Http\Controllers\Utama;

use App\Http\Controllers\Controller;
use App\Models\KorbanUser;
use Illuminate\Http\Request;

class KorbanController extends Controller
{
    public function index()
    {
        $data['sengketa'] = KorbanUser::join('users','users.id','=','korban_user.user_id')->where('jenis_pertolongan','sponsor')->get();
        return view('korban.index',$data);
    }
}
