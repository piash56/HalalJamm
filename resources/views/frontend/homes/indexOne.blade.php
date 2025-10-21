@extends('frontend.layouts.app')
@section('title', 'Index One')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    
       
        
        <!-- Hero Area Start -->
        <section class="hero-area bgs-cover pt-180 rpt-150 pb-100 rel z-1" style="background-image: url(assets/images/background/hero.jpg)">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content text-white" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-35"><i class="far fa-hamburger"></i>Halal Jamm: </span>
                            <h1>Bold Flavors of New York</h1>
                            <p>Fresh halal street food crafted with passion. Every bite tells a story of authentic New York cuisine.</p>
                            <a href="https://halal-jamm-queens.cloveronline.com/menu/all" target="_blank" class="theme-btn">View All Menu <i class="far fa-arrow-alt-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="hero-images rmt-60">
                            <img src="{{ asset('/assets/images/hero/hero-right.png') }}" alt="Hero">
                            <div class="price">
                                <img src="{{ asset('/assets/images/hero/price.png') }}" alt="Hero">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/hero-shape1.png') }}" alt="Hero Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/hero-shape2.png') }}" alt="Hero Shape">
                </div>
                <div class="shape three">
                    <img src="{{ asset('/assets/images/shapes/hero-shape3.png') }}" alt="Hero Shape">
                </div>
                <div class="shape four">
                    <img src="{{ asset('/assets/images/shapes/hero-shape4.png') }}" alt="Hero Shape">
                </div>
                <div class="shape five">
                    <img src="{{ asset('/assets/images/shapes/hero-shape5.png') }}" alt="Hero Shape">
                </div>
            </div>
        </section>
        <!-- Hero Area End -->
        
        
        <!-- Headline area start -->
        <div class="headline-area pt-120 rpt-90 rel z-1">
            <span class="marquee-wrap">
               <span class="marquee-inner left">
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">Halal Food</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">best shawarma</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">halal food</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">best shawarma</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">halal food</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">best shawarma</span>
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
        
        
        <!-- About Us Area start -->
        <section class="about-us-area pt-130 rpt-85 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="about-image-part mb-30 rmb-55" data-aos="fade-right" data-aos-duration="1500">
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
                                <span class="text">halal <br>certified</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-us-content" data-aos="fade-left" data-aos-duration="1500">
                            <div class="section-title mb-25">
                                <span class="sub-title mb-5">know About halaljamm</span>
                                <h2>Explore our most popular halal dishes</h2>
                            </div>
                            <p>Fresh, flavorful, and always halal. Halal Jamm serves authentic halal dishes made with care and bold NYC flavor. Great taste, fast service, and real quality in every bite</p>
                            <div class="about-btn-author pt-5 mb-45">
                                <a href="{{ route('allMenus') }}" class="theme-btn style-two">Our Menu <i class="far fa-arrow-alt-right"></i></a>
                                <a href="#" class="read-more">Explore popular menu <i class="far fa-arrow-alt-right"></i></a>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="service-item style-two">
                                        <div class="icon">
                                            <i class="flaticon-high-quality"></i>
                                        </div>
                                        <h5><a>Best Quality Food</a></h5>
                                        <p>Our talented chefs craft each dish precision sourcing</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="service-item style-two">
                                        <div class="icon">
                                            <i class="flaticon-chef"></i>
                                        </div>
                                        <h5><a>Experience our Chefs</a></h5>
                                        <p>Our talented chefs craft each dish precision sourcing</p>
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
        
        
        
        <!-- Offer Card Area start -->
        <div class="offer-card-area">
           <div class="row no-gap row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 justify-content-center">
                <div class="col" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="offer-card-item">
                        <img src="{{ asset('/assets/images/offer/good-food.png') }}" alt="Good Food">
                        <div class="badge">Hot</div>
                        <div class="image"><img src="{{ asset('/assets/images/offer/offer-card1.png') }}" alt="Food"></div>
                        <span class="title">Burger</span>
                        <span class="available-item">11+ Burger menu items</span>
                        <div class="bg-text"><span>Burger</span> <span>Burger</span> <span>Burger</span></div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <div class="offer-card-item style-two">
                        <img src="{{ asset('/assets/images/offer/good-food.png') }}" alt="Good Food">
                        <div class="badge">-10%</div>
                        <div class="image"><img src="{{ asset('/assets/images/offer/offer-card2.png') }}" alt="Food"></div>
                        <span class="title">Pizza</span>
                        <span class="available-item">15+ Pizza menu items</span>
                        <div class="bg-text"><span>Pizza</span> <span>Pizza</span> <span>Pizza</span></div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                    <div class="offer-card-item">
                        <img src="{{ asset('/assets/images/offer/good-food.png') }}" alt="Good Food">
                        <div class="badge">Hot</div>
                        <div class="image"><img src="{{ asset('/assets/images/offer/offer-card3.png') }}" alt="Food"></div>
                        <span class="title">hotdog</span>
                        <span class="available-item">05+ hotdog menu items</span>
                        <div class="bg-text"><span>hotdog</span> <span>hotdog</span> <span>hotdog</span></div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                    <div class="offer-card-item style-two">
                        <img src="{{ asset('/assets/images/offer/good-food.png') }}" alt="Good Food">
                        <div class="badge">-15%</div>
                        <div class="image"><img src="{{ asset('/assets/images/offer/offer-card4.png') }}" alt="Food"></div>
                        <span class="title">chickens</span>
                        <span class="available-item">18+ Chicken menu items</span>
                        <div class="bg-text"><span>chickens</span> <span>chickens</span> <span>chickens</span></div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                    <div class="offer-card-item">
                        <img src="{{ asset('/assets/images/offer/good-food.png') }}" alt="Good Food">
                        <div class="badge">Hot</div>
                        <div class="image"><img src="{{ asset('/assets/images/offer/offer-card5.png') }}" alt="Food"></div>
                        <span class="title">seafood</span>
                        <span class="available-item">14+ SeaFood menu items</span>
                        <div class="bg-text"><span>seafood</span> <span>seafood</span> <span>seafood</span></div>
                    </div>
                </div>
           </div>
        </div>
        <!-- Offer Card Area end -->
        
        
        <!-- Offer Area start -->
        <section class="offer-area bgc-black pt-160 rpt-100 pb-150 rpb-120 rel z-1" style="background-image: url(assets/images/background/offer-dot-bg.png)">
            <span class="marquee-wrap style-two text-white">
               <span class="marquee-inner left">special deal</span>
               <span class="marquee-inner left">special deal</span>
               <span class="marquee-inner left">special deal</span>
            </span>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="offer-content text-white rmb-55" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('/assets/images/offer/delicious.png') }}" alt="Image">
                            <h2>Special deal offer for this week</h2>
                            <h3>grilled beef meat only <span>$59</span></h3>
                            <p>Restaurant, where culinary excellence meets warm hospitality in every dish we serve nestled in the heart of city</p>
                            <a href="https://halal-jamm-queens.cloveronline.com/menu/all" target="_blank" class="theme-btn">order now <i class="far fa-arrow-alt-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="offer-image" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('/assets/images/offer/offer-img.png') }}" alt="Offer Image">
                            <div class="offer-badge" style="background-image: url(assets/images/shapes/offer-circle-shape.png)">
                                <span>only <br><span class="price">$59</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offer-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/offer-shape1.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/offer-shape2.png') }}" alt="Shape">
                </div>
                <div class="shape three">
                    <img src="{{ asset('/assets/images/shapes/offer-shape3.png') }}" alt="Shape">
                </div>
            </div>
        </section>
        <!-- Offer Area end -->
        
        
        <!-- Headline area start -->
        <div class="headline-area pt-120 rpt-90 rel z-1">
            <span class="marquee-wrap">
               <span class="marquee-inner left">
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">Halal Food</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">best shawarma</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">Halal Food</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">best shawarma</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">halal food</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">best shawarma</span>
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
        
        
        <!-- Popular Menu Area start -->
        <section class="popular-menu-area pt-105 rpt-85 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">popular menu</span>
                            <h2>we provide halal food based on usa explore our popular halal food</h2>
                        </div>
                    </div>
                </div>
                @if($popularMenus->count() > 0)
                    <div class="row justify-content-center">
                        @php
                            $totalItems = $popularMenus->count();
                            $itemsPerColumn = ceil($totalItems / 3);
                            
                            // Create columns with proper distribution
                            $column1 = $popularMenus->take($itemsPerColumn);
                            $column2 = $popularMenus->skip($itemsPerColumn)->take($itemsPerColumn);
                            $column3 = $popularMenus->skip($itemsPerColumn * 2);
                            
                            $columns = [$column1, $column2, $column3];
                            
                            // Debug: Log the distribution (remove this in production)
                            // \Log::info("Total items: $totalItems, Items per column: $itemsPerColumn");
                            // \Log::info("Column 1: " . $column1->count() . " items");
                            // \Log::info("Column 2: " . $column2->count() . " items");
                            // \Log::info("Column 3: " . $column3->count() . " items");
                        @endphp
                        
                        @foreach($columns as $columnIndex => $columnItems)
                            @if($columnItems->count() > 0)
                                <div class="col-xl-4 col-lg-6 z-{{ 3 - $columnIndex }}" data-aos="fade-up" data-aos-delay="{{ $columnIndex * 50 }}" data-aos-duration="1500" data-aos-offset="50">
                                    @foreach($columnItems as $index => $menu)
                                        <div class="food-item {{ $index == $columnItems->count() - 1 ? 'mb-30' : '' }}">
                                            <div class="content">
                                                <div class="name-desc">
                                                    <h5>{{ $menu->name }}</h5>
                                                    <p>{{ $menu->description ?: 'Delicious halal food item' }}</p>
                                                </div>
                                                <div class="price">
                                                    <span>${{ number_format($menu->price, 2) }}</span>
                                                </div>
                                            </div>
                                            <div class="image">
                                                <img src="{{ $menu->image_url }}" alt="{{ $menu->name }}">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        @endforeach
                    </div>
                @else
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <div class="alert alert-info">
                                <h4>No Popular Items Available</h4>
                                <p>Please mark some foods as popular in the admin dashboard to display them here.</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>
        <!-- Popular Menu Area end -->
        
        
        <!-- Why choose Us Area start -->
        <section class="why-choose-area bgc-lighter pt-240 rpt-150 pb-100 rpb-70 rel z-1">
            <span class="marquee-wrap style-two">
               <span class="marquee-inner left">Why choose Us</span>
               <span class="marquee-inner left">Why choose Us</span>
               <span class="marquee-inner left">Why choose Us</span>
            </span>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="why-choose-content rmb-30" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mb-25">
                                <span class="sub-title mb-5">Why choose us</span>
                                <h2>We Offer best halal food That Customers Needs</h2>
                            </div>
                            <p>Welcome too halaljamm restaurant, where culinary excellence meets warm hospitality in every dish we serve. Nestled in the heart of City Name our eatery invites you on a journey</p>
                            <div class="about-btn-author mb-60">
                                <a href="{{ route('about') }}" class="theme-btn">Know About Us <i class="far fa-arrow-alt-right"></i></a>
                                <div class="author">
                                    <img src="{{ asset('/assets/images/about/author.jpg') }}" alt="Author">
                                    <h6>Andrew John / <span>CEO & Founder</span></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-6">
                                    <div class="counter-item counter-text-wrap">
                                        <span class="count-text k-plus" data-speed="1000" data-stop="2">0</span>
                                        <span class="counter-title">Happy Customers</span>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-6">
                                    <div class="counter-item counter-text-wrap">
                                        <span class="count-text plus" data-speed="2000" data-stop="5">0</span>
                                        <span class="counter-title">Passionate Chef’s</span>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-6">
                                    <div class="counter-item counter-text-wrap">
                                        <span class="count-text plus" data-speed="3000" data-stop="53">0</span>
                                        <span class="counter-title">Our Dishes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                                <div class="service-item">
                                    <div class="icon">
                                        <i class="flaticon-recommended-food"></i>
                                    </div>
                                    <h4><a href="{{ route('menuBurger') }}">halal certified</a></h4>
                                    <p>We offer best quality halal food that customers need</p>
                                </div>
                                <div class="service-item">
                                    <div class="icon">
                                        <i class="flaticon-fast-delivery"></i>
                                    </div>
                                    <h4><a href="{{ route('menuBurger') }}">fast food delivery</a></h4>
                                    <p>We are partner with best delivery agent, who deliver faster</p>
                                </div>
                            </div>
                            <div class="col-sm-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                                <div class="service-item mt-30 rmt-0">
                                    <div class="icon">
                                        <i class="flaticon-cashback"></i>
                                    </div>
                                    <h4><a href="{{ route('menuBurger') }}">complain available</a></h4>
                                    <p>We have complain box where you can ping as if any food disappointed you</p>
                                </div>
                                <div class="service-item">
                                    <div class="icon">
                                        <i class="flaticon-dish"></i>
                                    </div>
                                    <h4><a href="{{ route('menuBurger') }}">100% natural food</a></h4>
                                    <p>Everyday we provide new foods as per customers needs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="headline-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/chillies.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/tomato.png') }}" alt="Shape">
                </div>
                <div class="shape three">
                    <img src="{{ asset('/assets/images/shapes/pizza.png') }}" alt="Shape">
                </div>
            </div>
        </section>
        <!-- Why choose Us Area end -->
        
        
        
        <!-- Headline area start -->
        <div class="headline-area bgc-black pt-120 rpt-90 rel z-2">
            <span class="marquee-wrap white-text">
               <span class="marquee-inner left">
                    <span class="marquee-item">halal food</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">our Testimonials</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">best shawarma</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">halal food</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">our Testimonials</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">best shawarma</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">halal food</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">our Testimonials</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">best shawarma</span>
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
        
        
        <!-- Testimonials Area start -->
        <section class="testimonials-area bgc-black pt-105 rpt-85 pb-130 rpb-100 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-title text-white text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">customer feedback</span>
                            <h2>our honorable customers says</h2>
                        </div>
                    </div>
                </div>
                <div class="testimonials-active">
                    <div class="testimonial-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="quote"><i class="flaticon-quote"></i></div>
                        <div class="text">Renowned for its versatility in the kitchen, Red King Crab can be prepared in various ways, from simple steaming or boiling to elaborate preparations such as grilling incorporating</div>
                        <div class="author">
                            <img src="{{ asset('/assets/images/testimonials/author1.jpg') }}" alt="Author">
                            <div class="description">
                                <h5>Steven H. Paxson</h5>
                                <span>Eat: Chapli Kebab Platter</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="quote"><i class="flaticon-quote"></i></div>
                        <div class="text">Renowned for its versatility in the kitchen, Red King Crab can be prepared in various ways, from simple steaming or boiling to elaborate preparations such as grilling incorporating</div>
                        <div class="author">
                            <img src="{{ asset('/assets/images/testimonials/author2.jpg') }}" alt="Author">
                            <div class="description">
                                <h5>Steven H. Paxson</h5>
                                <span>Eat: Beef Kofta Platter</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="quote"><i class="flaticon-quote"></i></div>
                        <div class="text">Renowned for its versatility in the kitchen, Red King Crab can be prepared in various ways, from simple steaming or boiling to elaborate preparations such as grilling incorporating</div>
                        <div class="author">
                            <img src="{{ asset('/assets/images/testimonials/author3.jpg') }}" alt="Author">
                            <div class="description">
                                <h5>Steven H. Paxson</h5>
                                <span>Eat: Chicken/Beef Burrito</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="quote"><i class="flaticon-quote"></i></div>
                        <div class="text">Renowned for its versatility in the kitchen, Red King Crab can be prepared in various ways, from simple steaming or boiling to elaborate preparations such as grilling incorporating</div>
                        <div class="author">
                            <img src="{{ asset('/assets/images/testimonials/author1.jpg') }}" alt="Author">
                            <div class="description">
                                <h5>Steven H. Paxson</h5>
                                <span>Eat: Mix Gyro</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="quote"><i class="flaticon-quote"></i></div>
                        <div class="text">Renowned for its versatility in the kitchen, Red King Crab can be prepared in various ways, from simple steaming or boiling to elaborate preparations such as grilling incorporating</div>
                        <div class="author">
                            <img src="{{ asset('/assets/images/testimonials/author2.jpg') }}" alt="Author">
                            <div class="description">
                                <h5>Steven H. Paxson</h5>
                                <span>Eat: Halal Bacon Burger</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="quote"><i class="flaticon-quote"></i></div>
                        <div class="text">Renowned for its versatility in the kitchen, Red King Crab can be prepared in various ways, from simple steaming or boiling to elaborate preparations such as grilling incorporating</div>
                        <div class="author">
                            <img src="{{ asset('/assets/images/testimonials/author3.jpg') }}" alt="Author">
                            <div class="description">
                                <h5>Steven H. Paxson</h5>
                                <span>Eat: Fish Cutlet Sandwich</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonials-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/hero-shape4.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/tomato.png') }}" alt="Shape">
                </div>
            </div>
        </section>
        <!-- Testimonials Area end -->
        
        
        <!-- Call To Action Area start -->
        <section class="cta-area py-100 rel z-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-8">
                        <div class="cta-content">
                            <div class="section-title text-white mb-20">
                                <span class="sub-title mb-5">Need new experience?</span>
                                <h2>You can request for any new hala food!</h2>
                            </div>
                            <a href="{{ route('contact') }}" class="theme-btn style-two">get a quote <i class="far fa-arrow-alt-right"></i></a>
                            <div class="cta-badge" style="background-image: url(assets/images/shapes/cta-shape.png)">
                                <span>halal<br> certified</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cta-bg" style="background-image: url(assets/images/background/cta.jpg)"></div>
        </section>
        <!-- Call To Action Area end -->
        
        
        <!-- Dishes Area start -->
        {{-- <section class="dishes-area pt-130 rpt-100 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">popular dishes</span>
                            <h2>explore popular menus</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="product-item-two">
                            <div class="image">
                                <img src="{{ asset('/assets/images/dishes/dish1.png') }}" alt="Dish">
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
                                <h5><a href="{{ route('productDetails') }}">fresh chicken burger</a></h5>
                                <span class="price"><del>$50</del> $25</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="product-item-two">
                            <div class="image">
                                <img src="{{ asset('/assets/images/dishes/dish2.png') }}" alt="Dish">
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
                                <h5><a href="{{ route('productDetails') }}">pizza with mushrooms</a></h5>
                                <span class="price"><del>$50</del> $25</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="product-item-two">
                            <div class="image">
                                <img src="{{ asset('/assets/images/dishes/dish3.png') }}" alt="Dish">
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
                                <h5><a href="{{ route('productDetails') }}">double burger & fries</a></h5>
                                <span class="price"><del>$50</del> $25</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                        <div class="product-item-two">
                            <div class="image">
                                <img src="{{ asset('/assets/images/dishes/dish4.png') }}" alt="Dish">
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
                                <h5><a href="{{ route('productDetails') }}">fried chicken french</a></h5>
                                <span class="price"><del>$50</del> $25</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Dishes Area end -->
           
        
    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection
