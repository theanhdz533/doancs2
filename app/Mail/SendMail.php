<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class SendMail extends Mailable
{
    use Queueable, SerializesModels;
  
    public $mailData;
    public $information;
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData,$information)
    {
        $this->mailData = $mailData;
        $this->information = $information;
    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {  
        return $this->from('abcxyz@gmail.com','Admin')->subject('Xác nhận đơn hàng của bạn')->view('email.accept_cart');
    }

 

}
