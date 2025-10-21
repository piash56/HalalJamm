@extends('layouts.vertical', ['title' => 'Orders'])

@section('content')
     <div class="row">
           <div class="col-md-6 col-xl-3">
                 <div class="card card-full-height">
                       <div class="card-body ">
                              <div class="d-flex align-items-center gap-3">
                                    <img src="/images/food-icon/i-2.png" alt="" class="img-fluid">
                                    <div>
                                          <p class="text-dark fw-semibold fs-26 mb-1">{{ $totalOrders }}</p>
                                          <p class="card-title mb-0">Total Orders</p>
                                    </div>
                                    <div class="ms-auto">
                                          <a href="{{ route('admin.orders.index', ['status' => 'all']) }}" class="btn btn-primary avatar-sm rounded-circle d-flex align-items-center justify-content-center filter-btn {{ $currentStatus === 'all' ? 'active' : '' }}" data-status="all"><i class="ri-eye-line align-middle fs-16 text-white"></i></a>
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>

           <div class="col-md-6 col-xl-3">
                  <div class="card card-full-height">
                        <div class="card-body ">
                         <div class="d-flex align-items-center gap-3">
                               <img src="/images/food-icon/i-8.png" alt="" class="img-fluid">
                               <div>
                                     <p class="text-dark fw-semibold fs-26 mb-1">{{ $pendingOrders }}</p>
                                     <p class="card-title mb-0">Pending Orders</p>
                               </div>
                               <div class="ms-auto">
                                     <a href="{{ route('admin.orders.index', ['status' => 'pending']) }}" class="btn btn-primary avatar-sm rounded-circle d-flex align-items-center justify-content-center filter-btn {{ $currentStatus === 'pending' ? 'active' : '' }}" data-status="pending"><i class="ri-eye-line align-middle fs-16 text-white"></i></a>
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>

           <div class="col-md-6 col-xl-3">
                 <div class="card card-full-height">
                       <div class="card-body ">
                              <div class="d-flex align-items-center gap-3">
                                    <img src="/images/food-icon/i-3.png" alt="" class="img-fluid">
                                    <div>
                                          <p class="text-dark fw-semibold fs-26 mb-1">{{ $cancelledOrders }}</p>
                                          <p class="card-title mb-0">Cancelled</p>
                                    </div>
                                    <div class="ms-auto">
                                          <a href="{{ route('admin.orders.index', ['status' => 'cancelled']) }}" class="btn btn-primary avatar-sm rounded-circle d-flex align-items-center justify-content-center filter-btn {{ $currentStatus === 'cancelled' ? 'active' : '' }}" data-status="cancelled"><i class="ri-eye-line align-middle fs-16 text-white"></i></a>
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>

           <div class="col-md-6 col-xl-3">
                 <div class="card card-full-height">
                       <div class="card-body ">
                              <div class="d-flex align-items-center gap-3">
                                    <img src="/images/food-icon/i-1.png" alt="" class="img-fluid">
                                    <div>
                                          <p class="text-dark fw-semibold fs-26 mb-1">{{ $confirmedOrders }}</p>
                                          <p class="card-title mb-0">Confirm</p>
                                    </div>
                                    <div class="ms-auto">
                                          <a href="{{ route('admin.orders.index', ['status' => 'confirmed']) }}" class="btn btn-primary avatar-sm rounded-circle d-flex align-items-center justify-content-center filter-btn {{ $currentStatus === 'confirmed' ? 'active' : '' }}" data-status="confirmed"><i class="ri-eye-line align-middle fs-16 text-white"></i></a>
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>

           <div class="col-md-6 col-xl-3">
                 <div class="card card-full-height">
                       <div class="card-body">
                              <div class="d-flex align-items-center gap-3">
                                    <img src="/images/food-icon/i-4.png" alt="" class="img-fluid">
                                    <div>
                                          <p class="text-dark fw-semibold fs-26 mb-1">{{ $preparingOrders }}</p>
                                          <p class="card-title mb-0">Preparing </p>
                                    </div>
                                    <div class="ms-auto">
                                          <a href="{{ route('admin.orders.index', ['status' => 'preparing']) }}" class="btn btn-primary avatar-sm rounded-circle d-flex align-items-center justify-content-center filter-btn {{ $currentStatus === 'preparing' ? 'active' : '' }}" data-status="preparing"><i class="ri-eye-line align-middle fs-16 text-white"></i></a>
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>

           <div class="col-md-6 col-xl-3">
                 <div class="card card-full-height">
                       <div class="card-body ">
                              <div class="d-flex align-items-center gap-3">
                                    <img src="/images/food-icon/i-5.png" alt="" class="img-fluid">
                                    <div>
                                          <p class="text-dark fw-semibold fs-26 mb-1">{{ $readyOrders }}</p>
                                          <p class="card-title mb-0">Ready For Delivery</p>
                                    </div>
                                    <div class="ms-auto">
                                          <a href="{{ route('admin.orders.index', ['status' => 'ready_for_delivery']) }}" class="btn btn-primary avatar-sm rounded-circle d-flex align-items-center justify-content-center filter-btn {{ $currentStatus === 'ready_for_delivery' ? 'active' : '' }}" data-status="ready_for_delivery"><i class="ri-eye-line align-middle fs-16 text-white"></i></a>
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>

           <div class="col-md-6 col-xl-3">
                 <div class="card card-full-height">
                       <div class="card-body ">
                              <div class="d-flex align-items-center gap-3">
                                    <img src="/images/food-icon/i-6.png" alt="" class="img-fluid">
                                    <div>
                                          <p class="text-dark fw-semibold fs-26 mb-1">{{ $outForDelivery }}</p>
                                          <p class="card-title mb-0">Order On Its Way</p>
                                    </div>
                                    <div class="ms-auto">
                                          <a href="{{ route('admin.orders.index', ['status' => 'out_for_delivery']) }}" class="btn btn-primary avatar-sm rounded-circle d-flex align-items-center justify-content-center filter-btn {{ $currentStatus === 'out_for_delivery' ? 'active' : '' }}" data-status="out_for_delivery"><i class="ri-eye-line align-middle fs-16 text-white"></i></a>
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>

           <div class="col-md-6 col-xl-3">
                 <div class="card card-full-height">
                       <div class="card-body ">
                              <div class="d-flex align-items-center gap-3">
                                    <img src="/images/food-icon/i-9.png" alt="" class="img-fluid">
                                    <div>
                                          <p class="text-dark fw-semibold fs-26 mb-1">{{ $deliveredOrders }}</p>
                                          <p class="card-title mb-0">Delivered Order</p>
                                    </div>
                                    <div class="ms-auto">
                                          <a href="{{ route('admin.orders.index', ['status' => 'delivered']) }}" class="btn btn-primary avatar-sm rounded-circle d-flex align-items-center justify-content-center filter-btn {{ $currentStatus === 'delivered' ? 'active' : '' }}" data-status="delivered"><i class="ri-eye-line align-middle fs-16 text-white"></i></a>
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>
     </div>

     <div class="row">
           <div class="col-xl-12">
                 <div class="card">
                       <div class="card-header d-flex justify-content-between align-items-center">
                              <div>
                                    <p class="card-title mb-0">Orders Summary</p>
                              </div>
                              <div class="d-flex gap-3">
                                    <a href="#!" class="btn btn-sm btn-primary">Create Order</a>
                                    <div class="dropdown">
                                          <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown" aria-expanded="false">
                                                Reports
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="#!" class="dropdown-item">Export</a>
                                                <!-- item-->
                                                <a href="#!" class="dropdown-item">Import</a>
                                          </div>
                                    </div>
                              </div>
                       </div>
                       <div class="">
                              <div class="table-responsive">
                                    <table class="table align-middle mb-0 table-hover table-centered">
                                          <thead class="bg-light-subtle fs-12 text-uppercase">
                                                <tr>
                                                       <th>Order No.</th>
                                                       <th>Customer</th>
                                                       <th>Items Name</th>
                                                       <th>Quantity</th>
                                                       <th>Price Per Item</th>
                                                       <th>Total Price</th>
                                                       <th>Payment Method</th>
                                                       <th>Order Date & Time</th>
                                                       <th>Status</th>
                                                       <th>Actions</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                @forelse($orders as $order)
                                                <tr>
                                                       <td>{{ $order->order_number }}</td>
                                                       <td>
                                                             <span class="link-primary fw-medium">{{ $order->full_name }}</span>
                                                       </td>
                                                       <td>
                                                             @foreach($order->orderItems as $index => $item)
                                                                   <p class="{{ $index < count($order->orderItems) - 1 ? 'mb-1' : 'mb-0' }}">
                                                                          <span class="fw-semibold text-dark me-1">{{ $index + 1 }}.</span>{{ $item->food_name }}
                                                                   </p>
                                                             @endforeach
                                                       </td>
                                                       <td>
                                                             @foreach($order->orderItems as $index => $item)
                                                                   <p class="{{ $index < count($order->orderItems) - 1 ? 'mb-1' : 'mb-0' }}">{{ $item->quantity }}</p>
                                                             @endforeach
                                                       </td>
                                                       <td>
                                                             @foreach($order->orderItems as $index => $item)
                                                                   @php
                                                                          $itemPrice = $item->food_price;
                                                                          if ($item->addons && is_array($item->addons)) {
                                                                               foreach($item->addons as $addon) {
                                                                                    $itemPrice += $addon['price'];
                                                                               }
                                                                          }
                                                                   @endphp
                                                                   <p class="{{ $index < count($order->orderItems) - 1 ? 'mb-1' : 'mb-0' }}">${{ number_format($itemPrice, 2) }}</p>
                                                             @endforeach
                                                       </td>
                                                       <td>${{ number_format($order->total, 2) }}</td>
                                                       <td>
                                                             @if($order->payment_method === 'cash_on_delivery')
                                                                   <span class="text-warning">COD <i class="ri-restart-line text-warning"></i></span>
                                                             @else
                                                                   {{ ucfirst(str_replace('_', ' ', $order->payment_method)) }}
                                                             @endif
                                                       </td>
                                                       <td>{{ $order->created_at->setTimezone('America/New_York')->format('M j, Y, g:i a') }}</td>
                                                       <td>
                                                             <div class="dropdown">
                                                                   <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <span class="status-text">{{ $order->status_display }}</span>
                                                                   </button>
                                                                   <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item status-link" href="#" data-status="pending" data-order-id="{{ $order->id }}" onclick="updateOrderStatus({{ $order->id }}, 'pending'); return false;">Pending</a></li>
                                                                        <li><a class="dropdown-item status-link" href="#" data-status="confirmed" data-order-id="{{ $order->id }}" onclick="updateOrderStatus({{ $order->id }}, 'confirmed'); return false;">Confirmed</a></li>
                                                                        <li><a class="dropdown-item status-link" href="#" data-status="preparing" data-order-id="{{ $order->id }}" onclick="updateOrderStatus({{ $order->id }}, 'preparing'); return false;">Preparing</a></li>
                                                                        <li><a class="dropdown-item status-link" href="#" data-status="ready_for_delivery" data-order-id="{{ $order->id }}" onclick="updateOrderStatus({{ $order->id }}, 'ready_for_delivery'); return false;">Ready For Delivery</a></li>
                                                                        <li><a class="dropdown-item status-link" href="#" data-status="out_for_delivery" data-order-id="{{ $order->id }}" onclick="updateOrderStatus({{ $order->id }}, 'out_for_delivery'); return false;">Out For Delivery</a></li>
                                                                        <li><a class="dropdown-item status-link" href="#" data-status="delivered" data-order-id="{{ $order->id }}" onclick="updateOrderStatus({{ $order->id }}, 'delivered'); return false;">Delivered</a></li>
                                                                        <li><a class="dropdown-item status-link" href="#" data-status="cancelled" data-order-id="{{ $order->id }}" onclick="updateOrderStatus({{ $order->id }}, 'cancelled'); return false;">Cancelled</a></li>
                                                                   </ul>
                                                             </div>
                                                       </td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="{{ route('admin.order.view', $order) }}" class="text-muted" title="View Order"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="{{ route('admin.order.edit', $order) }}" class="link-dark" title="Edit Order"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#" class="link-danger" title="Delete Order" onclick="deleteOrder({{ $order->id }}, '{{ $order->order_number }}'); return false;"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                       <td colspan="10" class="text-center py-4">
                                                             <p class="mb-0 text-muted">No orders found.</p>
                                                       </td>
                                                </tr>
                                                @endforelse
                                          </tbody>
                                    </table>
                              </div>
                              <!-- end table-responsive -->
                       </div>
                       <div class="card-footer border-0">
                              @if($orders->hasPages())
                              <nav aria-label="Page navigation example">
                                    {{ $orders->links() }}
                              </nav>
                              @endif
                       </div>
                 </div>
           </div>

     </div>

     <!-- Delete Confirmation Modal -->
     <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
          <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <p>Are you sure you want to delete this order "<span id="orderNumber"></span>"?</p>
                         <p class="text-muted small">This action cannot be undone.</p>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                         <button type="button" class="btn btn-danger" id="confirmDelete">Delete Order</button>
                    </div>
               </div>
          </div>
     </div>

     <!-- Status Update Confirmation Modal -->
     <div class="modal fade" id="statusUpdateModal" tabindex="-1" aria-labelledby="statusUpdateModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
          <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title" id="statusUpdateModalLabel">Confirm Status Change</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <p>Are you sure you want to change the order status to "<span id="newStatus"></span>"?</p>
                         <p class="text-muted small">Order ID: <span id="statusOrderNumber"></span></p>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                         <button type="button" class="btn btn-primary" id="confirmStatusUpdate">Update Status</button>
                    </div>
               </div>
          </div>
     </div>
@endsection

@push('styles')
<style>
.filter-btn.active {
     background-color: #28a745 !important;
     border-color: #28a745 !important;
}
</style>
@endpush

@push('scripts')
<script>
// Toast notification function
function showToast(message, type = 'success') {
     const toastHtml = `
          <div class="toast align-items-center text-white bg-${type === 'success' ? 'success' : 'danger'} border-0" role="alert" aria-live="assertive" aria-atomic="true">
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

// Global variables for order management
let orderToDelete = null;
let statusUpdateOrderId = null;
let statusUpdateNewStatus = null;

// Delete order function (similar to foods listing)
function deleteOrder(orderId, orderNumber) {
     console.log('deleteOrder called with:', orderId, orderNumber);
     orderToDelete = orderId;
     document.getElementById('orderNumber').textContent = orderNumber;
     
     // Prevent scroll to top
     event.preventDefault();
     
     // Show modal with proper centering
     const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'), {
          backdrop: 'static',
          keyboard: false
     });
     deleteModal.show();
}

// Status update function
function updateOrderStatus(orderId, newStatus) {
     console.log('updateOrderStatus called with:', orderId, newStatus);
     statusUpdateOrderId = orderId;
     statusUpdateNewStatus = newStatus;
     
     // Find the order number for display
     const statusLink = document.querySelector(`[data-order-id="${orderId}"][data-status="${newStatus}"]`);
     const row = statusLink.closest('tr');
     const orderNumberCell = row.querySelector('td:first-child');
     document.getElementById('statusOrderNumber').textContent = orderNumberCell.textContent;
     
     // Format status for display
     const statusDisplay = newStatus.replace(/_/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
     document.getElementById('newStatus').textContent = statusDisplay;
     
     // Show confirmation modal
     const statusModal = new bootstrap.Modal(document.getElementById('statusUpdateModal'));
     statusModal.show();
}

document.addEventListener('DOMContentLoaded', function() {
     
     // Handle confirm delete
     document.getElementById('confirmDelete').addEventListener('click', function() {
          if (orderToDelete) {
               // Show loading state
               this.disabled = true;
               this.innerHTML = '<i class="ri-loader-4-line ri-spin"></i> Deleting...';
               
               fetch(`/admin/order/${orderToDelete}`, {
                    method: 'DELETE',
                    headers: {
                         'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                         'Content-Type': 'application/json',
                    },
               })
               .then(response => response.json())
               .then(data => {
                    if (data.success) {
                         // Hide modal first
                         const deleteModalElement = document.getElementById('deleteModal');
                         const deleteModal = bootstrap.Modal.getInstance(deleteModalElement);
                         if (deleteModal) {
                              deleteModal.hide();
                         }
                         // Show success toast message
                         showToast('Order deleted successfully!', 'success');
                         // Reload page immediately to refresh the table
                         setTimeout(() => {
                              window.location.reload();
                         }, 1000);
                    } else {
                         showToast('Failed to delete order: ' + (data.message || 'Unknown error'), 'danger');
                    }
               })
               .catch(error => {
                    console.error('Error:', error);
                    showToast('An error occurred while deleting the order.', 'danger');
               })
               .finally(() => {
                    // Re-enable button and reset text (only if there was an error and modal is still open)
                    const deleteButton = document.getElementById('confirmDelete');
                    if (deleteButton) {
                         deleteButton.disabled = false;
                         deleteButton.innerHTML = 'Delete Order';
                    }
               });
          }
     });
     
     // Handle confirm status update
     document.getElementById('confirmStatusUpdate').addEventListener('click', function() {
          if (statusUpdateOrderId && statusUpdateNewStatus) {
               // Show loading state
               this.disabled = true;
               this.innerHTML = '<i class="ri-loader-4-line ri-spin"></i> Updating...';
               
               fetch(`/admin/order/${statusUpdateOrderId}`, {
                    method: 'PUT',
                    headers: {
                         'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                         'Content-Type': 'application/json',
                         'X-Requested-With': 'XMLHttpRequest',
                         'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                         status: statusUpdateNewStatus
                    })
               })
               .then(response => response.json())
               .then(data => {
                    if (data.success) {
                         // Update the original value for future changes
                         const select = document.querySelector(`[data-order-id="${statusUpdateOrderId}"]`);
                         if (select) {
                              select.dataset.originalValue = statusUpdateNewStatus;
                         }
                         
                         // Hide modal first
                         const statusModalElement = document.getElementById('statusUpdateModal');
                         const statusModal = bootstrap.Modal.getInstance(statusModalElement);
                         if (statusModal) {
                              statusModal.hide();
                         }
                         // Show success toast message
                         showToast('Order status updated successfully!', 'success');
                         // Reload page to refresh
                         setTimeout(() => {
                              window.location.reload();
                         }, 1000);
                    } else {
                         showToast('Failed to update order status: ' + (data.message || 'Unknown error'), 'danger');
                         // Revert the select value
                         const select = document.querySelector(`[data-order-id="${statusUpdateOrderId}"]`);
                         if (select) {
                              select.value = originalStatus;
                         }
                    }
               })
               .catch(error => {
                    console.error('Error:', error);
                    showToast('An error occurred while updating the order status.', 'danger');
                    // Revert the select value
                    const select = document.querySelector(`[data-order-id="${statusUpdateOrderId}"]`);
                    if (select) {
                         select.value = originalStatus;
                    }
               })
               .finally(() => {
                    // Re-enable button and reset text
                    const updateButton = document.getElementById('confirmStatusUpdate');
                    if (updateButton) {
                         updateButton.disabled = false;
                         updateButton.innerHTML = 'Update Status';
                    }
               });
          }
     });
});
</script>
@endpush