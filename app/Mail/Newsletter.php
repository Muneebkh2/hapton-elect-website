<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Newsletter extends Mailable
{
    use Queueable, SerializesModels;

    public $subscriberData;
    private $subscriberEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subscriberData, $subscriberEmail)
    {
        $this->subscriberData = $subscriberData;
        $this->subscriberEmail = $subscriberEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Newsletter - new subscriber (' . $this->subscriberEmail . ')')->markdown('email.subscriber');
    }
}
