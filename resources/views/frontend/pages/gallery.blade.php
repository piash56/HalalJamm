@extends('frontend.layouts.app')
@section('title', 'Team Member')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
       
        
         <!-- Page Banner Start -->
        <section class="page-banner-area overlay pt-215 rpt-150 pb-160 rpb-120 rel z-1 bgs-cover text-center" style="background-image: url(assets/images/background/banner.jpg);">
            <div class="container">
                <div class="banner-inner text-white">
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Gallery</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- Gallery Area start -->
        <section class="photo-gallery-area pt-130 rpt-100 pb-60 rpb-30 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">photo gallery</span>
                            <h2>explore latest photo gallery</h2>
                        </div>
                    </div>
                </div>
                
                <ul class="nav gallery-nav food-menu-tab mb-40" role="tablist" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <li>
                        <button class="nav-link active" data-filter="*">
                            <i class="flaticon-cupcake"></i>
                            <span>dessert</span>
                        </button>
                    </li>
                    <li>
                        <button class="nav-link" data-filter=".vegetarian">
                            <i class="flaticon-broccoli"></i>
                            <span>vegetarian</span>
                        </button>
                    </li>
                    <li>
                        <button class="nav-link" data-filter=".potatoes">
                            <i class="flaticon-fried-potatoes"></i>
                            <span>potatoes</span>
                        </button>
                    </li>
                    <li>
                        <button class="nav-link" data-filter=".seafood">
                            <i class="flaticon-crab"></i>
                            <span>seafood</span>
                        </button>
                    </li>
                    <li>
                        <button class="nav-link" data-filter=".drinks">
                            <i class="flaticon-poinsettia"></i>
                            <span>drinks</span>
                        </button>
                    </li>
                </ul>
                
                <div class="row gallery-active">
                    <div class="col-lg-4 col-sm-6 item potatoes">
                        <div class="gallery-item-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('/assets/images/gallery/gallery-three1.jpg') }}" alt="Gallery">
                            <h3>Chicken  burger</h3>
                            <span class="category">Delicious food</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 item vegetarian drinks">
                        <div class="gallery-item-three" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('/assets/images/gallery/gallery-three2.jpg') }}" alt="Gallery">
                            <h3>yamee Chicken fry</h3>
                            <span class="category">Delicious food</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 item seafood">
                        <div class="gallery-item-three" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('/assets/images/gallery/gallery-three3.jpg') }}" alt="Gallery">
                            <h3>beef vegetable hot dog</h3>
                            <span class="category">Delicious food</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 item potatoes drinks">
                        <div class="gallery-item-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('/assets/images/gallery/gallery-three4.jpg') }}" alt="Gallery">
                            <h3>hot dog with mustard</h3>
                            <span class="category">Delicious food</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 item vegetarian">
                        <div class="gallery-item-three" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('/assets/images/gallery/gallery-three5.jpg') }}" alt="Gallery">
                            <h3>traditional Italian pizza</h3>
                            <span class="category">Delicious food</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 item seafood drinks">
                        <div class="gallery-item-three" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('/assets/images/gallery/gallery-three6.jpg') }}" alt="Gallery">
                            <h3>Chicken  burger</h3>
                            <span class="category">Delicious food</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 item potatoes">
                        <div class="gallery-item-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('/assets/images/gallery/gallery-three7.jpg') }}" alt="Gallery">
                            <h3>Chicken  burger</h3>
                            <span class="category">Delicious food</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 item vegetarian drinks">
                        <div class="gallery-item-three" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('/assets/images/gallery/gallery-three8.jpg') }}" alt="Gallery">
                            <h3>Chicken  burger</h3>
                            <span class="category">Delicious food</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 item seafood drinks">
                        <div class="gallery-item-three" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('/assets/images/gallery/gallery-three9.jpg') }}" alt="Gallery">
                            <h3>Chicken  burger</h3>
                            <span class="category">Delicious food</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery Area end -->
            
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection