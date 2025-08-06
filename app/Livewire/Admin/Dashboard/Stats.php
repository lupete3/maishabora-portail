<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\Faq;
use App\Models\Feature;
use App\Models\HowItWorksStep;
use App\Models\PricingPlan;
use App\Models\Service;
use App\Models\Stat;
use App\Models\Testimonial;
use Livewire\Component;

class Stats extends Component
{
    public $stats = [];

    public function mount()
    {
        $this->stats = [
            'features' => Feature::count(),
            'services' => Service::count(),
            'testimonials' => Testimonial::count(),
            'faqs' => Faq::count(),
            'pricing_plans' => PricingPlan::count(),
            'how_it_works_steps' => HowItWorksStep::count(),
            'stats_items' => Stat::count(),
        ];
    }

    public function render()
    {
        return view('livewire.admin.dashboard.stats');
    }
}