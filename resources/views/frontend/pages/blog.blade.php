@extends('frontend.layouts.app')
@section('title', 'Blog')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
       
        
        <!-- Page Banner Start -->
        <section class="page-banner-area overlay pt-215 rpt-150 pb-160 rpb-120 rel z-1 bgs-cover text-center" style="background-image: url(assets/images/background/banner.jpg);">
            <div class="container">
                <div class="banner-inner text-white">
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Blog standard</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Blog standard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- Blog Area Start -->
        <section class="blog-page-area py-130 rpy-100">
            <div class="container container-1290">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-standard-wrap">
                            <div class="blog-item style-two" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <img src="{{ asset('/assets/images/blog/blog-standard1.jpg') }}" alt="Blog Standard">
                                </div>
                                <div class="content">
                                    <ul class="blog-meta-two">
                                        <li>
                                            <a href="#">Quality Food</a>
                                        </li>
                                        <li>
                                            <a href="#">March 25, 2024</a>
                                        </li>
                                        <li>
                                            <a href="#">comments (5)</a>
                                        </li>
                                    </ul>
                                    <h3><a href="{{ route('blogDetails') }}">Culinary Chronicle Exploring Gastronomic Wonders at food king Restaurant</a></h3>
                                    <p>Restaurant where culinary excellence meet hospitality Sure! Here are some frequently asked questions (FAQs) that a restaurant  might include on its website or in its informational materials</p>
                                    <a href="{{ route('blogDetails') }}" class="theme-btn">Read more <i class="far fa-arrow-alt-right"></i></a>
                                </div>
                            </div>
                            
                            <blockquote class="mt-40 mb-45" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="text"><span>“</span> Resilience, Flexibility Immediacy Working With Headless Systems Google Analyze Compare Changer Browser Back/Forward</div>
                                <div class="blockquote-footer">
                                    Martin M. Nordquist
                                </div>
                            </blockquote>
                            
                            <div class="blog-item style-two" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <img src="{{ asset('/assets/images/blog/blog-standard2.jpg') }}" alt="Blog Standard">
                                </div>
                                <div class="content">
                                    <ul class="blog-meta-two">
                                        <li>
                                            <a href="#">Quality Food</a>
                                        </li>
                                        <li>
                                            <a href="#">March 25, 2024</a>
                                        </li>
                                        <li>
                                            <a href="#">comments (5)</a>
                                        </li>
                                    </ul>
                                    <h3><a href="{{ route('blogDetails') }}">Culinary Chronicle Exploring Gastronomic Wonders at food king Restaurant</a></h3>
                                    <p>Restaurant where culinary excellence meet hospitality Sure! Here are some frequently asked questions (FAQs) that a restaurant  might include on its website or in its informational materials</p>
                                    <a href="{{ route('blogDetails') }}" class="theme-btn">Read more <i class="far fa-arrow-alt-right"></i></a>
                                </div>
                            </div>
                            
                            <blockquote class="mt-40 mb-45" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="text"><span>“</span> Resilience, Flexibility Immediacy Working With Headless Systems Google Analyze Compare Changer Browser Back/Forward</div>
                                <div class="blockquote-footer">
                                    Martin M. Nordquist
                                </div>
                            </blockquote>
                            
                            <div class="blog-item style-two" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <img src="{{ asset('/assets/images/blog/blog-standard3.jpg') }}" alt="Blog Standard">
                                </div>
                                <div class="content">
                                    <ul class="blog-meta-two">
                                        <li>
                                            <a href="#">Quality Food</a>
                                        </li>
                                        <li>
                                            <a href="#">March 25, 2024</a>
                                        </li>
                                        <li>
                                            <a href="#">comments (5)</a>
                                        </li>
                                    </ul>
                                    <h3><a href="{{ route('blogDetails') }}">Culinary Chronicle Exploring Gastronomic Wonders at food king Restaurant</a></h3>
                                    <p>Restaurant where culinary excellence meet hospitality Sure! Here are some frequently asked questions (FAQs) that a restaurant  might include on its website or in its informational materials</p>
                                    <a href="{{ route('blogDetails') }}" class="theme-btn">Read more <i class="far fa-arrow-alt-right"></i></a>
                                </div>
                            </div>

                            <ul class="pagination pt-10 flex-wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fal fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="main-sidebar rmt-75">
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
                                    <li><a href="{{ route('blog') }}">Beef & Chicken Hamburger <span class="count">8</span></a></li>
                                    <li><a href="{{ route('blog') }}">Italian Pizza <span class="count">3</span></a></li>
                                    <li><a href="{{ route('blog') }}">Sandwich <span class="count">5</span></a></li>
                                    <li><a href="{{ route('blog') }}">Chicken Roll <span class="count">2</span></a></li>
                                    <li><a href="{{ route('blog') }}">Soup <span class="count">5</span></a></li>
                                </ul>
                            </div>
                            
                            <div class="widget widget-recent-news" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                                <h4 class="widget-title">Recent news</h4>
                                <ul>
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/widgets/news1.jpg') }}" alt="News">
                                        </div>
                                        <div class="content">
                                            <span class="date">April 25, 2024</span>
                                            <h6><a href="{{ route('blogDetails') }}">Savor & Share Culinary Chronicles Gastronomic Gazette Tales from the Table</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/widgets/news2.jpg') }}" alt="News">
                                        </div>
                                        <div class="content">
                                            <span class="date">April 25, 2024</span>
                                            <h6><a href="{{ route('blogDetails') }}">Savor & Share Culinary Chronicles Gastronomic Gazette Tales from the Table</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/widgets/news3.jpg') }}" alt="News">
                                        </div>
                                        <div class="content">
                                            <span class="date">April 25, 2024</span>
                                            <h6><a href="{{ route('blogDetails') }}">Savor & Share Culinary Chronicles Gastronomic Gazette Tales from the Table</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/widgets/news4.jpg') }}" alt="News">
                                        </div>
                                        <div class="content">
                                            <span class="date">April 25, 2024</span>
                                            <h6><a href="{{ route('blogDetails') }}">Savor & Share Culinary Chronicles Gastronomic Gazette Tales from the Table</a></h6>
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
                                    <a href="https://halal-jamm-queens.cloveronline.com/menu/all" target="_blank" class="theme-btn style-two">Order now <i class="far fa-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
        

            <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection