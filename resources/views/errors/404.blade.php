@extends('frontend.layouts.app')

@section('title', 'Page Not Found - 404')

@section('content')
<!-- 404 Error Area Start -->
<section class="error-area pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="error-content text-center">
                    <!-- Logo -->
                    <div class="error-logo mb-4">
                        <a href="{{ route('home') }}">
                            <img src="/assets/images/logos/halalljamm.png" height="60" alt="Halal Jamm Logo">
                        </a>
                    </div>
                    
                    <!-- 404 Image -->
                    <div class="error-image mb-4">
                        <img src="/assets/images/404.svg" alt="404 Error" height="300">
                    </div>
                    
                    <!-- Error Content -->
                    <div class="error-text">
                        <h1 class="error-title mb-3">Oops! Page Not Found</h1>
                        <p class="error-description mb-4">
                            The page you're looking for seems to have wandered off into the digital wilderness. 
                            Don't worry, even the best explorers sometimes take a wrong turn!
                        </p>
                        
                        <!-- Action Buttons -->
                        <div class="error-actions">
                            <a href="{{ route('home') }}" class="btn btn-primary me-3">
                                <i class="bx bx-home"></i> Back to Home
                            </a>
                            <a href="javascript:history.back()" class="btn btn-outline-primary">
                                <i class="bx bx-arrow-back"></i> Go Back
                            </a>
                        </div>
                        
                        <!-- Popular Links -->
                        <div class="error-links mt-5">
                            <h5 class="mb-3">Popular Pages</h5>
                            <div class="row">
                                <div class="col-md-4 mb-2">
                                    <a href="{{ route('home') }}" class="btn btn-sm btn-outline-secondary w-100">Home</a>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <a href="{{ route('allMenus') }}" class="btn btn-sm btn-outline-secondary w-100">Menu</a>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <a href="{{ route('about') }}" class="btn btn-sm btn-outline-secondary w-100">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 404 Error Area End -->

<!-- Order Now CTA -->
<section class="cta-area pt-50 pb-50" style="background: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <h3 class="text-white mb-3">Still Hungry? Order Now!</h3>
                <p class="text-white mb-4">Explore our delicious halal menu and place your order</p>
                <a href="https://halal-jamm-queens.cloveronline.com/menu/all" target="_blank" class="btn btn-light btn-lg">
                    <i class="bx bx-shopping-bag"></i> Order Now
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.error-area {
    background: #f8f9fa;
    min-height: 70vh;
    display: flex;
    align-items: center;
}

.error-content {
    background: white;
    padding: 3rem;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.error-title {
    font-size: 3rem;
    font-weight: 700;
    color: #ff6b35;
    margin-bottom: 1rem;
}

.error-description {
    font-size: 1.1rem;
    color: #6c757d;
    line-height: 1.6;
}

.error-actions .btn {
    padding: 12px 30px;
    border-radius: 25px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.error-actions .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.error-links h5 {
    color: #495057;
    font-weight: 600;
}

.error-links .btn {
    border-radius: 20px;
    transition: all 0.3s ease;
}

.error-links .btn:hover {
    background: #ff6b35;
    border-color: #ff6b35;
    color: white;
}

.cta-area {
    position: relative;
    overflow: hidden;
}

.cta-area::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.1"/><circle cx="10" cy="60" r="0.5" fill="white" opacity="0.1"/><circle cx="90" cy="40" r="0.5" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
    opacity: 0.3;
}

.cta-area .container {
    position: relative;
    z-index: 1;
}

@media (max-width: 768px) {
    .error-content {
        padding: 2rem 1.5rem;
    }
    
    .error-title {
        font-size: 2.5rem;
    }
    
    .error-actions .btn {
        display: block;
        width: 100%;
        margin-bottom: 1rem;
    }
    
    .error-actions .btn:last-child {
        margin-bottom: 0;
    }
}
</style>
@endsection
