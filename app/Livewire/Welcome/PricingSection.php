<?php

namespace App\Livewire\Welcome;

use App\Models\PricingPlan;
use Livewire\Component;

class PricingSection extends Component
{
    public $pricingPlans;

    public function mount()
    {
        $this->pricingPlans = PricingPlan::orderBy('display_order')->get();
    }

    public function render()
    {
        return view('livewire.welcome.pricing-section');
    }
}