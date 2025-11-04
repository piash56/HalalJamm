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
                
                @if($galleryImages->count() > 0)
                    <!-- Desktop View (4 columns) -->
                    <div class="row gallery-grid d-none d-lg-flex">
                        @foreach($galleryImages as $index => $image)
                        <div class="col-xl-3 col-lg-4 mb-30" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}" data-aos-duration="1500" data-aos-offset="50">
                            <div class="gallery-item">
                                <div class="gallery-image">
                                    <img src="{{ $image->image_url }}" alt="{{ $image->title ?: 'Gallery Image' }}">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <!-- Mobile View (2x2 Grid) -->
                    <div class="gallery-mobile-grid d-lg-none">
                        <div class="row">
                            @foreach($galleryImages as $index => $image)
                            <div class="col-6 mb-3">
                                <div class="gallery-item gallery-item-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="{{ $index * 100 }}">
                                    <div class="gallery-image-mobile">
                                        <img src="{{ $image->image_url }}" alt="{{ $image->title ?: 'Gallery Image' }}">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <div class="alert alert-info">
                                <h4>No Gallery Images Available</h4>
                                <p>Please add some images to the gallery from the admin dashboard.</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>
        <!-- Gallery Area end -->
            
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection