@extends('layouts.vertical', ['title' => 'Edit Category'])

@section('css')
    @vite(['node_modules/choices.js/public/assets/styles/choices.min.css', 'node_modules/dropzone/dist/dropzone.css'])
@endsection

@section('content')
     <div class="row">
           <div class="col-12">
                 <div class="card">
                       <div class="card-header d-flex justify-content-between align-items-center">
                              <h4 class="card-title">Edit Category: {{ $category->name }}</h4>
                              <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary btn-sm">
                                   <i class="ri-arrow-left-line me-1"></i> Back to Categories
                              </a>
                       </div>
                       <div class="card-body">
                              @if ($errors->any())
                                   <div class="alert alert-danger">
                                        <ul class="mb-0">
                                             @foreach ($errors->all() as $error)
                                                  <li>{{ $error }}</li>
                                             @endforeach
                                        </ul>
                                   </div>
                              @endif

                              <form action="{{ route('admin.category.update', $category) }}" method="POST" enctype="multipart/form-data">
                                   @csrf
                                   @method('PUT')

                                   <div class="row">
                                        <div class="col-md-6">
                                             <div class="mb-3">
                                                  <label for="name" class="form-label">Category Name <span class="text-danger">*</span></label>
                                                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $category->name) }}" required>
                                                  @error('name')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="mb-3">
                                                  <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                                                  <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $category->slug) }}" required>
                                                  @error('slug')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                                  <small class="text-muted">URL-friendly version of the name</small>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <div class="col-md-6">
                                             <div class="mb-3">
                                                  <label for="sort_order" class="form-label">Sort Order</label>
                                                  <input type="number" class="form-control @error('sort_order') is-invalid @enderror" id="sort_order" name="sort_order" value="{{ old('sort_order', $category->sort_order) }}" min="0">
                                                  @error('sort_order')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="mb-3">
                                                  <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                                                  <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
                                                       <option value="">Select Status</option>
                                                       <option value="active" {{ old('status', $category->status) == 'active' ? 'selected' : '' }}>Active</option>
                                                       <option value="inactive" {{ old('status', $category->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                                  </select>
                                                  @error('status')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>
                                        </div>
                                   </div>

                                   <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description', $category->description) }}</textarea>
                                        @error('description')
                                             <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                   </div>

                                   <div class="mb-3">
                                        <label for="image" class="form-label">Category Image</label>
                                        
                                        <!-- Hidden input to track image removal -->
                                        <input type="hidden" name="remove_current_image" id="remove_current_image" value="0">
                                        
                                        <div class="mb-3" id="current-image-container">
                                             <div class="d-flex align-items-center gap-3">
                                                  <img id="current-image" src="{{ $category->image_url }}" alt="{{ $category->name }}" class="rounded" style="width: 100px; height: 100px; object-fit: cover;" onerror="this.src='{{ asset('images/placeholder-category.png') }}'">
                                                  <div>
                                                       <p class="mb-1 text-muted">Current Image</p>
                                                       <button type="button" class="btn btn-sm btn-outline-danger" onclick="removeCurrentImage()">
                                                            <i class="ri-delete-bin-line me-1"></i> Remove Current Image
                                                       </button>
                                                  </div>
                                             </div>
                                        </div>

                                        <div class="dropzone bg-light-subtle py-4" id="image-dropzone">
                                             <div class="fallback">
                                                  <input type="file" name="image" id="image" accept="image/*" class="form-control @error('image') is-invalid @enderror">
                                             </div>
                                             <div class="dz-message needsclick text-center">
                                                  <i class="ri-upload-cloud-2-line fs-48 text-primary"></i>
                                                  <h4 class="mt-3">Drop your new image here, or <span class="text-primary">click to browse</span></h4>
                                                  <p class="text-muted fs-13">
                                                       Recommended size: 400x400px. PNG, JPG and GIF files are allowed (Max: 2MB)
                                                  </p>
                                             </div>
                                        </div>
                                        
                                        @error('image')
                                             <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                        
                                        <!-- Preview container -->
                                        <div id="image-preview" class="mt-3" style="display: none;">
                                             <div class="d-flex align-items-center gap-3">
                                                  <img id="preview-img" src="" alt="Preview" class="rounded" style="width: 100px; height: 100px; object-fit: cover;">
                                                  <div>
                                                       <p class="mb-1 text-success">New Image Preview</p>
                                                       <button type="button" class="btn btn-sm btn-outline-danger" onclick="clearImagePreview()">
                                                            <i class="ri-delete-bin-line me-1"></i> Remove
                                                       </button>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="d-flex gap-2">
                                        <button type="submit" class="btn btn-primary">
                                             <i class="ri-save-line me-1"></i> Update Category
                                        </button>
                                        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancel</a>
                                   </div>
                              </form>
                       </div>
                 </div>
           </div>
     </div>
@endsection

@section('scripts')
<script>
// Image preview functionality
document.addEventListener('DOMContentLoaded', function() {
     const imageInput = document.getElementById('image');
     const dropzone = document.getElementById('image-dropzone');
     const previewContainer = document.getElementById('image-preview');
     const previewImg = document.getElementById('preview-img');

     // Handle file input change
     imageInput.addEventListener('change', function(e) {
          const file = e.target.files[0];
          if (file) {
               showImagePreview(file);
          }
     });

     // Handle drag and drop
     dropzone.addEventListener('dragover', function(e) {
          e.preventDefault();
          dropzone.classList.add('border-primary');
     });

     dropzone.addEventListener('dragleave', function(e) {
          e.preventDefault();
          dropzone.classList.remove('border-primary');
     });

     dropzone.addEventListener('drop', function(e) {
          e.preventDefault();
          dropzone.classList.remove('border-primary');
          
          const files = e.dataTransfer.files;
          if (files.length > 0) {
               const file = files[0];
               if (file.type.startsWith('image/')) {
                    imageInput.files = files;
                    showImagePreview(file);
               } else {
                    alert('Please select an image file.');
               }
          }
     });

     // Click to browse
     dropzone.addEventListener('click', function() {
          imageInput.click();
     });

     function showImagePreview(file) {
          const reader = new FileReader();
          reader.onload = function(e) {
               previewImg.src = e.target.result;
               previewContainer.style.display = 'block';
          };
          reader.readAsDataURL(file);
     }
});

function clearImagePreview() {
     document.getElementById('image').value = '';
     document.getElementById('image-preview').style.display = 'none';
}

function removeCurrentImage() {
     // Hide the current image container
     document.getElementById('current-image-container').style.display = 'none';
     
     // Set the hidden input to indicate image should be removed
     document.getElementById('remove_current_image').value = '1';
}
</script>
@endsection
