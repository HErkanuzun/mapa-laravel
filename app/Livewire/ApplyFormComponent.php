<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\InfoFormSubmitted;

class ApplyFormComponent extends Component
{
    public $showModal = false;
    public $name;
    public $email;
    public $experience;
    public $sector;
    public $infoSource;
    public $interestReason;
    public $hindrance;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'experience' => 'required|integer|min:0',
        'sector' => 'required|string|max:255',
        'infoSource' => 'required|string',
        'interestReason' => 'required|string|max:255',
        'hindrance' => 'required|string|max:255',
    ];

    public function submit()
    {
        $this->validate();

        // Send the email
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'experience' => $this->experience,
            'sector' => $this->sector,
            'infoSource' => $this->infoSource,
            'interestReason' => $this->interestReason,
            'hindrance' => $this->hindrance,
        ];
        Mail::to('herkanuzun@gmail.com')->send(new InfoFormSubmitted($data));

        // Reset form fields
       $this->reset(['name', 'email', 'experience', 'sector', 'infoSource', 'interestReason', 'hindrance']);

        // Close the modal
        $this->showModal = false;

        // Show a success message or SweetAlert
        $this->dispatch('livewire:success');
    }

    public function render()
    {
        return view('livewire.apply-form-component');
    }
}

