<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price_string',
        'button_text',
        'button_link',
        'is_popular',
        'features',
        'display_order',
        'is_active',
    ];
}
