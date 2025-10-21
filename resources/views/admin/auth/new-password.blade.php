@extends('layouts.base', ['title' => 'Set New Password'])

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
                                                       <a href="{{ route('root') }}" class="logo-dark">
                                                             <img src="/images/logo-dark.png" height="30" alt="logo dark">
                                                       </a>

                                                       <a href="{{ route('root') }}" class="logo-light">
                                                             <img src="/images/logo-white.png" height="30" alt="logo light">
                                                       </a>
                                                </div>
                                                <div class="text-center">
                                                       <h3 class="fw-bold text-dark fs-20">Set New Password</h3>
                                                       <p class="text-muted mt-1 mb-4">Enter your new password below.</p>
                                                </div>
                                                <div class="p-3">
                                                       <form action="{{ route('admin.password.update') }}" method="POST" class="authentication-form" id="passwordForm">
                                                             @csrf
                                                             <input type="hidden" name="token" value="{{ $token }}">
                                                             <input type="hidden" name="email" value="{{ $email }}">
                                                             
                                                             <div class="mb-3">
                                                                   <label class="form-label" for="password">New Password</label>
                                                                   <div class="input-group">
                                                                          <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                                                                                 placeholder="Enter new password" required>
                                                                          <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                                                                <i class="ri-eye-line" id="toggleIcon"></i>
                                                                          </button>
                                                                   </div>
                                                                   @error('password')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                   @enderror
                                                             </div>
                                                             
                                                             <div class="mb-3">
                                                                   <label class="form-label" for="password_confirmation">Confirm Password</label>
                                                                   <div class="input-group">
                                                                          <input type="password" id="password_confirmation" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" 
                                                                                 placeholder="Confirm new password" required>
                                                                          <button class="btn btn-outline-secondary" type="button" id="togglePasswordConfirm">
                                                                                <i class="ri-eye-line" id="toggleIconConfirm"></i>
                                                                          </button>
                                                                   </div>
                                                                   @error('password_confirmation')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                   @enderror
                                                                   <div id="passwordMatch" class="mt-2" style="display: none;">
                                                                          <small class="text-danger" id="matchText"></small>
                                                                   </div>
                                                             </div>
                                                             
                                                             <div class="mb-1 text-center d-grid">
                                                                   <button class="btn btn-primary" type="submit" id="submitBtn" disabled>Update Password</button>
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

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const password = document.getElementById('password');
    const passwordConfirm = document.getElementById('password_confirmation');
    const togglePassword = document.getElementById('togglePassword');
    const togglePasswordConfirm = document.getElementById('togglePasswordConfirm');
    const toggleIcon = document.getElementById('toggleIcon');
    const toggleIconConfirm = document.getElementById('toggleIconConfirm');
    const passwordMatch = document.getElementById('passwordMatch');
    const matchText = document.getElementById('matchText');
    const submitBtn = document.getElementById('submitBtn');

    // Toggle password visibility
    togglePassword.addEventListener('click', function() {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        toggleIcon.classList.toggle('ri-eye-line');
        toggleIcon.classList.toggle('ri-eye-off-line');
    });

    togglePasswordConfirm.addEventListener('click', function() {
        const type = passwordConfirm.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordConfirm.setAttribute('type', type);
        toggleIconConfirm.classList.toggle('ri-eye-line');
        toggleIconConfirm.classList.toggle('ri-eye-off-line');
    });

    // Check password match
    function checkPasswordMatch() {
        if (password.value && passwordConfirm.value) {
            if (password.value === passwordConfirm.value) {
                matchText.textContent = '✓ Passwords match';
                matchText.className = 'text-success';
                passwordMatch.style.display = 'block';
                submitBtn.disabled = false;
            } else {
                matchText.textContent = '✗ Passwords do not match';
                matchText.className = 'text-danger';
                passwordMatch.style.display = 'block';
                submitBtn.disabled = true;
            }
        } else {
            passwordMatch.style.display = 'none';
            submitBtn.disabled = true;
        }
    }

    password.addEventListener('input', checkPasswordMatch);
    passwordConfirm.addEventListener('input', checkPasswordMatch);
});
</script>
@endpush
