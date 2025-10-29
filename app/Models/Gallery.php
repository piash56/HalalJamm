<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery_images';

    protected $fillable = [
        'title',
        'image',
        'description',
        'is_featured',
        'sort_order',
        'is_active'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean'
    ];

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/gallery/' . $this->image);
        }
        return asset('images/placeholder-gallery.png'); // Default image
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc')->orderBy('created_at', 'desc');
    }
}
