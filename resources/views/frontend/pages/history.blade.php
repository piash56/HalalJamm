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
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">our History</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">History</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- History Page About Area start -->
        <section class="history-page-about pt-130 rpt-100 pb-75 rpb-45 rel z-1">
            <div class="container">
                <div class="row gap-100 align-items-center">
                    <div class="col-xl-6">
                        <div class="history-about-image mb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('/assets/images/about/history.jpg') }}" alt="History">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="history-about-content mb-55" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mb-25">
                                <span class="sub-title mb-5">learn About wellfood</span>
                                <h2>we provide best Quality food for your good health</h2>
                            </div>
                            <p>This may involve coordinating with financial institutions, implementing new systems or processes, and providing ongoing support guidance</p>
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
        </section>
        <!-- History Page About Area end -->
         
         
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
        
        
        <!-- History Area start -->
        <section class="history-area pb-130 rpb-100 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-7 col-lg-9">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">learn About wellfood</span>
                            <h2>explore and discover our restaurant history</h2>
                        </div>
                    </div>
                </div>
                <div class="history-wrapper">
                    <div class="row no-gap">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="history-item-wrap">
                                <div class="history-item">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/history/history1.jpg') }}" alt="History">
                                    </div>
                                    <div class="content">
                                        <span class="year">1990</span>
                                        <h5>when we started restaurant</h5>
                                        <p>At our restaurant, we offer more than just meal we provide unforgettable culinary experience tantalizes the senses and creates memories</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <div class="history-item-wrap history-right">
                                <div class="history-item">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/history/history2.jpg') }}" alt="History">
                                    </div>
                                    <div class="content">
                                        <span class="year">2000</span>
                                        <h5>join our first award winning chef</h5>
                                        <p>At our restaurant, we offer more than just meal we provide unforgettable culinary experience tantalizes the senses and creates memories</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="history-item-wrap">
                                <div class="history-item">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/history/history3.jpg') }}" alt="History">
                                    </div>
                                    <div class="content">
                                        <span class="year">2003</span>
                                        <h5>we are now on fire</h5>
                                        <p>At our restaurant, we offer more than just meal we provide unforgettable culinary experience tantalizes the senses and creates memories</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <div class="history-item-wrap history-right">
                                <div class="history-item">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/history/history4.jpg') }}" alt="History">
                                    </div>
                                    <div class="content">
                                        <span class="year">2005</span>
                                        <h5>award winning restaurant</h5>
                                        <p>At our restaurant, we offer more than just meal we provide unforgettable culinary experience tantalizes the senses and creates memories</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="history-item-wrap">
                                <div class="history-item">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/history/history5.jpg') }}" alt="History">
                                    </div>
                                    <div class="content">
                                        <span class="year">2007</span>
                                        <h5>we have start globally</h5>
                                        <p>At our restaurant, we offer more than just meal we provide unforgettable culinary experience tantalizes the senses and creates memories</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <div class="history-item-wrap history-right">
                                <div class="history-item">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/history/history6.jpg') }}" alt="History">
                                    </div>
                                    <div class="content">
                                        <span class="year">2013</span>
                                        <h5>we have 50+ professional chef</h5>
                                        <p>At our restaurant, we offer more than just meal we provide unforgettable culinary experience tantalizes the senses and creates memories</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- History Area end -->
         
         
        <!-- Awards Area start -->
        <section class="awards-area pb-130 rpb-100 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-7 col-lg-9">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">Awards winning</span>
                            <h2>explore our achievement</h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gap justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="award-item">
                            <img src="{{ asset('/assets/images/awards/award1.png') }}" alt="Award">
                            <h5>World #1 restaurant</h5>
                            <span class="year">Awards - 1995</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="award-item">
                            <img src="{{ asset('/assets/images/awards/award2.png') }}" alt="Award">
                            <h5>World #1 restaurant</h5>
                            <span class="year">Awards - 2000</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="award-item">
                            <img src="{{ asset('/assets/images/awards/award3.png') }}" alt="Award">
                            <h5>World #1 restaurant</h5>
                            <span class="year">Awards - 2005</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                        <div class="award-item">
                            <img src="{{ asset('/assets/images/awards/award4.png') }}" alt="Award">
                            <h5>World #1 restaurant</h5>
                            <span class="year">Awards - 2008</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Awards Area end -->
            
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection