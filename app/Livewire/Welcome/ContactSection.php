<?php

namespace App\Livewire\Welcome;

use App\Models\ContactDetail;
use Livewire\Component;

class ContactSection extends Component
{
    public $contact;

    public function mount()
    {
        $this->contact = ContactDetail::first();
    }

    public function render()
    {
        return view('livewire.welcome.contact-section');
    }
}