<?php

namespace App\Livewire\Admin\Testimonials;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $quote, $author_name, $author_title, $author_image_path, $display_order, $testimonial_id;
    public $new_author_image;
    public $isOpen = 0;

    public function render()
    {
        return view('livewire.admin.testimonials.index', [
            'testimonials' => Testimonial::orderBy('display_order', 'asc')->paginate(5)
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
        $this->quote = '';
        $this->author_name = '';
        $this->author_title = '';
        $this->author_image_path = '';
        $this->new_author_image = null;
        $this->display_order = '';
        $this->testimonial_id = null;
    }

    public function store()
    {
        $this->validate([
            'quote' => 'required|string',
            'author_name' => 'required|string|max:255',
            'author_title' => 'required|string|max:255',
            'new_author_image' => 'nullable|image|max:1024',
            'display_order' => 'required|integer',
        ]);

        $imagePath = $this->author_image_path;
        if ($this->new_author_image) {
            $imageName = 'testimonial-' . $this->author_name . '.' . $this->new_author_image->getClientOriginalExtension();
            $this->new_author_image->storeAs('/', $imageName, 'public_assets');
            $imagePath = 'assets/images/' . $imageName;
        }

        Testimonial::updateOrCreate(['id' => $this->testimonial_id], [
            'quote' => $this->quote,
            'author_name' => $this->author_name,
            'author_title' => $this->author_title,
            'author_image_path' => $imagePath,
            'display_order' => $this->display_order,
        ]);

        session()->flash('message', 
            $this->testimonial_id ? 'Testimonial Updated Successfully.' : 'Testimonial Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $this->testimonial_id = $id;
        $this->quote = $testimonial->quote;
        $this->author_name = $testimonial->author_name;
        $this->author_title = $testimonial->author_title;
        $this->author_image_path = $testimonial->author_image_path;
        $this->display_order = $testimonial->display_order;
    
        $this->openModal();
    }

    public function delete($id)
    {
        Testimonial::find($id)->delete();
        session()->flash('message', 'Testimonial Deleted Successfully.');
    }
}