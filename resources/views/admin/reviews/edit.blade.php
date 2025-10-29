@extends('layouts.vertical', ['title' => 'Edit Review'])

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Review</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.reviews.index') }}">Reviews</a></li>
                                <li class="breadcrumb-item active">Edit Review</li>
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
                            <h4 class="card-title mb-0">Review Information</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.reviews.update', $review) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Customer Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                                   id="name" name="name" value="{{ old('name', $review->name) }}" required>
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="rating" class="form-label">Rating <span class="text-danger">*</span></label>
                                            <select class="form-select @error('rating') is-invalid @enderror" 
                                                    id="rating" name="rating" required>
                                                <option value="">Select Rating</option>
                                                @for($i = 1; $i <= 5; $i++)
                                                    <option value="{{ $i }}" {{ old('rating', $review->rating) == $i ? 'selected' : '' }}>
                                                        {{ $i }} Star{{ $i > 1 ? 's' : '' }}
                                                    </option>
                                                @endfor
                                            </select>
                                            @error('rating')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="review_date" class="form-label">Review Date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control @error('review_date') is-invalid @enderror" 
                                                   id="review_date" name="review_date" 
                                                   value="{{ old('review_date', $review->review_date->format('Y-m-d')) }}" required>
                                            @error('review_date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="sort_order" class="form-label">Sort Order</label>
                                            <input type="number" class="form-control @error('sort_order') is-invalid @enderror" 
                                                   id="sort_order" name="sort_order" 
                                                   value="{{ old('sort_order', $review->sort_order) }}" min="0">
                                            @error('sort_order')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="feedback" class="form-label">Review Feedback <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('feedback') is-invalid @enderror" 
                                              id="feedback" name="feedback" rows="4" required>{{ old('feedback', $review->feedback) }}</textarea>
                                    @error('feedback')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">Profile Image (Optional)</label>
                                    @if($review->image)
                                        <div class="mb-2">
                                            <img src="{{ $review->image_url }}" alt="{{ $review->name }}" class="rounded-circle" width="60" height="60">
                                            <span class="ms-2 text-muted">Current image</span>
                                        </div>
                                    @endif
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                           id="image" name="image" accept="image/*">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text">Upload a new profile image for the customer. Max size: 2MB</div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="is_active" name="is_active" 
                                               value="1" {{ old('is_active', $review->is_active) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_active">
                                            Active Review
                                        </label>
                                    </div>
                                </div>

                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ri-save-line"></i> Update Review
                                    </button>
                                    <a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary">
                                        <i class="ri-arrow-left-line"></i> Back to Reviews
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
