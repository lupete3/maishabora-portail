<?php

namespace App\Livewire\Admin\Stats;

use App\Models\Stat;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $stat_id, $label, $end_value, $suffix, $duration_in_seconds, $display_order;
    public $is_active = true;
    public $isOpen = 0;

    public function render()
    {
        return view('livewire.admin.stats.index', [
            'stats' => Stat::orderBy('display_order', 'asc')->paginate(10)
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
        $this->stat_id = null;
        $this->label = '';
        $this->end_value = '';
        $this->suffix = '';
        $this->duration_in_seconds = 3;
        $this->display_order = '';
        $this->is_active = true;
    }

    public function store()
    {
        $this->validate([
            'label' => 'required|string|max:255',
            'end_value' => 'required|integer',
            'suffix' => 'nullable|string|max:50',
            'duration_in_seconds' => 'required|integer|min:1',
            'display_order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        Stat::updateOrCreate(['id' => $this->stat_id], [
            'label' => $this->label,
            'end_value' => $this->end_value,
            'suffix' => $this->suffix,
            'duration_in_seconds' => $this->duration_in_seconds,
            'display_order' => $this->display_order,
            'is_active' => $this->is_active,
        ]);

        session()->flash('message', 
            $this->stat_id ? 'Stat Updated Successfully.' : 'Stat Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $stat = Stat::findOrFail($id);
        $this->stat_id = $id;
        $this->label = $stat->label;
        $this->end_value = $stat->end_value;
        $this->suffix = $stat->suffix;
        $this->duration_in_seconds = $stat->duration_in_seconds;
        $this->display_order = $stat->display_order;
        $this->is_active = $stat->is_active;
    
        $this->openModal();
    }

    public function delete($id)
    {
        Stat::find($id)->delete();
        session()->flash('message', 'Stat Deleted Successfully.');
    }
}
