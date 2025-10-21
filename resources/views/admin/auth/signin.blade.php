@extends('admin.layouts.base', ['title' => 'Sign In'])

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
                                                       <a href="{{ route('admin.dashboard') }}" class="logo-dark">
                                                             <img src="/assets/images/logos/halalljamm.png" height="30" alt="logo dark">
                                                       </a>

                                                       <a href="{{ route('admin.dashboard') }}" class="logo-light">
                                                             <img src="/assets/images/logos/halalljamm.png" height="30" alt="logo light">
                                                       </a>
                                                </div>
                                                <div class="text-center">
                                                       <h3 class="fw-bold text-dark fs-20">Hi , Welcome Back 👋 </h3>
                                                       <p class="text-muted mt-1 mb-4">Enter your credentials to access your account.</p>
                                                </div>
                                                
                                                @if (session('success'))
                                                       <div class="alert alert-success alert-dismissible fade show">
                                                             <i class="bx bx-check-circle me-2"></i>
                                                             {{ session('success') }}
                                                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                       </div>
                                                @endif

                                                @if ($errors->any())
                                                       <div class="alert alert-danger">
                                                             @foreach ($errors->all() as $error)
                                                                   <p class="mb-0">{{ $error }}</p>
                                                             @endforeach
                                                       </div>
                                                @endif
                                                <div class="p-3">
                                                       <form action="{{ route('admin.login.post') }}" method="POST" class="authentication-form">
                                                             @csrf
                                                             <div class="mb-4">
                                                                   <label class="form-label" for="UserEmail">Email</label>
                                                                   <div class="position-relative w-100">
                                                                         <input type="email" name="email" class="form-control form-control-lg rounded" id="UserEmail" placeholder="Enter Email" required="">
                                                                         <i class="bx bx-envelope fs-20 position-absolute end-0 top-50 translate-middle-y me-2 text-muted"></i>
                                                                   </div>
                                                             </div>
                                                             <div class="mb-4">
                                                                   <a href="{{ route('admin.password.request') }}" class="float-end fw-semibold text-reset ms-1">Reset password</a>
                                                                   <label class="form-label" for="UserPass">Password</label>
                                                                   <div class="position-relative w-100">
                                                                         <input type="password" name="password" class="form-control form-control-lg rounded" id="UserPass" placeholder="Enter password" required="">
                                                                         <button type="button" class="btn text-muted p-0 position-absolute end-0 top-50 border-0 translate-middle-y me-2" onclick="togglePassword()">
                                                                               <i class="bx bx-show fs-20" id="toggleIcon"></i>
                                                                         </button>
                                                                   </div>
                                                             </div>
                                                             <div class="mb-3">
                                                                   <div class="form-check">
                                                                         <input type="checkbox" class="form-check-input" id="checkbox-signin" name="remember">
                                                                         <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                                                   </div>

                                                             </div>
                                                             <div class="text-center d-grid">
                                                                   <button class="btn btn-primary d-flex align-items-center justify-content-center gap-1 fw-medium" type="submit" id="signInBtn">
                                                                         <span id="signInText"><i class='bx bx-log-in fs-18'></i> Sign In</span>
                                                                         <span id="signInLoading" style="display: none;">
                                                                               <i class='bx bx-loader-alt fs-18 bx-spin'></i> Signing In...
                                                                         </span>
                                                                   </button>
                                                             </div>
                                                       </form>
                                                </div>

                                                <script>
                                                function togglePassword() {
                                                    const passwordInput = document.getElementById('UserPass');
                                                    const toggleIcon = document.getElementById('toggleIcon');
                                                    
                                                    if (passwordInput.type === 'password') {
                                                        passwordInput.type = 'text';
                                                        toggleIcon.className = 'bx bx-hide fs-20';
                                                    } else {
                                                        passwordInput.type = 'password';
                                                        toggleIcon.className = 'bx bx-show fs-20';
                                                    }
                                                }
                                                
                                                // Handle form submission with loading state
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    const form = document.querySelector('.authentication-form');
                                                    const signInBtn = document.getElementById('signInBtn');
                                                    const signInText = document.getElementById('signInText');
                                                    const signInLoading = document.getElementById('signInLoading');
                                                    
                                                    form.addEventListener('submit', function(e) {
                                                        // Show loading state
                                                        signInBtn.disabled = true;
                                                        signInText.style.display = 'none';
                                                        signInLoading.style.display = 'inline-flex';
                                                        
                                                        // Add loading class to button
                                                        signInBtn.classList.add('btn-loading');
                                                        
                                                        // If there are validation errors, reset the button state
                                                        setTimeout(function() {
                                                            // Check if form was submitted successfully
                                                            // If still on same page after 3 seconds, reset button
                                                            if (document.querySelector('.authentication-form')) {
                                                                signInBtn.disabled = false;
                                                                signInText.style.display = 'inline-flex';
                                                                signInLoading.style.display = 'none';
                                                                signInBtn.classList.remove('btn-loading');
                                                            }
                                                        }, 3000);
                                                    });
                                                    
                                                    // Icons are working correctly
                                                });
                                                </script>
                                                
                                                <style>
                                                .btn-loading {
                                                    position: relative;
                                                    pointer-events: none;
                                                }
                                                
                                                .btn-loading::after {
                                                    content: '';
                                                    position: absolute;
                                                    top: 50%;
                                                    left: 50%;
                                                    width: 20px;
                                                    height: 20px;
                                                    margin: -10px 0 0 -10px;
                                                    border: 2px solid transparent;
                                                    border-top: 2px solid #ffffff;
                                                    border-radius: 50%;
                                                    animation: spin 1s linear infinite;
                                                }
                                                
                                                @keyframes spin {
                                                    0% { transform: rotate(0deg); }
                                                    100% { transform: rotate(360deg); }
                                                }
                                                </style>

                                    </div> <!-- end card-body -->
                              </div> <!-- end card -->
                       </div> <!-- end col -->
                 </div> <!-- end row -->
           </div>
     </div>
@endsection