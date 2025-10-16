@extends('frontend.layouts.app')
@section('title', 'Chef Details')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
       
        
         <!-- Page Banner Start -->
        <section class="page-banner-area overlay pt-215 rpt-150 pb-150 rpb-100 rel z-1 bgs-cover text-center" style="background-image: url(assets/images/background/banner.jpg);">
            <div class="container">
                <div class="banner-inner text-white">
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Chef Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Chef Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- Chef Details Area start -->
        <section class="chef-details-area pt-130 rpt-100 pb-75 rpb-45 rel z-1">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-5 col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="chef-image-part mb-55">
                            <img src="{{ asset('/assets/images/chefs/chef-details.jpg') }}" alt="Chef">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="chef-content-part mb-55">
                            <div class="section-title mb-30 rmb-5">
                                <h2>Tonia P. Desilva</h2>
                                <span class="designations">Senior Chef</span>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem  accusantium doloremque laudanti totam rem aperiam eaque ipsa quae abillo inventore veritatis et quasi architecto beatae vitae dicta sunt  explicaboemo enim ipsam voluptatem quia voluptas sit aspernatur aut  odit aut fugit, sed quia</p>
                            <h4 class="mt-55 rmt-5">Follow</h4>
                            <div class="social-style-one mt-15 rmt-5">
                                <a href="{{ route('contact') }}"><i class="fab fa-twitter"></i></a>
                                <a href="{{ route('contact') }}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ route('contact') }}"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="chef-skill-part mb-55">
                            <div class="counter-item style-three counter-text-wrap">
                                <div class="icon"><i class="flaticon-happiness"></i></div>
                                <div class="content">
                                    <span class="count-text k-plus" data-speed="3000" data-stop="34">0</span>
                                    <span class="counter-title">Happy Customers</span>
                                </div>
                            </div>
                            <div class="counter-item style-three counter-text-wrap">
                                <div class="icon"><i class="flaticon-medal"></i></div>
                                <div class="content">
                                    <span class="count-text plus" data-speed="3000" data-stop="356">0</span>
                                    <span class="counter-title">Awards Winning</span>
                                </div>
                            </div>
                            <div class="counter-item style-three counter-text-wrap">
                                <div class="icon"><i class="flaticon-rate"></i></div>
                                <div class="content">
                                    <span class="count-text m-plus" data-speed="3000" data-stop="1">0</span>
                                    <span class="counter-title">5 Star Rating</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Chef Details Area end -->
        
        
        <!-- Skills Area start -->
        <section class="skills-area pb-65 rpb-35 rel z-1">
            <div class="container">
                <div class="row gap-100 align-items-center">
                    <div class="col-lg-6">
                        <div class="skill-area-content mb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mb-25">
                                <span class="sub-title mb-5">professional skills</span>
                                <h2>We Have Lot’s Of Experience restaurant services</h2>
                            </div>
                            <p>Sed ut perspiciatis unde omnis natus voluptatem  accusantium doloremque laudanti totam rem aperiam eaque ipsa quae abillo inventore veritatis et quasi architecto beatae vitae dicta explicaboemo enim ipsam voluptatem</p>
                            <div class="row no-gap justify-content-between">
                                <div class="col-sm-4 col-6">
                                    <div class="history-progress style-two one">
                                        <span class="counting">0</span>
                                        <h3>Fast Foods</h3>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-6">
                                    <div class="history-progress style-two two">
                                        <span class="counting">0</span>
                                        <h3>Coffee Items</h3>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-6">
                                    <div class="history-progress style-two three">
                                        <span class="counting">0</span>
                                        <h3>Drink or juice</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="skill-section-image text-lg-end mb-55" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('/assets/images/about/skills.jpg') }}" alt="Skills">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Skills Area end -->
        
        
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
        
        
        <!-- Booking Table Area start -->
        <section class="booking-table-area pb-130 rpb-100 rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="booking-table-content style-three rmb-55">
                            <div class="section-title mb-25">
                                <span class="sub-title mb-5">Have any lunch or dinner plan ?</span>
                                <h2>We Offer quality food for lunch & dinner</h2>
                            </div>
                            <p>Sed ut perspiciatis unde natus voluptatem  accusantium doloremque laudanti totam rem aperiam eaque ipsa quae abillo inventore veritatis architecto beatae vitae</p>
                            <div class="contact--number pt-20">
                                <div class="icon"><i class="fas fa-phone"></i></div>
                                <div class="number">
                                    <span class="title">Contact Us</span>
                                    <a href="{{ url('callto:+00012345688') }}">+000 123 456 88</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="booking-table-form mb-0" style="background-image: url(assets/images/background/form-bg.png)">
                           <div class="section-title">
                                <h2>Send us message</h2>
                            </div>
                            <p>Enjoy your food to book your table</p>
                            <form id="booking-form" class="booking-form mt-25" name="booking-form" method="post">
                                <div class="row gap-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" class="form-control" value="" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" class="form-control" value="" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="number" name="number" class="form-control" value="" placeholder="Phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="subject" name="subject" class="form-control" value="" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="message" name="message" class="form-control" placeholder="Write message" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="theme-btn">Send message <i class="far fa-arrow-alt-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Booking Table Area end -->
        
         

            <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection