<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'menu_id',
        'food_name',
        'food_image',
        'food_price',
        'quantity',
        'addons',
        'special_instructions',
        'item_total'
    ];

    protected $casts = [
        'food_price' => 'decimal:2',
        'item_total' => 'decimal:2'
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    public function getAddonsAttribute($value)
    {
        if (!$value) {
            return [];
        }
        return json_decode($value, true) ?: [];
    }

    public function setAddonsAttribute($value)
    {
        $this->attributes['addons'] = is_array($value) ? json_encode($value) : $value;
    }

    public function getAddonsDisplayAttribute()
    {
        return $this->addons;
    }
}
