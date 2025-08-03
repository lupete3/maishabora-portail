<?php

namespace App\Livewire\Welcome;

use App\Models\AboutSection as AboutSectionModel;
use Livewire\Component;

class AboutSection extends Component
{
    public $about;

    public function mount()
    {
        $this->about = AboutSectionModel::first();
    }

    public function render()
    {
        return view('livewire.welcome.about-section');
    }
}