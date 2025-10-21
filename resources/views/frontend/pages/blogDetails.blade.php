@extends('frontend.layouts.app')
@section('title', 'Blog Details')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
       
          <!-- Page Banner Start -->
        <section class="page-banner-area overlay pt-215 rpt-150 pb-160 rpb-120 rel z-1 bgs-cover text-center" style="background-image: url(assets/images/background/banner.jpg);">
            <div class="container">
                <div class="banner-inner text-white">
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Blog details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Blog details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- Blog Area Start -->
        <section class="blog-details-area py-130 rpy-100">
            <div class="container container-1290">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details-wrap">
                            <div class="blog-item style-two">
                                <div class="image" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                    <img src="{{ asset('/assets/images/blog/blog-standard1.jpg') }}" alt="Blog Standard">
                                </div>
                                <div class="content" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
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
                                    <p>Nestled in the heart of [City Name], our restaurant offers a captivating  dining experience that tantalizes the senses and leaves a lasting  impression. From the moment you step through our doors, you are  enveloped in an ambiance that effortlessly blends sophistication with  warmth. Our menu, crafted with care by our team of talented chefs,  showcases a symphony of flavors, sourced from the freshest ingredients  and inspired by both traditional recipes and innovative techniques.  Whether you're craving a comforting classic or eager to embark on a  culinary adventure, our diverse selection caters to every palate.</p>
                                    <div class="row pt-20 pb-5">
                                        <div class="col-sm-6">
                                            <div class="image mb-30">
                                                <img src="{{ asset('/assets/images/blog/blog-middle1.jpg') }}" alt="Blog Middle">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="image mb-30">
                                                <img src="{{ asset('/assets/images/blog/blog-middle2.jpg') }}" alt="Blog Middle">
                                            </div>
                                        </div>
                                    </div>
                                    <p>Nestled in the heart of [City Name], our restaurant offers a captivating  dining experience that tantalizes the senses and leaves a lasting  impression. From the moment you step through our doors, you are  enveloped in an ambiance that effortlessly blends sophistication with  warmth. Our menu, crafted with care by our team</p>
                                </div>
                            </div>
                            
                            <blockquote class="mt-40 mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="text"><span>“</span> Create An Information Architecture That’s Easy To Use Way Precise Usability Considerations For Partially</div>
                                <div class="blockquote-footer">
                                    Ronald M. Spino
                                </div>
                            </blockquote>
                            
                            <div class="tag-share">
                                <div class="item" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                    <h6>Popular Tag : </h6>
                                    <div class="tags">
                                        <a href="{{ route('blog') }}">Restaurant</a>
                                        <a href="{{ route('blog') }}">Food</a>
                                        <a href="{{ route('blog') }}">Stalls</a>
                                    </div>
                                </div>
                                <div class="item" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                                    <h6>Share News</h6>
                                    <div class="social-style-one">
                                        <a href="{{ route('contact') }}"><i class="fab fa-twitter"></i></a>
                                        <a href="{{ route('contact') }}"><i class="fab fa-facebook-f"></i></a>
                                        <a href="{{ route('contact') }}"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="admin-comment bgc-lighter mt-30" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="comment-body">
                                    <div class="author-thumb">
                                        <img src="{{ asset('/assets/images/blog/admin-comment.jpg') }}" alt="Author">
                                    </div>
                                    <div class="content">
                                        <h4>Thomas B. Gibson</h4>
                                        <span class="author">Author</span>
                                        <p>Dictum tellus massa congue sapien mollis suspende preti alesuada enim vitae dignissim. Seds mattis adipiscineg lectusey consecteture</p>
                                        <div class="social-icons">
                                            <a href="{{ route('contact') }}"><i class="fab fa-facebook-f"></i></a>
                                            <a href="{{ route('contact') }}"><i class="fab fa-twitter"></i></a>
                                            <a href="{{ route('contact') }}"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="{{ route('contact') }}"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="next-prev-blog pt-45 pb-15">
                                <div class="item" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/blog/prev-post.jpg') }}" alt="News">
                                    </div>
                                    <div class="content">
                                        <span class="date">April 25, 2024</span>
                                        <h6><a href="{{ route('blogDetails') }}">Savor & Share Culinary Chronicles Gazette Tales from the Table</a></h6>
                                    </div>
                                </div>
                                <div class="item" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/blog/next-post.jpg') }}" alt="News">
                                    </div>
                                    <div class="content">
                                        <span class="date">April 25, 2024</span>
                                        <h6><a href="{{ route('blogDetails') }}">Savor & Share Culinary Chronicles Gazette Tales from the Table</a></h6>
                                    </div>
                                </div>
                            </div>
                            
                            <hr class="mb-95">
                            
                            <h3 class="comment-title">Comments (3)</h3>
                            <div class="comments rattings mt-25" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="comment-body">
                                    <div class="author-thumb">
                                        <img src="{{ asset('/assets/images/products/product-comment1.jpg') }}" alt="Author">
                                    </div>
                                    <div class="content">
                                        <ul class="comment-header">
                                            <li>
                                                <h6>Daniel A. Hayes</h6>
                                            </li>
                                            <li>15 Jan 2024</li>
                                        </ul>
                                        <p>SaaS, or Software as a Service, is a cloud-based software delivery model where applications are hosted by a third-party provider and accessed via the internet offers benefits such</p>
                                        <a href="#" class="read-more">reply <i class="far fa-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                                <div class="comment-body comment-child">
                                    <div class="author-thumb">
                                        <img src="{{ asset('/assets/images/blog/blog-comment2.jpg') }}" alt="Author">
                                    </div>
                                    <div class="content">
                                        <ul class="comment-header">
                                            <li>
                                                <h6>Daniel A. Hayes</h6>
                                            </li>
                                            <li>15 Jan 2024</li>
                                        </ul>
                                        <p>SaaS, or Software as a Service, is a cloud-based software delivery mode applications are hosted by a third-party provider and accessed via the internet</p>
                                        <a href="#" class="read-more">reply <i class="far fa-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                                <div class="comment-body">
                                    <div class="author-thumb">
                                        <img src="{{ asset('/assets/images/blog/blog-comment3.jpg') }}" alt="Author">
                                    </div>
                                    <div class="content">
                                        <ul class="comment-header">
                                            <li>
                                                <h6>Daniel A. Hayes</h6>
                                            </li>
                                            <li>15 Jan 2024</li>
                                        </ul>
                                        <p>SaaS, or Software as a Service, is a cloud-based software delivery model where applications are hosted by a third-party provider and accessed via the internet offers benefits such</p>
                                        <a href="#" class="read-more">reply <i class="far fa-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            <hr class="mt-90 mb-90">
                            
                            <h3 class="comment-title">Send us comments</h3>
                            <form id="comment-form" class="comment-form mt-30" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" name="comment-form" action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="full-name" name="full-name" class="form-control" value="" placeholder="Full Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" id="blog-email" name="blog-email" class="form-control" value="" placeholder="Email Address" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Add comments" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="theme-btn">Send Comments <i class="far fa-arrow-alt-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
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