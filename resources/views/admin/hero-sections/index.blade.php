@extends('layouts.vertical', ['title' => 'Hero Sections'])

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
                                    <p class="card-title mb-0">Hero Section</p>
                              </div>
                       </div>
                       <div class="card-body">
                              <div class="table-responsive">
                                    <table class="table align-middle mb-0 table-hover table-centered">
                                          <thead class="bg-light-subtle">
                                                <tr>
                                                       <th>#</th>
                                                       <th>Image</th>
                                                       <th>Primary Text</th>
                                                       <th>Small Text</th>
                                                       <th>Price</th>
                                                       <th>Status</th>
                                                       <th>Created</th>
                                                       <th>Action</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                @forelse($heroSections as $index => $heroSection)
                                                <tr>
                                                       <td>{{ $index + 1 }}</td>
                                                       <td>
                                                             <div class="d-flex align-items-center">
                                                                  <div class="avatar-sm bg-light rounded">
                                                                       <img src="{{ $heroSection->image_url }}" alt="{{ $heroSection->primary_text }}" class="avatar-sm rounded" style="width: 40px; height: 40px; object-fit: cover;">
                                                                  </div>
                                                             </div>
                                                       </td>
                                                       <td>
                                                             <h6 class="mb-0">{{ Str::limit($heroSection->primary_text, 30) }}</h6>
                                                       </td>
                                                       <td>{{ Str::limit($heroSection->small_text, 20) }}</td>
                                                       <td>
                                                             @if($heroSection->price)
                                                                  <span class="badge bg-success">${{ number_format($heroSection->price, 2) }}</span>
                                                             @else
                                                                  <span class="text-muted">-</span>
                                                             @endif
                                                       </td>
                                                       <td>
                                                             @if($heroSection->is_active)
                                                                  <span class="badge bg-success">Active</span>
                                                             @else
                                                                  <span class="badge bg-danger">Inactive</span>
                                                             @endif
                                                       </td>
                                                       <td>{{ $heroSection->created_at->format('M d, Y') }}</td>
                                                       <td>
                                                             <div class="d-flex gap-2">
                                                                  <a href="{{ route('admin.hero-sections.edit', $heroSection) }}" class="btn btn-sm btn-outline-primary">
                                                                       <i class="ri-edit-line"></i>
                                                                  </a>
                                                                  <form action="{{ route('admin.hero-sections.destroy', $heroSection) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this hero section?')">
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
                                                                  <p class="mt-2">No hero sections found</p>
                                                                  <a href="{{ route('admin.hero-sections.create') }}" class="btn btn-primary btn-sm">Create First Hero Section</a>
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
