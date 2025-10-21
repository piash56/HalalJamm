@extends('layouts.vertical', ['title' => 'Order Details'])

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="card-title mb-0">Order Details - {{ $order->order_number }}</h5>
                </div>
                <div class="d-flex gap-3">
                    <a href="{{ route('admin.order.edit', $order) }}" class="btn btn-sm btn-primary">Edit Order</a>
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-sm btn-secondary">Back to Orders</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Customer Information -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Customer Information</h6>
                            </div>
                            <div class="card-body">
                                <p><strong>Name:</strong> {{ $order->full_name }}</p>
                                <p><strong>Email:</strong> {{ $order->email }}</p>
                                <p><strong>Phone:</strong> {{ $order->phone }}</p>
                                <p><strong>Address:</strong> {{ $order->address }}</p>
                                @if($order->order_notes)
                                    <p><strong>Order Notes:</strong> {{ $order->order_notes }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Order Information -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-secondary text-white">
                                <h6 class="mb-0">Order Information</h6>
                            </div>
                            <div class="card-body">
                                <p><strong>Order Type:</strong> 
                                    @if($order->order_type == 'in_store')
                                        <span class="badge bg-info"><i class="fas fa-store me-1"></i> In-Store Pickup</span>
                                    @else
                                        <span class="badge bg-warning"><i class="fas fa-truck me-1"></i> Home Delivery</span>
                                    @endif
                                </p>
                                <p><strong>For When:</strong> 
                                    @if($order->delivery_type == 'asap')
                                        <span class="badge bg-success">ASAP (in 15 mins)</span>
                                    @else
                                        <span class="badge bg-primary">Scheduled</span>
                                    @endif
                                </p>
                                @if($order->delivery_type == 'schedule' && $order->scheduled_time)
                                    <p><strong>Scheduled Time:</strong> 
                                        {{ $order->scheduled_time->setTimezone('America/New_York')->format('M d, Y g:i A') }}
                                    </p>
                                @endif
                                <p><strong>Payment Method:</strong> 
                                    <span class="badge bg-secondary">{{ $order->payment_method_display }}</span>
                                </p>
                                <p><strong>Status:</strong> 
                                    <span class="badge {{ $order->status_badge_class }} px-2 py-1 fs-11">{{ $order->status_display }}</span>
                                </p>
                                <p><strong>Order Date:</strong> {{ $order->created_at->setTimezone('America/New_York')->format('M d, Y g:i A') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Items -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-success text-white">
                                <h6 class="mb-0">Order Items</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Item</th>
                                                <th class="text-center">Qty</th>
                                                <th class="text-end">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($order->orderItems as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="item-image me-3">
                                                            @if($item->food_image)
                                                                <img src="{{ $item->food_image }}" alt="{{ $item->food_name }}" class="rounded" style="width: 60px; height: 60px; object-fit: cover;">
                                                            @else
                                                                <img src="{{ asset('images/placeholder-menu.png') }}" alt="{{ $item->food_name }}" class="rounded" style="width: 60px; height: 60px; object-fit: cover;">
                                                            @endif
                                                        </div>
                                                        <div>
                                                            <strong>{{ $item->food_name }}</strong>
                                                            @if($item->addons && count($item->addons) > 0)
                                                                <div class="addons-list mt-1">
                                                                    @foreach($item->addons as $addon)
                                                                        <small class="text-muted d-block">
                                                                            + {{ $addon['name'] }} 
                                                                            @if($addon['price'] > 0)
                                                                                (${{ number_format($addon['price'], 2) }})
                                                                            @else
                                                                                (Free)
                                                                            @endif
                                                                        </small>
                                                                    @endforeach
                                                                </div>
                                                            @endif
                                                            @if($item->special_instructions)
                                                                <div class="mt-1">
                                                                    <small class="text-info"><strong>Special Instructions:</strong> {{ $item->special_instructions }}</small>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="badge bg-primary">{{ $item->quantity }}</span>
                                                </td>
                                                <td class="align-middle text-end">
                                                    <strong>${{ number_format($item->item_total, 2) }}</strong>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="2" class="text-end">Subtotal:</th>
                                                <td class="text-end">${{ number_format($order->subtotal, 2) }}</td>
                                            </tr>
                                            @if($order->tax_enabled && $order->tax > 0)
                                            <tr>
                                                <th colspan="2" class="text-end">Tax ({{ number_format($order->tax_percentage, 1) }}%):</th>
                                                <td class="text-end">${{ number_format($order->tax, 2) }}</td>
                                            </tr>
                                            @endif
                                            <tr>
                                                <th colspan="2" class="text-end">Total:</th>
                                                <td class="text-end"><strong>${{ number_format($order->total, 2) }}</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
