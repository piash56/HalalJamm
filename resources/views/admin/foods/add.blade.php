@extends('layouts.vertical', ['title' => 'Add Food'])

@section('css')
    @vite(['node_modules/choices.js/public/assets/styles/choices.min.css', 'node_modules/dropzone/dist/dropzone.css'])
@endsection

@section('content')
     @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
               <i class="bx bx-check-circle me-2"></i>
               {{ session('success') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
     @endif
     @if ($errors->any())
          <div class="alert alert-danger">
               <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                    @endforeach
               </ul>
          </div>
     @endif

     <div class="row">
          <div class="col-12">
               <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                         <h4 class="card-title">Add New Food</h4>
                         <a href="{{ route('admin.foods.index') }}" class="btn btn-secondary btn-sm">
                              <i class="ri-arrow-left-line me-1"></i> Back to Foods
                         </a>
                    </div>
                    <div class="card-body">
                         <form action="{{ route('admin.foods.store') }}" method="POST" enctype="multipart/form-data">
                              @csrf

                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="mb-3">
                                             <label for="category_id" class="form-label">Category <span class="text-danger">*</span></label>
                                             <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id" required>
                                                  <option value="">Select Category</option>
                                                  @foreach($categories as $category)
                                                       <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                  @endforeach
                                             </select>
                                             @error('category_id')
                                                  <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="mb-3">
                                             <label for="name" class="form-label">Food Name <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                             @error('name')
                                                  <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                        </div>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="mb-3">
                                             <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required>
                                             @error('slug')
                                                  <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                             <small class="text-muted">URL-friendly version of the name (auto-generated from name)</small>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="mb-3">
                                             <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
                                             <div class="input-group">
                                                  <span class="input-group-text">$</span>
                                                  <input type="number" step="0.01" min="0" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}" required>
                                                  @error('price')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="mb-3">
                                             <label for="sort_order" class="form-label">Sort Order</label>
                                             <input type="number" class="form-control @error('sort_order') is-invalid @enderror" id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}" min="0">
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
                                                  <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                                  <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                             </select>
                                             @error('status')
                                                  <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                        </div>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="mb-3">
                                             <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" id="is_popular" name="is_popular" value="1" {{ old('is_popular') ? 'checked' : '' }}>
                                                  <label class="form-check-label" for="is_popular">
                                                       Mark as Popular
                                                  </label>
                                             </div>
                                             <small class="text-muted">Check this box to mark this food as popular and show it in the Popular Menu section on the homepage.</small>
                                        </div>
                                   </div>
                              </div>

                              <div class="mb-3">
                                   <label for="description" class="form-label">Description</label>
                                   <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                                   @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                   @enderror
                              </div>

                              <div class="mb-3">
                                   <label for="image" class="form-label">Food Image</label>
                                   <input type="file" name="image" id="image" accept="image/*" class="form-control @error('image') is-invalid @enderror">
                                   @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                   @enderror
                                   <small class="text-muted">Recommended size: 400x400px. PNG, JPG and GIF files are allowed (Max: 2MB)</small>
                                   
                                   <!-- Preview container -->
                                   <div id="image-preview" class="mt-3" style="display: none;">
                                        <div class="d-flex align-items-center gap-3">
                                             <img id="preview-img" src="" alt="Preview" class="rounded" style="width: 100px; height: 100px; object-fit: cover;">
                                             <div>
                                                  <p class="mb-1 text-success">Image Preview</p>
                                                  <button type="button" class="btn btn-sm btn-outline-danger" onclick="clearImagePreview()">
                                                       <i class="ri-delete-bin-line me-1"></i> Remove
                                                  </button>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="d-flex gap-2">
                                   <button type="submit" class="btn btn-primary">
                                        <i class="ri-save-line me-1"></i> Create Food
                                   </button>
                                   <a href="{{ route('admin.foods.index') }}" class="btn btn-secondary">Cancel</a>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
@endsection

@section('scripts')
<script>
// Auto-slug generation
document.addEventListener('DOMContentLoaded', function() {
     const nameInput = document.getElementById('name');
     const slugInput = document.getElementById('slug');
     
     nameInput.addEventListener('input', function() {
          if (!slugInput.value || slugInput.dataset.autoGenerated === 'true') {
               slugInput.value = this.value.toLowerCase()
                    .replace(/[^a-z0-9\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-')
                    .trim('-');
               slugInput.dataset.autoGenerated = 'true';
          }
     });
     
     slugInput.addEventListener('input', function() {
          this.dataset.autoGenerated = 'false';
     });
});

// Image preview functionality
document.addEventListener('DOMContentLoaded', function() {
     const imageInput = document.getElementById('image');
     const previewContainer = document.getElementById('image-preview');
     const previewImg = document.getElementById('preview-img');

     // Handle file input change
     imageInput.addEventListener('change', function(e) {
          const file = e.target.files[0];
          if (file) {
               showImagePreview(file);
          }
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
</script>
@endsection
