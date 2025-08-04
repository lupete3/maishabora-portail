<?php

namespace App\Livewire\Admin\Features;

use App\Models\Feature;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $icon, $title, $description, $display_order, $feature_id;
    public $isOpen = 0;

    public function render()
    {
        return view('livewire.admin.features.index', [
            'features' => Feature::orderBy('display_order', 'asc')->paginate(10)
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
        $this->icon = '';
        $this->title = '';
        $this->description = '';
        $this->display_order = '';
        $this->feature_id = null;
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'icon' => 'required',
            'description' => 'required',
            'display_order' => 'required|integer',
        ]);

        Feature::updateOrCreate(['id' => $this->feature_id], [
            'title' => $this->title,
            'icon' => $this->icon,
            'description' => $this->description,
            'display_order' => $this->display_order,
        ]);

        session()->flash('message', 
            $this->feature_id ? 'Feature Updated Successfully.' : 'Feature Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $feature = Feature::findOrFail($id);
        $this->feature_id = $id;
        $this->title = $feature->title;
        $this->icon = $feature->icon;
        $this->description = $feature->description;
        $this->display_order = $feature->display_order;
    
        $this->openModal();
    }

    public function delete($id)
    {
        Feature::find($id)->delete();
        session()->flash('message', 'Feature Deleted Successfully.');
    }
}