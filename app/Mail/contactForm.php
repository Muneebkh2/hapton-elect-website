<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var $customerContactMessage
     */
    public $customerContactMessage;

    /**
     * Create a new message instance.
     *
     * @param $customerContactMessage
     */
    public function __construct($customerContactMessage)
    {
        $this->customerContactMessage = $customerContactMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contact Form - ' . $this->customerContactMessage->name)->markdown('email.contact');
    }
}
