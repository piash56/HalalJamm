@extends('frontend.layouts.app')
@section('title', 'Shop')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
       
        <!-- Page Banner Start -->
        <section class="page-banner-area overlay pt-215 rpt-150 pb-160 rpb-120 rel z-1 bgs-cover text-center" style="background-image: url(assets/images/background/banner.jpg);">
            <div class="container">
                <div class="banner-inner text-white">
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Shop With sidebar</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Shop With sidebar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- Shop Area Start -->
        <section class="shop-area py-130 rpy-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-8">
                        <div class="shop-sidebar rmb-75">
                            <div class="widget widget-search" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h4 class="widget-title">Search</h4>
                                <form action="#" class="default-search-form">
                                    <input type="text" placeholder="Search here" required>
                                    <button type="submit" class="searchbutton far fa-search"></button>
                                </form>
                            </div>
                            <div class="widget widget-category" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                                <h4 class="widget-title">Category</h4>
                                <ul>
                                    <li><a href="{{ route('shop') }}">Beef & Chicken Hamburger <span class="count">8</span></a></li>
                                    <li><a href="{{ route('shop') }}">Italian Pizza <span class="count">3</span></a></li>
                                    <li><a href="{{ route('shop') }}">Sandwich <span class="count">5</span></a></li>
                                    <li><a href="{{ route('shop') }}">Chicken Roll <span class="count">2</span></a></li>
                                    <li><a href="{{ route('shop') }}">Soup <span class="count">5</span></a></li>
                                </ul>
                            </div>
                            <div class="widget widget-filter" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                                <h4 class="widget-title">Pricing</h4>
                                <div class="price-filter-wrap">
                                    <div class="price-slider-range"></div>
                                    <div class="price">
                                        <span>Price </span>
                                        <input type="text" id="price" readonly>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="widget widget-products" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h4 class="widget-title">Best Seller</h4>
                                <ul>
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/widgets/product1.jpg') }}" alt="Product">
                                        </div>
                                        <div class="content">
                                            <div class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h6><a href="{{ route('productDetails') }}">Vegetable Hamburger</a></h6>
                                            <span class="price">$58.63</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/widgets/product2.jpg') }}" alt="Product">
                                        </div>
                                        <div class="content">
                                            <div class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h6><a href="{{ route('productDetails') }}">Italian Chicken Pizza</a></h6>
                                            <span class="price">$83.25</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/widgets/product3.jpg') }}" alt="Product">
                                        </div>
                                        <div class="content">
                                            <div class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h6><a href="{{ route('productDetails') }}">Crab Seafood sauce</a></h6>
                                            <span class="price">$83.25</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-tag-cloud" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h4 class="widget-title">Popular Tags</h4>
                                <div class="tag-coulds">
                                    <a href="{{ route('shop') }}">Spicy</a>
                                    <a href="{{ route('shop') }}">Seafoods</a>
                                    <a href="{{ route('shop') }}">Burger</a>
                                    <a href="{{ route('shop') }}">Pizza</a>
                                    <a href="{{ route('shop') }}">Soup</a>
                                    <a href="{{ route('shop') }}">Crap</a>
                                    <a href="{{ route('shop') }}">Juice</a>
                                    <a href="{{ route('shop') }}">Bread</a>
                                </div>
                            </div>
                            
                            <div class="widget widget-banner" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="category-banner-item" style="background-image: url(assets/images/widgets/banner-bg.jpg);">
                                    <span class="price">only $59</span>
                                    <h3>SPECIALTY PIZZAS</h3>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(5k)</span>
                                    </div>
                                    <a href="{{ route('shop') }}" class="theme-btn style-two">Order now <i class="far fa-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="shop-page-wrap">
                            <div class="shop-shorter rel z-3 mb-35">
                                <div class="sort-text mb-15" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                    Showing 1–12 of 27 results
                                </div>
                                <div class="products-dropdown mb-15" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                                    <select>
                                        <option value="default" selected="">Default Sorting</option>
                                        <option value="new">Newness Sorting</option>
                                        <option value="old">Oldest Sorting</option>
                                        <option value="hight-to-low">High To Low</option>
                                        <option value="low-to-high">Low To High</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
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
                                        <a href="{{ route('shop') }}" class="theme-btn">add to cart <i class="far fa-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
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
                                        <a href="{{ route('shop') }}" class="theme-btn">add to cart <i class="far fa-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
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
                                        <a href="{{ route('shop') }}" class="theme-btn">add to cart <i class="far fa-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="product-item-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/dishes/dish5.png') }}" alt="Dish">
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
                                            <h5><a href="{{ route('productDetails') }}">Italian beef pizza</a></h5>
                                            <span class="price"><del>$50</del> $25</span>
                                        </div>
                                        <a href="{{ route('shop') }}" class="theme-btn">add to cart <i class="far fa-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="product-item-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/dishes/dish6.png') }}" alt="Dish">
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
                                            <h5><a href="{{ route('productDetails') }}">fried chicken burger</a></h5>
                                            <span class="price"><del>$50</del> $25</span>
                                        </div>
                                        <a href="{{ route('shop') }}" class="theme-btn">add to cart <i class="far fa-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
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
                                        <a href="{{ route('shop') }}" class="theme-btn">add to cart <i class="far fa-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="product-item-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/dishes/dish7.png') }}" alt="Dish">
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
                                        <a href="{{ route('shop') }}" class="theme-btn">add to cart <i class="far fa-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="product-item-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/dishes/dish8.png') }}" alt="Dish">
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
                                            <h5><a href="{{ route('productDetails') }}">fried chicken drench</a></h5>
                                            <span class="price"><del>$50</del> $25</span>
                                        </div>
                                        <a href="{{ route('shop') }}" class="theme-btn">add to cart <i class="far fa-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="product-item-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/dishes/dish9.png') }}" alt="Dish">
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
                                            <h5><a href="{{ route('productDetails') }}">roasted chicken</a></h5>
                                            <span class="price"><del>$50</del> $25</span>
                                        </div>
                                        <a href="{{ route('shop') }}" class="theme-btn">add to cart <i class="far fa-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="product-item-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/dishes/dish10.png') }}" alt="Dish">
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
                                            <h5><a href="{{ route('productDetails') }}">Italian beef pizza</a></h5>
                                            <span class="price"><del>$50</del> $25</span>
                                        </div>
                                        <a href="{{ route('shop') }}" class="theme-btn">add to cart <i class="far fa-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="product-item-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/dishes/dish11.png') }}" alt="Dish">
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
                                            <h5><a href="{{ route('productDetails') }}">Italian beef pizza</a></h5>
                                            <span class="price"><del>$50</del> $25</span>
                                        </div>
                                        <a href="{{ route('shop') }}" class="theme-btn">add to cart <i class="far fa-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="product-item-two">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/dishes/dish12.png') }}" alt="Dish">
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
                                            <h5><a href="{{ route('productDetails') }}">top fried chicken</a></h5>
                                            <span class="price"><del>$50</del> $25</span>
                                        </div>
                                        <a href="{{ route('shop') }}" class="theme-btn">add to cart <i class="far fa-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagination pt-30 flex-wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <li class="page-item disabled">
                                    <span class="page-link"><i class="fal fa-arrow-left"></i></span>
                                </li>
                                <li class="page-item active">
                                    <span class="page-link">
                                        1
                                        <span class="sr-only">(current)</span>
                                    </span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fal fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shop Area End -->

            <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection