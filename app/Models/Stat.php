<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    protected $fillable = [
        'end_value',
        'suffix',
        'label',
        'duration_in_seconds',
        'display_order',
        'is_active',
    ];
}
