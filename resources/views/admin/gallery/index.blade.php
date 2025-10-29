@extends('layouts.vertical', ['title' => 'Gallery Management'])

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
                                    <p class="card-title mb-0">Gallery Images ({{ $galleries->count() }})</p>
                              </div>
                              <div class="d-flex gap-2">
                                    <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary">
                                          <i class="ri-add-line me-1"></i> Add Image
                                    </a>
                              </div>
                       </div>
                       <div class="card-body">
                              <div class="row" id="sortable-gallery">
                                   @forelse($galleries as $index => $gallery)
                                   <div class="col-xl-3 col-lg-4 col-md-6 mb-4" data-id="{{ $gallery->id }}">
                                        <div class="card h-100">
                                             <div class="position-relative">
                                                  <img src="{{ $gallery->image_url }}" alt="{{ $gallery->title }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                                                  <div class="position-absolute top-0 end-0 p-2">
                                                       @if($gallery->is_featured)
                                                            <span class="badge bg-warning">Featured</span>
                                                       @endif
                                                       @if($gallery->is_active)
                                                            <span class="badge bg-success">Active</span>
                                                       @else
                                                            <span class="badge bg-danger">Inactive</span>
                                                       @endif
                                                  </div>
                                             </div>
                                             <div class="card-body">
                                                  <h6 class="card-title">{{ $gallery->title ?: 'Untitled' }}</h6>
                                                  @if($gallery->description)
                                                       <p class="card-text small text-muted">{{ Str::limit($gallery->description, 50) }}</p>
                                                  @endif
                                                  <div class="d-flex justify-content-between align-items-center">
                                                       <small class="text-muted">Order: {{ $gallery->sort_order }}</small>
                                                       <div class="btn-group btn-group-sm">
                                                            <a href="{{ route('admin.gallery.edit', $gallery) }}" class="btn btn-outline-primary">
                                                                 <i class="ri-edit-line"></i>
                                                            </a>
                                                            <form action="{{ route('admin.gallery.destroy', $gallery) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this image?')">
                                                                 @csrf
                                                                 @method('DELETE')
                                                                 <button type="submit" class="btn btn-outline-danger">
                                                                      <i class="ri-delete-bin-line"></i>
                                                                 </button>
                                                            </form>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   @empty
                                   <div class="col-12">
                                        <div class="text-center py-5">
                                             <i class="ri-image-line fs-48 text-muted"></i>
                                             <p class="text-muted mt-2">No gallery images found</p>
                                             <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary">Add First Image</a>
                                        </div>
                                   </div>
                                   @endforelse
                              </div>
                       </div>
                 </div>
           </div>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
     <script>
          document.addEventListener('DOMContentLoaded', function() {
               const sortable = Sortable.create(document.getElementById('sortable-gallery'), {
                    animation: 150,
                    onEnd: function(evt) {
                         const items = Array.from(document.querySelectorAll('#sortable-gallery .col-xl-3')).map((item, index) => ({
                              id: item.dataset.id,
                              sort_order: index
                         }));
                         
                         fetch('{{ route("admin.gallery.update-order") }}', {
                              method: 'POST',
                              headers: {
                                   'Content-Type': 'application/json',
                                   'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                              },
                              body: JSON.stringify({ items: items })
                         })
                         .then(response => response.json())
                         .then(data => {
                              if (data.success) {
                                   // Show success message
                                   const alert = document.createElement('div');
                                   alert.className = 'alert alert-success alert-dismissible fade show';
                                   alert.innerHTML = '<i class="bx bx-check-circle me-2"></i>Order updated successfully!<button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
                                   document.querySelector('.card-body').insertBefore(alert, document.querySelector('.row'));
                                   
                                   // Auto-hide after 3 seconds
                                   setTimeout(() => {
                                        alert.remove();
                                   }, 3000);
                              }
                         });
                    }
               });
          });
     </script>
@endsection
