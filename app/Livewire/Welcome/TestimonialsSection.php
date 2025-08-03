<?php

namespace App\Livewire\Welcome;

use App\Models\Testimonial;
use Livewire\Component;

class TestimonialsSection extends Component
{
    public $testimonials;

    public function mount()
    {
        $this->testimonials = Testimonial::orderBy('display_order')->get();
    }

    public function render()
    {
        return view('livewire.welcome.testimonials-section');
    }
}