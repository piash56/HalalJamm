@extends('layouts.vertical', ['title' => 'Reviews Management'])

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Reviews Management</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Reviews</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">All Reviews</h4>
                                <a href="{{ route('admin.reviews.create') }}" class="btn btn-primary">
                                    <i class="ri-add-line"></i> Add Review
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Rating</th>
                                            <th>Review Date</th>
                                            <th>Status</th>
                                            <th>Sort Order</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($reviews as $review)
                                        <tr>
                                            <td>{{ $review->id }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    @if($review->image)
                                                        <img src="{{ $review->image_url }}" alt="{{ $review->name }}" class="rounded-circle me-2" width="40" height="40">
                                                    @else
                                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 40px; height: 40px;">
                                                            {{ substr($review->name, 0, 1) }}
                                                        </div>
                                                    @endif
                                                    {{ $review->name }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    @for($i = 1; $i <= 5; $i++)
                                                        @if($i <= $review->rating)
                                                            <i class="ri-star-fill text-warning"></i>
                                                        @else
                                                            <i class="ri-star-line text-muted"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                            </td>
                                            <td>{{ $review->review_date->format('M d, Y') }}</td>
                                            <td>
                                                <span class="badge {{ $review->is_active ? 'bg-success' : 'bg-danger' }}">
                                                    {{ $review->is_active ? 'Active' : 'Inactive' }}
                                                </span>
                                            </td>
                                            <td>{{ $review->sort_order }}</td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a href="{{ route('admin.reviews.edit', $review) }}" class="btn btn-sm btn-outline-primary">
                                                        <i class="ri-edit-line"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-sm btn-outline-danger" title="Delete" onclick="deleteReview({{ $review->id }}, '{{ $review->name }}'); return false;">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="7" class="text-center">No reviews found.</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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
                <p>Are you sure you want to delete the review from "<span id="reviewName"></span>"?</p>
                <p class="text-muted small">This action cannot be undone.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDelete">Delete Review</button>
            </div>
        </div>
    </div>
</div>

<script>
let reviewToDelete = null;

function deleteReview(reviewId, reviewName) {
    reviewToDelete = reviewId;
    document.getElementById('reviewName').textContent = reviewName;
    
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
    if (reviewToDelete) {
        // Show loading state
        this.disabled = true;
        this.innerHTML = '<i class="ri-loader-4-line ri-spin"></i> Deleting...';
        
        // Send delete request
        fetch(`/admin/reviews/${reviewToDelete}`, {
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
                showAlert('error', 'Failed to delete review. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showAlert('error', 'An error occurred while deleting the review.');
        })
        .finally(() => {
            // Re-enable button and reset text (only if there was an error and modal is still open)
            const deleteButton = document.getElementById('confirmDelete');
            if (deleteButton) {
                deleteButton.disabled = false;
                deleteButton.innerHTML = 'Delete Review';
            }
        });
    }
});

// Helper function to show alerts
function showAlert(type, message) {
    const alertContainer = document.querySelector('.alert-success');
    if (alertContainer) {
        alertContainer.classList.remove('alert-success', 'alert-danger');
        alertContainer.classList.add(`alert-${type}`);
        alertContainer.querySelector('i').className = type === 'success' ? 'bx bx-check-circle me-2' : 'bx bx-error-circle me-2';
        alertContainer.querySelector('span').textContent = message;
        alertContainer.style.display = 'block';
    }
}
</script>
@endsection
