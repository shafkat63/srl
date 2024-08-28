<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Email;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create the email using Symfony's Email class
        $email = (new Email())
            ->to('muhtasir.shafkat@gmail.com')
            ->subject($request->subject)
            ->text(
                "Name: " . $request->name . "\n" .
                "Email: " . $request->email . "\n" .
                "Message: " . $request->message
            );

        // Send the email
        Mail::mailer('smtp')->send($email);

        // Redirect with success message
        return redirect()->route('/')->withview('pages.contact');;
    }
}
