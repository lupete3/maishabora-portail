<?php

namespace App\Livewire\Admin\HowItWorks;

use App\Models\HowItWorksStep;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $step_number, $title, $description, $step_id;
    public $isOpen = 0;

    public function render()
    {
        return view('livewire.admin.how-it-works.index', [
            'steps' => HowItWorksStep::orderBy('step_number', 'asc')->paginate(10)
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
        $this->step_number = '';
        $this->title = '';
        $this->description = '';
        $this->step_id = null;
    }

    public function store()
    {
        $this->validate([
            'step_number' => 'required|integer|unique:how_it_works_steps,step_number,' . $this->step_id,
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        HowItWorksStep::updateOrCreate(['id' => $this->step_id], [
            'step_number' => $this->step_number,
            'title' => $this->title,
            'description' => $this->description,
        ]);

        session()->flash('message',
            $this->step_id ? 'Step Updated Successfully.' : 'Step Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $step = HowItWorksStep::findOrFail($id);
        $this->step_id = $id;
        $this->step_number = $step->step_number;
        $this->title = $step->title;
        $this->description = $step->description;

        $this->openModal();
    }

    public function delete($id)
    {
        HowItWorksStep::find($id)->delete();
        session()->flash('message', 'Step Deleted Successfully.');
    }
}