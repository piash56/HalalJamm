@extends('frontend.layouts.app')
@section('title', 'Cart')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
       
         <!-- Toast Notification -->
        <div id="toast-container" style="position: fixed; top: 20px; right: 20px; z-index: 9999;"></div>

         <!-- Page Banner Start -->
        <section class="page-banner-area overlay pt-215 rpt-150 pb-160 rpb-120 rel z-1 bgs-cover text-center" style="background-image: url(assets/images/background/banner.jpg);">
            <div class="container">
                <div class="banner-inner text-white">
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Shopping Cart</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Shopping Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- Shopping Cart Area start -->
        <section class="shopping-cart-area py-130 rel z-1">
            <div class="container">
                @if(count($cartItems) > 0)
                <div class="row">
                    <!-- Cart Items -->
                    <div class="col-lg-8">
                        <div class="cart-items-wrapper">
                            <h3 class="mb-4">Shopping Cart ({{ count($cartItems) }} items)</h3>
                            
                            @foreach($cartItems as $item)
                            @php
                                $addonsTotal = 0;
                                if (isset($item['addons']) && is_array($item['addons'])) {
                                    foreach ($item['addons'] as $addon) {
                                        $addonsTotal += $addon['price'];
                                    }
                                }
                            @endphp
                            <div class="cart-item-card mb-3" data-item-id="{{ $item['id'] }}" data-base-price="{{ $item['price'] }}" data-addons-total="{{ $addonsTotal }}">
                                <div class="row align-items-center">
                                    <div class="col-md-2 col-3">
                                        <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="cart-item-image" onerror="this.src='{{ asset('/assets/images/food/food1.png') }}'">
                                    </div>
                                    <div class="col-md-6 col-9">
                                        <div class="d-flex align-items-center mb-2">
                                            <h5 class="cart-item-name mb-0 me-3">{{ $item['name'] }}</h5>
                                            <span class="cart-item-base-price">${{ number_format($item['price'], 2) }}</span>
                                        </div>
                                        @if(isset($item['addons']) && count($item['addons']) > 0)
                                            <div class="cart-item-addons mb-2">
                                                @foreach($item['addons'] as $addon)
                                                    <div class="addon-item mb-1 pb-2">
                                                        <small class="text-muted d-flex align-items-center justify-content-between w-100">
                                                            <span class="addon-name">
                                                                <i class="fas fa-plus-circle me-1"></i> 
                                                                {{ $addon['name'] }}
                                                            </span>
                                                            <span class="addon-price">
                                                                @if($addon['price'] > 0)
                                                                    +${{ number_format($addon['price'], 2) }}
                                                                @else
                                                                    $0.00
                                                                @endif
                                                            </span>
                                                        </small>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                        @if(isset($item['special_instructions']) && $item['special_instructions'])
                                            <p class="cart-item-note mb-0">
                                                <small class="text-muted"><i class="fas fa-sticky-note"></i> {{ $item['special_instructions'] }}</small>
                                            </p>
                                        @endif
                                    </div>
                                    <div class="col-md-2 col-4 text-center">
                                        <div class="quantity-controls-new">
                                            <button class="qty-btn-new" onclick="updateQuantity('{{ $item['id'] }}', -1)">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <span class="qty-display" id="qty-{{ $item['id'] }}">{{ $item['quantity'] }}</span>
                                            <button class="qty-btn-new" onclick="updateQuantity('{{ $item['id'] }}', 1)">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-4 text-center">
                                        <span class="cart-item-total">$<span class="item-total-amount">{{ number_format($item['subtotal'], 2) }}</span></span>
                                    </div>
                                    <div class="col-md-1 col-2 text-end">
                                        <button class="btn-remove-item" onclick="removeFromCart('{{ $item['id'] }}')">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Cart Summary -->
                    <div class="col-lg-4">
                        <div class="cart-summary-card">
                            <h4 class="mb-4">Order Summary</h4>
                            
                            <div class="summary-row">
                                <span>Subtotal</span>
                                <span class="summary-value" id="cart-subtotal">${{ number_format($subtotal, 2) }}</span>
                            </div>
                            @if($taxEnabled && $tax > 0)
                            <div class="summary-row" id="tax-row">
                                <span>Tax ({{ number_format($taxPercentage, 1) }}%)</span>
                                <span class="summary-value" id="cart-tax">${{ number_format($tax, 2) }}</span>
                            </div>
                            @endif
                            <hr>
                            <div class="summary-row total-row">
                                <span>Total</span>
                                <span class="summary-value" id="cart-total">${{ number_format($total, 2) }}</span>
                            </div>
                            
                            <a href="{{ route('checkout') }}" class="btn-checkout w-100 mt-4">
                                Proceed to Checkout
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                            
                            <div class="cart-actions mt-3">
                                <a href="{{ route('allMenus') }}" class="btn-secondary-action w-100 mb-2">
                                    <i class="fas fa-shopping-bag me-2"></i>
                                    Continue Shopping
                                </a>
                                <button onclick="clearCart()" class="btn-secondary-action w-100 btn-clear">
                                    <i class="fas fa-trash-alt me-2"></i>
                                    Clear Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="empty-cart-wrapper text-center py-5">
                    <i class="fas fa-shopping-cart empty-cart-icon"></i>
                    <h3 class="mt-4">Your cart is empty</h3>
                    <p class="mb-4 text-muted">Add some delicious items to get started!</p>
                    <a href="{{ route('allMenus') }}" class="theme-btn">Browse Menu <i class="fas fa-angle-double-right"></i></a>
                </div>
                @endif
            </div>
        </section>
        <!-- Shopping Cart Area start -->

        <!-- Clear Cart Modal -->
        <div class="modal fade" id="clearCartModal" tabindex="-1" aria-labelledby="clearCartModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="clearCartModalLabel">
                            <i class="fas fa-exclamation-triangle text-warning me-2"></i>
                            Clear Cart
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-3">Are you sure you want to clear your entire cart?</p>
                        <p class="text-muted small mb-0">This action cannot be undone. All items will be removed from your cart.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" id="confirmClearCart">
                            <i class="fas fa-trash-alt me-2"></i>
                            Clear Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

            <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->

    <!-- Cart Page Styles -->
    <style>
    /* Toast Notification */
    .toast-notification {
        background: #28a745;
        color: white;
        padding: 16px 24px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 12px;
        min-width: 300px;
        animation: slideIn 0.3s ease-out;
    }
    .toast-notification.error {
        background: #dc3545;
    }
    .toast-notification i {
        font-size: 20px;
    }
    .toast-notification .toast-message {
        flex: 1;
        font-size: 15px;
        font-weight: 500;
    }
    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    /* Cart Item Card */
    .cart-item-card {
        background: #fff;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        position: relative;
    }
    .cart-item-card:hover {
        box-shadow: 0 4px 16px rgba(0,0,0,0.12);
    }
    .cart-item-header {
        position: relative;
    }
    .cart-item-image {
        width: 100%;
        height: 80px;
        object-fit: cover;
        border-radius: 8px;
    }
    .cart-item-name {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin-bottom: 0;
    }
    .cart-item-main-price {
        font-size: 22px;
        font-weight: 700;
        color: #d63031;
    }
    .cart-item-base-price {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin-left: 10px;
    }
    .addon-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        border-bottom: 1px solid #f1f3f4;
    }
    .addon-item small {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        flex-wrap: nowrap;
    }
    .addon-name {
        flex: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        margin-right: 10px;
    }
    .addon-price {
        color: #28a745;
        font-weight: 500;
        flex-shrink: 0;
        white-space: nowrap;
    }
    .cart-item-price {
        color: #28a745;
        font-weight: 600;
    }
    .cart-item-total {
        color: #d63031;
        font-weight: 700;
        font-size: 18px;
    }
    
    /* New Quantity Controls */
    .quantity-controls-new {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }
    .qty-btn-new {
        width: 32px;
        height: 32px;
        border: 1px solid #dee2e6;
        background: #fff;
        color: #333;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s ease;
        font-size: 12px;
        box-shadow: none;
        padding: 0;
    }
    .qty-btn-new:hover {
        background: #28a745;
        color: #fff;
        border-color: #28a745;
    }
    .qty-btn-new:active {
        background: #1e7e34;
        color: #fff;
        border-color: #1e7e34;
        transform: scale(0.95);
    }
    .qty-display {
        font-size: 16px;
        font-weight: 600;
        color: #333;
        min-width: 30px;
        text-align: center;
        padding: 4px 8px;
        background: #f8f9fa;
        border-radius: 4px;
        border: 1px solid #e9ecef;
    }
    
    /* Quantity Controls */
    .quantity-controls-modern {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        background: #f8f9fa;
        border-radius: 8px;
        padding: 4px;
        border: 1px solid #e9ecef;
    }
    .qty-btn {
        width: 32px;
        height: 32px;
        border: 1px solid #dee2e6;
        background: #fff;
        color: #333;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s ease;
        font-size: 12px;
        box-shadow: none;
        padding: 0;
    }
    .qty-btn:hover {
        background: #28a745;
        color: #fff;
        border-color: #28a745;
        transform: none;
    }
    .qty-btn:active {
        background: #1e7e34;
        color: #fff;
        border-color: #1e7e34;
        transform: scale(0.95);
    }
    .qty-btn:focus {
        outline: none;
        box-shadow: none;
        border-color: #28a745;
    }
    .qty-input {
        width: 50px;
        height: 32px;
        text-align: center;
        border: none;
        background: transparent;
        font-weight: 600;
        font-size: 16px;
        color: #333 !important;
        outline: none;
        opacity: 1 !important;
        visibility: visible !important;
        display: block !important;
    }
    .qty-input:focus {
        color: #333 !important;
        opacity: 1 !important;
        visibility: visible !important;
    }
    .qty-input::-webkit-outer-spin-button,
    .qty-input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    .qty-input[type=number] {
        -moz-appearance: textfield;
    }
    
    /* Remove Button */
    .btn-remove-item {
        background: #fff;
        border: 1px solid #dee2e6;
        color: #dc3545;
        width: 36px;
        height: 36px;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .btn-remove-item:hover {
        background: #dc3545;
        color: #fff;
        border-color: #dc3545;
    }
    
    /* Cart Summary Card */
    .cart-summary-card {
        background: #fff;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        position: sticky;
        top: 100px;
    }
    .cart-summary-card h4 {
        font-weight: 700;
        color: #333;
    }
    .summary-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
        color: #666;
    }
    .summary-row.total-row {
        font-size: 20px;
        font-weight: 700;
        color: #333;
        margin-top: 15px;
    }
    .summary-value {
        font-weight: 600;
        color: #333;
    }
    .cart-summary-card hr {
        margin: 20px 0;
        border-color: #e9ecef;
    }
    
    /* Buttons */
    .btn-checkout {
        background: #28a745;
        color: #fff;
        padding: 15px 30px;
        border-radius: 8px;
        border: none;
        font-weight: 600;
        font-size: 16px;
        text-align: center;
        display: block;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    .btn-checkout:hover {
        background: #218838;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(40,167,69,0.3);
    }
    .btn-secondary-action {
        background: #f8f9fa;
        color: #333;
        padding: 12px 24px;
        border-radius: 8px;
        border: 1px solid #dee2e6;
        font-weight: 500;
        text-align: center;
        display: block;
        text-decoration: none;
        transition: all 0.2s ease;
        cursor: pointer;
    }
    .btn-secondary-action:hover {
        background: #e9ecef;
        color: #333;
    }
    .btn-secondary-action.btn-clear {
        color: #dc3545;
        border-color: #dc3545;
    }
    .btn-secondary-action.btn-clear:hover {
        background: #dc3545;
        color: #fff;
    }
    
    /* Empty Cart */
    .empty-cart-wrapper {
        background: #fff;
        border-radius: 12px;
        padding: 60px 40px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    .empty-cart-icon {
        font-size: 80px;
        color: #dee2e6;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .cart-item-card {
            padding: 15px;
        }
        .cart-item-image {
            height: 60px;
        }
        .cart-summary-card {
            margin-top: 30px;
            position: relative;
            top: 0;
        }
    }
    </style>

    <!-- Cart JavaScript Functions -->
    <script>
        // Tax settings from backend
        const taxEnabled = {{ $taxEnabled ? 'true' : 'false' }};
        const taxPercentage = {{ $taxPercentage ?? 0 }};
        
        // Toast notification function
        window.showToast = function(message, type = 'success') {
            const container = document.getElementById('toast-container');
            const toast = document.createElement('div');
            toast.className = `toast-notification ${type}`;
            
            const icon = type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle';
            
            toast.innerHTML = `
                <i class="fas ${icon}"></i>
                <div class="toast-message">${message}</div>
            `;
            
            container.appendChild(toast);
            
            // Auto remove after 3 seconds
            setTimeout(() => {
                container.removeChild(toast);
            }, 3000);
        };
        
        async function updateQuantity(itemId, change) {
            const card = document.querySelector(`.cart-item-card[data-item-id="${itemId}"]`);
            const quantityDisplay = document.getElementById(`qty-${itemId}`);
            const itemTotalElements = card.querySelectorAll('.item-total-amount');
            
            let currentQuantity = parseInt(quantityDisplay.textContent);
            let newQuantity = currentQuantity + change;
            
            if (newQuantity < 1) {
                return;
            }
            
            // Calculate item price per unit (base price + addons)
            const basePrice = parseFloat(card.dataset.basePrice);
            const addonsTotal = parseFloat(card.dataset.addonsTotal);
            const itemPricePerUnit = basePrice + addonsTotal;
            
            // Update quantity display immediately
            quantityDisplay.textContent = newQuantity;
            
            // Calculate and update item total immediately
            const newItemTotal = (itemPricePerUnit * newQuantity).toFixed(2);
            itemTotalElements.forEach(element => {
                element.textContent = newItemTotal;
            });
            
            // Update cart totals immediately
            updateCartTotalsInstant();
            
            // Update backend in background
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            
            try {
                await fetch(`/cart/update/${itemId}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({ quantity: newQuantity })
                });
            } catch (error) {
                console.error('Error updating quantity in backend:', error);
                // Revert on error (optional)
                quantityDisplay.textContent = currentQuantity;
                const oldItemTotal = (itemPricePerUnit * currentQuantity).toFixed(2);
                itemTotalElements.forEach(element => {
                    element.textContent = oldItemTotal;
                });
                updateCartTotalsInstant();
            }
        }
        
        function updateCartTotalsInstant() {
            let newSubtotal = 0;
            
            // Calculate subtotal from all items
            document.querySelectorAll('.cart-item-card').forEach(card => {
                const itemId = card.dataset.itemId;
                const quantityDisplay = document.getElementById(`qty-${itemId}`);
                const basePrice = parseFloat(card.dataset.basePrice);
                const addonsTotal = parseFloat(card.dataset.addonsTotal);
                const quantity = parseInt(quantityDisplay.textContent);
                
                const itemTotal = (basePrice + addonsTotal) * quantity;
                newSubtotal += itemTotal;
            });
            
            // Calculate tax dynamically
            let newTax = 0;
            if (taxEnabled && taxPercentage > 0) {
                newTax = parseFloat((newSubtotal * (taxPercentage / 100)).toFixed(2));
            }
            const newTotal = (newSubtotal + newTax).toFixed(2);
            
            // Update display
            document.getElementById('cart-subtotal').textContent = '$' + newSubtotal.toFixed(2);
            
            // Update tax display
            const taxRow = document.getElementById('tax-row');
            const taxElement = document.getElementById('cart-tax');
            if (taxEnabled && taxPercentage > 0 && newTax > 0) {
                if (taxElement) {
                    taxElement.textContent = '$' + newTax.toFixed(2);
                }
                if (taxRow) {
                    taxRow.style.display = 'flex';
                }
            } else {
                if (taxRow) {
                    taxRow.style.display = 'none';
                }
            }
            
            document.getElementById('cart-total').textContent = '$' + newTotal;
        }
        
        async function removeFromCart(itemId) {
            if (!confirm('Are you sure you want to remove this item?')) {
                return;
            }
            
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            
            try {
                const response = await fetch(`/cart/remove/${itemId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json'
                    }
                });
                
                const data = await response.json();
                
                if (data.success) {
                    // Update cart count
                    window.updateCartCount();
                    // Reload page
                    window.location.reload();
                }
            } catch (error) {
                console.error('Error removing item:', error);
                alert('Failed to remove item. Please try again.');
            }
        }
        
        function clearCart() {
            // Show Bootstrap modal instead of default confirm
            const modal = new bootstrap.Modal(document.getElementById('clearCartModal'));
            modal.show();
        }
        
        async function confirmClearCart() {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            
            try {
                const response = await fetch('/cart/clear', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json'
                    }
                });
                
                const data = await response.json();
                
                if (data.success) {
                    // Hide modal
                    const modal = bootstrap.Modal.getInstance(document.getElementById('clearCartModal'));
                    modal.hide();
                    
                    // Update cart count
                    window.updateCartCount();
                    // Reload page
                    window.location.reload();
                }
            } catch (error) {
                console.error('Error clearing cart:', error);
                window.showToast('Failed to clear cart. Please try again.', 'error');
            }
        }
        
        // Initialize modal event listeners
        document.addEventListener('DOMContentLoaded', function() {
            const confirmButton = document.getElementById('confirmClearCart');
            if (confirmButton) {
                confirmButton.addEventListener('click', confirmClearCart);
            }
        });
    </script>
@endsection