<?php

namespace App\Http\Controllers;

use App\MailTrait;
use App\Mail\Newsletter;
use App\Mail\contactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    use MailTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function sendContactEmail(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $mailPayLoad = array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
        );
        return $this->sendMail(
            config('mail.from.address'),
            new contactForm((object)$mailPayLoad),
            'Thank you for contact us, One of our representative will shortly contact you.',
            'success'
        );
    }

    public function sendNewsletterEmail(Request $request)
    {
        $this->validate($request, [
            'email_address' => 'required|email'
        ]);

        $mailPayLoad = array(
            'email' => $request->get('email_address'),
        );

        $subscriber_detail = now()->toFormattedDateString() .":". $mailPayLoad['email'];
        if (!file_exists(storage_path('app/subscriber_list.csv'))) {
            Storage::disk('local')->put('subscriber_list.csv', $subscriber_detail. ',');
        } else {
            Storage::append('subscriber_list.csv', $subscriber_detail. ',');
        }

        $getSubscriberListCSV = Storage::get('subscriber_list.csv');
        $subscriberList = $this->csvToArray($getSubscriberListCSV);

        return $this->sendMail(
            config('mail.from.address'),
            new Newsletter($subscriberList, $mailPayLoad['email']),
            'Thank you for subscribing our newsletter.',
            'newsletter-success'
        );
    }
}
