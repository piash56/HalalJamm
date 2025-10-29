<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OfferSection extends Model
{
    protected $fillable = [
        'small_image',
        'primary_text',
        'secondary_text',
        'secondary_price',
        'small_text',
        'button_text',
        'button_url',
        'offer_image',
        'offer_price_text',
        'offer_price',
        'is_active'
    ];

    protected $casts = [
        'secondary_price' => 'decimal:2',
        'offer_price' => 'decimal:2',
        'is_active' => 'boolean'
    ];

    public function getSmallImageUrlAttribute()
    {
        if ($this->small_image) {
            return asset('storage/offer/' . $this->small_image);
        }
        return asset('assets/images/offer/delicious.png'); // Default image
    }

    public function getOfferImageUrlAttribute()
    {
        if ($this->offer_image) {
            return asset('storage/offer/' . $this->offer_image);
        }
        return asset('assets/images/offer/shawarma-sale.jpeg'); // Default image
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}