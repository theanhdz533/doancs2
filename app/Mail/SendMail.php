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
    public $phone;
    public $address;
    public $time;
    public $date;
    
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData,$information,$phone,$address,$time,$date)
    {
        $this->mailData = $mailData;
        $this->information = $information;
        $this->phone = $phone;
        $this->address = $address;
        $this->time = $time;
        $this->date = $date;
    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {  
        return $this->from('abcxyz@gmail.com','Admin')->subject('Thư hẹn xem xe!')->view('email.accept_cart');
    }

 

}
