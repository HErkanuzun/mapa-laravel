<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InfoFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('mail.info_form_submitted')
                    ->subject('New Apply Form Submission')
                    ->with('data', $this->data);
    }
}
