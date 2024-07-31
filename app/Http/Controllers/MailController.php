<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSubmitted;
use Illuminate\Http\Request;


class MailController extends Controller
{
    public function sendContactEmail(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'content' => 'required|string',
        ]);

        Mail::to('herkanuzun@gmail.com')->send(new FormSubmitted($validated));

        return redirect()->back()->with('formmessage', 'Formunuz başarıyla gönderildi!');
    }
}
