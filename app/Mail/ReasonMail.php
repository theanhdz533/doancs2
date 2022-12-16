<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReasonMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;
    public $information;
    public $reason;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData,$information,$reason)
    {
        $this->mailData = $mailData;
        $this->information = $information;
        $this->reason = $reason;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from('abcxyz@gmail.com', 'Admin')->subject('Đơn hàng bị hủy!')->view('email.reason');
    }
}
