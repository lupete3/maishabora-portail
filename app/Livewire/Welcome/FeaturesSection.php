<?php

namespace App\Livewire\Welcome;

use App\Models\Feature;
use Livewire\Component;

class FeaturesSection extends Component
{
    public $features;

    public function mount()
    {
        $this->features = Feature::orderBy('display_order')->get();
    }

    public function render()
    {
        return view('livewire.welcome.features-section');
    }
}