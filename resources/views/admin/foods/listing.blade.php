@extends('layouts.vertical', ['title' => 'Foods List'])

@section('content')
     @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
               <i class="bx bx-check-circle me-2"></i>
               {{ session('success') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
     @endif
     <div class="row">
           <div class="col-xl-12">
                 <div class="card">
                       <div class="card-header d-flex justify-content-between align-items-center">
                              <div>
                                    <p class="card-title mb-0">Total Foods ({{ $menus->total() }})</p>
                              </div>
                              <div class="d-flex gap-2">
                                    <a href="{{ route('admin.foods.add') }}" class="btn btn-primary">
                                          <i class="ri-add-line me-1"></i> Add Food
                                    </a>
                              </div>
                       </div>
                       <div class="card-body">
                              <!-- Search form -->
                              <form method="GET" action="{{ route('admin.foods.index') }}" class="mb-4">
                                   <div class="row">
                                        <div class="col-md-4">
                                             <div class="input-group">
                                                  <input type="text" name="search" id="searchInput" class="form-control" placeholder="Search foods..." value="{{ request('search') }}">
                                                  <button class="btn btn-outline-secondary" type="submit">
                                                       <i class="ri-search-line"></i>
                                                  </button>
                                             </div>
                                        </div>
                                   </div>
                              </form>
                              
                              <div class="table-responsive">
                                    <table class="table align-middle mb-0 table-hover table-centered">
                                          <thead class="bg-light-subtle">
                                                <tr>
                                                       <th>#</th>
                                                       <th>Image</th>
                                                       <th>Name</th>
                                                       <th>Category</th>
                                                       <th>Price</th>
                                                       <th>Status</th>
                                                       <th>Created</th>
                                                       <th>Action</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                @forelse($menus as $index => $menu)
                                                <tr>
                                                       <td>#{{ $menus->firstItem() + $index }}</td>
                                                       <td>
                                                             <img src="{{ $menu->image_url }}" alt="{{ $menu->name }}" class="rounded" style="width: 50px; height: 50px; object-fit: cover;" onerror="this.src='{{ asset('images/placeholder-menu.png') }}'">
                                                       </td>
                                                       <td><a href="{{ route('admin.food.edit', $menu) }}" class="fw-semibold link-primary fs-15">{{ $menu->name }}</a></td>
                                                       <td>
                                                             <span class="badge bg-info-subtle border border-info text-info px-2 py-1 fs-11">
                                                                   {{ $menu->category->name }}
                                                             </span>
                                                       </td>
                                                       <td>
                                                             <strong class="text-success">${{ number_format($menu->price, 2) }}</strong>
                                                       </td>
                                                       <td>
                                                             @if($menu->status == 'active')
                                                                   <span class="badge bg-success-subtle border border-success text-success px-2 py-1 fs-11">Active</span>
                                                             @else
                                                                   <span class="badge bg-danger-subtle border border-danger text-danger px-2 py-1 fs-11">Inactive</span>
                                                             @endif
                                                       </td>
                                                       <td>
                                                             <small class="text-muted">{{ $menu->created_at->format('M d, Y') }}</small>
                                                       </td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="{{ route('admin.food.edit', $menu) }}" class="link-dark" title="Edit"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#" class="link-danger" title="Delete" onclick="deleteFood({{ $menu->id }}, '{{ $menu->name }}'); return false;"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                       <td colspan="8" class="text-center py-4">
                                                             <div class="text-muted">
                                                                   <i class="ri-inbox-line fs-48 d-block mb-2"></i>
                                                                   <p class="mb-0">No foods found. <a href="{{ route('admin.foods.add') }}">Add your first food item</a></p>
                                                             </div>
                                                       </td>
                                                </tr>
                                                @endforelse
                                          </tbody>
                                    </table>
                              </div>
                       </div>
                       @if($menus->hasPages())
                       <div class="card-footer border-0">
                              {{ $menus->appends(request()->query())->links('pagination::bootstrap-4') }}
                       </div>
                       @endif
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
                         <p>Are you sure you want to delete the food item "<span id="foodName"></span>"?</p>
                         <p class="text-muted small">This action cannot be undone.</p>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                         <button type="button" class="btn btn-danger" id="confirmDelete">Delete Food</button>
                    </div>
               </div>
          </div>
     </div>
@endsection

@section('scripts')
     <script>
          let foodToDelete = null;

          function deleteFood(foodId, foodName) {
               foodToDelete = foodId;
               document.getElementById('foodName').textContent = foodName;
               
               // Prevent scroll to top
               event.preventDefault();
               
               // Show modal with proper centering
               const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'), {
                    backdrop: 'static',
                    keyboard: false
               });
               deleteModal.show();
          }

          document.getElementById('confirmDelete').addEventListener('click', function() {
               if (foodToDelete) {
                    // Show loading state
                    this.disabled = true;
                    this.innerHTML = '<i class="ri-loader-4-line ri-spin"></i> Deleting...';
                    
                    // Send delete request
                    fetch(`/admin/food/${foodToDelete}`, {
                         method: 'DELETE',
                         headers: {
                              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                              'Content-Type': 'application/json',
                         }
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
                              // Reload page immediately to refresh the table
                              window.location.reload();
                         } else {
                              showAlert('error', 'Failed to delete food item. Please try again.');
                         }
                    })
                    .catch(error => {
                         console.error('Error:', error);
                         showAlert('error', 'An error occurred while deleting the food item.');
                    })
                    .finally(() => {
                         // Re-enable button and reset text (only if there was an error and modal is still open)
                         const deleteButton = document.getElementById('confirmDelete');
                         if (deleteButton) {
                              deleteButton.disabled = false;
                              deleteButton.innerHTML = 'Delete Food';
                         }
                    });
               }
          });

          // Helper function to show alerts (assuming you have one)
          function showAlert(type, message) {
               const alertContainer = document.querySelector('.alert-success');
               if (alertContainer) {
                    alertContainer.classList.remove('alert-success', 'alert-danger');
                    alertContainer.classList.add(`alert-${type}`);
                    alertContainer.querySelector('i').className = type === 'success' ? 'bx bx-check-circle me-2' : 'bx bx-error-circle me-2';
                    alertContainer.querySelector('span').innerText = message;
                    alertContainer.style.display = 'block';
                    setTimeout(() => {
                         alertContainer.style.display = 'none';
                    }, 3000);
               } else {
                    alert(message); // Fallback to browser alert
               }
          }
     </script>
@endsection
