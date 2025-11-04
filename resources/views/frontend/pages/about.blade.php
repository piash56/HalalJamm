@extends('frontend.layouts.app')
@section('title', 'About us')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
       
        
        <!-- Page Banner Start -->
        <section class="page-banner-area overlay pt-215 rpt-150 pb-160 rpb-120 rel z-1 bgs-cover text-center" style="background-image: url(assets/images/background/banner.jpg);">
            <div class="container">
                <div class="banner-inner text-white">
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">About halaljamm</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- About Us Area start -->
        <section class="about-us-area-four pt-130 rpt-100 pb-85 rpb-55 rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-us-content ms-0 rmb-25" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mb-25">
                                <span class="sub-title mb-5">know About halaljamm</span>
                                <h2>We Offer best halal food That Customers Needs</h2>
                            </div>
                            <p>Welcome too halaljamm restaurant, where culinary excellence meets warm hospitality in every dish we serve. Nestled in the heart of City Name our eatery invites you on a journey</p>
                            <a href="{{ route('about') }}" class="theme-btn mt-25 mb-60">learn more us <i class="far fa-arrow-alt-right"></i></a>
                            <div class="row">
                                <div class="col-sm-4 col-6">
                                    <div class="counter-item style-two counter-text-wrap">
                                        <span class="count-text k-plus" data-speed="1000" data-stop="2">0</span>
                                        <span class="counter-title">Happy Customers</span>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-6">
                                    <div class="counter-item style-two counter-text-wrap">
                                        <span class="count-text plus" data-speed="2000" data-stop="5">0</span>
                                        <span class="counter-title">Passionate Chef’s</span>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-6">
                                    <div class="counter-item style-two counter-text-wrap">
                                        <span class="count-text plus" data-speed="3000" data-stop="53">0</span>
                                        <span class="counter-title">Our Dishes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image-four style-two mb-30" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <div class="row">
                                <div class="col">
                                    <img src="{{ asset('/assets/images/about/about-four1.jpg') }}" alt="About">
                                </div>
                                <div class="col mt-80">
                                    <img src="{{ asset('/assets/images/about/about-four2.jpg') }}" alt="About">
                                </div>
                            </div>
                            <div class="badge"><img src="{{ asset('/assets/images/about/about-four-badge.jpg') }}" alt="Badge"></div>
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
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">halal food</span>
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
                    <img src="{{ asset('/assets/images/shapes/tomato.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/burger.png') }}" alt="Shape">
                </div>
            </div>
        </div>
        <!-- Headline Area end -->
        
        
        <!-- Food Category Area start -->
        <section class="food-category-area pb-90 rpb-65 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-7 col-lg-9">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h2>we provide halal & Quality food for your good health</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="featured-item">
                            <div class="icon">
                                <i class="flaticon-recommended-food"></i>
                            </div>
                            <div class="content">
                                <h4><a href="">halal certified</a></h4>
                                <p>We offer best quality halal food that customers need</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="featured-item">
                            <div class="icon">
                                <i class="flaticon-fast-delivery"></i>
                            </div>
                            <div class="content">
                                <h4><a href="">fast food delivery</a></h4>
                                <p>We are partner with best delivery agent, who deliver faster</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="featured-item">
                            <div class="icon">
                                <i class="flaticon-cashback"></i>
                            </div>
                            <div class="content">
                                <h4><a href="{{ route('menuRestaurant') }}">100% natural food</a></h4>
                                <p>Everyday we provide new foods as per customers needs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Food Category Area end -->
        
        
        
        <!-- Booking Table Area start -->
        <section class="booking-table-area-two bgs-cover py-100 rel z-1 overlay" style="background-image: url(assets/images/background/booking-table-two.jpg);">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="booking-table-form mb-0" style="background-image: url(assets/images/background/form-bg.png)">
                           <div class="section-title">
                                <h2>book a table</h2>
                            </div>
                            <p>Enjoy your food with a reservation</p>
                            <form id="booking-form" class="booking-form mt-25" name="booking-form" method="post">
                                <div class="row gap-20">
                                    <div class="col-md-12 mb-20">
                                        <div class="form-group">
                                            <select name="person" id="person">
                                                <option value="option2">2 Person</option>
                                                <option value="option3">3 Person</option>
                                                <option value="option4">4 Person</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="date"><i class="far fa-calendar-alt"></i></label>
                                            <input type="text" id="date" name="date" class="form-control" value="" placeholder="Date" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="time"><i class="far fa-clock"></i></label>
                                            <input type="text" id="time" name="time" class="form-control" value="" placeholder="Time" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="theme-btn">book your table <i class="far fa-arrow-alt-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="booking-table-content style-two rmt-55">
                           <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>
                            <div class="section-title mt-50 text-white mb-50">
                                <h2>We Offer quality service That Customers Needs for health food</h2>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Booking Table Area end -->
        
        
        <!-- Chefs Area start -->
        <section class="chefs-area pt-130 rpt-100 pb-55 rpb-30 rel z-1">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Chefs Area end -->

        
        <!-- Headline area start -->
        <div class="headline-area bgc-lighter pt-120 rpt-90 rel z-2">
            <span class="marquee-wrap">
               <span class="marquee-inner left">
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">our Testimonials</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">best shawarma</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">our Testimonials</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">best shawarma</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">delicious foods</span>
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
        <section class="testimonials-area bgc-lighter pt-105 rpt-85 pb-130 rpb-100 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
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
            
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection