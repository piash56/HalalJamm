@extends('frontend.layouts.app')
@section('title', 'Contact')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
       
        
        
        <!-- Page Banner Start -->
        <section class="page-banner-area overlay pt-215 rpt-150 pb-160 rpb-120 rel z-1 bgs-cover text-center" style="background-image: url(assets/images/background/banner.jpg);">
            <div class="container">
                <div class="banner-inner text-white">
                    <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Contact us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Contact us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- Contact Area start -->
        <section class="contact-page-area pt-130 rpt-100 pb-115 rpb-85 rel z-1">
            <div class="container">
                <div class="row mb-130 rmb-100 align-items-center">
                    <div class="col-lg-5">
                        <div class="contact-page-content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mb-35">
                                <span class="sub-title mb-10">contact us</span>
                                <h2>ready to contact us</h2>
                            </div>
                            <div class="contact-info-wrap">
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="content">
                                        <span class="title">Locations</span>
                                        <h6>8752 Parsons Blvd, Jamaica, NY 11432, United States</h6>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="fal fa-envelope-open"></i>
                                    </div>
                                    <div class="content">
                                        <span class="title">Email Address</span>
                                        <h6><a href="{{ url('mailto:halaljamm@gmail.com') }}">HALALJAMM@gmail.com</a></h6>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <span class="title">Phone No</span>
                                        <h6><a href="{{ url('callto:+(1)3472333715') }}">+(1) 347-233-3715</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="contact-page-form">
                            <h3>Send Us Message</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form id="contactForm" class="contactForm" name="contactForm" action="assets/php/form-process.php" method="post">
                                <div class="row mt-30 gap-20">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" class="form-control" value="" placeholder="Full Name" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" class="form-control" value="" placeholder="Email Address" required data-error="Please enter your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" id="phone_number" name="phone_number" class="form-control" value="" placeholder="Phone" required data-error="Please enter your Phone No">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" id="subject" name="subject" class="form-control" value="" placeholder="Subject" required data-error="Please enter your Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Write Message" required data-error="Please enter your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="theme-btn">Send Message Us <i class="far fa-arrow-alt-right"></i></button>
                                            <div id="msgSubmit" class="hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="our-location" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d96777.16150026117!2d-74.00840582560909!3d40.71171357405996!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1706508986625!5m2!1sen!2sbd" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="bg-lines">
               <span></span><span></span>
               <span></span><span></span>
            </div>
        </section>
        <!-- Contact Area end -->
            
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection