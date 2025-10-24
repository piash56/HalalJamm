<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Offer extends Model
{
    protected $fillable = [
        'name',
        'description',
        'offer_type',
        'discount_amount',
        'food_image',
        'food_name',
        'category_id',
        'tag_1',
        'tag_2',
        'tag_3',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'discount_amount' => 'decimal:2',
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc');
    }

    public function getImageUrlAttribute()
    {
        if ($this->food_image) {
            // First try storage path (for development)
            if (file_exists(storage_path('app/public/offers/' . $this->food_image))) {
                return asset('storage/offers/' . $this->food_image);
            }

            // Then try public path (for production)
            if (file_exists(public_path('images/offers/' . $this->food_image))) {
                return asset('images/offers/' . $this->food_image);
            }
        }
        return asset('images/placeholder-menu.png');
    }

    public function getOfferDisplayAttribute()
    {
        if ($this->offer_type === 'discount' && $this->discount_amount) {
            return '-' . $this->discount_amount . '%';
        }
        return 'HOT';
    }
}
