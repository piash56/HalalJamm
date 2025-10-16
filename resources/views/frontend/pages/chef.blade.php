@extends('frontend.layouts.app')
@section('title', 'Chef')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
       
        <!-- Page Banner Start -->
        <section class="page-banner-area overlay pt-215 rpt-150 pb-150 rpb-100 rel z-1 bgs-cover text-center" style="background-image: url(assets/images/background/banner.jpg);">
            <div class="container">
                <div class="banner-inner text-white">
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Our Chefs</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Our Chefs</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- About Us Area start -->
        <section class="about-us-area pt-130 rpt-85 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-image-part mb-30 rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="food-review">
                                <div class="author">
                                    <img src="{{ asset('/assets/images/about/review-author.png') }}" alt="Author">
                                </div>
                                <span class="text">Very good food</span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <img src="{{ asset('/assets/images/about/about.jpg') }}" alt="About">
                            <div class="quality-food" style="background-image: url(assets/images/shapes/about-star.png)">
                                <span class="for-border"></span>
                                <span class="text">quality <br>food</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-us-content" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mb-25">
                                <span class="sub-title mb-5">expert team member</span>
                                <h2>we have professional team member meet with us</h2>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem  accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae abillo inventore veritatis quasi architecto beatae vitae dicta sunt  explicaboemo</p>
                            <div class="row justify-content-between">
                                <div class="col-md-7">
                                    <div class="history-progress one">
                                        <span class="counting">0</span>
                                        <h3>Professional Team member</h3>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="history-progress two">
                                        <span class="counting">0</span>
                                        <h3>Satisficed customer</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/pizza-three.png') }}" alt="Shape">
                </div>
            </div>
        </section>
        <!-- About Us Area end -->
        
        
        <!-- Headline area start -->
        <div class="headline-area mb-105 rmb-85 rel z-1">
            <span class="marquee-wrap">
               <span class="marquee-inner left">
                    <span class="marquee-item">Italian pizza</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">burger king</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">Italian pizza</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">burger king</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">Italian pizza</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">burger king</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
            </span>
            <div class="headline-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/chillies.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/tomato.png') }}" alt="Shape">
                </div>
            </div>
        </div>
        <!-- Headline Area end -->
        
        
        <!-- Chefs Area start -->
        <section class="chefs-area pb-65 rpb-35 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">professional chefs</span>
                            <h2>we have professionals team member meet our expert chefs</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="chefs-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/chefs/chef1.jpg') }}" alt="Chef">
                            </div>
                            <div class="description">
                                <h5><a href="{{ route('chefDetails') }}">Nolan E. Barrera</a></h5>
                                <span>Senior Chef</span>
                                <a href="{{ route('chefDetails') }}" class="more-btn"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="chefs-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/chefs/chef2.jpg') }}" alt="Chef">
                            </div>
                            <div class="description">
                                <h5><a href="{{ route('chefDetails') }}">William B. Nguyen</a></h5>
                                <span>Senior Chef</span>
                                <a href="{{ route('chefDetails') }}" class="more-btn"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="chefs-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/chefs/chef3.jpg') }}" alt="Chef">
                            </div>
                            <div class="description">
                                <h5><a href="{{ route('chefDetails') }}">Michael A. Coulson</a></h5>
                                <span>Senior Chef</span>
                                <a href="{{ route('chefDetails') }}" class="more-btn"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="chefs-item" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/chefs/chef4.jpg') }}" alt="Chef">
                            </div>
                            <div class="description">
                                <h5><a href="{{ route('chefDetails') }}">Brent M. Powers</a></h5>
                                <span>Senior Chef</span>
                                <a href="{{ route('chefDetails') }}" class="more-btn"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="chefs-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/chefs/chef5.jpg') }}" alt="Chef">
                            </div>
                            <div class="description">
                                <h5><a href="{{ route('chefDetails') }}">Tonia P. Desilva</a></h5>
                                <span>Senior Chef</span>
                                <a href="{{ route('chefDetails') }}" class="more-btn"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="chefs-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/chefs/chef6.jpg') }}" alt="Chef">
                            </div>
                            <div class="description">
                                <h5><a href="{{ route('chefDetails') }}">Matthew J. Nason</a></h5>
                                <span>Senior Chef</span>
                                <a href="{{ route('chefDetails') }}" class="more-btn"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="chefs-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/chefs/chef7.jpg') }}" alt="Chef">
                            </div>
                            <div class="description">
                                <h5><a href="{{ route('chefDetails') }}">Kenneth J. Williams</a></h5>
                                <span>Senior Chef</span>
                                <a href="{{ route('chefDetails') }}" class="more-btn"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="chefs-item" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/chefs/chef8.jpg') }}" alt="Chef">
                            </div>
                            <div class="description">
                                <h5><a href="{{ route('chefDetails') }}">Thomas C. Weaver</a></h5>
                                <span>Senior Chef</span>
                                <a href="{{ route('chefDetails') }}" class="more-btn"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Chefs Area end -->
            
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection