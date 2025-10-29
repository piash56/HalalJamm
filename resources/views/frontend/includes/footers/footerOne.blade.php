<!-- footer area start -->
        <footer class="main-footer bgc-black rel z-1" style="background-image: url(assets/images/background/footer-bg.png);">
            <div class="footer-top py-130 rpy-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-9" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title text-white text-center mb-35">
                                <span class="sub-title mb-10">join our newsletter</span>
                                <h2>subscribe our newsletter to get offers at first</h2>
                            </div>
                            <form class="newsletter-form" action="#">
                                <label for="news-email"><i class="fas fa-envelope"></i></label>
                                <input id="news-email" type="email" placeholder="Email Address" required>
                                <button class="theme-btn" type="submit">Subscribe <i class="far fa-arrow-alt-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-area pb-70">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="0">
                            <div class="footer-widget footer-text">
                                <div class="footer-logo mb-25">
                                    <a href="{{ route('home') }}"><img src="{{ asset('/assets/images/logos/halalljamm.png') }}" alt="Logo"></a>
                                </div>
                                <p>Fresh halal street food crafted with passion. Every bite tells a story of authentic New York cuisine.</p>
                                <div class="social-style-one mt-15">
                                    <a href="{{ route('contact') }}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{ route('contact') }}"><i class="fab fa-twitter"></i></a>
                                    <a href="{{ route('contact') }}"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="{{ route('contact') }}"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-sm-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="0">
                            <div class="footer-widget footer-links">
                                <div class="footer-title">
                                    <h5>popular food</h5>
                                </div>
                                <ul class="two-column">
                                    <li><a href="">Beef Kofta Platter</a></li>
                                    <li><a href="">Chapli Kebab Platter</a></li>
                                    <li><a href="">Chicken & Beef Kofta</a></li>
                                    <li><a href="">Chicken & Lamb Platter</a></li>
                                    <li><a href="">Chicken Gyro Platter</a></li>
                                    <li><a href="">Chicken Kofta Platter</a></li>
                                    <li><a href="">Lamb Gyro Platter</a></li>
                                    <li><a href="">Halal Bacon Burger</a></li>
                                    <li><a href="">Falafel Burger</a></li>
                                    <li><a href="">Fish Cutlet Sandwich</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="row justify-content-between">
                                <div class="col-xl-6 col-lg-5 col-sm-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="0">
                                    <div class="footer-widget footer-contact">
                                        <div class="footer-title">
                                            <h5>contact us</h5>
                                        </div>
                                        <ul>
                                            <li>8752 Parsons Blvd, Jamaica, NY 11432, United States</li>
                                            <li><a href="{{ url('mailto:halaljamm@gmail.com') }}"><u>HALALJAMM@gmail.com</u></a></li>
                                            <li><a href="{{ url('callto:+(1)3472333715') }}">+(1) 347-233-3715</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 col-sm-6" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="0">
                                    <div class="footer-widget opening-hour">
                                        <div class="footer-title">
                                            <h5>opening hour</h5>
                                        </div>
                                        <ul>
                                            <li>Monday <span>12:00 am – 12:00 pm</span></li>
                                            <li>Saturday <span>12:00 am – 12:00 pm</span></li>
                                            <li>Saturday <span>12:00 am – 12:00 pm</span></li>
                                            <li>Thursday <span>12:00 am – 12:00 pm</span></li>
                                            <li>Friday <span>12:00 am – 12:00 pm</span></li>
                                            <li>Saturday <span>12:00 am – 12:00 pm</span></li>
                                            <li>Sunday <span>12:00 am – 12:00 pm</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pt-30 pb-15">
                <div class="container">
                    <div class="row">
                       <div class="col-lg-5">
                            <div class="copyright-text text-center text-lg-start">
                                <p>© 2024 <a href="{{ route('home') }}">Halaljamm</a>. All Rights Reserved.</p>
                            </div>
                       </div>
                       <div class="col-lg-7 text-center text-lg-end">
                           <ul class="footer-bottom-nav">
                               <li><a href="#">Privacy Policy</a></li>
                               <li><a href="#">Terms & Condition</a></li>
                           </ul>
                       </div>
                    </div>
                    <!-- Scroll Top Button -->
                    <button class="scroll-top scroll-to-target" data-target="html"><i class="fas fa-arrow-alt-up"></i></button>
                </div>
            </div>
            <div class="footer-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/hero-shape5.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/tomato.png') }}" alt="Shape">
                </div>
                <div class="shape three">
                    <img src="{{ asset('/assets/images/shapes/heading1.png') }}" alt="Shape">
                </div>
            </div>
        </footer>
        <!-- footer area end -->