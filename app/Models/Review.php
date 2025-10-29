<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'feedback',
        'rating',
        'review_date',
        'image',
        'sort_order',
        'is_active'
    ];

    protected $casts = [
        'review_date' => 'date',
        'is_active' => 'boolean'
    ];

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return Storage::url('reviews/' . $this->image);
        }
        return null;
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc')->orderBy('review_date', 'desc');
    }
}
