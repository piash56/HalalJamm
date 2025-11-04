<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        'small_text',
        'primary_text',
        'secondary_text',
        'button_text',
        'button_url',
        'hero_image',
        'price_text',
        'price',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_active' => 'boolean'
    ];

    public function getImageUrlAttribute()
    {
        if ($this->hero_image) {
            return asset('storage/hero/' . $this->hero_image);
        }
        return asset('assets/images/hero/hero-right.png'); // Default image
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
