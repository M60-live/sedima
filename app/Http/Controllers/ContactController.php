<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function ContactForm(Request $request)
    {
        $details = [
            'fullName' => $request->fullName,
            'email'    => $request->email,
            'subject'  => $request->subject,
            'message'  => $request->message,
        ];

        Mail::to('info@sedimaadvisoryandfinance.co.za')->send(new ContactMail($details));

        return back()->with('message_sent',"Your Message Has Been Sent Successfully!");
    }
}
