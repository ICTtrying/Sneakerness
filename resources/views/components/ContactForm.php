<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'subject' => 'required|min:3',
        'message' => 'required|min:5',
    ];

    public function submit()
    {
        $this->validate();

        // Je kan hier Mail sturen of opslaan in database
        // Voor voorbeeld: session flash message
        session()->flash('success', 'Je bericht is verzonden!');

        // Velden resetten
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
