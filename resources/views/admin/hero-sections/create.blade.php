@extends('layouts.vertical', ['title' => 'Create Hero Section'])

@section('content')
     <div class="row">
           <div class="col-xl-12">
                 <div class="card">
                       <div class="card-header">
                              <h4 class="card-title">Create Hero Section</h4>
                       </div>
                       <div class="card-body">
                              <form action="{{ route('admin.hero-sections.store') }}" method="POST" enctype="multipart/form-data">
                                   @csrf
                                   
                                   <div class="row">
                                        <!-- Left Side Content -->
                                        <div class="col-lg-6">
                                             <h5 class="mb-3">Left Side Content</h5>
                                             
                                             <div class="mb-3">
                                                  <label for="small_text" class="form-label">Small Text</label>
                                                  <input type="text" class="form-control @error('small_text') is-invalid @enderror" 
                                                         id="small_text" name="small_text" value="{{ old('small_text') }}" 
                                                         placeholder="e.g., Halal Jamm:">
                                                  @error('small_text')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>

                                             <div class="mb-3">
                                                  <label for="primary_text" class="form-label">Primary Text <span class="text-danger">*</span></label>
                                                  <input type="text" class="form-control @error('primary_text') is-invalid @enderror" 
                                                         id="primary_text" name="primary_text" value="{{ old('primary_text') }}" 
                                                         placeholder="e.g., Bold Flavors of New York" required>
                                                  @error('primary_text')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>

                                             <div class="mb-3">
                                                  <label for="secondary_text" class="form-label">Secondary Text</label>
                                                  <textarea class="form-control @error('secondary_text') is-invalid @enderror" 
                                                            id="secondary_text" name="secondary_text" rows="3" 
                                                            placeholder="e.g., Fresh halal street food crafted with passion. Every bite tells a story of authentic New York cuisine.">{{ old('secondary_text') }}</textarea>
                                                  @error('secondary_text')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>

                                             <div class="mb-3">
                                                  <label for="button_text" class="form-label">Button Text</label>
                                                  <input type="text" class="form-control @error('button_text') is-invalid @enderror" 
                                                         id="button_text" name="button_text" value="{{ old('button_text') }}" 
                                                         placeholder="e.g., View All Menu">
                                                  @error('button_text')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>

                                             <div class="mb-3">
                                                  <label for="button_url" class="form-label">Button URL</label>
                                                  <input type="url" class="form-control @error('button_url') is-invalid @enderror" 
                                                         id="button_url" name="button_url" value="{{ old('button_url') }}" 
                                                         placeholder="e.g., https://halal-jamm-queens.cloveronline.com/menu/all">
                                                  @error('button_url')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>
                                        </div>

                                        <!-- Right Side Content -->
                                        <div class="col-lg-6">
                                             <h5 class="mb-3">Right Side Content</h5>
                                             
                                             <div class="mb-3">
                                                  <label for="hero_image" class="form-label">Hero Image</label>
                                                  <input type="file" class="form-control @error('hero_image') is-invalid @enderror" 
                                                         id="hero_image" name="hero_image" accept="image/*">
                                                  <div class="form-text">Recommended size: 600x600px. Max file size: 2MB.</div>
                                                  @error('hero_image')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>

                                             <div class="mb-3">
                                                  <label for="price_text" class="form-label">Price Text</label>
                                                  <input type="text" class="form-control @error('price_text') is-invalid @enderror" 
                                                         id="price_text" name="price_text" value="{{ old('price_text') }}" 
                                                         placeholder="e.g., ONLY NOW">
                                                  @error('price_text')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>

                                             <div class="mb-3">
                                                  <label for="price" class="form-label">Price</label>
                                                  <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" 
                                                         id="price" name="price" value="{{ old('price') }}" 
                                                         placeholder="e.g., 7.00">
                                                  @error('price')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>

                                             <div class="mb-3">
                                                  <label for="sort_order" class="form-label">Sort Order</label>
                                                  <input type="number" class="form-control @error('sort_order') is-invalid @enderror" 
                                                         id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}" 
                                                         placeholder="e.g., 0" min="0">
                                                  <div class="form-text">Lower numbers appear first in the slider. Set same order for multiple items.</div>
                                                  @error('sort_order')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>

                                             <div class="mb-3">
                                                  <div class="form-check">
                                                       <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                                       <label class="form-check-label" for="is_active">
                                                            Active
                                                       </label>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <div class="col-12">
                                             <div class="d-flex gap-2">
                                                  <button type="submit" class="btn btn-primary">
                                                       <i class="ri-save-line me-1"></i> Create Hero Section
                                                  </button>
                                                  <a href="{{ route('admin.hero-sections.index') }}" class="btn btn-secondary">
                                                       <i class="ri-arrow-left-line me-1"></i> Back to List
                                                  </a>
                                             </div>
                                        </div>
                                   </div>
                              </form>
                       </div>
                 </div>
           </div>
     </div>
@endsection

