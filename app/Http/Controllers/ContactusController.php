<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactusController extends Controller
{
    public function contactus() {
        return view('contactus');
    }
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'msg' => $request->input('message'),
        ];

        Mail::send('email', $data, function ($message) use ($data) {
            $message->to('waseem.ikhlaif@gmail.com')
                ->subject('Contact Form Submission');
        });

        return redirect('contact-us');
    }
}
