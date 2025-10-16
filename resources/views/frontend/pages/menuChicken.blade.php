@extends('frontend.layouts.app')
@section('title', 'Menu Chicken')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
       
        
        
        <!-- Page Banner Start -->
        <section class="page-banner-area overlay pt-215 rpt-150 pb-160 rpb-120 rel z-1 bgs-cover text-center" style="background-image: url(assets/images/background/banner.jpg);">
            <div class="container">
                <div class="banner-inner text-white">
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Menu Fried Chicken</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Menu Fried Chicken</li>
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
                        <div class="about-image-four style-two mb-30" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="row">
                                <div class="col">
                                    <img src="{{ asset('/assets/images/about/menu-chicken1.jpg') }}" alt="About">
                                </div>
                                <div class="col mt-80">
                                    <img src="{{ asset('/assets/images/about/menu-chicken2.jpg') }}" alt="About">
                                </div>
                            </div>
                            <div class="badge"><img src="{{ asset('/assets/images/about/about-four-badge.jpg') }}" alt="Badge"></div>
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
        <section class="restaurant-menu-area pb-130 rpb-100 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
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
                        <div class="row no-gap">
                            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                                <div class="popular-menu-wrap">
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu1.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Fried chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu2.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Fried chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu3.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">chicken steak</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu4.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Chicken baked</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu5.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Fried chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                <div class="popular-menu-wrap">
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu6.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Fried chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu7.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Chicken baked</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu8.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Grille chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu9.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Chicken baked</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu10.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Grille chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="food-tab2">
                        <div class="row no-gap">
                            <div class="col-lg-6">
                                <div class="popular-menu-wrap">
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu9.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Grille chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu2.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Fried chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu1.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Fried chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu3.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">chicken steak</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu4.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Chicken baked</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="popular-menu-wrap">
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu10.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Grille chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu6.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Fried chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu5.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">red crawfish</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu7.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Chicken baked</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu8.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Grille chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="food-tab3">
                        <div class="row no-gap">
                            <div class="col-lg-6">
                                <div class="popular-menu-wrap">
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu3.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">chicken steak</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu1.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Fried chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu10.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Grille chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu2.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Fried chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu4.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Chicken baked</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="popular-menu-wrap">
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu7.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Chicken baked</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu5.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">red crawfish</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu9.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Grille chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu6.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Fried chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu8.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Grille chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="food-tab4">
                        <div class="row no-gap">
                            <div class="col-lg-6">
                                <div class="popular-menu-wrap">
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu4.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Chicken baked</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu1.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Fried chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu2.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Fried chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu3.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">chicken steak</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu9.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Grille chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="popular-menu-wrap">
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu8.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Grille chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu5.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">red crawfish</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu6.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Fried chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu7.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Chicken baked</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu10.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Grille chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="food-tab5">
                        <div class="row no-gap">
                            <div class="col-lg-6">
                                <div class="popular-menu-wrap">
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu7.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Chicken baked</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu10.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Grille chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu1.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Fried chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu2.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Fried chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu4.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Chicken baked</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="popular-menu-wrap">
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu3.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">chicken steak</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu9.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Grille chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu5.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">red crawfish</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu6.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Fried chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                    <div class="food-menu-item style-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/food/chicken-menu8.png') }}" alt="Burger Menu">
                                        </div>
                                        <div class="content">
                                            <h5><span class="title">Grille chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                            <p>Diverse menu features array of delectable</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonials-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/chicken-menu1.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/chicken-menu2.png') }}" alt="Shape">
                </div>
            </div>
        </section>
        <!-- Restaurant Menu Area end -->
        
        
        <!-- Offer Card Area start -->
        <div class="offer-card-area">
           <div class="row no-gap row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 justify-content-center">
                <div class="col" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="offer-card-item">
                        <img src="{{ asset('/assets/images/offer/good-food.png') }}" alt="Good Food">
                        <div class="badge">Hot</div>
                        <div class="image"><img src="{{ asset('/assets/images/offer/offer-card1.png') }}" alt="Food"></div>
                        <span class="title">Burger</span>
                        <span class="available-item">35+ Burger menu items</span>
                        <div class="bg-text"><span>Burger</span> <span>Burger</span> <span>Burger</span></div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <div class="offer-card-item style-two">
                        <img src="{{ asset('/assets/images/offer/good-food.png') }}" alt="Good Food">
                        <div class="badge">-10%</div>
                        <div class="image"><img src="{{ asset('/assets/images/offer/offer-card2.png') }}" alt="Food"></div>
                        <span class="title">Pizza</span>
                        <span class="available-item">35+ Burger menu items</span>
                        <div class="bg-text"><span>Pizza</span> <span>Pizza</span> <span>Pizza</span></div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                    <div class="offer-card-item">
                        <img src="{{ asset('/assets/images/offer/good-food.png') }}" alt="Good Food">
                        <div class="badge">Hot</div>
                        <div class="image"><img src="{{ asset('/assets/images/offer/offer-card3.png') }}" alt="Food"></div>
                        <span class="title">hotdog</span>
                        <span class="available-item">35+ Burger menu items</span>
                        <div class="bg-text"><span>hotdog</span> <span>hotdog</span> <span>hotdog</span></div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                    <div class="offer-card-item style-two">
                        <img src="{{ asset('/assets/images/offer/good-food.png') }}" alt="Good Food">
                        <div class="badge">-15%</div>
                        <div class="image"><img src="{{ asset('/assets/images/offer/offer-card4.png') }}" alt="Food"></div>
                        <span class="title">chickens</span>
                        <span class="available-item">35+ Burger menu items</span>
                        <div class="bg-text"><span>chickens</span> <span>chickens</span> <span>chickens</span></div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                    <div class="offer-card-item">
                        <img src="{{ asset('/assets/images/offer/good-food.png') }}" alt="Good Food">
                        <div class="badge">Hot</div>
                        <div class="image"><img src="{{ asset('/assets/images/offer/offer-card5.png') }}" alt="Food"></div>
                        <span class="title">seafood</span>
                        <span class="available-item">35+ Burger menu items</span>
                        <div class="bg-text"><span>seafood</span> <span>seafood</span> <span>seafood</span></div>
                    </div>
                </div>
           </div>
        </div>
        <!-- Offer Card Area end -->
            
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection