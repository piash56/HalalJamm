@extends('layouts.vertical', ['title' => 'Add Offer'])

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
                         <h4 class="card-title">Add New Offer</h4>
                         <a href="{{ route('admin.offers.index') }}" class="btn btn-secondary btn-sm">
                              <i class="ri-arrow-left-line me-1"></i> Back to Offers
                         </a>
                    </div>
                    <div class="card-body">
                         <form action="{{ route('admin.offers.store') }}" method="POST" enctype="multipart/form-data">
                              @csrf

                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="mb-3">
                                             <label for="name" class="form-label">Offer Name <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                             @error('name')
                                                  <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="mb-3">
                                             <label for="food_name" class="form-label">Food Name <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control @error('food_name') is-invalid @enderror" id="food_name" name="food_name" value="{{ old('food_name') }}" required>
                                             @error('food_name')
                                                  <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                        </div>
                                   </div>
                              </div>

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
                                             <label for="offer_type" class="form-label">Offer Type <span class="text-danger">*</span></label>
                                             <select class="form-control @error('offer_type') is-invalid @enderror" id="offer_type" name="offer_type" required>
                                                  <option value="">Select Type</option>
                                                  <option value="hot" {{ old('offer_type') == 'hot' ? 'selected' : '' }}>Hot</option>
                                                  <option value="discount" {{ old('offer_type') == 'discount' ? 'selected' : '' }}>Discount</option>
                                             </select>
                                             @error('offer_type')
                                                  <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                        </div>
                                   </div>
                              </div>

                              <div class="row" id="discount_amount_row" style="display: none;">
                                   <div class="col-md-6">
                                        <div class="mb-3">
                                             <label for="discount_amount" class="form-label">Discount Amount (%)</label>
                                             <input type="number" step="0.01" min="0" max="100" class="form-control @error('discount_amount') is-invalid @enderror" id="discount_amount" name="discount_amount" value="{{ old('discount_amount') }}">
                                             @error('discount_amount')
                                                  <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                        </div>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-4">
                                        <div class="mb-3">
                                             <label for="tag_1" class="form-label">Tag 1</label>
                                             <input type="text" class="form-control @error('tag_1') is-invalid @enderror" id="tag_1" name="tag_1" value="{{ old('tag_1') }}" maxlength="50">
                                             @error('tag_1')
                                                  <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="mb-3">
                                             <label for="tag_2" class="form-label">Tag 2</label>
                                             <input type="text" class="form-control @error('tag_2') is-invalid @enderror" id="tag_2" name="tag_2" value="{{ old('tag_2') }}" maxlength="50">
                                             @error('tag_2')
                                                  <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="mb-3">
                                             <label for="tag_3" class="form-label">Tag 3</label>
                                             <input type="text" class="form-control @error('tag_3') is-invalid @enderror" id="tag_3" name="tag_3" value="{{ old('tag_3') }}" maxlength="50">
                                             @error('tag_3')
                                                  <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
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
                                             <div class="form-check mt-4">
                                                  <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                                  <label class="form-check-label" for="is_active">
                                                       Active Offer
                                                  </label>
                                             </div>
                                             <small class="text-muted">Check this box to make this offer active and visible on the homepage.</small>
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
                                   <label for="food_image" class="form-label">Food Image</label>
                                   <input type="file" name="food_image" id="food_image" accept="image/*" class="form-control @error('food_image') is-invalid @enderror">
                                   @error('food_image')
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
                                        <i class="ri-save-line me-1"></i> Create Offer
                                   </button>
                                   <a href="{{ route('admin.offers.index') }}" class="btn btn-secondary">Cancel</a>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
@endsection

@section('scripts')
<script>
// Show/hide discount amount field based on offer type
document.addEventListener('DOMContentLoaded', function() {
     const offerTypeSelect = document.getElementById('offer_type');
     const discountAmountRow = document.getElementById('discount_amount_row');
     const discountAmountInput = document.getElementById('discount_amount');

     offerTypeSelect.addEventListener('change', function() {
          if (this.value === 'discount') {
               discountAmountRow.style.display = 'block';
               discountAmountInput.setAttribute('required', 'required');
          } else {
               discountAmountRow.style.display = 'none';
               discountAmountInput.removeAttribute('required');
               discountAmountInput.value = '';
          }
     });

     // Set initial state based on old value
     if (offerTypeSelect.value === 'discount') {
          discountAmountRow.style.display = 'block';
          discountAmountInput.setAttribute('required', 'required');
     }
});

// Image preview functionality
document.addEventListener('DOMContentLoaded', function() {
     const imageInput = document.getElementById('food_image');
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
     document.getElementById('food_image').value = '';
     document.getElementById('image-preview').style.display = 'none';
}
</script>
@endsection
