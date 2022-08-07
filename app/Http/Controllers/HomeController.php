<?php

namespace App\Http\Controllers;

use App\Mail\contactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
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
        Mail::to($mailPayLoad['email'])->send(new contactForm((object)$mailPayLoad));
        return back()->with('success', 'Thank you for contact us, One of our representative will shortly contact you.');
    }
}
