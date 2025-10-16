@extends('frontend.layouts.app')
@section('title', 'Product details')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
       
        
       <!-- Page Banner Start -->
        <section class="page-banner-area overlay pt-215 rpt-150 pb-160 rpb-120 rel z-1 bgs-cover text-center" style="background-image: url(assets/images/background/banner.jpg);">
            <div class="container">
                <div class="banner-inner text-white">
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">single product</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">single product</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- Product Details Start -->
        <section class="product-details pb-10 pt-130 rpt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="product-details-image rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('/assets/images/products/product-details.jpg') }}" alt="Product Details">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details-content" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title">
                                <h2>Italian beef pizza</h2>
                            </div>
                            <span class="price mb-15">$58.63</span>
                            <div class="ratting mb-40">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>4.9(Customer Reivews)</span>
                            </div>
                            <p>Quis ipsum sed et proin sit aliquet in quis aliqu ullamcorper sollicitudin quis ut sedorbi dui porttitor duis porttitore fringilla. Estauris purus vita volutpat. Estorem felis mau libero nisi. Rhoncus phasellus facilisi praesent venenatis</p>
                            <form action="#" class="add-to-cart py-25">
                                <h5>Quantity</h5>
                                <input type="number" value="2" min="1" max="20" onchange="if(parseInt(this.value,10)<10)this.value='0'+this.value;" required>
                                <button type="submit" class="theme-btn mb-15">Add to Cart <i class="far fa-arrow-alt-right"></i></button>
                            </form>
                            <ul class="category-tags pt-20 pb-30">
                                <li>
                                    <h6>Categories</h6> :
                                    <a href="#">Restaurant</a>
                                </li>
                                <li>
                                    <h6>Tags </h6> :
                                    <a href="#">Pizza</a>
                                    <a href="#">Burger</a>
                                    <a href="#">Soup</a>
                                </li>
                            </ul>
                            <div class="social-style-one">
                                <h5>Share</h5>
                                <a href="{{ route('contact') }}"><i class="fab fa-twitter"></i></a>
                                <a href="{{ route('contact') }}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ route('contact') }}"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav nav tab-style-one mt-125 rmt-95 mb-40" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <li><a href="{{ url('#details') }}" data-bs-toggle="tab" class="active show">Descrptions</a></li>
                    <li><a href="{{ url('#information') }}" data-bs-toggle="tab">Additional Information's</a></li>
                    <li><a href="{{ url('#reviews') }}" data-bs-toggle="tab">Reviews(3)</a></li>
                </ul>
                <div class="tab-content pb-60" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <div class="tab-pane fade active show" id="details">
                        <p>Sorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor nulla id sit neque scelerisque pulvinar. Mus amet interdum turpis consequat adipiscing. Elementum feugiat sed duis consectetur varius et cras mattis. Lobortis auctor sit in eu nisl fusce augue venenatis, dui. Phasellus eget sagittis mauris, nibh augue cursus pellentesque amet elementum. Tristique amet sollicitudin sit nulla aliquam, imperdiet sed ut diam. Suspendisse ipsum rhoncus nulla lectus. Id neque in urna neque non amet. Tortor sed aliquam in faucibus enim, posuere. Sed et accumsan, neque posuere tempus in cras. Ornare lectus pretium, est eget purus, enim quam purus netus. Turpis nunc</p>
                        <p>Dictum ultrices et suspendisse amet mattis in pellentesque. Vulputate arcu, consectetur odio donec nec duis ultrices facilisi. Mauris cursus elit diam, urna suspendisse et, amet. Vitae ligula ultrices nulla justo, enim lorem duis. Volutpat sit et neque, aliquam, diam at at neque. Lacus augue</p>
                    </div>
                    <div class="tab-pane fade" id="information">
                        <p>Circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses</p>
                        <ul class="list-style-one mt-20 mb-15">
                            <li>Fresh Chicken Burger</li>
                            <li>Pizza With Mushrooms</li>
                            <li>Double Burger & Fries</li>
                        </ul>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                    <div class="tab-pane fade" id="reviews">
                        <h5>Reviews (3)</h5>
                        <div class="comments rattings mt-25">
                            <div class="comment-body">
                                <div class="author-thumb">
                                    <img src="{{ asset('/assets/images/products/product-comment1.jpg') }}" alt="Author">
                                </div>
                                <div class="content">
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <ul class="comment-header">
                                        <li>
                                            <h6>Daniel A. Hayes</h6>
                                        </li>
                                        <li>15 Jan 2024</li>
                                    </ul>
                                    <p>SaaS, or Software as a Service, is a cloud-based software delivery model where applications are hosted by a third-party provider and accessed via the internet. It offers benefits such as scalability, cost-effectiveness</p>
                                </div>
                            </div>
                            <div class="comment-body">
                                <div class="author-thumb">
                                    <img src="{{ asset('/assets/images/products/product-comment2.jpg') }}" alt="Author">
                                </div>
                                <div class="content">
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <ul class="comment-header">
                                        <li>
                                            <h6>Daniel A. Hayes</h6>
                                        </li>
                                        <li>15 Jan 2024</li>
                                    </ul>
                                    <p>SaaS, or Software as a Service, is a cloud-based software delivery model where applications are hosted by a third-party provider and accessed via the internet. It offers benefits such as scalability, cost-effectiveness</p>
                                </div>
                            </div>
                            <div class="comment-body">
                                <div class="author-thumb">
                                    <img src="{{ asset('/assets/images/products/product-comment3.jpg') }}" alt="Author">
                                </div>
                                <div class="content">
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <ul class="comment-header">
                                        <li>
                                            <h6>Daniel A. Hayes</h6>
                                        </li>
                                        <li>15 Jan 2024</li>
                                    </ul>
                                    <p>SaaS, or Software as a Service, is a cloud-based software delivery model where applications are hosted by a third-party provider and accessed via the internet. It offers benefits such as scalability, cost-effectiveness</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Details End -->
        
        
        <!-- Review Form Start -->
        <section class="review-form-area">
            <div class="container">
                <form id="review-form" class="review-form z-1 rel" name="review-form" action="#" method="post" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <h5>Add a review</h5>
                    <p>3 reviews for Blue Stripes & Stone Earrings</p>
                    <div class="row mt-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" id="full-name" name="full-name" class="form-control" value="" placeholder="Full Name" required="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="email" id="email-address" name="email" class="form-control" value="" placeholder="Email Address" required="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" id="phone" name="phone" class="form-control" value="" placeholder="Phone Number" required="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Write Message" required=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-0">
                                <div class="ratting d-flex mb-25">
                                    <b>Add Reviews</b>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <button type="submit" class="theme-btn">Send Reviews <i class="fas fa-angle-double-right"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Review Form End -->
        
        
        <!-- Related Products Area start -->
        <section class="related-products-area pt-130 rpt-100 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h2>Related Product</h2>
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
        </section>
        <!-- Related Products Area end -->
            
           
    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection