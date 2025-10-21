@extends('frontend.layouts.app')
@section('title', 'Checkout')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
       
        
        <!-- Page Banner Start -->
        <section class="page-banner-area overlay pt-215 rpt-150 pb-160 rpb-120 rel z-1 bgs-cover text-center" style="background-image: url(assets/images/background/banner.jpg);">
            <div class="container">
                <div class="banner-inner text-white">
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Checkout</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- Checkout Form Area Start -->
        <div class="checkout-form-area py-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-faqs" id="checkout-faqs">
                            @if(empty($cartItems))
                            <div class="alert alert-warning">
                                <h5>Your cart is empty</h5>
                                <p>Please add some items to your cart before proceeding to checkout.</p>
                                <a href="{{ route('allMenus') }}" class="theme-btn">Continue Shopping</a>
                            </div>
                            @else
                            <form id="checkout-form" class="checkout-form" action="{{ route('checkout.process') }}" method="post">
                                @csrf
                                <!-- Hidden field for scheduled time -->
                                <input type="hidden" id="selected_scheduled_time" name="scheduled_time" value="">
                                
                                <!-- Billing Information -->
                                <div class="alert bgc-lighter wow fadeInUp delay-0-2s">
                                    <h6>Billing Information</h6>
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="full_name" class="form-label">Full Name *</label>
                                                    <input type="text" id="full_name" name="full_name" class="form-control" value="" placeholder="Enter your full name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email" class="form-label">Email Address *</label>
                                                    <input type="email" id="email" name="email" class="form-control" value="" placeholder="Enter your email address" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone" class="form-label">Phone Number *</label>
                                                    <input type="text" id="phone" name="phone" class="form-control" value="" placeholder="Enter your phone number" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address" class="form-label">Address *</label>
                                                    <input type="text" id="address" name="address" class="form-control" value="" placeholder="Enter your address" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="order_notes" class="form-label">Order Notes (Optional)</label>
                                                    <textarea name="order_notes" id="order_notes" class="form-control" rows="3" placeholder="Any special instructions for your order..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Order Type and For When Row -->
                                <div class="alert bgc-lighter wow fadeInUp delay-0-3s">
                                    <div class="content">
                                        <div class="row">
                                            <!-- Order Type -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Order Type</label>
                                                    <div class="radio-options">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="order_type" id="in_store" value="in_store" checked>
                                                            <label class="form-check-label" for="in_store">
                                                                <i class="fas fa-store me-2"></i> In-Store Pickup
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="order_type" id="delivery" value="delivery">
                                                            <label class="form-check-label" for="delivery">
                                                                <i class="fas fa-truck me-2"></i> Home Delivery
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- For When -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">For When</label>
                                                    <div class="radio-options">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="delivery_type" id="asap" value="asap" checked>
                                                            <label class="form-check-label" for="asap">ASAP (in 15 mins)</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="delivery_type" id="schedule" value="schedule">
                                                            <label class="form-check-label" for="schedule">Schedule an order</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- Display selected schedule time -->
                                                <div id="scheduled-display" style="display: none; margin-top: 15px;">
                                                    <div class="alert alert-info">
                                                        <strong>Selected Time:</strong> <span id="schedule-text">Today 4:15 PM</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Payment Method -->
                                <div class="alert bgc-lighter wow fadeInUp delay-0-5s">
                                    <h6>Select Your Payment Method</h6>
                                    <div class="content">
                                        <div class="payment-method">
                                            <ul id="paymentMethod" class="mb-30">
                                                <li class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="cash_on_delivery" name="payment_method" value="cash_on_delivery" checked>
                                                    <label class="custom-control-label" for="cash_on_delivery">
                                                        <i class="fas fa-money-bill me-2"></i> Cash on Delivery
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="theme-btn w-100">Place Order <i class="fas fa-angle-double-right"></i></button>
                            </form>
                            @endif
                        </div>
                    </div>
                    
                    <!-- Order Summary -->
                    <div class="col-lg-4">
                        <div class="order-summary-card">
                            <h5 class="mb-4">Order Summary</h5>
                            
                            @if(!empty($cartItems))
                            <div class="order-items">
                                @foreach($cartItems as $item)
                                <div class="order-item d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h6 class="mb-1">{{ $item['name'] }}</h6>
                                        <small class="text-muted">Qty: {{ $item['quantity'] }}</small>
                                        @if(isset($item['addons']) && count($item['addons']) > 0)
                                            <div class="addons-summary">
                                                @foreach($item['addons'] as $addon)
                                                    <small class="d-block text-muted">+ {{ $addon['name'] }}</small>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                    <strong>${{ number_format($item['subtotal'], 2) }}</strong>
                                </div>
                                @endforeach
                            </div>
                            
                            <hr>
                            <div class="order-totals">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Subtotal:</span>
                                    <span>${{ number_format($subtotal, 2) }}</span>
                                </div>
                                @if($taxEnabled && $tax > 0)
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Tax ({{ number_format($taxPercentage, 1) }}%):</span>
                                    <span>${{ number_format($tax, 2) }}</span>
                                </div>
                                @endif
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <strong>Total:</strong>
                                    <strong>${{ number_format($total, 2) }}</strong>
                                </div>
                            </div>
                            @else
                            <p class="text-muted">No items in cart</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Checkout Form Area End -->

        <!-- Schedule Time Modal -->
        <div class="modal fade" id="scheduleModal" tabindex="-1" aria-labelledby="scheduleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="scheduleModalLabel">
                            <i class="fas fa-clock me-2"></i>
                            Schedule Your Order
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-3">Today - {{ $currentDate->format('M d, Y') }}</h6>
                                <div class="time-slots-modal">
                                    <div class="row">
                                        @foreach($timeSlots as $slot)
                                        <div class="col-md-3 col-6 mb-3">
                                            <div class="time-slot-option">
                                                <input type="radio" class="time-slot-input" name="modal_scheduled_time" id="modal_time_{{ $loop->index }}" value="{{ $slot['value'] }}" data-display="{{ $slot['display'] }}">
                                                <label class="time-slot-btn" for="modal_time_{{ $loop->index }}">
                                                    {{ $slot['display'] }}
                                                </label>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="confirmSchedule">
                            <i class="fas fa-check me-2"></i>
                            Confirm Time
                        </button>
                    </div>
                </div>
            </div>
        </div>
        

    <!-- Checkout Page Styles -->
    <style>
    .order-summary-card {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 25px;
        margin-top: 20px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    
    .order-item {
        border-bottom: 1px solid #e9ecef;
        padding-bottom: 15px;
    }
    
    .order-item:last-child {
        border-bottom: none;
    }
    
    .time-slots {
        max-height: 300px;
        overflow-y: auto;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 15px;
        background: #fff;
    }
    
    .time-slot-label {
        display: block;
        padding: 8px 12px;
        border: 1px solid #e9ecef;
        border-radius: 6px;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        margin: 0;
        font-size: 14px;
        font-weight: 500;
    }
    
    .time-slot-label:hover {
        background-color: #f8f9fa;
        border-color: #007bff;
    }
    
    .form-check-input:checked + .time-slot-label {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }
    
    /* Hide only time slot inputs, not the main radio buttons */
    .time-slots .form-check-input {
        display: none;
    }
    
    /* Show and style the main radio buttons for Order Type and For When */
    .radio-options .form-check-input[type="radio"] {
        display: inline-block !important;
        margin-right: 8px;
        width: 18px;
        height: 18px;
        position: relative;
        margin-top: 0;
        margin-bottom: 0;
        vertical-align: middle;
        flex-shrink: 0;
        align-self: center;
        padding: 10px;
    }
    
    /* Style the radio options layout */
    .radio-options .form-check {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }
    
    .radio-options .form-check:last-child {
        margin-bottom: 0;
    }
    
    .radio-options .form-check-label {
        display: flex;
        align-items: center;
        cursor: pointer;
        font-weight: 500;
        margin-bottom: 0;
        padding-left: 0;
        line-height: 1.4;
    }
    
    .radio-options .form-check-label i {
        vertical-align: middle;
        line-height: 1;
    }
    
    /* Schedule Modal Styles */
    .time-slots-modal {
        max-height: 400px;
        overflow-y: auto;
        padding: 20px;
        background: #fff;
    }
    
    .time-slot-option {
        position: relative;
    }
    
    .time-slot-input {
        position: absolute;
        opacity: 0;
        pointer-events: none;
    }
    
    .time-slot-btn {
        display: block;
        width: 100%;
        padding: 12px 16px;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        margin: 0;
        font-size: 14px;
        font-weight: 500;
        background: #fff;
        color: #333;
    }
    
    .time-slot-btn:hover {
        background-color: #f8f9fa;
        border-color: #007bff;
        transform: translateY(-1px);
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    .time-slot-input:checked + .time-slot-btn {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
        box-shadow: 0 2px 8px rgba(0,123,255,0.3);
    }
    
    .alert.bgc-lighter {
        margin-bottom: 20px;
    }
    
    .alert h6 {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 15px;
        color: #333;
    }
    
    .form-label {
        font-weight: 600;
        color: #333;
        margin-bottom: 8px;
    }
    
    .form-check-inline {
        margin-right: 30px;
    }
    
    .form-check-label {
        font-weight: 500;
        cursor: pointer;
    }
    </style>

    <!-- Checkout JavaScript -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Handle delivery type toggle
        const deliveryTypeRadios = document.querySelectorAll('input[name="delivery_type"]');
        const scheduleDisplay = document.getElementById('scheduled-display');
        const scheduleText = document.getElementById('schedule-text');
        let selectedTime = null;
        
        deliveryTypeRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.value === 'schedule') {
                    // Clear any previous selections first
                    document.querySelectorAll('input[name="modal_scheduled_time"]').forEach(slot => {
                        slot.checked = false;
                    });
                    
                    // Show modal
                    const modalElement = document.getElementById('scheduleModal');
                    if (modalElement) {
                        try {
                            // Try Bootstrap 5 modal first
                            if (typeof bootstrap !== 'undefined') {
                                const modal = new bootstrap.Modal(modalElement);
                                modal.show();
                            } else {
                                // Fallback: show modal manually
                                modalElement.style.display = 'block';
                                modalElement.classList.add('show');
                                document.body.classList.add('modal-open');
                            }
                        } catch (error) {
                            console.error('Error showing modal:', error);
                        }
                    }
                } else {
                    // Hide schedule display when switching back to ASAP
                    scheduleDisplay.style.display = 'none';
                    selectedTime = null;
                    
                    // Clear hidden field
                    document.getElementById('selected_scheduled_time').value = '';
                    
                    // Clear any selected time slots in modal
                    document.querySelectorAll('input[name="modal_scheduled_time"]').forEach(slot => {
                        slot.checked = false;
                    });
                }
            });
        });
        
        // Handle time slot selection in modal
        document.querySelectorAll('input[name="modal_scheduled_time"]').forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.checked) {
                    // Remove selection from other time slots
                    document.querySelectorAll('input[name="modal_scheduled_time"]').forEach(otherRadio => {
                        if (otherRadio !== this) {
                            otherRadio.checked = false;
                        }
                    });
                    selectedTime = this.dataset.display;
                }
            });
        });
        
        // Handle confirm schedule button
        const confirmButton = document.getElementById('confirmSchedule');
        if (confirmButton) {
            confirmButton.addEventListener('click', function() {
                const selectedRadio = document.querySelector('input[name="modal_scheduled_time"]:checked');
                
                if (selectedRadio) {
                    const timeDisplay = selectedRadio.dataset.display;
                    const timeValue = selectedRadio.value;
                    selectedTime = timeDisplay;
                    
                    // Set hidden field for form submission
                    document.getElementById('selected_scheduled_time').value = timeValue;
                    
                    // Update display to show selected time
                    scheduleText.textContent = `Today ${timeDisplay}`;
                    scheduleDisplay.style.display = 'block';
                    
                    // Hide the modal
                    try {
                        const modal = bootstrap.Modal.getInstance(document.getElementById('scheduleModal'));
                        if (modal) {
                            modal.hide();
                        } else {
                            // Fallback: hide manually
                            document.getElementById('scheduleModal').style.display = 'none';
                            document.getElementById('scheduleModal').classList.remove('show');
                            document.body.classList.remove('modal-open');
                        }
                    } catch (error) {
                        console.error('Error hiding modal:', error);
                    }
                    
                    // Update the delivery type radio to keep "Schedule an order" selected
                    document.getElementById('schedule').checked = true;
                } else {
                    alert('Please select a time slot');
                }
            });
        }
        
        // Reset modal when it's hidden without confirming
        const modalElement = document.getElementById('scheduleModal');
        if (modalElement) {
            modalElement.addEventListener('hidden.bs.modal', function() {
                const selectedRadio = document.querySelector('input[name="modal_scheduled_time"]:checked');
                if (!selectedRadio && !selectedTime) {
                    // If no time was selected and confirmed, revert to ASAP
                    document.getElementById('asap').checked = true;
                    scheduleDisplay.style.display = 'none';
                }
            });
        }
    });
    </script>

            <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection