<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Order Success</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .order-success-area {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }
    </style>
</head>
<body>

    <!-- Order Success Area Start -->
    <div class="order-success-area py-5" style="min-height: 100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Success Message -->
                    <div class="alert alert-success text-center mb-5" data-aos="fade-up" data-aos-duration="1500">
                        <i class="fas fa-check-circle fa-3x mb-3 text-success"></i>
                        <h2 class="text-success mb-3">Order Placed Successfully!</h2>
                        <p class="lead">Thank you for your order. We will contact you soon.</p>
                        <div class="order-number">
                            <strong>Order Number: {{ $orderData['order_number'] }}</strong>
                        </div>
                    </div>

                    <!-- Order Details -->
                    <div class="card mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Order Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6><strong>Customer Information</strong></h6>
                                    <p><strong>Name:</strong> {{ $orderData['full_name'] }}</p>
                                    <p><strong>Email:</strong> {{ $orderData['email'] }}</p>
                                    <p><strong>Phone:</strong> {{ $orderData['phone'] }}</p>
                                    <p><strong>Address:</strong> {{ $orderData['address'] }}</p>
                                    @if($orderData['order_notes'])
                                        <p><strong>Order Notes:</strong> {{ $orderData['order_notes'] }}</p>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <h6><strong>Order Information</strong></h6>
                                    <p><strong>Order Type:</strong> 
                                        @if($orderData['order_type'] == 'in_store')
                                            <span class="badge bg-info">In-Store Pickup</span>
                                        @else
                                            <span class="badge bg-warning">Home Delivery</span>
                                        @endif
                                    </p>
                                    <p><strong>For When:</strong> 
                                        @if($orderData['delivery_type'] == 'asap')
                                            <span class="badge bg-success">ASAP (in 15 mins)</span>
                                        @else
                                            <span class="badge bg-primary">Scheduled</span>
                                        @endif
                                    </p>
                                    @if($orderData['delivery_type'] == 'schedule' && $orderData['scheduled_time'])
                                        <p><strong>Scheduled Time:</strong> 
                                            @php
                                                // Parse the scheduled time with proper timezone handling
                                                if (isset($orderData['scheduled_time_timezone'])) {
                                                    $scheduledTime = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $orderData['scheduled_time'], $orderData['scheduled_time_timezone']);
                                                    $scheduledTime = $scheduledTime->setTimezone('America/New_York');
                                                } else {
                                                    // Fallback - assume it's already in NY timezone or parse as is
                                                    $scheduledTime = \Carbon\Carbon::parse($orderData['scheduled_time'])->setTimezone('America/New_York');
                                                }
                                            @endphp
                                            {{ $scheduledTime->format('M d, Y g:i A') }}
                                        </p>
                                    @endif
                                    <p><strong>Payment Method:</strong> 
                                        <span class="badge bg-secondary">Cash on Delivery</span>
                                    </p>
                                    <p><strong>Order Date:</strong> 
                                        @php
                                            // Parse the order date and display in NY timezone
                                            if (isset($orderData['ordered_at_timezone'])) {
                                                $orderDate = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $orderData['ordered_at'], $orderData['ordered_at_timezone']);
                                                $orderDate = $orderDate->setTimezone('America/New_York');
                                            } else {
                                                // Fallback if timezone info is not available
                                                $orderDate = \Carbon\Carbon::parse($orderData['ordered_at'])->setTimezone('America/New_York');
                                            }
                                        @endphp
                                        {{ $orderDate->format('M d, Y g:i A') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Order Items -->
                    <div class="card mb-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-header bg-secondary text-white">
                            <h4 class="mb-0">Order Items</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Item</th>
                                            <th>Quantity</th>
                                            <th class="text-end">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orderData['cart_items'] as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="item-image me-3">
                                                        @if(isset($item['image']) && $item['image'])
                                                            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="rounded" style="width: 60px; height: 60px; object-fit: cover;">
                                                        @else
                                                            <img src="{{ asset('images/placeholder-menu.png') }}" alt="{{ $item['name'] }}" class="rounded" style="width: 60px; height: 60px; object-fit: cover;">
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <strong>{{ $item['name'] }}</strong>
                                                        @if(isset($item['addons']) && count($item['addons']) > 0)
                                                            <div class="addons-list mt-1">
                                                                @foreach($item['addons'] as $addon)
                                                                    <small class="text-muted d-block">
                                                                        + {{ $addon['name'] }} 
                                                                        @if($addon['price'] > 0)
                                                                            ({{ number_format($addon['price'], 2) }})
                                                                        @else
                                                                            (Free)
                                                                        @endif
                                                                    </small>
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge bg-primary">{{ $item['quantity'] }}</span>
                                            </td>
                                            <td class="align-middle text-end">
                                                <strong>${{ number_format($item['subtotal'], 2) }}</strong>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Order Summary -->
                    <div class="card" data-aos="fade-up" data-aos-delay="600">
                        <div class="card-header bg-success text-white">
                            <h4 class="mb-0">Order Summary</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="order-totals">
                                        <div class="d-flex justify-content-between mb-2">
                                            <span>Subtotal:</span>
                                            <span>${{ number_format($orderData['subtotal'], 2) }}</span>
                                        </div>
                                        @if($orderData['tax_enabled'] && $orderData['tax'] > 0)
                                        <div class="d-flex justify-content-between mb-2">
                                            <span>Tax ({{ number_format($orderData['tax_percentage'], 1) }}%):</span>
                                            <span>${{ number_format($orderData['tax'], 2) }}</span>
                                        </div>
                                        @endif
                                        <hr>
                                        <div class="d-flex justify-content-between h4">
                                            <strong>Total:</strong>
                                            <strong class="text-success">${{ number_format($orderData['total'], 2) }}</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="{{ route('allMenus') }}" class="btn btn-primary me-2">
                                        <i class="fas fa-plus me-2"></i>Order More
                                    </a>
                                    <a href="{{ route('home') }}" class="btn btn-outline-primary">
                                        <i class="fas fa-home me-2"></i>Go Home
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Order Success Area End -->

</body>
</html>
