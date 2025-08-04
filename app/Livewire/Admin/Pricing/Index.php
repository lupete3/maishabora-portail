<?php

namespace App\Livewire\Admin\Pricing;

use App\Models\PricingPlan;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $plan_id, $name, $description, $price_string, $button_text, $button_link, $features, $display_order;
    public $is_popular = false;
    public $is_active = true;
    public $isOpen = 0;

    public function render()
    {
        return view('livewire.admin.pricing.index', [
            'plans' => PricingPlan::orderBy('display_order', 'asc')->paginate(10)
        ]);
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->plan_id = null;
        $this->name = '';
        $this->description = '';
        $this->price_string = '';
        $this->button_text = '';
        $this->button_link = '';
        $this->features = '';
        $this->display_order = '';
        $this->is_popular = false;
        $this->is_active = true;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price_string' => 'required|string|max:255',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|url',
            'is_popular' => 'boolean',
            'features' => 'nullable|string',
            'display_order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        PricingPlan::updateOrCreate(['id' => $this->plan_id], [
            'name' => $this->name,
            'description' => $this->description,
            'price_string' => $this->price_string,
            'button_text' => $this->button_text,
            'button_link' => $this->button_link,
            'features' => $this->features,
            'display_order' => $this->display_order,
            'is_popular' => $this->is_popular,
            'is_active' => $this->is_active,
        ]);

        session()->flash('message', 
            $this->plan_id ? 'Pricing Plan Updated Successfully.' : 'Pricing Plan Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $plan = PricingPlan::findOrFail($id);
        $this->plan_id = $id;
        $this->name = $plan->name;
        $this->description = $plan->description;
        $this->price_string = $plan->price_string;
        $this->button_text = $plan->button_text;
        $this->button_link = $plan->button_link;
        $this->features = $plan->features;
        $this->display_order = $plan->display_order;
        $this->is_popular = $plan->is_popular;
        $this->is_active = $plan->is_active;
    
        $this->openModal();
    }

    public function delete($id)
    {
        PricingPlan::find($id)->delete();
        session()->flash('message', 'Pricing Plan Deleted Successfully.');
    }
}
