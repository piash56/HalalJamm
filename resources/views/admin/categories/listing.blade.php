@extends('layouts.vertical', ['title' => 'Categories List'])

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
                                    <p class="card-title mb-0">Total Categories ({{ $categories->count() }})</p>
                              </div>
                              <div class="d-flex gap-2">
                                    <a href="{{ route('admin.categories.add') }}" class="btn btn-primary">
                                          <i class="ri-add-line me-1"></i> Add Category
                                    </a>
                              </div>
                       </div>
                       <div class="">
                              <div class="table-responsive">
                                    <table class="table align-middle mb-0 table-hover table-centered">
                                          <thead class="bg-light-subtle">
                                                <tr>
                                                       <th>ID</th>
                                                       <th>Image</th>
                                                       <th>Name</th>
                                                       <th>Menu Items</th>
                                                       <th>Sort Order</th>
                                                       <th>Status</th>
                                                       <th>Created</th>
                                                       <th>Action</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                @forelse($categories as $index => $category)
                                                <tr>
                                                       <td>#{{ $categories->firstItem() + $index }}</td>
                                                       <td>
                                                             <img src="{{ $category->image_url }}" alt="{{ $category->name }}" class="rounded" style="width: 50px; height: 50px; object-fit: cover;" onerror="this.src='{{ asset('images/placeholder-category.png') }}'">
                                                       </td>
                                                       <td><a href="{{ route('admin.category.edit', $category) }}" class="fw-semibold link-primary fs-15">{{ $category->name }}</a></td>
                                                       <td>
                                                             <span class="badge bg-info-subtle border border-info text-info px-2 py-1 fs-11">
                                                                   {{ $category->menus->count() }} items
                                                             </span>
                                                       </td>
                                                       <td>{{ $category->sort_order }}</td>
                                                       <td>
                                                             @if($category->status == 'active')
                                                                   <span class="badge bg-success-subtle border border-success text-success px-2 py-1 fs-11">Active</span>
                                                             @else
                                                                   <span class="badge bg-danger-subtle border border-danger text-danger px-2 py-1 fs-11">Inactive</span>
                                                             @endif
                                                       </td>
                                                       <td>
                                                             <small class="text-muted">{{ $category->created_at->format('M d, Y') }}</small>
                                                       </td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="{{ route('admin.category.edit', $category) }}" class="link-dark" title="Edit"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#" class="link-danger" title="Delete" onclick="deleteCategory({{ $category->id }}, '{{ $category->name }}'); return false;"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                       <td colspan="8" class="text-center py-4">
                                                             <div class="text-muted">
                                                                   <i class="ri-inbox-line fs-48 d-block mb-2"></i>
                                                                   <p class="mb-0">No categories found. <a href="{{ route('admin.categories.add') }}">Add your first category</a></p>
                                                             </div>
                                                       </td>
                                                </tr>
                                                @endforelse
                                          </tbody>
                                    </table>
                              </div>
                       @if($categories->hasPages())
                       <div class="card-footer border-0">
                              {{ $categories->links('pagination::bootstrap-4') }}
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
                         <p>Are you sure you want to delete the category "<span id="categoryName"></span>"?</p>
                         <p class="text-muted small">This action cannot be undone.</p>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                         <button type="button" class="btn btn-danger" id="confirmDelete">Delete Category</button>
                    </div>
               </div>
          </div>
     </div>
@endsection

@section('scripts')
<script>
let categoryToDelete = null;

function deleteCategory(categoryId, categoryName) {
     categoryToDelete = categoryId;
     document.getElementById('categoryName').textContent = categoryName;
     
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
     if (categoryToDelete) {
          // Show loading state
          this.disabled = true;
          this.innerHTML = '<i class="ri-loader-4-line ri-spin"></i> Deleting...';
          
          // Send delete request
          fetch(`/admin/category/${categoryToDelete}`, {
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
                    // Show success toast message
                    showToast('Category deleted successfully!', 'success');
                    // Reload page immediately to refresh the table
                    setTimeout(() => {
                         window.location.reload();
                    }, 1000);
               } else {
                    showToast('Failed to delete category: ' + (data.message || 'Unknown error'), 'danger');
               }
          })
          .catch(error => {
               console.error('Error:', error);
               showToast('An error occurred while deleting the category.', 'danger');
          })
          .finally(() => {
               // Reset button state
               this.disabled = false;
               this.innerHTML = 'Delete Category';
          });
     }
});

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
</script>
@endsection