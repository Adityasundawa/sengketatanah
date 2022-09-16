<?php

namespace App\Http\Controllers\Utama;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardUtamaController extends Controller
{
    public function index()
    {
        return view('dashboard.index');   
    }
}
