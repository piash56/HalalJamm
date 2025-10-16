@extends('frontend.layouts.app')
@section('title', 'All Menus')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area overlay pt-215 rpt-150 pb-160 rpb-120 rel z-1 bgs-cover text-center" style="background-image: url(assets/images/background/banner.jpg);">
            <div class="container">
                <div class="banner-inner text-white">
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">halaljamm all menus</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">All Menus</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

        
        <!-- All Menus Area start -->
        <section class="popular-menu-area pt-105 rpt-85 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">our menus</span>
                            <h2>order what you love! we take delivery responsibility to your home</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 z-3" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="food-item">
                            <div class="content">
                                <div class="name-desc">
                                    <h5>Chicken Gyro</h5>
                                    <p>Served with lettuce, tomato, onion and your choice of sauce</p>
                                </div>
                                <div class="price">
                                    <span>$7.99</span>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/food/food1.png') }}" alt="Food Image">
                            </div>
                        </div>
                        <div class="food-item">
                            <div class="content">
                                <div class="name-desc">
                                    <h5>Chicken Kofta Gyro</h5>
                                    <p>Served with lettuce, tomato, onion and your choice of sauce</p>
                                </div>
                                <div class="price">
                                    <span>$7.99</span>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/food/food1.png') }}" alt="Food Image">
                            </div>
                        </div>
                        <div class="food-item">
                            <div class="content">
                                <div class="name-desc">
                                    <h5>Chicken/Beef Burrito</h5>
                                    <p>Served with lettuce, tomato, onion and your choice of sauce</p>
                                </div>
                                <div class="price">
                                    <span>$8.50</span>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/food/food1.png') }}" alt="Food Image">
                            </div>
                        </div>
                        <div class="food-item">
                            <div class="content">
                                <div class="name-desc">
                                    <h5>Falafel Gyro</h5>
                                    <p>Served with lettuce, tomato, onion and your choice of sauce</p>
                                </div>
                                <div class="price">
                                    <span>$7.99</span>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/food/food1.png') }}" alt="Food Image">
                            </div>
                        </div>
                        <div class="food-item mb-30">
                            <div class="content">
                                <div class="name-desc">
                                    <h5>Fish Gyro</h5>
                                    <p>Served with lettuce, tomato, onion and your choice of sauce</p>
                                </div>
                                <div class="price">
                                    <span>$7.99</span>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/food/food1.png') }}" alt="Food Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 z-2" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="food-item">
                            <div class="content">
                                <div class="name-desc">
                                    <h5>Beef Kofta Platter</h5>
                                    <p>Native to the icy waters of the Pacific</p>
                                </div>
                                <div class="price">
                                    <span>$13.25</span>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/food/food1.png') }}" alt="Food Image">
                            </div>
                        </div>
                        <div class="food-item">
                            <div class="content">
                                <div class="name-desc">
                                    <h5>Chapli Kebab Platter</h5>
                                    <p>Native to the icy waters of the Pacific</p>
                                </div>
                                <div class="price">
                                    <span>$13.25</span>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/food/food1.png') }}" alt="Food Image">
                            </div>
                        </div>
                        <div class="food-item">
                            <div class="content">
                                <div class="name-desc">
                                    <h5>Chicken & Beef Kofta Platter</h5>
                                    <p>Native to the icy waters of the Pacific</p>
                                </div>
                                <div class="price">
                                    <span>$13.25</span>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/food/food1.png') }}" alt="Food Image">
                            </div>
                        </div>
                        <div class="food-item">
                            <div class="content">
                                <div class="name-desc">
                                    <h5>Mixed Tikka Platter</h5>
                                    <p>Native to the icy waters of the Pacific</p>
                                </div>
                                <div class="price">
                                    <span>$13.25</span>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/food/food1.png') }}" alt="Food Image">
                            </div>
                        </div>
                        <div class="food-item mb-30">
                            <div class="content">
                                <div class="name-desc">
                                    <h5>Shish Kebab Platter</h5>
                                    <p>Native to the icy waters of the Pacific</p>
                                </div>
                                <div class="price">
                                    <span>$13.25</span>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/food/food1.png') }}" alt="Food Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 z-1" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="food-item">
                            <div class="content">
                                <div class="name-desc">
                                    <h5>Chicken Burger</h5>
                                    <p>Native to the icy waters of the Pacific</p>
                                </div>
                                <div class="price">
                                    <span>$8.25</span>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/food/food1.png') }}" alt="Food Image">
                            </div>
                        </div>
                        <div class="food-item">
                            <div class="content">
                                <div class="name-desc">
                                    <h5>Falafel Burger</h5>
                                    <p>Native to the icy waters of the Pacific</p>
                                </div>
                                <div class="price">
                                    <span>$8.25</span>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/food/food1.png') }}" alt="Food Image">
                            </div>
                        </div>
                        <div class="food-item">
                            <div class="content">
                                <div class="name-desc">
                                    <h5>Halal Bacon Burger</h5>
                                    <p>Native to the icy waters of the Pacific</p>
                                </div>
                                <div class="price">
                                    <span>$8.25</span>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/food/food1.png') }}" alt="Food Image">
                            </div>
                        </div>
                        <div class="food-item">
                            <div class="content">
                                <div class="name-desc">
                                    <h5>Jammin Burger</h5>
                                    <p>Native to the icy waters of the Pacific</p>
                                </div>
                                <div class="price">
                                    <span>$8.25</span>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/food/food1.png') }}" alt="Food Image">
                            </div>
                        </div>
                        <div class="food-item mb-30">
                            <div class="content">
                                <div class="name-desc">
                                    <h5>Spicy Halal House Burger</h5>
                                    <p>Native to the icy waters of the Pacific</p>
                                </div>
                                <div class="price">
                                    <span>$8.25</span>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/food/food1.png') }}" alt="Food Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- All Menus Area End -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection