<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $icon, $title, $description, $link, $display_order, $service_id;
    public $isOpen = 0;

    public function render()
    {
        return view('livewire.admin.services.index', [
            'services' => Service::orderBy('display_order', 'asc')->paginate(10)
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
        $this->link = '';
        $this->display_order = '';
        $this->service_id = null;
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'icon' => 'required',
            'description' => 'required',
            'link' => 'required|url',
            'display_order' => 'required|integer',
        ]);

        Service::updateOrCreate(['id' => $this->service_id], [
            'title' => $this->title,
            'icon' => $this->icon,
            'description' => $this->description,
            'link' => $this->link,
            'display_order' => $this->display_order,
        ]);

        session()->flash('message', 
            $this->service_id ? 'Service Updated Successfully.' : 'Service Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $this->service_id = $id;
        $this->title = $service->title;
        $this->icon = $service->icon;
        $this->description = $service->description;
        $this->link = $service->link;
        $this->display_order = $service->display_order;
    
        $this->openModal();
    }

    public function delete($id)
    {
        Service::find($id)->delete();
        session()->flash('message', 'Service Deleted Successfully.');
    }
}