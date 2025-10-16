@extends('frontend.layouts.app')
@section('title', 'Cart')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
       
         <!-- Page Banner Start -->
        <section class="page-banner-area overlay pt-215 rpt-150 pb-160 rpb-120 rel z-1 bgs-cover text-center" style="background-image: url(assets/images/background/banner.jpg);">
            <div class="container">
                <div class="banner-inner text-white">
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Shopping Cart</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Shopping Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- Shopping Cart Area start -->
        <section class="shopping-cart-area py-130 rel z-1">
            <div class="container">
                <div class="shoping-table mb-50 wow fadeInUp delay-0-2s">
                    <table>
                        <thead>
                            <tr>
                                <th>Images</th>
                                <th>Product</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="{{ asset('/assets/images/widgets/news1.jpg') }}" alt="Product"></td>
                                <td><span class="title">Shopping Cart</span></td>
                                <td><span class="price">70</span></td>
                                <td>
                                    <div class="quantity-input">
                                        <button class="quantity-down">--</button>
                                        <input class="quantity" type="text" value="1" name="quantity">
                                        <button class="quantity-up">+</button>
                                    </div>
                                </td>
                                <td><b class="price">70</b></td>
                                <td><button type="button" class="close">×</button></td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('/assets/images/widgets/news2.jpg') }}" alt="Product"></td>
                                <td><span class="title">Chicken Soup</span></td>
                                <td><span class="price">65</span></td>
                                <td>
                                    <div class="quantity-input">
                                        <button class="quantity-down">--</button>
                                        <input class="quantity" type="text" value="2" name="quantity">
                                        <button class="quantity-up">+</button>
                                    </div>
                                </td>
                                <td><b class="price">130</b></td>
                                <td><button type="button" class="close">×</button></td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('/assets/images/widgets/news3.jpg') }}" alt="Product"></td>
                                <td><span class="title">Red king Crab</span></td>
                                <td><span class="price">80</span></td>
                                <td>
                                    <div class="quantity-input">
                                        <button class="quantity-down">--</button>
                                        <input class="quantity" type="text" value="3" name="quantity">
                                        <button class="quantity-up">+</button>
                                    </div>
                                </td>
                                <td><b class="price">80</b></td>
                                <td><button type="button" class="close">×</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row text-center text-lg-left align-items-center">
                    <div class="col-lg-6">
                        <div class="discount-wrapper mb-30 wow fadeInLeft delay-0-2s">
                            <form action="#" class="d-sm-flex justify-content-center justify-content-lg-start">
                                <input type="text" placeholder="Coupon Code" required>
                                <button class="theme-btn flex-none" type="submit">apply Coupon <i class="fas fa-angle-double-right"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="update-shopping mb-30 text-lg-end wow fadeInRight delay-0-2s">
                            <a href="{{ route('shop') }}" class="theme-btn style-two my-5">shopping <i class="fas fa-angle-double-right"></i></a>
                            <a href="{{ route('shop') }}" class="theme-btn my-5">update cart <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="shoping-cart-total pt-20 wow fadeInUp delay-0-2s">
                            <h4 class="form-title mb-25 text-center">Cart Totals</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Cart Subtotal</td>
                                        <td><span class="price">280</span></td>
                                    </tr>
                                    <tr>
                                        <td>Shipping Fee</td>
                                        <td><span class="price">10.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>Vat</td>
                                        <td>$0.00</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Order Total</strong></td>
                                        <td><b class="price">290</b></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ route('checkout') }}" class="theme-btn style-two mt-25 w-100">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shopping Cart Area start -->

            <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection