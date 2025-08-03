<?php

namespace App\Livewire\Welcome;

use App\Models\HeroSection as HeroSectionModel;
use Livewire\Component;

class HeroSection extends Component
{
    public $heroSection;

    public function mount()
    {
        $this->heroSection = HeroSectionModel::first();
    }

    public function render()
    {
        return view('livewire.welcome.hero-section');
    }
}