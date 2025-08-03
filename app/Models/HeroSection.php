<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        'subtitle',
        'title',
        'description',
        'button_one_text',
        'button_one_link',
        'button_two_text',
        'button_two_link',
        'image_card_path',
        'image_main_path',
        'is_active',
    ];
}
