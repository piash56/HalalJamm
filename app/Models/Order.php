<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Carbon\Carbon;

class Order extends Model
{
    protected $fillable = [
        'order_number',
        'full_name',
        'email',
        'phone',
        'address',
        'order_type',
        'delivery_type',
        'scheduled_time',
        'payment_method',
        'order_notes',
        'subtotal',
        'tax',
        'tax_percentage',
        'tax_enabled',
        'total',
        'status'
    ];

    protected $casts = [
        'scheduled_time' => 'datetime',
        'subtotal' => 'decimal:2',
        'tax' => 'decimal:2',
        'tax_percentage' => 'decimal:2',
        'tax_enabled' => 'boolean',
        'total' => 'decimal:2',
    ];

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function getItemsAttribute()
    {
        return $this->orderItems()->get()->map(function ($item) {
            return [
                'name' => $item->food_name,
                'quantity' => $item->quantity,
                'price' => $item->food_price,
                'addons' => $item->addons,
                'special_instructions' => $item->special_instructions,
                'subtotal' => $item->item_total
            ];
        });
    }

    public function getOrderTypeDisplayAttribute()
    {
        return $this->order_type === 'in_store' ? 'In-Store Pickup' : 'Home Delivery';
    }

    public function getDeliveryTypeDisplayAttribute()
    {
        return $this->delivery_type === 'asap' ? 'ASAP (in 15 mins)' : 'Scheduled';
    }

    public function getPaymentMethodDisplayAttribute()
    {
        return match ($this->payment_method) {
            'cash_on_delivery' => 'Cash on Delivery',
            default => $this->payment_method
        };
    }

    public function getStatusBadgeClassAttribute()
    {
        return match ($this->status) {
            'pending' => 'badge border border-warning text-warning',
            'confirmed' => 'badge border border-primary text-primary',
            'preparing' => 'badge border border-info text-info',
            'ready_for_delivery' => 'badge border border-success text-success',
            'out_for_delivery' => 'badge border border-primary text-primary',
            'delivered' => 'badge bg-success text-white',
            'cancelled' => 'badge bg-danger text-white',
            default => 'badge border border-secondary text-secondary'
        };
    }

    public function getStatusDisplayAttribute()
    {
        return match ($this->status) {
            'pending' => 'Pending',
            'confirmed' => 'Confirmed',
            'preparing' => 'Preparing',
            'ready_for_delivery' => 'Ready For Delivery',
            'out_for_delivery' => 'Out For Delivery',
            'delivered' => 'Delivered',
            'cancelled' => 'Cancelled',
            default => ucfirst($this->status)
        };
    }
}
