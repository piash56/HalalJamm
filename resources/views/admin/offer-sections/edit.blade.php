@extends('layouts.vertical', ['title' => 'Edit Offer Section'])

@section('content')
     <div class="row">
           <div class="col-xl-12">
                 <div class="card">
                       <div class="card-header">
                              <h4 class="card-title">Edit Offer Section</h4>
                       </div>
                       <div class="card-body">
                              <form action="{{ route('admin.offer-sections.update', $offerSection) }}" method="POST" enctype="multipart/form-data">
                                   @csrf
                                   @method('PUT')
                                   
                                   <div class="row">
                                        <!-- Left Side Content -->
                                        <div class="col-lg-6">
                                             <h5 class="mb-3">Left Side Content</h5>
                                             
                                             <div class="mb-3">
                                                  <label for="small_image" class="form-label">Small Image (Delicious)</label>
                                                  @if($offerSection->small_image)
                                                       <div class="mb-2">
                                                            <img src="{{ $offerSection->small_image_url }}" alt="Current Small Image" class="img-thumbnail" style="max-width: 200px;">
                                                            <p class="text-muted small">Current small image</p>
                                                       </div>
                                                  @endif
                                                  <input type="file" class="form-control @error('small_image') is-invalid @enderror" 
                                                         id="small_image" name="small_image" accept="image/*">
                                                  <div class="form-text">Recommended size: 200x100px. Max file size: 2MB. Leave empty to keep current image.</div>
                                                  @error('small_image')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>

                                             <div class="mb-3">
                                                  <label for="primary_text" class="form-label">Primary Text <span class="text-danger">*</span></label>
                                                  <input type="text" class="form-control @error('primary_text') is-invalid @enderror" 
                                                         id="primary_text" name="primary_text" value="{{ old('primary_text', $offerSection->primary_text) }}" 
                                                         placeholder="e.g., Special deal offer every weekend">
                                                  @error('primary_text')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>

                                             <div class="mb-3">
                                                  <label for="secondary_text" class="form-label">Secondary Text <span class="text-danger">*</span></label>
                                                  <input type="text" class="form-control @error('secondary_text') is-invalid @enderror" 
                                                         id="secondary_text" name="secondary_text" value="{{ old('secondary_text', $offerSection->secondary_text) }}" 
                                                         placeholder="e.g., grilled chicken shawarma">
                                                  @error('secondary_text')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>

                                             <div class="mb-3">
                                                  <label for="secondary_price" class="form-label">Secondary Price</label>
                                                  <input type="number" step="0.01" class="form-control @error('secondary_price') is-invalid @enderror" 
                                                         id="secondary_price" name="secondary_price" value="{{ old('secondary_price', $offerSection->secondary_price) }}" 
                                                         placeholder="e.g., 8.25">
                                                  @error('secondary_price')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>

                                             <div class="mb-3">
                                                  <label for="small_text" class="form-label">Small Text (Description)</label>
                                                  <textarea class="form-control @error('small_text') is-invalid @enderror" 
                                                            id="small_text" name="small_text" rows="3" 
                                                            placeholder="e.g., Restaurant, where culinary excellence meets warm hospitality in every dish we serve nestled in the heart of city">{{ old('small_text', $offerSection->small_text) }}</textarea>
                                                  @error('small_text')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>

                                             <div class="mb-3">
                                                  <label for="button_text" class="form-label">Button Text</label>
                                                  <input type="text" class="form-control @error('button_text') is-invalid @enderror" 
                                                         id="button_text" name="button_text" value="{{ old('button_text', $offerSection->button_text) }}" 
                                                         placeholder="e.g., order now">
                                                  @error('button_text')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>

                                             <div class="mb-3">
                                                  <label for="button_url" class="form-label">Button URL</label>
                                                  <input type="url" class="form-control @error('button_url') is-invalid @enderror" 
                                                         id="button_url" name="button_url" value="{{ old('button_url', $offerSection->button_url) }}" 
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
                                                  <label for="offer_image" class="form-label">Offer Image</label>
                                                  @if($offerSection->offer_image)
                                                       <div class="mb-2">
                                                            <img src="{{ $offerSection->offer_image_url }}" alt="Current Offer Image" class="img-thumbnail" style="max-width: 200px;">
                                                            <p class="text-muted small">Current offer image</p>
                                                       </div>
                                                  @endif
                                                  <input type="file" class="form-control @error('offer_image') is-invalid @enderror" 
                                                         id="offer_image" name="offer_image" accept="image/*">
                                                  <div class="form-text">Recommended size: 600x400px. Max file size: 2MB. Leave empty to keep current image.</div>
                                                  @error('offer_image')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>

                                             <div class="mb-3">
                                                  <label for="offer_price_text" class="form-label">Offer Price Text</label>
                                                  <input type="text" class="form-control @error('offer_price_text') is-invalid @enderror" 
                                                         id="offer_price_text" name="offer_price_text" value="{{ old('offer_price_text', $offerSection->offer_price_text) }}" 
                                                         placeholder="e.g., only">
                                                  @error('offer_price_text')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>

                                             <div class="mb-3">
                                                  <label for="offer_price" class="form-label">Offer Price</label>
                                                  <input type="number" step="0.01" class="form-control @error('offer_price') is-invalid @enderror" 
                                                         id="offer_price" name="offer_price" value="{{ old('offer_price', $offerSection->offer_price) }}" 
                                                         placeholder="e.g., 8.25">
                                                  @error('offer_price')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>

                                             <div class="mb-3">
                                                  <div class="form-check">
                                                       <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $offerSection->is_active) ? 'checked' : '' }}>
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
                                                       <i class="ri-save-line me-1"></i> Update Offer Section
                                                  </button>
                                                  <a href="{{ route('admin.offer-sections.index') }}" class="btn btn-secondary">
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
