<?php

namespace App\Livewire\Welcome;

use App\Models\Service;
use Livewire\Component;

class ServicesSection extends Component
{
    public $services;

    public function mount()
    {
        $this->services = Service::orderBy('display_order')->get();
    }

    public function render()
    {
        return view('livewire.welcome.services-section');
    }
}