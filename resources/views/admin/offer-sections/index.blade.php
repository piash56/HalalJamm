@extends('layouts.vertical', ['title' => 'Offer Sections'])

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
                                    <p class="card-title mb-0">Offer Section</p>
                              </div>
                       </div>
                       <div class="card-body">
                              <div class="table-responsive">
                                    <table class="table align-middle mb-0 table-hover table-centered">
                                          <thead class="bg-light-subtle">
                                                <tr>
                                                       <th>#</th>
                                                       <th>Small Image</th>
                                                       <th>Primary Text</th>
                                                       <th>Secondary Text</th>
                                                       <th>Price</th>
                                                       <th>Status</th>
                                                       <th>Created</th>
                                                       <th>Action</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                @forelse($offerSections as $index => $offerSection)
                                                <tr>
                                                       <td>{{ $index + 1 }}</td>
                                                       <td>
                                                             <div class="d-flex align-items-center">
                                                                  <div class="avatar-sm bg-light rounded">
                                                                       <img src="{{ $offerSection->small_image_url }}" alt="{{ $offerSection->primary_text }}" class="avatar-sm rounded" style="width: 40px; height: 40px; object-fit: cover;">
                                                                  </div>
                                                             </div>
                                                       </td>
                                                       <td>
                                                             <h6 class="mb-0">{{ Str::limit($offerSection->primary_text, 30) }}</h6>
                                                       </td>
                                                       <td>{{ Str::limit($offerSection->secondary_text, 20) }}</td>
                                                       <td>
                                                             @if($offerSection->secondary_price)
                                                                  <span class="badge bg-success">${{ number_format($offerSection->secondary_price, 2) }}</span>
                                                             @else
                                                                  <span class="text-muted">-</span>
                                                             @endif
                                                       </td>
                                                       <td>
                                                             @if($offerSection->is_active)
                                                                  <span class="badge bg-success">Active</span>
                                                             @else
                                                                  <span class="badge bg-danger">Inactive</span>
                                                             @endif
                                                       </td>
                                                       <td>{{ $offerSection->created_at->format('M d, Y') }}</td>
                                                       <td>
                                                             <div class="d-flex gap-2">
                                                                  <a href="{{ route('admin.offer-sections.edit', $offerSection) }}" class="btn btn-sm btn-outline-primary">
                                                                       <i class="ri-edit-line"></i>
                                                                  </a>
                                                                  <form action="{{ route('admin.offer-sections.destroy', $offerSection) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this offer section?')">
                                                                       @csrf
                                                                       @method('DELETE')
                                                                       <button type="submit" class="btn btn-sm btn-outline-danger">
                                                                            <i class="ri-delete-bin-line"></i>
                                                                       </button>
                                                                  </form>
                                                             </div>
                                                       </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                       <td colspan="8" class="text-center py-4">
                                                             <div class="text-muted">
                                                                  <i class="ri-inbox-line fs-48"></i>
                                                                  <p class="mt-2">No offer sections found</p>
                                                                  <a href="{{ route('admin.offer-sections.create') }}" class="btn btn-primary btn-sm">Create First Offer Section</a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                @endforelse
                                          </tbody>
                                    </table>
                              </div>
                       </div>
                 </div>
           </div>
     </div>
@endsection
