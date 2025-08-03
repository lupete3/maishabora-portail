<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'quote',
        'author_image_path',
        'author_name',
        'author_title',
        'display_order',
        'is_active',
    ];
}
