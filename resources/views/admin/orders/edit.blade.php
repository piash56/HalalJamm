@extends('layouts.vertical', ['title' => 'Edit Order'])

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="card-title mb-0">Edit Order - {{ $order->order_number }}</h5>
                </div>
                <div class="d-flex gap-3">
                    <a href="{{ route('admin.order.view', $order) }}" class="btn btn-sm btn-secondary">View Order</a>
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-sm btn-secondary">Back to Orders</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.order.update', $order) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <!-- Customer Information -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h6 class="mb-0">Customer Information</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="full_name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="full_name" name="full_name" value="{{ old('full_name', $order->full_name) }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $order->email) }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $order->phone) }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea class="form-control" id="address" name="address" rows="3" required>{{ old('address', $order->address) }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="order_notes" class="form-label">Order Notes</label>
                                        <textarea class="form-control" id="order_notes" name="order_notes" rows="2">{{ old('order_notes', $order->order_notes) }}</textarea>
                                    </div>
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
                                    <div class="mb-3">
                                        <label for="order_type" class="form-label">Order Type</label>
                                        <select class="form-select" id="order_type" name="order_type" required>
                                            <option value="in_store" {{ old('order_type', $order->order_type) == 'in_store' ? 'selected' : '' }}>In-Store Pickup</option>
                                            <option value="delivery" {{ old('order_type', $order->order_type) == 'delivery' ? 'selected' : '' }}>Home Delivery</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="delivery_type" class="form-label">For When</label>
                                        <select class="form-select" id="delivery_type" name="delivery_type" required>
                                            <option value="asap" {{ old('delivery_type', $order->delivery_type) == 'asap' ? 'selected' : '' }}>ASAP (in 15 mins)</option>
                                            <option value="schedule" {{ old('delivery_type', $order->delivery_type) == 'schedule' ? 'selected' : '' }}>Schedule an order</option>
                                        </select>
                                    </div>
                                    <div class="mb-3" id="scheduled_time_field" style="{{ old('delivery_type', $order->delivery_type) == 'schedule' ? '' : 'display: none;' }}">
                                        <label for="scheduled_time" class="form-label">Scheduled Time</label>
                                        <input type="datetime-local" class="form-control" id="scheduled_time" name="scheduled_time" value="{{ old('scheduled_time', $order->scheduled_time ? $order->scheduled_time->format('Y-m-d\TH:i') : '') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="payment_method" class="form-label">Payment Method</label>
                                        <select class="form-select" id="payment_method" name="payment_method" required>
                                            <option value="cash_on_delivery" {{ old('payment_method', $order->payment_method) == 'cash_on_delivery' ? 'selected' : '' }}>Cash on Delivery</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Order Status</label>
                                        <select class="form-select" id="status" name="status" required>
                                            <option value="pending" {{ old('status', $order->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="confirmed" {{ old('status', $order->status) == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                            <option value="preparing" {{ old('status', $order->status) == 'preparing' ? 'selected' : '' }}>Preparing</option>
                                            <option value="ready_for_delivery" {{ old('status', $order->status) == 'ready_for_delivery' ? 'selected' : '' }}>Ready for Delivery</option>
                                            <option value="out_for_delivery" {{ old('status', $order->status) == 'out_for_delivery' ? 'selected' : '' }}>Out for Delivery</option>
                                            <option value="delivered" {{ old('status', $order->status) == 'delivered' ? 'selected' : '' }}>Delivered</option>
                                            <option value="cancelled" {{ old('status', $order->status) == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Order Items -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0">Order Items</h6>
                                    <button type="button" class="btn btn-light btn-sm" id="addNewItem">Add Item</button>
                                </div>
                                <div class="card-body">
                                    <div id="order-items-container">
                                        @foreach($order->orderItems as $index => $item)
                                        <div class="order-item-row border rounded p-3 mb-3" data-item-index="{{ $index }}">
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="item-image me-3">
                                                            @if($item->food_image)
                                                                <img src="{{ $item->food_image }}" alt="{{ $item->food_name }}" class="rounded" style="width: 50px; height: 50px; object-fit: cover;">
                                                            @else
                                                                <img src="{{ asset('images/placeholder-menu.png') }}" alt="{{ $item->food_name }}" class="rounded" style="width: 50px; height: 50px; object-fit: cover;">
                                                            @endif
                                                        </div>
                                                        <div>
                                                            <select name="order_items[{{ $index }}][menu_id]" class="form-select item-select" required>
                                                                <option value="">Select Food Item</option>
                                                                @foreach($menus as $menu)
                                                                    <option value="{{ $menu->id }}" data-price="{{ $menu->price }}" data-image="{{ $menu->image_url }}" data-addons='{{ json_encode($menu->addons) }}' {{ $item->menu_id == $menu->id ? 'selected' : '' }}>
                                                                        {{ $menu->name }} - ${{ number_format($menu->price, 2) }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">Quantity</label>
                                                    <input type="number" name="order_items[{{ $index }}][quantity]" class="form-control quantity-input" value="{{ $item->quantity }}" min="1" required>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label">Addons</label>
                                                    <select name="order_items[{{ $index }}][addons][]" class="form-select addon-select" multiple>
                                                        @if($item->menu && $item->menu->addons && $item->menu->addons->count() > 0)
                                                            @foreach($item->menu->addons as $addon)
                                                                <option value="{{ $addon->id }}" data-price="{{ $addon->price }}" 
                                                                    @php
                                                                        $selectedAddons = collect($item->addons)->pluck('id')->toArray();
                                                                    @endphp
                                                                    {{ in_array($addon->id, $selectedAddons) ? 'selected' : '' }}>
                                                                    {{ $addon->name }} ({{ $addon->price > 0 ? '$' . number_format($addon->price, 2) : 'Free' }})
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    <small class="text-muted addon-info">Select a food item to see available addons</small>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">Special Instructions</label>
                                                    <textarea name="order_items[{{ $index }}][special_instructions]" class="form-control" rows="2" placeholder="Optional">{{ $item->special_instructions }}</textarea>
                                                </div>
                                                <div class="col-md-1">
                                                    <label class="form-label">&nbsp;</label>
                                                    <button type="button" class="btn btn-danger btn-sm d-block remove-item">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-12">
                                                    <div class="text-end">
                                                        <strong>Item Total: $<span class="item-total">{{ number_format($item->item_total, 2) }}</span></strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    
                                    <div class="text-end mt-3">
                                        <h5>Order Total: $<span id="order-total">{{ number_format($order->total, 2) }}</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="d-flex gap-3">
                                <button type="submit" class="btn btn-primary">Update Order</button>
                                <a href="{{ route('admin.order.view', $order) }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
// Toast notification function
function showToast(message, type = 'success') {
     const toastHtml = `
          <div class="toast align-items-center text-white bg-${type === 'success' ? 'success' : type === 'warning' ? 'warning' : 'danger'} border-0" role="alert" aria-live="assertive" aria-atomic="true">
               <div class="d-flex">
                    <div class="toast-body">${message}</div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
               </div>
          </div>
     `;
     
     // Find or create toast container
     let toastContainer = document.getElementById('toast-container');
     if (!toastContainer) {
          toastContainer = document.createElement('div');
          toastContainer.id = 'toast-container';
          toastContainer.className = 'toast-container position-fixed top-0 end-0 p-3';
          toastContainer.style.zIndex = '1055';
          document.body.appendChild(toastContainer);
     }
     
     toastContainer.insertAdjacentHTML('beforeend', toastHtml);
     
     const toastElement = toastContainer.lastElementChild;
     const toast = new bootstrap.Toast(toastElement);
     toast.show();
     
     // Remove toast element after it's hidden
     toastElement.addEventListener('hidden.bs.toast', function() {
          toastElement.remove();
     });
}

document.addEventListener('DOMContentLoaded', function() {
    const deliveryTypeSelect = document.getElementById('delivery_type');
    const scheduledTimeField = document.getElementById('scheduled_time_field');
    
    deliveryTypeSelect.addEventListener('change', function() {
        if (this.value === 'schedule') {
            scheduledTimeField.style.display = 'block';
        } else {
            scheduledTimeField.style.display = 'none';
        }
    });

    let itemIndex = {{ count($order->orderItems) }};
    
    // Add new item functionality
    const addNewItemBtn = document.getElementById('addNewItem');
    if (addNewItemBtn) {
        addNewItemBtn.addEventListener('click', function() {
            const container = document.getElementById('order-items-container');
            if (container) {
                const newItemHtml = createNewItemHtml(itemIndex);
                container.insertAdjacentHTML('beforeend', newItemHtml);
                itemIndex++;
                updateOrderTotal();
            } else {
                console.error('Order items container not found');
            }
        });
    } else {
        console.error('Add new item button not found');
    }

    // Remove item functionality
    document.addEventListener('click', function(e) {
        if (e.target.closest('.remove-item')) {
            const container = document.getElementById('order-items-container');
            const rows = container.querySelectorAll('.order-item-row');
            
            // Ensure minimum 1 item remains
            if (rows.length <= 1) {
                showToast('Order must have at least one item.', 'warning');
                return;
            }
            
            e.target.closest('.order-item-row').remove();
            reindexItems();
            updateOrderTotal();
        }
    });

    // Handle item selection changes
    document.addEventListener('change', function(e) {
        if (e.target.classList.contains('item-select')) {
            updateItemDetails(e.target.closest('.order-item-row'));
        }
    });

    // Handle quantity and addon changes
    document.addEventListener('input change', function(e) {
        if (e.target.classList.contains('quantity-input') || e.target.classList.contains('addon-select')) {
            updateItemTotal(e.target.closest('.order-item-row'));
            updateOrderTotal();
        }
    });

    function createNewItemHtml(index) {
        const menus = @json($menus);
        
        let menuOptions = '<option value="">Select Food Item</option>';
        menus.forEach(menu => {
            // Include addons data for each menu
            const menuAddons = menu.addons ? JSON.stringify(menu.addons) : '[]';
            menuOptions += `<option value="${menu.id}" data-price="${menu.price}" data-image="${menu.image_url}" data-addons='${menuAddons}'>${menu.name} - $${parseFloat(menu.price).toFixed(2)}</option>`;
        });

        return `
            <div class="order-item-row border rounded p-3 mb-3" data-item-index="${index}">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="d-flex align-items-center">
                            <div class="item-image me-3">
                                <img src="{{ asset('images/placeholder-menu.png') }}" alt="Food item" class="rounded" style="width: 50px; height: 50px; object-fit: cover;">
                            </div>
                            <div>
                                <select name="order_items[${index}][menu_id]" class="form-select item-select" required>
                                    ${menuOptions}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Quantity</label>
                        <input type="number" name="order_items[${index}][quantity]" class="form-control quantity-input" value="1" min="1" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Addons</label>
                        <select name="order_items[${index}][addons][]" class="form-select addon-select" multiple>
                        </select>
                        <small class="text-muted addon-info">Select a food item to see available addons</small>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Special Instructions</label>
                        <textarea name="order_items[${index}][special_instructions]" class="form-control" rows="2" placeholder="Optional"></textarea>
                    </div>
                    <div class="col-md-1">
                        <label class="form-label">&nbsp;</label>
                        <button type="button" class="btn btn-danger btn-sm d-block remove-item">
                            <i class="ri-delete-bin-line"></i>
                        </button>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="text-end">
                            <strong>Item Total: $<span class="item-total">0.00</span></strong>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    function updateItemDetails(row) {
        const select = row.querySelector('.item-select');
        const selectedOption = select.selectedOptions[0];
        const image = row.querySelector('.item-image img');
        const addonSelect = row.querySelector('.addon-select');
        const addonInfo = row.querySelector('.addon-info');
        
        if (selectedOption && selectedOption.value) {
            const price = parseFloat(selectedOption.dataset.price);
            const imageUrl = selectedOption.dataset.image;
            const addonsData = JSON.parse(selectedOption.dataset.addons || '[]');
            
            image.src = imageUrl || '{{ asset("images/placeholder-menu.png") }}';
            
            // Clear existing addon options
            addonSelect.innerHTML = '';
            
            // Add addons for this specific menu
            if (addonsData && addonsData.length > 0) {
                addonInfo.textContent = 'Select addons for this item';
                addonsData.forEach(addon => {
                    const price = addon.price > 0 ? `$${parseFloat(addon.price).toFixed(2)}` : 'Free';
                    addonSelect.innerHTML += `<option value="${addon.id}" data-price="${addon.price}">${addon.name} (${price})</option>`;
                });
            } else {
                addonInfo.textContent = 'No addons available for this item';
            }
            
            updateItemTotal(row);
        } else {
            image.src = '{{ asset("images/placeholder-menu.png") }}';
            addonSelect.innerHTML = '';
            addonInfo.textContent = 'Select a food item to see available addons';
            row.querySelector('.item-total').textContent = '0.00';
        }
    }

    function updateItemTotal(row) {
        const select = row.querySelector('.item-select');
        const quantityInput = row.querySelector('.quantity-input');
        const addonSelect = row.querySelector('.addon-select');
        const totalSpan = row.querySelector('.item-total');

        const selectedOption = select.selectedOptions[0];
        if (!selectedOption || !selectedOption.value) {
            totalSpan.textContent = '0.00';
            return;
        }

        let itemPrice = parseFloat(selectedOption.dataset.price);
        const quantity = parseInt(quantityInput.value) || 1;

        // Calculate addon prices
        let addonTotal = 0;
        if (addonSelect.selectedOptions.length > 0) {
            Array.from(addonSelect.selectedOptions).forEach(option => {
                addonTotal += parseFloat(option.dataset.price) || 0;
            });
        }

        const itemTotal = (itemPrice + addonTotal) * quantity;
        totalSpan.textContent = itemTotal.toFixed(2);
    }

    function updateOrderTotal() {
        const itemTotals = document.querySelectorAll('.item-total');
        let total = 0;
        itemTotals.forEach(totalSpan => {
            total += parseFloat(totalSpan.textContent) || 0;
        });
        document.getElementById('order-total').textContent = total.toFixed(2);
    }

    function reindexItems() {
        const rows = document.querySelectorAll('.order-item-row');
        rows.forEach((row, index) => {
            row.setAttribute('data-item-index', index);
            const inputs = row.querySelectorAll('input, select, textarea');
            inputs.forEach(input => {
                const name = input.name;
                if (name) {
                    const newName = name.replace(/order_items\[\d+\]/, `order_items[${index}]`);
                    input.name = newName;
                }
            });
        });
    }

    // Initialize totals on page load
    updateOrderTotal();
});
</script>
@endpush
