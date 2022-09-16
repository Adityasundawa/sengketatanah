<?php

namespace App\Http\Controllers\Utama;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardUtamaController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $data['user'] = User::find($id);
        $data['role'] = $data['user']['role'];
        return view('dashboard.index',$data);   
    }
}
