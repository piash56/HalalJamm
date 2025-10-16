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
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Faq</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Faq</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- FAQ Area start -->
        <section class="faq-area pt-130 rpt-100 pb-120 rpb-90 rel z-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-content-part rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="section-title mb-50">
                                        <span class="sub-title mb-5">faqs</span>
                                        <h2>Have Any Questions On Mind frequently asked questions ?</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/about/faq.jpg') }}" alt="FAQ">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fpq-part" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <div class="accordion" id="faq-accordion">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                           What is your restaurant's cuisine or specialty?
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                            What are your hours of operation?
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem  accusantium doloremque laudanti totam rem aperiam eaque quae abillo inventore veritatis et quasi architecto beatae dicta sunt  explicaboemo enim ipsam</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                            Do you have a dress code?
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                            Can you accommodate dietary restrictions or food allergies?
                                        </button>
                                    </h5>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                            Do you have a corkage fee for bringing in our own wine?
                                        </button>
                                    </h5>
                                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                                            Do you have any special promotions or discounts?
                                        </button>
                                    </h5>
                                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
                                            How can I contact you for further inquiries?
                                        </button>
                                    </h5>
                                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEight">
                                            Do you have any current promotions or special offers?
                                        </button>
                                    </h5>
                                    <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseNine">
                                            Do you host private events or parties?
                                        </button>
                                    </h5>
                                    <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTen">
                                            What payment methods do you accept?
                                        </button>
                                    </h5>
                                    <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEleven">
                                            Can I bring my own wine, and is there a corkage fee?
                                        </button>
                                    </h5>
                                    <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwelve">
                                            Are pets allowed on the premises?
                                        </button>
                                    </h5>
                                    <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ Area end -->
        
        
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
        
        
        <!-- Food Category Area start -->
        <section class="food-category-area pb-90 rpb-65 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-7 col-lg-9">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">popular food category</span>
                            <h2>we provide amazing & Quality food for your good health</h2>
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
                                <h4><a href="{{ route('menuRestaurant') }}">Best Quality Food</a></h4>
                                <p>Sed ut perspiciatis unde omnis este natus sit voluptatem</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="featured-item">
                            <div class="icon">
                                <i class="flaticon-fast-delivery"></i>
                            </div>
                            <div class="content">
                                <h4><a href="{{ route('menuRestaurant') }}">fast food delivery</a></h4>
                                <p>Sed ut perspiciatis unde omnis este natus sit voluptatem</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="featured-item">
                            <div class="icon">
                                <i class="flaticon-cashback"></i>
                            </div>
                            <div class="content">
                                <h4><a href="{{ route('menuRestaurant') }}">money back guarantee</a></h4>
                                <p>Sed ut perspiciatis unde omnis este natus sit voluptatem</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Food Category Area end -->
            
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection