<?php

namespace App\Livewire\Admin\Hero;

use App\Models\HeroSection;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    // Model Properties
    public $hero_section_id;
    public $subtitle, $title, $description, $button_one_text, $button_one_link, $button_two_text, $button_two_link, $is_active;
    
    // Temporary properties for file uploads
    public $new_image_card_path;
    public $new_image_main_path;

    // Existing image paths
    public $existing_image_card_path;
    public $existing_image_main_path;

    public function mount()
    {
        $heroSection = HeroSection::first();
        if ($heroSection) {
            $this->hero_section_id = $heroSection->id;
            $this->subtitle = $heroSection->subtitle;
            $this->title = $heroSection->title;
            $this->description = $heroSection->description;
            $this->button_one_text = $heroSection->button_one_text;
            $this->button_one_link = $heroSection->button_one_link;
            $this->button_two_text = $heroSection->button_two_text;
            $this->button_two_link = $heroSection->button_two_link;
            $this->is_active = $heroSection->is_active;
            $this->existing_image_card_path = $heroSection->image_card_path;
            $this->existing_image_main_path = $heroSection->image_main_path;
        }
    }

    public function update()
    {
        $this->validate([
            'subtitle' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'button_one_text' => 'nullable|string|max:255',
            'button_one_link' => 'nullable|url',
            'button_two_text' => 'nullable|string|max:255',
            'button_two_link' => 'nullable|url',
            'new_image_card_path' => 'nullable|image|max:1024', // 1MB Max
            'new_image_main_path' => 'nullable|image|max:1024', // 1MB Max
            'is_active' => 'boolean',
        ]);
        
        $data = [
            'subtitle' => $this->subtitle,
            'title' => $this->title,
            'description' => $this->description,
            'button_one_text' => $this->button_one_text,
            'button_one_link' => $this->button_one_link,
            'button_two_text' => $this->button_two_text,
            'button_two_link' => $this->button_two_link,
            'is_active' => $this->is_active,
        ];
        
        if ($this->new_image_card_path) {
            if ($this->existing_image_card_path) {
                Storage::disk('public_assets')->delete(basename($this->existing_image_card_path));
            }
            $imageCardName = 'hero-card.' . $this->new_image_card_path->getClientOriginalExtension();
            $this->new_image_card_path->storeAs('/', $imageCardName, 'public_assets');
            $data['image_card_path'] = 'assets/images/' . $imageCardName;
            $this->existing_image_card_path = $data['image_card_path'];
        }
        
        if ($this->new_image_main_path) {
            if ($this->existing_image_main_path) {
                Storage::disk('public_assets')->delete(basename($this->existing_image_main_path));
            }
            $imageMainName = 'hero-main.' . $this->new_image_main_path->getClientOriginalExtension();
            $this->new_image_main_path->storeAs('/', $imageMainName, 'public_assets');
            $data['image_main_path'] = 'assets/images/' . $imageMainName;
            $this->existing_image_main_path = $data['image_main_path'];
        }
        
        if ($this->hero_section_id) {
            HeroSection::find($this->hero_section_id)->update($data);
        } else {
            $heroSection = HeroSection::create($data);
            $this->hero_section_id = $heroSection->id;
        }
        
        session()->flash('message', 'Hero section successfully updated.');
        
        // Reset the file input fields
        $this->new_image_card_path = null;
        $this->new_image_main_path = null;
    }

    public function render()
    {
        return view('livewire.admin.hero.index');
    }
}
