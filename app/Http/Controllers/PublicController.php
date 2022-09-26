<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function biddingSponsor()
    {
        return view('public.bidding_sponsor');
    
    }
    public function kerjasamaLahan()
    {
        return view('public.kerjasama_lahan');
    
    }
    public function podcastSengketa()
    {
        return view('public.podcast_sengketa');
    
    }
    public function jualBeliLahan()
    {
        return view('public.jual_beli_lahan');
    
    }
    public function lelangLahan()
    {
        return view('public.lelang_lahan');
    
    }

    public function joinSengketa()
    {
        return view('sengketa.join');   
    }
}
