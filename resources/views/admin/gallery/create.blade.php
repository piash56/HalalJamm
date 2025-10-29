@extends('layouts.vertical', ['title' => 'Add Gallery Image'])

@section('content')
     <div class="row">
           <div class="col-xl-12">
                 <div class="card">
                       <div class="card-header">
                              <h4 class="card-title">Add Gallery Image</h4>
                       </div>
                       <div class="card-body">
                              <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                                   @csrf
                                   
                                   <div class="row">
                                        <div class="col-lg-8">
                                             <div class="mb-3">
                                                  <label for="title" class="form-label">Title</label>
                                                  <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                                         id="title" name="title" value="{{ old('title') }}" 
                                                         placeholder="e.g., Delicious Burger">
                                                  @error('title')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>

                                             <div class="mb-3">
                                                  <label for="image" class="form-label">Image <span class="text-danger">*</span></label>
                                                  <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                                         id="image" name="image" accept="image/*" required>
                                                  <div class="form-text">Recommended size: 800x600px. Max file size: 5MB. Supported formats: JPEG, PNG, GIF, WebP</div>
                                                  @error('image')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>

                                             <div class="mb-3">
                                                  <label for="description" class="form-label">Description</label>
                                                  <textarea class="form-control @error('description') is-invalid @enderror" 
                                                            id="description" name="description" rows="3" 
                                                            placeholder="Optional description for the image">{{ old('description') }}</textarea>
                                                  @error('description')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>
                                        </div>

                                        <div class="col-lg-4">
                                             <div class="mb-3">
                                                  <label for="sort_order" class="form-label">Sort Order</label>
                                                  <input type="number" class="form-control @error('sort_order') is-invalid @enderror" 
                                                         id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}" 
                                                         min="0">
                                                  <div class="form-text">Lower numbers appear first</div>
                                                  @error('sort_order')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>

                                             <div class="mb-3">
                                                  <div class="form-check">
                                                       <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }}>
                                                       <label class="form-check-label" for="is_featured">
                                                            Featured (Show on Home Page)
                                                       </label>
                                                  </div>
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
                                                       <i class="ri-save-line me-1"></i> Add Image
                                                  </button>
                                                  <a href="{{ route('admin.gallery.index') }}" class="btn btn-secondary">
                                                       <i class="ri-arrow-left-line me-1"></i> Back to Gallery
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
