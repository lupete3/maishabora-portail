<?php

namespace App\Livewire\Admin\About;

use App\Models\AboutSection;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public $about;
    public $subtitle, $title, $description, $values, $image_path, $mission_title, $mission_description;
    public $new_image;

    public function mount()
    {
        $this->about = AboutSection::first();
        $this->subtitle = $this->about->subtitle;
        $this->title = $this->about->title;
        $this->description = $this->about->description;
        $this->values = implode(', ', json_decode($this->about->values));
        $this->image_path = $this->about->image_path;
        $this->mission_title = $this->about->mission_title;
        $this->mission_description = $this->about->mission_description;
    }

    public function render()
    {
        return view('livewire.admin.about.index');
    }

    public function update()
    {
        $this->validate([
            'subtitle' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'values' => 'required|string',
            'new_image' => 'nullable|image|max:1024', // 1MB Max
            'mission_title' => 'required|string|max:255',
            'mission_description' => 'required|string',
        ]);

        $imagePath = $this->image_path;
        if ($this->new_image) {
            $imagePath = 'storage/' . $this->new_image->store('about-section', 'public');
        }

        $this->about->update([
            'subtitle' => $this->subtitle,
            'title' => $this->title,
            'description' => $this->description,
            'values' => json_encode(array_map('trim', explode(',', $this->values))),
            'image_path' => $imagePath,
            'mission_title' => $this->mission_title,
            'mission_description' => $this->mission_description,
        ]);

        session()->flash('message', 'About Section updated successfully.');
        
        // Refresh the component state
        $this->image_path = $imagePath;
        $this->new_image = null;
    }
}