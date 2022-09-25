<?php

namespace App;

use Illuminate\Contracts\Mail\Mailable as MailableContract;
use Illuminate\Support\Facades\Mail;

trait MailTrait
{
    public function sendMail($receiver, MailableContract $mailable, $Message, $messageType): \Illuminate\Http\RedirectResponse
    {
        Mail::to($receiver)->send($mailable);
        return back()->with($messageType, $Message);
    }

    public function csvToArray($csvFile): array
    {
        $content = explode(PHP_EOL, $csvFile);
        foreach ($content as $key => $line) {
            $subscriber = explode(':',$line);
            $lines[] = ['date' => $subscriber[0], 'email' => $subscriber[1]];
        }
        return $lines ?? [];
    }
}
