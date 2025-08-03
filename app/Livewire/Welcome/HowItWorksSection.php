<?php

namespace App\Livewire\Welcome;

use App\Models\HowItWorksStep;
use Livewire\Component;

class HowItWorksSection extends Component
{
    public $steps;

    public function mount()
    {
        $this->steps = HowItWorksStep::orderBy('step_number')->get()->unique('step_number');
    }

    public function render()
    {
        return view('livewire.welcome.how-it-works-section');
    }
}