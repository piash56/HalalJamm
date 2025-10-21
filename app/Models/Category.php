<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'status',
        'sort_order'
    ];

    protected $casts = [
        'sort_order' => 'integer',
    ];

    // Auto-generate slug from name
    public static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            if (empty($category->slug)) {
                $category->slug = Str::slug($category->name);
            }
        });

        static::updating(function ($category) {
            if ($category->isDirty('name') && empty($category->slug)) {
                $category->slug = Str::slug($category->name);
            }
        });
    }

    // Scope for active categories
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class);
    }

    // Get image URL
    public function getImageUrlAttribute()
    {
        if ($this->image && file_exists(storage_path('app/public/categories/' . $this->image))) {
            return asset('storage/categories/' . $this->image);
        }
        return asset('images/placeholder-category.png');
    }
}
