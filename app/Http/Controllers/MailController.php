<?php

namespace App\Http\Controllers;

use App\Mail\OtpMail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Support\Facades\Auth;

/**
 * Get the message envelope.
 *
 * @return 
 */

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Xác nhận đơn hàng của bạn!',
            'body' => 'This is for testing email using smtp.'
        ];
        
       
        if (Mail::to('kakashidz6@gmail.com')->send(new SendMail($mailData))){
            dd("true");
        }
        else {
            dd("false");
        }
       
        // dd("Email is sent successfully.");
    }
    public function otp(){
        // $mailData =0;
        // Mail::to('kakashidz6@gmail.com')->send(new OtpMail( $mailData));
        // dd("ok");
        return view('email.otp');
    }
    public function finish(Request $request){
        
         dd($request->status);
    }

   
}
