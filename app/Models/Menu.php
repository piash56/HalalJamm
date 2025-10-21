<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Menu extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'price',
        'image',
        'status',
        'sort_order',
        'is_popular'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'sort_order' => 'integer',
        'is_popular' => 'boolean',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($menu) {
            if (empty($menu->slug)) {
                $menu->slug = Str::slug($menu->name);
            }
        });

        static::updating(function ($menu) {
            if ($menu->isDirty('name') && empty($menu->slug)) {
                $menu->slug = Str::slug($menu->name);
            }
        });
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopePopular($query)
    {
        return $query->where('is_popular', true);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function addons(): BelongsToMany
    {
        return $this->belongsToMany(Addon::class, 'addon_food');
    }

    public function getImageUrlAttribute()
    {
        return \App\Helpers\ImageHelper::getImageUrl(
            $this->image,
            'menus',
            'images/placeholder-menu.png'
        );
    }

    // Get responsive image URLs
    public function getResponsiveImageUrlsAttribute()
    {
        return \App\Helpers\ImageHelper::getResponsiveImageUrls(
            $this->image,
            'menus',
            'images/placeholder-menu.png'
        );
    }
}
