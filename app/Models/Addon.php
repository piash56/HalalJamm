<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Addon extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'price',
        'status',
        'sort_order',
        'all_foods'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'sort_order' => 'integer',
        'all_foods' => 'boolean',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($addon) {
            if (empty($addon->slug)) {
                $addon->slug = Str::slug($addon->name);
            }
        });

        static::updating(function ($addon) {
            if ($addon->isDirty('name') && empty($addon->slug)) {
                $addon->slug = Str::slug($addon->name);
            }
        });
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function menus(): BelongsToMany
    {
        return $this->belongsToMany(Menu::class, 'addon_food');
    }
}
