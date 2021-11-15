<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CheckoutMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $emailDetails;

    /**
     * Create a new message instance for sending checkout email.
     *
     * @return void
     */
    public function __construct(array $emailDetails)
    {
        $this->emailDetails = $emailDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Checkout Tiny e-commerce')->view('emails.Checkout');
    }
}
