<?php

namespace App\Livewire\Admin\Faq;

use App\Models\Faq;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $question, $answer, $display_order, $is_open_by_default, $faq_id;
    public $isOpen = 0;

    public function render()
    {
        return view('livewire.admin.faq.index', [
            'faqs' => Faq::orderBy('display_order', 'asc')->paginate(10)
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
        $this->question = '';
        $this->answer = '';
        $this->display_order = '';
        $this->is_open_by_default = false;
        $this->faq_id = null;
    }

    public function store()
    {
        $this->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
            'display_order' => 'required|integer',
            'is_open_by_default' => 'boolean',
        ]);

        Faq::updateOrCreate(['id' => $this->faq_id], [
            'question' => $this->question,
            'answer' => $this->answer,
            'display_order' => $this->display_order,
            'is_open_by_default' => $this->is_open_by_default,
        ]);

        session()->flash('message', 
            $this->faq_id ? 'FAQ Updated Successfully.' : 'FAQ Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        $this->faq_id = $id;
        $this->question = $faq->question;
        $this->answer = $faq->answer;
        $this->display_order = $faq->display_order;
        $this->is_open_by_default = $faq->is_open_by_default;
    
        $this->openModal();
    }

    public function delete($id)
    {
        Faq::find($id)->delete();
        session()->flash('message', 'FAQ Deleted Successfully.');
    }
}