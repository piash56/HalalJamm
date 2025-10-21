@extends('frontend.layouts.app')
@section('title', 'All Menus')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area overlay pt-215 rpt-150 pb-160 rpb-120 rel z-1 bgs-cover text-center" style="background-image: url({{ asset('assets/images/background/banner.jpg') }});">
            <div class="container">
                <div class="banner-inner text-white">
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">halaljamm all menus</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">All Menus</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

        
        <!-- All Menus Area start -->
        <section class="popular-menu-area pt-105 rpt-85 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">our menus</span>
                            <h2>order what you love! we take delivery responsibility to your home</h2>
                        </div>
                    </div>
                </div>

                <!-- Category Filter Buttons -->
                <div class="row justify-content-center mb-4">
                    <div class="col-12">
                        <div class="category-filter text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <a href="{{ route('allMenus') }}" class="btn btn-sm {{ !$selectedCategory ? 'btn-primary' : 'btn-outline-secondary' }} mx-2 mb-3">
                                All Foods
                            </a>
                            @foreach($categories as $category)
                                <a href="{{ route('allMenus', ['category' => $category->id]) }}" class="btn btn-sm {{ $selectedCategory == $category->id ? 'btn-primary' : 'btn-outline-secondary' }} mx-2 mb-3">
                                    {{ $category->name }}
                                </a>
                            @endforeach
                            </div>
                        </div>
                    </div>

                <div class="row justify-content-center">
                    <!-- Column 1 -->
                    <div class="col-xl-4 col-lg-6 z-3" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        @if(isset($column1Foods))
                            @foreach($column1Foods as $index => $menu)
                                <div class="food-item {{ $loop->last ? 'mb-30' : '' }}" style="cursor: pointer;" onclick="openFoodModal({{ $menu->id }})">
                            <div class="content">
                                <div class="name-desc">
                                            <h5>{{ $menu->name }}</h5>
                                            <p>{{ $menu->description ?: 'Served with lettuce, tomato, onion and your choice of sauce' }}</p>
                                </div>
                                <div class="price">
                                            <span>${{ number_format($menu->price, 2) }}</span>
                                </div>
                            </div>
                            <div class="image">
                                        <img src="{{ $menu->image_url }}" alt="{{ $menu->name }}" onerror="this.src='{{ asset('/assets/images/food/food1.png') }}'">
                            </div>
                        </div>
                            @endforeach
                        @endif
                                </div>

                    <!-- Column 2 -->
                    <div class="col-xl-4 col-lg-6 z-2" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        @if(isset($column2Foods))
                            @foreach($column2Foods as $index => $menu)
                                <div class="food-item {{ $loop->last ? 'mb-30' : '' }}" style="cursor: pointer;" onclick="openFoodModal({{ $menu->id }})">
                            <div class="content">
                                <div class="name-desc">
                                            <h5>{{ $menu->name }}</h5>
                                            <p>{{ $menu->description ?: 'Native to the icy waters of the Pacific' }}</p>
                                </div>
                                <div class="price">
                                            <span>${{ number_format($menu->price, 2) }}</span>
                                </div>
                            </div>
                            <div class="image">
                                        <img src="{{ $menu->image_url }}" alt="{{ $menu->name }}" onerror="this.src='{{ asset('/assets/images/food/food1.png') }}'">
                            </div>
                        </div>
                            @endforeach
                        @endif
                                </div>

                    <!-- Column 3 -->
                    <div class="col-xl-4 col-lg-6 z-1" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        @if(isset($column3Foods))
                            @foreach($column3Foods as $index => $menu)
                                <div class="food-item {{ $loop->last ? 'mb-30' : '' }}" style="cursor: pointer;" onclick="openFoodModal({{ $menu->id }})">
                            <div class="content">
                                <div class="name-desc">
                                            <h5>{{ $menu->name }}</h5>
                                            <p>{{ $menu->description ?: 'Native to the icy waters of the Pacific' }}</p>
                                </div>
                                <div class="price">
                                            <span>${{ number_format($menu->price, 2) }}</span>
                                </div>
                            </div>
                            <div class="image">
                                        <img src="{{ $menu->image_url }}" alt="{{ $menu->name }}" onerror="this.src='{{ asset('/assets/images/food/food1.png') }}'">
                            </div>
                        </div>
                            @endforeach
                        @endif
                                </div>
                            </div>

                @if($column1Foods->isEmpty() && $column2Foods->isEmpty() && $column3Foods->isEmpty())
                    <div class="row">
                        <div class="col-12 text-center py-5">
                            <p class="text-muted">No foods available in this category.</p>
                            </div>
                        </div>
                @endif
                                </div>
        </section>
        <!-- All Menus Area End -->

    <!-- Toast Notification -->
    <div id="toast-container" style="position: fixed; top: 20px; right: 20px; z-index: 9999;"></div>

    <!-- Food Order Modal -->
    <div class="modal fade" id="foodModal" tabindex="-1" aria-labelledby="foodModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 600px;">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title" id="foodModalTitle" style="font-size: 24px; font-weight: 700; color: #000;"></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="max-height: 70vh; overflow-y: auto; padding: 0 24px 24px;">
                    <form id="addToOrderForm">
                        <input type="hidden" name="food_id" id="food_id">
                        <input type="hidden" id="basePrice">
                        
                        <!-- Addons Section -->
                        <div id="addonsSection"></div>
                        
                        <!-- Special Instructions -->
                        <div style="margin-top: 20px;">
                            <button type="button" class="btn btn-link p-0 text-decoration-none" id="specialInstructionsToggle" 
                                    onclick="window.toggleSpecialInstructions()" 
                                    style="color: #28a745; font-size: 14px; font-weight: 400;">
                                Special Instructions +
                            </button>
                            <div id="specialInstructionsContainer" style="display: none; margin-top: 12px;">
                                <textarea class="form-control" name="special_instructions" id="special_instructions" 
                                          style="border: 1px solid #dee2e6; border-radius: 4px; padding: 12px; font-size: 14px; color: #6c757d;" 
                                          rows="4" placeholder="Special Instructions"></textarea>
                            </div>
                        </div>
                        
                        <!-- Quantity and Add to Order -->
                        <div class="d-flex justify-content-between align-items-center" style="margin-top: 24px;">
                            <div class="quantity-controls d-flex align-items-center" style="gap: 16px;">
                                <button type="button" class="btn btn-outline-secondary rounded-circle" 
                                        style="width: 44px; height: 44px; padding: 0; font-size: 24px; font-weight: 300; border: 1px solid #dee2e6;" 
                                        onclick="window.decrementQuantity()">−</button>
                                <span id="quantityDisplay" style="font-size: 20px; font-weight: 600; min-width: 30px; text-align: center;">1</span>
                                <button type="button" class="btn btn-outline-secondary rounded-circle" 
                                        style="width: 44px; height: 44px; padding: 0; font-size: 24px; font-weight: 300; border: 1px solid #dee2e6;" 
                                        onclick="window.incrementQuantity()">+</button>
                            </div>
                            <button type="submit" class="btn btn-success" 
                                    style="padding: 12px 24px; font-size: 16px; font-weight: 600; background-color: #28a745; border: none;">
                                Add to order <span id="totalPrice" style="font-weight: 700;"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Foods Data for JavaScript -->
    <script type="application/json" id="foods-data">
        {!! json_encode($foodsData) !!}
    </script>

    <!-- Toast & Modal Styles -->
    <style>
    /* Toast Notification Styles */
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
    @keyframes slideOut {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(100%);
            opacity: 0;
        }
    }
    
    /* Modal Styles */
    #foodModal .modal-content {
        border-radius: 8px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.1);
    }
    #foodModal .modal-header {
        padding: 20px 24px 16px;
    }
    #foodModal .form-check {
        padding: 8px 0;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    #foodModal .form-check:last-child {
        border-bottom: none;
    }
    #foodModal .form-check-input {
        width: 18px;
        height: 18px;
        margin: 0;
        cursor: pointer;
        border: 2px solid #dee2e6;
        flex-shrink: 0;
        padding: 10px;
    }
    #foodModal .form-check-input:checked {
        background-color: #28a745;
        border-color: #28a745;
    }
    #foodModal .form-check-label {
        cursor: pointer;
        margin: 0;
        padding: 0;
        font-size: 16px;
        color: #333;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-left: 12px;
    }
    #foodModal .form-check-label span:last-child {
        color: #28a745;
        font-weight: 500;
        font-size: 15px;
    }
    #foodModal .btn-success {
        background-color: #28a745;
        border-color: #28a745;
    }
    #foodModal .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
    #foodModal .quantity-controls button {
        display: flex;
        align-items: center;
        justify-content: center;
        color: #4b4b4b !important;
        background-color: #fff !important;
    }
    #foodModal .quantity-controls button:hover {
        background-color: #f8f9fa !important;
        color: #000 !important;
    }
    #foodModal .quantity-controls button:active,
    #foodModal .quantity-controls button:focus {
        background-color: #fff !important;
        color: #000 !important;
        border-color: #dee2e6 !important;
        box-shadow: none !important;
    }
    </style>

    <!-- JavaScript for Modal -->
    <script>
    // Define global variables and functions immediately
    let foodsData = [];
    
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
            toast.style.animation = 'slideOut 0.3s ease-out';
            setTimeout(() => {
                container.removeChild(toast);
            }, 300);
        }, 3000);
    };

    // Define functions globally
    window.openFoodModal = function(foodId) {
        console.log('Opening modal for food ID:', foodId);
        const food = foodsData.find(f => f.id === foodId);
        if (!food) {
            console.error('Food not found:', foodId);
            return;
        }

        // Set modal title
        document.getElementById('foodModalTitle').textContent = food.name;
        document.getElementById('food_id').value = food.id;
        document.getElementById('basePrice').value = food.price;
        
        // Build addons HTML
        let addonsHTML = '';
        if (food.addons && food.addons.length > 0) {
            addonsHTML = food.addons.map(addon => `
                <div class="form-check">
                    <input class="form-check-input addon-checkbox" type="checkbox" name="addons[]" 
                           value="${addon.id}" data-price="${addon.price}" id="addon${addon.id}"
                           onchange="window.updateTotalPrice()">
                    <label class="form-check-label" for="addon${addon.id}">
                        <span>${addon.name}</span>
                        <span>+$${addon.price.toFixed(2)}</span>
                    </label>
                </div>
            `).join('');
        }
        
        document.getElementById('addonsSection').innerHTML = addonsHTML;
        
        // Reset quantity
        document.getElementById('quantityDisplay').textContent = '1';
        
        // Reset special instructions
        const specialContainer = document.getElementById('specialInstructionsContainer');
        const specialToggle = document.getElementById('specialInstructionsToggle');
        const specialTextarea = document.getElementById('special_instructions');
        specialContainer.style.display = 'none';
        specialToggle.style.display = 'block';
        if (specialTextarea) {
            specialTextarea.value = '';
        }
        
        // Update total price
        window.updateTotalPrice();
        
        // Show modal
        const modal = new bootstrap.Modal(document.getElementById('foodModal'));
        modal.show();
    };

    window.incrementQuantity = function() {
        const display = document.getElementById('quantityDisplay');
        let quantity = parseInt(display.textContent);
        quantity++;
        display.textContent = quantity;
        window.updateTotalPrice();
    };

    window.decrementQuantity = function() {
        const display = document.getElementById('quantityDisplay');
        let quantity = parseInt(display.textContent);
        if (quantity > 1) {
            quantity--;
            display.textContent = quantity;
            window.updateTotalPrice();
        }
    };

    window.updateTotalPrice = function() {
        const basePrice = parseFloat(document.getElementById('basePrice').value);
        const quantity = parseInt(document.getElementById('quantityDisplay').textContent);
        
        let addonPrice = 0;
        document.querySelectorAll('.addon-checkbox:checked').forEach(checkbox => {
            addonPrice += parseFloat(checkbox.dataset.price);
        });
        
        const total = (basePrice + addonPrice) * quantity;
        document.getElementById('totalPrice').textContent = '$' + total.toFixed(2);
    };

    window.toggleSpecialInstructions = function() {
        const container = document.getElementById('specialInstructionsContainer');
        const toggle = document.getElementById('specialInstructionsToggle');
        if (container.style.display === 'none') {
            container.style.display = 'block';
            toggle.style.display = 'none';
        } else {
            container.style.display = 'none';
            toggle.style.display = 'block';
        }
    };

    // Initialize when DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        // Parse foods data
        const foodsDataElement = document.getElementById('foods-data');
        if (foodsDataElement) {
            foodsData = JSON.parse(foodsDataElement.textContent);
            console.log('Foods data loaded:', foodsData.length, 'items');
        }
        
        // Handle form submission
        const form = document.getElementById('addToOrderForm');
        if (form) {
            form.addEventListener('submit', async function(e) {
                e.preventDefault();
                
                const foodId = document.getElementById('food_id').value;
                const quantity = parseInt(document.getElementById('quantityDisplay').textContent);
                const specialInstructions = document.getElementById('special_instructions').value;
                
                // Get selected addons
                const selectedAddons = [];
                document.querySelectorAll('.addon-checkbox:checked').forEach(checkbox => {
                    selectedAddons.push(checkbox.value);
                });
                
                // Prepare form data
                const formData = new FormData();
                formData.append('food_id', foodId);
                formData.append('quantity', quantity);
                formData.append('special_instructions', specialInstructions);
                selectedAddons.forEach(addonId => {
                    formData.append('addons[]', addonId);
                });
                
                // Get CSRF token
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                
                try {
                    const response = await fetch('{{ route("cart.add") }}', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken,
                            'Accept': 'application/json'
                        },
                        body: formData
                    });
                    
                    const data = await response.json();
                    
                    if (data.success) {
                        // Close modal first
                        const modalElement = document.getElementById('foodModal');
                        const modal = bootstrap.Modal.getInstance(modalElement);
                        if (modal) {
                            modal.hide();
                        }
                        
                        // Update cart count in header
                        window.updateCartCount();
                        
                        // Show success toast
                        window.showToast(data.message, 'success');
                    }
                } catch (error) {
                    console.error('Error adding to cart:', error);
                    window.showToast('Failed to add item to cart. Please try again.', 'error');
                }
            });
        }
    });
    </script>

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection
