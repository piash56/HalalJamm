@extends('frontend.layouts.app')
@section('title', 'Menu Restaurant')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
       
        
       <!-- Page Banner Start -->
        <section class="page-banner-area overlay pt-215 rpt-150 pb-160 rpb-120 rel z-1 bgs-cover text-center" style="background-image: url(assets/images/background/banner.jpg);">
            <div class="container">
                <div class="banner-inner text-white">
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Menu Restaurant</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Menu Restaurant</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- About Us Area start -->
        <section class="about-us-area pt-130 rpt-100 pb-90 rpb-60 rel z-1">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="about-restaurant-page rel mb-30 rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('/assets/images/about/menu-restaurant.jpg') }}" alt="Menu Restaurant">
                            <div class="experience-year">
                                <span class="years">25</span>
                                Years of experience in restaurant services
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-us-content" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mb-25">
                                <span class="sub-title mb-5">learn About wellfood</span>
                                <h2>the amazing & Quality food for your good health</h2>
                            </div>
                            <p>Welcome too restaurant, where culinary excellence meets warm hospitality in every dish we serve. Nestled in the heart of City Name our eatery invites you on a journey</p>
                            <div class="about-btn-author pt-5 mb-60">
                                <a href="{{ route('about') }}" class="theme-btn style-two">learn more us <i class="far fa-arrow-alt-right"></i></a>
                                <a href="{{ route('about') }}" class="read-more">Explore popular menu <i class="far fa-arrow-alt-right"></i></a>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-6">
                                    <div class="counter-item style-two counter-text-wrap">
                                        <span class="count-text k-plus" data-speed="3000" data-stop="34">0</span>
                                        <span class="counter-title">Organic Planting</span>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-6">
                                    <div class="counter-item style-two counter-text-wrap">
                                        <span class="count-text plus" data-speed="3000" data-stop="356">0</span>
                                        <span class="counter-title">Passionate Chef’s</span>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-6">
                                    <div class="counter-item style-two counter-text-wrap">
                                        <span class="count-text plus" data-speed="3000" data-stop="8534">0</span>
                                        <span class="counter-title">Favourite Dishes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <img src="{{ asset('/assets/images/shapes/tomato.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/burger.png') }}" alt="Shape">
                </div>
            </div>
        </div>
        <!-- Headline Area end -->
        
        
        <!-- Restaurant Menu Area start -->
        <section class="restaurant-menu-area pb-100 rpb-70 rel z-1">
            <div class="container container-1050">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">popular menu</span>
                            <h2>we provide exclusive food based on usa explore our popular food</h2>
                        </div>
                    </div>
                </div>
                
                <ul class="nav food-menu-tab mb-40" role="tablist" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <li>
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#food-tab1">
                            <i class="flaticon-cupcake"></i>
                            <span>dessert</span>
                        </button>
                    </li>
                    <li>
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#food-tab2">
                            <i class="flaticon-broccoli"></i>
                            <span>vegetarian</span>
                        </button>
                    </li>
                    <li>
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#food-tab3">
                            <i class="flaticon-fried-potatoes"></i>
                            <span>potatoes</span>
                        </button>
                    </li>
                    <li>
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#food-tab4">
                            <i class="flaticon-crab"></i>
                            <span>seafood</span>
                        </button>
                    </li>
                    <li>
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#food-tab5">
                            <i class="flaticon-poinsettia"></i>
                            <span>drinks</span>
                        </button>
                    </li>
                </ul>
                <div class="food-menu-tab-content tab-content">
                    <div class="tab-pane fade show active" id="food-tab1">
                        <div class="row gap-90">
                            <div class="col-lg-6 pb-30" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food1.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">beef burger</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food2.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Italian pizza</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food3.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Chicken roll</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food4.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">shawarma</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pb-30" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food5.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Sea octopus</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food6.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Beef burger</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food7.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">hot dog mustard</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food8.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">raw mince beef</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="food-tab2">
                        <div class="row gap-90">
                            <div class="col-lg-6 pb-30">
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food3.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Chicken roll</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food4.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">shawarma</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food1.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">beef burger</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food2.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Italian pizza</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pb-30">
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food6.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Beef burger</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food7.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">hot dog mustard</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food5.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Sea octopus</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food8.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">raw mince beef</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="food-tab3">
                        <div class="row gap-90">
                            <div class="col-lg-6 pb-30">
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food2.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Italian pizza</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food3.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Chicken roll</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food1.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">beef burger</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food4.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">shawarma</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pb-30">
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food7.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">hot dog mustard</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food5.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Sea octopus</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food6.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Beef burger</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food8.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">raw mince beef</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="food-tab4">
                        <div class="row gap-90">
                            <div class="col-lg-6 pb-30">
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food5.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Sea octopus</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food6.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Beef burger</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food1.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">beef burger</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food2.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Italian pizza</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pb-30">
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food3.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Chicken roll</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food4.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">shawarma</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food7.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">hot dog mustard</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food8.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">raw mince beef</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="food-tab5">
                        <div class="row gap-90">
                            <div class="col-lg-6 pb-30">
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food2.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Italian pizza</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food1.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">beef burger</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food3.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Chicken roll</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food4.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">shawarma</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pb-30">
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food6.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Beef burger</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food7.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">hot dog mustard</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food5.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Sea octopus</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/rm-food8.png') }}" alt="Food Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">raw mince beef</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array delectable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Restaurant Menu Area end -->
        
        
        <!-- Category Banner area start -->
        <div class="category-banner-area-two">
           <div class="container-fluid">
               <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 justify-content-center">
                    <div class="col" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="category-banner-item style-two" style="background-image: url(assets/images/banner/category-banner-two1.png);">
                            <span class="price">only $59</span>
                            <h3>SPECIALTY Beef steak</h3>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5k)</span>
                            </div>
                            <a href="{{ route('shop') }}" class="theme-btn style-two">Order now <i class="far fa-arrow-alt-right"></i></a>
                            <div class="food-image">
                                <img src="{{ asset('/assets/images/banner/category-banner-food1.png') }}" alt="Food">
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="category-banner-item style-two color-black" style="background-image: url(assets/images/banner/category-banner-two2.png);">
                            <span class="price">only $43</span>
                            <h3>SPECIALTY Italian pizza</h3>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5k)</span>
                            </div>
                            <a href="{{ route('shop') }}" class="theme-btn">Order now <i class="far fa-arrow-alt-right"></i></a>
                            <div class="food-image">
                                <img src="{{ asset('/assets/images/banner/category-banner-food2.png') }}" alt="Food">
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="category-banner-item style-two" style="background-image: url(assets/images/banner/category-banner-two1.png);">
                            <span class="price">only $35</span>
                            <h3>vegetable burger</h3>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5k)</span>
                            </div>
                            <a href="{{ route('shop') }}" class="theme-btn style-two">Order now <i class="far fa-arrow-alt-right"></i></a>
                            <div class="food-image">
                                <img src="{{ asset('/assets/images/banner/category-banner-food3.png') }}" alt="Food">
                            </div>
                        </div>
                    </div>
               </div>
           </div>
        </div>
        <!-- Category Banner area end -->
        
        
        <!-- Burger Area start -->
        <section class="burger-area pt-100 rpt-70 pb-130 rpb-100 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">popular burger</span>
                            <h2>popular delicious burger</h2>
                        </div>
                    </div>
                </div>
                <div class="pizza-active">
                    <div class="product-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{ asset('/assets/images/products/burger1.jpg') }}" alt="Burger">
                            <span class="pizza-badge">hot</span>
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5k)</span>
                            </div>
                            <h5><a href="{{ route('productDetails') }}">vegetable beef Burger</a></h5>
                            <span class="price"><del>$50</del> $25</span>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{ asset('/assets/images/products/burger2.jpg') }}" alt="Burger">
                            <span class="pizza-badge">-10%</span>
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5k)</span>
                            </div>
                            <h5><a href="{{ route('productDetails') }}">beef checken burger</a></h5>
                            <span class="price"><del>$50</del> $25</span>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{ asset('/assets/images/products/burger3.jpg') }}" alt="Burger">
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5k)</span>
                            </div>
                            <h5><a href="{{ route('productDetails') }}">burgers black bread</a></h5>
                            <span class="price"><del>$50</del> $25</span>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{ asset('/assets/images/products/burger4.jpg') }}" alt="Burger">
                            <span class="pizza-badge">new</span>
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5k)</span>
                            </div>
                            <h5><a href="{{ route('productDetails') }}">delicious burger with beef</a></h5>
                            <span class="price"><del>$50</del> $25</span>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="image">
                            <img src="{{ asset('/assets/images/products/burger1.jpg') }}" alt="Burger">
                            <span class="pizza-badge">hot</span>
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5k)</span>
                            </div>
                            <h5><a href="{{ route('productDetails') }}">vegetable beef Burger</a></h5>
                            <span class="price"><del>$50</del> $25</span>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="image">
                            <img src="{{ asset('/assets/images/products/burger2.jpg') }}" alt="Burger">
                            <span class="pizza-badge">-10%</span>
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5k)</span>
                            </div>
                            <h5><a href="{{ route('productDetails') }}">beef checken burger</a></h5>
                            <span class="price"><del>$50</del> $25</span>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="image">
                            <img src="{{ asset('/assets/images/products/burger3.jpg') }}" alt="Burger">
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5k)</span>
                            </div>
                            <h5><a href="{{ route('productDetails') }}">burgers black bread</a></h5>
                            <span class="price"><del>$50</del> $25</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Burger Area end -->
            
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection