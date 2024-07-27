<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSubmitted;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $content;
    public $successMessage = '';

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'content' => 'required|string',
    ];

    public function sendEmail()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'content' => $this->content,
        ];

        Mail::to('herkanuzun@gmail.com')->send(new FormSubmitted($data));

        $this->successMessage = 'Mesajınız başarıyla iletildi!';
        
        // Reset form fields
        $this->reset(['name', 'email', 'content']);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

