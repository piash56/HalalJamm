@extends('layouts.base', ['title' => 'Admin Reset Password'])

@section('body_attribute')
     class="authentication-bg"
@endsection

@section('content')
     <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
           <div class="container">
                 <div class="row justify-content-center">
                       <div class="col-xl-5">
                              <div class="card auth-card">
                                    <div class="card-body">
                                          <div class="p-3">
                                                <div class="mx-auto mb-5 auth-logo text-center">
                                                       <a href="{{ route('home') }}" class="logo-dark">
                                                             <img src="/assets/images/logos/halalljamm.png" height="30" alt="logo dark">
                                                       </a>

                                                       <a href="{{ route('home') }}" class="logo-light">
                                                             <img src="/assets/images/logos/halalljamm.png" height="30" alt="logo light">
                                                       </a>
                                                </div>
                                                <div class="text-center">
                                                       <h3 class="fw-bold text-dark fs-20">Reset Password</h3>
                                                       <p class="text-muted mt-1 mb-4">Enter your email address and we'll send you an email with instructions to reset your password.</p>
                                                </div>
                                                <div class="p-3">
                                                       <form action="{{ route('admin.password.email') }}" method="POST" class="authentication-form">
                                                             @csrf
                                                             <div class="mb-3">
                                                                   <label class="form-label" for="email">Email</label>
                                                                   <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                                                                          placeholder="Enter your email" value="{{ old('email') }}" required>
                                                                   @error('email')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                   @enderror
                                                             </div>
                                                             <div class="mb-1 text-center d-grid">
                                                                   <button class="btn btn-primary" type="submit">Send Reset Link</button>
                                                             </div>
                                                       </form>
                                                </div>

                                                <p class="text-muted text-center mt-4 mb-0">Back to <a href="{{ route('admin.login') }}" class="text-reset fw-bold ms-1">Sign In</a></p>
                                          </div> <!-- end col -->
                                    </div> <!-- end card-body -->
                              </div> <!-- end card -->
                       </div> <!-- end col -->
                 </div> <!-- end row -->
           </div>
     </div>
@endsection