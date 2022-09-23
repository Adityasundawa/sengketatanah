<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpEmail;
class EmailController extends Controller
{
    //
    public function sendEmail(Request $request)
    {
        $details = [
          
            'otp' =>rand(1000,9999)
            ];
            Mail::to($request->email)->send(new OtpEmail($details));
            return response()->json([
                'status'=>"berhasil kirim email"
            ]);
    }
}
