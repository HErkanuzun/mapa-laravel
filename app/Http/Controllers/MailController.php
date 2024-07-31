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
    public function sendInfoEmail(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'experience' => 'required|numeric',
            'sector' => 'required|string|max:255',
            'infoSource' => 'required|string',
            'interestReason' => 'required|string|max:5000',
            'hindrance' => 'required|string|max:5000',
        ]);

        try {
            Mail::to('example@example.com')->send(new FormSubmitted($validated));
            return back()->with('successmessage', 'Formunuz başarıyla gönderildi!');
        } catch (\Exception $e) {
            return back()->with('errormessage', 'Form gönderilirken bir hata oluştu.');
        }
    }
}
