<?php

namespace App\Livewire\Admin\Contact;

use App\Models\ContactDetail;
use Livewire\Component;

class Index extends Component
{
    public $contact;
    public $phone, $email, $address;

    public function mount()
    {
        $this->contact = ContactDetail::first();
        $this->phone = $this->contact->phone;
        $this->email = $this->contact->email;
        $this->address = $this->contact->address;
    }

    public function render()
    {
        return view('livewire.admin.contact.index');
    }

    public function update()
    {
        $this->validate([
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string',
        ]);

        $this->contact->update([
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
        ]);

        session()->flash('message', 'Contact Details updated successfully.');
    }
}