<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    //
    protected $fillable = [
        'subtitle',
        'title',
        'description',
        'values',
        'image_path',
        'mission_title',
        'mission_description',
    ];
}
