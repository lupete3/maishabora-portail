<?php

namespace App\Livewire\Welcome;

use App\Models\Faq;
use Livewire\Component;

class FaqSection extends Component
{
    public $faqs;

    public function mount()
    {
        $this->faqs = Faq::orderBy('display_order')->get();
    }

    public function render()
    {
        return view('livewire.welcome.faq-section');
    }
}