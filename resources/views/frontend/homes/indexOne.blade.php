@extends('frontend.layouts.app')
@section('title', 'Index One')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    
       
        
        <!-- Hero Area Start -->
        <section class="hero-area bgs-cover pt-180 rpt-150 pb-100 rel z-1" style="background-image: url(assets/images/background/hero.jpg)">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content text-white" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            @if($heroSection)
                                @if($heroSection->small_text)
                                    <span class="sub-title mb-35"><i class="far fa-hamburger"></i>{{ $heroSection->small_text }}</span>
                                @endif
                                <h1>{{ $heroSection->primary_text }}</h1>
                                @if($heroSection->secondary_text)
                                    <p>{{ $heroSection->secondary_text }}</p>
                                @endif
                                @if($heroSection->button_text && $heroSection->button_url)
                                    <a href="{{ $heroSection->button_url }}" target="_blank" class="theme-btn">{{ $heroSection->button_text }} <i class="far fa-arrow-alt-right"></i></a>
                                @endif
                            @else
                                <!-- Fallback content if no hero section is configured -->
                            <span class="sub-title mb-35"><i class="far fa-hamburger"></i>Halal Jamm: </span>
                            <h1>Bold Flavors of New York</h1>
                            <p>Fresh halal street food crafted with passion. Every bite tells a story of authentic New York cuisine.</p>
                            <a href="https://halal-jamm-queens.cloveronline.com/menu/all" target="_blank" class="theme-btn">View All Menu <i class="far fa-arrow-alt-right"></i></a>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="hero-images rmt-60">
                            @if($heroSection && $heroSection->hero_image)
                                <img src="{{ $heroSection->image_url }}" alt="{{ $heroSection->primary_text }}">
                            @else
                            <img src="{{ asset('/assets/images/hero/hero-right.png') }}" alt="Hero">
                            @endif
                            
                            {{-- @if($heroSection && ($heroSection->price_text || $heroSection->price))
                                <div class="price">
                                    @if($heroSection->price_text)
                                        <span class="price-text">{{ $heroSection->price_text }}</span>
                                    @endif
                                    @if($heroSection->price)
                                        <span class="price-amount">${{ number_format($heroSection->price, 2) }}</span>
                                    @endif
                                </div>
                            @else
                            <div class="price">
                                <img src="{{ asset('/assets/images/hero/price.png') }}" alt="Hero">
                            </div>
                            @endif --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/hero-shape1.png') }}" alt="Hero Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/hero-shape2.png') }}" alt="Hero Shape">
                </div>
                <div class="shape three">
                    <img src="{{ asset('/assets/images/shapes/hero-shape3.png') }}" alt="Hero Shape">
                </div>
                <div class="shape four">
                    <img src="{{ asset('/assets/images/shapes/hero-shape4.png') }}" alt="Hero Shape">
                </div>
                <div class="shape five">
                    <img src="{{ asset('/assets/images/shapes/hero-shape5.png') }}" alt="Hero Shape">
                </div>
            </div>
        </section>
        <!-- Hero Area End -->
        
        
        <!-- Headline area start -->
        <div class="headline-area pt-120 rpt-90 rel z-1">
            <span class="marquee-wrap">
               <span class="marquee-inner left">
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">Halal Food</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">best shawarma</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">halal food</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">best shawarma</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">halal food</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">best shawarma</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
            </span>
            <div class="headline-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/chillies.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/tomato.png') }}" alt="Shape">
                </div>
            </div>
        </div>
        <!-- Headline Area end -->
        
        
        <!-- About Us Area start -->
        {{-- <section class="about-us-area pt-130 rpt-85 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="about-image-part mb-30 rmb-55" data-aos="fade-right" data-aos-duration="1500">
                            <div class="food-review">
                                <div class="author">
                                    <img src="{{ asset('/assets/images/about/review-author.png') }}" alt="Author">
                                </div>
                                <span class="text">Very good food</span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <img src="{{ asset('/assets/images/about/about.jpg') }}" alt="About">
                            <div class="quality-food" style="background-image: url(assets/images/shapes/about-star.png)">
                                <span class="for-border"></span>
                                <span class="text">halal <br>certified</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-us-content" data-aos="fade-left" data-aos-duration="1500">
                            <div class="section-title mb-25">
                                <span class="sub-title mb-5">know About halaljamm</span>
                                <h2>Explore our most popular halal dishes</h2>
                            </div>
                            <p>Fresh, flavorful, and always halal. Halal Jamm serves authentic halal dishes made with care and bold NYC flavor. Great taste, fast service, and real quality in every bite</p>
                            <div class="about-btn-author pt-5 mb-45">
                                <a href="{{ route('allMenus') }}" class="theme-btn style-two">Our Menu <i class="far fa-arrow-alt-right"></i></a>
                                <a href="#" class="read-more">Explore popular menu <i class="far fa-arrow-alt-right"></i></a>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="service-item style-two">
                                        <div class="icon">
                                            <i class="flaticon-high-quality"></i>
                                        </div>
                                        <h5><a>Best Quality Food</a></h5>
                                        <p>Our talented chefs craft each dish precision sourcing</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="service-item style-two">
                                        <div class="icon">
                                            <i class="flaticon-chef"></i>
                                        </div>
                                        <h5><a>Experience our Chefs</a></h5>
                                        <p>Our talented chefs craft each dish precision sourcing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/chicken-menu1.png') }}" alt="Shape">
                </div>
            </div>
        </section> --}}
        <!-- About Us Area end -->
        
        
        
        <!-- Offer Card Area start -->
        <div class="offer-card-area">
           <div class="row no-gap row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 justify-content-center">
                @forelse($offers as $index => $offer)
                <div class="col" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}" data-aos-duration="1500" data-aos-offset="50">
                    <div class="offer-card-item {{ $index % 2 == 1 ? 'style-two' : '' }}">
                        <img src="{{ asset('/assets/images/offer/good-food.png') }}" alt="Good Food">
                        <div class="badge">{{ $offer->offer_type === 'hot' ? 'Hot' : '-' . number_format($offer->discount_amount, 0) . '%' }}</div>
                        <div class="image">
                            <img src="{{ $offer->image_url }}" alt="{{ $offer->food_name }}" onerror="this.src='{{ asset('images/placeholder-menu.png') }}'">
                        </div>
                        <span class="title">{{ $offer->food_name }}</span>
                        <span class="available-item">{{ $offer->category->menus_count }}+ {{ $offer->category->name }} menu items</span>
                        <div class="bg-text">
                            @if($offer->tag_1)<span>{{ $offer->tag_1 }}</span>@endif
                            @if($offer->tag_2)<span>{{ $offer->tag_2 }}</span>@endif
                            @if($offer->tag_3)<span>{{ $offer->tag_3 }}</span>@endif
                        </div>
                    </div>
                </div>
                @empty
                <!-- Fallback static offers if no dynamic offers are available -->
                <div class="col" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="offer-card-item">
                        <img src="{{ asset('/assets/images/offer/good-food.png') }}" alt="Good Food">
                        <div class="badge">Hot</div>
                        <div class="image"><img src="{{ asset('/assets/images/offer/offer-card1.png') }}" alt="Food"></div>
                        <span class="title">Burger</span>
                        <span class="available-item">11+ Burger menu items</span>
                        <div class="bg-text"><span>Burger</span> <span>Burger</span> <span>Burger</span></div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <div class="offer-card-item style-two">
                        <img src="{{ asset('/assets/images/offer/good-food.png') }}" alt="Good Food">
                        <div class="badge">-10%</div>
                        <div class="image"><img src="{{ asset('/assets/images/offer/offer-card2.png') }}" alt="Food"></div>
                        <span class="title">Pizza</span>
                        <span class="available-item">15+ Pizza menu items</span>
                        <div class="bg-text"><span>Pizza</span> <span>Pizza</span> <span>Pizza</span></div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                    <div class="offer-card-item">
                        <img src="{{ asset('/assets/images/offer/good-food.png') }}" alt="Good Food">
                        <div class="badge">Hot</div>
                        <div class="image"><img src="{{ asset('/assets/images/offer/offer-card3.png') }}" alt="Food"></div>
                        <span class="title">hotdog</span>
                        <span class="available-item">05+ hotdog menu items</span>
                        <div class="bg-text"><span>hotdog</span> <span>hotdog</span> <span>hotdog</span></div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                    <div class="offer-card-item style-two">
                        <img src="{{ asset('/assets/images/offer/good-food.png') }}" alt="Good Food">
                        <div class="badge">-15%</div>
                        <div class="image"><img src="{{ asset('/assets/images/offer/offer-card4.png') }}" alt="Food"></div>
                        <span class="title">chickens</span>
                        <span class="available-item">18+ Chicken menu items</span>
                        <div class="bg-text"><span>chickens</span> <span>chickens</span> <span>chickens</span></div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                    <div class="offer-card-item">
                        <img src="{{ asset('/assets/images/offer/good-food.png') }}" alt="Good Food">
                        <div class="badge">Hot</div>
                        <div class="image"><img src="{{ asset('/assets/images/offer/offer-card5.png') }}" alt="Food"></div>
                        <span class="title">seafood</span>
                        <span class="available-item">14+ SeaFood menu items</span>
                        <div class="bg-text"><span>seafood</span> <span>seafood</span> <span>seafood</span></div>
                    </div>
                </div>
                @endforelse
           </div>
        </div>
        <!-- Offer Card Area end -->
        
        
        <!-- Offer Area start -->
        <section class="offer-area bgc-black pt-160 rpt-100 pb-150 rpb-120 rel z-1" style="background-image: url(assets/images/background/offer-dot-bg.png)">
            <span class="marquee-wrap style-two text-white">
               <span class="marquee-inner left">special deal</span>
               <span class="marquee-inner left">special deal</span>
               <span class="marquee-inner left">special deal</span>
            </span>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="offer-content text-white rmb-55" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            @if($offerSection)
                                @if($offerSection->small_image)
                                    <img src="{{ $offerSection->small_image_url }}" alt="Image">
                                @else
                                    <img src="{{ asset('/assets/images/offer/delicious.png') }}" alt="Image">
                                @endif
                                <h2>{{ $offerSection->primary_text }}</h2>
                                <h3>{{ $offerSection->secondary_text }} 
                                    @if($offerSection->secondary_price)
                                        <span>${{ number_format($offerSection->secondary_price, 2) }}</span>
                                    @endif
                                </h3>
                                @if($offerSection->small_text)
                                    <p>{{ $offerSection->small_text }}</p>
                                @endif
                                @if($offerSection->button_text && $offerSection->button_url)
                                    <a href="{{ $offerSection->button_url }}" target="_blank" class="theme-btn">{{ $offerSection->button_text }} <i class="far fa-arrow-alt-right"></i></a>
                                @endif
                            @else
                                <!-- Fallback content if no offer section is configured -->
                            <img src="{{ asset('/assets/images/offer/delicious.png') }}" alt="Image">
                            <h2>Special deal offer every weekend</h2>
                            <h3>grilled chicken shawarma <span>$8.25</span></h3>
                            <p>Restaurant, where culinary excellence meets warm hospitality in every dish we serve nestled in the heart of city</p>
                            <a href="https://halal-jamm-queens.cloveronline.com/menu/all" target="_blank" class="theme-btn">order now <i class="far fa-arrow-alt-right"></i></a>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="offer-image" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            @if($offerSection && $offerSection->offer_image)
                                <img src="{{ $offerSection->offer_image_url }}" alt="Offer Image">
                            @else
                            <img src="{{ asset('/assets/images/offer/shawarma-sale.jpeg') }}" alt="Offer Image">
                            @endif
                            
                            @if($offerSection && ($offerSection->offer_price_text || $offerSection->offer_price))
                                <div class="offer-badge" style="background-image: url(assets/images/shapes/offer-circle-shape.png)">
                                    <span>
                                        @if($offerSection->offer_price_text)
                                            {{ $offerSection->offer_price_text }} <br>
                                        @endif
                                        @if($offerSection->offer_price)
                                            <span class="price">${{ number_format($offerSection->offer_price, 2) }}</span>
                                        @endif
                                    </span>
                                </div>
                            @else
                            <div class="offer-badge" style="background-image: url(assets/images/shapes/offer-circle-shape.png)">
                                <span>only <br><span class="price">$8.25</span></span>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="offer-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/offer-shape2.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/offer-shape2.png') }}" alt="Shape">
                </div>
                <div class="shape three">
                    <img src="{{ asset('/assets/images/shapes/offer-shape3.png') }}" alt="Shape">
                </div>
            </div>
        </section>
        <!-- Offer Area end -->
        
        <!-- Gallery Slider Area start -->
        @if($featuredGallery->count() > 0)
        <section class="gallery-slider-area pt-105 rpt-85 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">our gallery</span>
                            <h2>delicious food gallery</h2>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-slider-container">
                    <!-- Desktop View (Slider) -->
                    <div class="gallery-slider-wrapper d-none d-lg-block">
                        @php
                            $totalImages = $featuredGallery->count();
                            $imagesPerRow = ceil($totalImages / 2);
                            $row1Images = $featuredGallery->take($imagesPerRow);
                            $row2Images = $featuredGallery->skip($imagesPerRow);
                            
                            // If odd number, distribute extra image to both rows
                            if ($totalImages % 2 == 1) {
                                $row1Images = $featuredGallery->take(ceil($totalImages / 2));
                                $row2Images = $featuredGallery->skip(ceil($totalImages / 2));
                            }
                        @endphp
                        
                        <!-- First Row -->
                        <div class="gallery-row" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            @foreach($row1Images as $index => $image)
                            <div class="gallery-slide">
                                <div class="gallery-item">
                                    <img src="{{ $image->image_url }}" alt="{{ $image->title ?: 'Gallery Image' }}" class="gallery-image">
                </div>
                </div>
                            @endforeach
                            
                            <!-- Duplicate slides for infinite loop -->
                            @foreach($row1Images as $index => $image)
                            <div class="gallery-slide">
                                <div class="gallery-item">
                                    <img src="{{ $image->image_url }}" alt="{{ $image->title ?: 'Gallery Image' }}" class="gallery-image">
            </div>
        </div>
                            @endforeach
                        </div>
                        
                        <!-- Second Row -->
                        <div class="gallery-row" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            @foreach($row2Images as $index => $image)
                            <div class="gallery-slide">
                                <div class="gallery-item">
                                    <img src="{{ $image->image_url }}" alt="{{ $image->title ?: 'Gallery Image' }}" class="gallery-image">
                                </div>
                            </div>
                            @endforeach
                            
                            <!-- Duplicate slides for infinite loop -->
                            @foreach($row2Images as $index => $image)
                            <div class="gallery-slide">
                                <div class="gallery-item">
                                    <img src="{{ $image->image_url }}" alt="{{ $image->title ?: 'Gallery Image' }}" class="gallery-image">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Mobile View (2x2 Grid) -->
                    <div class="gallery-mobile-grid d-lg-none">
                        <div class="row">
                            @foreach($featuredGallery as $index => $image)
                            <div class="col-6 mb-3">
                                <div class="gallery-item gallery-item-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="{{ $index * 100 }}">
                                    <div class="gallery-image-mobile">
                                        <img src="{{ $image->image_url }}" alt="{{ $image->title ?: 'Gallery Image' }}">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <div class="text-center mt-50">
                        <a href="{{ route('gallery') }}" class="theme-btn">View All Gallery <i class="far fa-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        @endif
        <!-- Gallery Slider Area end -->
        
        <script>
        // Prevent horizontal scrolling on mobile only
        document.addEventListener('DOMContentLoaded', function() {
            // Check if it's mobile
            const isMobile = window.innerWidth <= 991;
            
            if (isMobile) {
                // Prevent horizontal scrolling
                document.body.style.overflowX = 'hidden';
                document.documentElement.style.overflowX = 'hidden';
                
                // Prevent horizontal touch gestures
                let startX = 0;
                let startY = 0;
                
                document.addEventListener('touchstart', function(e) {
                    startX = e.touches[0].clientX;
                    startY = e.touches[0].clientY;
                }, { passive: true });
                
                document.addEventListener('touchmove', function(e) {
                    const currentX = e.touches[0].clientX;
                    const currentY = e.touches[0].clientY;
                    const diffX = Math.abs(currentX - startX);
                    const diffY = Math.abs(currentY - startY);
                    
                    // If horizontal movement is greater than vertical, prevent it
                    if (diffX > diffY && diffX > 10) {
                        e.preventDefault();
                    }
                }, { passive: false });
                
                // Prevent horizontal scrolling with mouse wheel
                document.addEventListener('wheel', function(e) {
                    if (Math.abs(e.deltaX) > Math.abs(e.deltaY)) {
                        e.preventDefault();
                    }
                }, { passive: false });
            }
        });
        
        // Handle window resize and orientation change
        window.addEventListener('resize', function() {
            const isMobile = window.innerWidth <= 991;
            
            if (isMobile) {
                document.body.style.overflowX = 'hidden';
                document.documentElement.style.overflowX = 'hidden';
            } else {
                // Restore normal behavior on desktop
                document.body.style.overflowX = '';
                document.documentElement.style.overflowX = '';
            }
        });
        
        document.addEventListener('DOMContentLoaded', function() {
            const sliderContainer = document.querySelector('.gallery-slider-container');
            if (!sliderContainer) return;
            
            const rows = sliderContainer.querySelectorAll('.gallery-row');
            let isDown = false;
            let startX;
            let scrollLeft;
            
            // Mouse events for both rows
            rows.forEach(row => {
                // Mouse events
                row.addEventListener('mousedown', (e) => {
                    isDown = true;
                    sliderContainer.style.cursor = 'grabbing';
                    startX = e.pageX - row.offsetLeft;
                    scrollLeft = row.scrollLeft;
                    e.preventDefault();
                });
                
                row.addEventListener('mouseleave', () => {
                    isDown = false;
                    sliderContainer.style.cursor = 'grab';
                });
                
                row.addEventListener('mouseup', () => {
                    isDown = false;
                    sliderContainer.style.cursor = 'grab';
                });
                
                row.addEventListener('mousemove', (e) => {
                    if (!isDown) return;
                    e.preventDefault();
                    const x = e.pageX - row.offsetLeft;
                    const walk = (x - startX) * 2;
                    row.scrollLeft = scrollLeft - walk;
                });
                
                // Touch events for mobile
                row.addEventListener('touchstart', (e) => {
                    isDown = true;
                    startX = e.touches[0].pageX - row.offsetLeft;
                    scrollLeft = row.scrollLeft;
                });
                
                row.addEventListener('touchend', () => {
                    isDown = false;
                });
                
                row.addEventListener('touchmove', (e) => {
                    if (!isDown) return;
                    const x = e.touches[0].pageX - row.offsetLeft;
                    const walk = (x - startX) * 2;
                    row.scrollLeft = scrollLeft - walk;
                });
                
                // Click events for navigation
                row.addEventListener('click', (e) => {
                    if (isDown) return; // Prevent click if dragging
                    
                    const rect = row.getBoundingClientRect();
                    const clickX = e.clientX - rect.left;
                    const rowWidth = rect.width;
                    
                    if (clickX < rowWidth / 2) {
                        // Click on left side - scroll left
                        row.scrollBy({
                            left: -300,
                            behavior: 'smooth'
                        });
                    } else {
                        // Click on right side - scroll right
                        row.scrollBy({
                            left: 300,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
        </script>
        
        
        <!-- Popular Menu Area start -->
        <section class="popular-menu-area pt-105 rpt-85 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">popular menu</span>
                            <h2>we provide halal food based on usa explore our popular halal food</h2>
                        </div>
                    </div>
                </div>
                @if($popularMenus->count() > 0)
                    <div class="row justify-content-center">
                        @php
                            $totalItems = $popularMenus->count();
                            $itemsPerColumn = ceil($totalItems / 3);
                            
                            // Create columns with proper distribution
                            $column1 = $popularMenus->take($itemsPerColumn);
                            $column2 = $popularMenus->skip($itemsPerColumn)->take($itemsPerColumn);
                            $column3 = $popularMenus->skip($itemsPerColumn * 2);
                            
                            $columns = [$column1, $column2, $column3];
                            
                            // Debug: Log the distribution (remove this in production)
                            // \Log::info("Total items: $totalItems, Items per column: $itemsPerColumn");
                            // \Log::info("Column 1: " . $column1->count() . " items");
                            // \Log::info("Column 2: " . $column2->count() . " items");
                            // \Log::info("Column 3: " . $column3->count() . " items");
                        @endphp
                        
                        @foreach($columns as $columnIndex => $columnItems)
                            @if($columnItems->count() > 0)
                                <div class="col-xl-4 col-lg-6 z-{{ 3 - $columnIndex }}" data-aos="fade-up" data-aos-delay="{{ $columnIndex * 50 }}" data-aos-duration="1500" data-aos-offset="50">
                                    @foreach($columnItems as $index => $menu)
                                        <div class="food-item {{ $index == $columnItems->count() - 1 ? 'mb-30' : '' }}">
                                            <div class="content">
                                                <div class="name-desc">
                                                    <h5>{{ $menu->name }}</h5>
                                                    <p>{{ $menu->description ?: 'Delicious halal food item' }}</p>
                                                </div>
                                                <div class="price">
                                                    <span>${{ number_format($menu->price, 2) }}</span>
                                                </div>
                                            </div>
                                            <div class="image">
                                                <img src="{{ $menu->image_url }}" alt="{{ $menu->name }}">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        @endforeach
                    </div>
                @else
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <div class="alert alert-info">
                                <h4>No Popular Items Available</h4>
                                <p>Please mark some foods as popular in the admin dashboard to display them here.</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>
        <!-- Popular Menu Area end -->
        
        
        <!-- Headline area start -->
        <div class="headline-area bgc-black pt-120 rpt-90 rel z-2">
            <span class="marquee-wrap white-text">
               <span class="marquee-inner left">
                    <span class="marquee-item">halal food</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">our Testimonials</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">best shawarma</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">halal food</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">our Testimonials</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">best shawarma</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">halal food</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">our Testimonials</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">best shawarma</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
            </span>
            <div class="headline-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/chillies.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/tomato.png') }}" alt="Shape">
                </div>
            </div>
        </div>
        <!-- Headline Area end -->
        
        
        <!-- Testimonials Area start -->
        <section class="testimonials-area bgc-black pt-105 rpt-85 pb-130 rpb-100 rel z-1">
            <div class="container">
                <div class="row justify-content-between align-items-center mb-50">
                    <div class="col-lg-6">
                        <div class="section-title text-white" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">customer feedback</span>
                            <h2>What our clients say about us</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="reviews-summary text-lg-end" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                    <div class="rating-display d-inline-block">
                        <div class="rating-number">{{ number_format($googleReviews->overall_rating ?? 4.80, 2) }}</div>
                        <div class="rating-stars">
                            @php
                                $rating = $googleReviews->overall_rating ?? 4.80;
                                $fullStars = floor($rating);
                                $hasHalfStar = ($rating - $fullStars) >= 0.5;
                            @endphp
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $fullStars)
                                    <i class="fas fa-star"></i>
                                @elseif($i == $fullStars + 1 && $hasHalfStar)
                                    <i class="fas fa-star-half-alt"></i>
                                @else
                                    <i class="far fa-star"></i>
                                @endif
                            @endfor
                </div>
                        <div class="total-reviews">{{ number_format($googleReviews->total_reviews ?? 448) }} reviews</div>
                            </div>
                    <a href="https://www.google.com/search?q=halal+jamm#lrd=0x89c26100052a1853:0x5f711507dc9bde0d,3,,,," target="_blank" class="btn btn-primary ms-3">
                        Write a review
                    </a>
                        </div>
                    </div>
                            </div>
                
                <div class="reviews-slider-container">
                    <div class="reviews-slider-wrapper">
                        <div class="reviews-slider-track" id="reviewsSlider">
                            @if($googleReviews && isset($googleReviews->reviews) && $googleReviews->reviews->count() > 0)
                                @php
                                    // Convert collection to array and chunk into slides of 8 reviews each
                                    $reviewsArray = $googleReviews->reviews->toArray();
                                    $chunks = array_chunk($reviewsArray, 8);
                                @endphp
                                
                                @foreach($chunks as $chunkIndex => $chunk)
                                <div class="reviews-slide">
                                    @php
                                        // Split chunk into two rows of 4 reviews each
                                        $row1 = array_slice($chunk, 0, 4);
                                        $row2 = array_slice($chunk, 4, 4);
                                    @endphp
                                    
                                    <!-- First Row (4 reviews) -->
                                    <div class="row mb-4">
                                        @foreach($row1 as $index => $review)
                                        <div class="col-lg-3 mb-4">
                                            <div class="review-card">
                                                <div class="review-header">
                                                    <div class="review-rating">
                                                        <div class="stars">
                                                            @for($i = 1; $i <= 5; $i++)
                                                                @if($i <= $review['rating'])
                                                                    <i class="fas fa-star"></i>
                                                                @else
                                                                    <i class="far fa-star"></i>
                                                                @endif
                                                            @endfor
                        </div>
                    </div>
                                                    <div class="review-date">{{ \Carbon\Carbon::parse($review['review_date'])->format('M d, Y') }}</div>
                            </div>
                                                <div class="review-text">
                                                    <div class="review-text-content">
                                                        {{ Str::limit($review['feedback'], 200) }}
                        </div>
                                                    @if(strlen($review['feedback']) > 200)
                                                        <span class="more-link" onclick="toggleReviewText(this)">... More</span>
                                                        <div class="review-text-full" style="display: none;">{{ $review['feedback'] }}</div>
                                                    @endif
                    </div>
                                                <div class="review-author">
                                                    <div class="author-avatar">
                                                        @if($review['image_url'])
                                                            <img src="{{ $review['image_url'] }}" alt="{{ $review['name'] }}">
                                                        @else
                                                            <div class="avatar-placeholder">
                                                                {{ substr($review['name'], 0, 2) }}
                            </div>
                                                        @endif
                        </div>
                                                    <div class="author-info">
                                                        <div class="author-name">{{ $review['name'] }}</div>
                                                        <div class="review-source">
                                                            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google" class="google-logo">
                    </div>
                            </div>
                        </div>
                    </div>
                            </div>
                                        @endforeach
                        </div>
                                    
                                    <!-- Second Row (4 reviews) -->
                                    @if(count($row2) > 0)
                                    <div class="row">
                                        @foreach($row2 as $index => $review)
                                        <div class="col-lg-3 mb-4">
                                            <div class="review-card">
                                                <div class="review-header">
                                                    <div class="review-rating">
                                                        <div class="stars">
                                                            @for($i = 1; $i <= 5; $i++)
                                                                @if($i <= $review['rating'])
                                                                    <i class="fas fa-star"></i>
                                                                @else
                                                                    <i class="far fa-star"></i>
                                                                @endif
                                                            @endfor
                    </div>
                                                    </div>
                                                    <div class="review-date">{{ \Carbon\Carbon::parse($review['review_date'])->format('M d, Y') }}</div>
                                                </div>
                                                <div class="review-text">
                                                    <div class="review-text-content">
                                                        {{ Str::limit($review['feedback'], 200) }}
                                                    </div>
                                                    @if(strlen($review['feedback']) > 200)
                                                        <span class="more-link" onclick="toggleReviewText(this)">... More</span>
                                                        <div class="review-text-full" style="display: none;">{{ $review['feedback'] }}</div>
                                                    @endif
                                                </div>
                                                <div class="review-author">
                                                    <div class="author-avatar">
                                                        @if($review['image_url'])
                                                            <img src="{{ $review['image_url'] }}" alt="{{ $review['name'] }}">
                                                        @else
                                                            <div class="avatar-placeholder">
                                                                {{ substr($review['name'], 0, 2) }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="author-info">
                                                        <div class="author-name">{{ $review['name'] }}</div>
                                                        <div class="review-source">
                                                            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google" class="google-logo">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                                @endforeach
                            @else
                                <!-- Fallback reviews -->
                                <div class="reviews-slide">
                                    <div class="row">
                                        <div class="col-lg-3 mb-4">
                                            <div class="review-card">
                                                <div class="review-header">
                                                    <div class="review-rating">
                                                        <div class="stars">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-date">Oct 21, 2025</div>
                                                </div>
                                                <div class="review-text">The best chicken over rice by far in queens!</div>
                                                <div class="review-author">
                                                    <div class="author-avatar">
                                                        <div class="avatar-placeholder">SH</div>
                                                    </div>
                                                    <div class="author-info">
                                                        <div class="author-name">Sonny Han</div>
                                                        <div class="review-source">
                                                            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google" class="google-logo">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-4">
                                            <div class="review-card">
                                                <div class="review-header">
                                                    <div class="review-rating">
                                                        <div class="stars">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-date">Oct 11, 2025</div>
                                                </div>
                                                <div class="review-text">This is genuinely the best halal restaurant in town, chicken platter was awesome, extremely generous, and flavorful!</div>
                                                <div class="review-author">
                                                    <div class="author-avatar">
                                                        <div class="avatar-placeholder">NZ</div>
                                                    </div>
                                                    <div class="author-info">
                                                        <div class="author-name">Nathan Zhanov</div>
                                                        <div class="review-source">
                                                            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google" class="google-logo">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-4">
                                            <div class="review-card">
                                                <div class="review-header">
                                                    <div class="review-rating">
                                                        <div class="stars">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-date">Aug 20, 2025</div>
                                                </div>
                                                <div class="review-text">Good!</div>
                                                <div class="review-author">
                                                    <div class="author-avatar">
                                                        <div class="avatar-placeholder">DG</div>
                                                    </div>
                                                    <div class="author-info">
                                                        <div class="author-name">Diana G</div>
                                                        <div class="review-source">
                                                            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google" class="google-logo">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-4">
                                            <div class="review-card">
                                                <div class="review-header">
                                                    <div class="review-rating">
                                                        <div class="stars">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-date">Jul 15, 2025</div>
                                                </div>
                                                <div class="review-text">Every halal I eat makes me sick. This place never made me sick once. Perfect everytime. Service is grate store is great food is great. Can't go wrong c... More</div>
                                                <div class="review-author">
                                                    <div class="author-avatar">
                                                        <div class="avatar-placeholder">AB</div>
                                                    </div>
                                                    <div class="author-info">
                                                        <div class="author-name">Alex Brown</div>
                                                        <div class="review-source">
                                                            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google" class="google-logo">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 mb-4">
                                            <div class="review-card">
                                                <div class="review-header">
                                                    <div class="review-rating">
                                                        <div class="stars">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-date">Jun 28, 2025</div>
                                                </div>
                                                <div class="review-text">Amazing food and great service!</div>
                                                <div class="review-author">
                                                    <div class="author-avatar">
                                                        <div class="avatar-placeholder">MJ</div>
                                                    </div>
                                                    <div class="author-info">
                                                        <div class="author-name">Mike Johnson</div>
                                                        <div class="review-source">
                                                            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google" class="google-logo">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-4">
                                            <div class="review-card">
                                                <div class="review-header">
                                                    <div class="review-rating">
                                                        <div class="stars">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-date">May 10, 2025</div>
                                                </div>
                                                <div class="review-text">Great halal food, highly recommend!</div>
                                                <div class="review-author">
                                                    <div class="author-avatar">
                                                        <div class="avatar-placeholder">SL</div>
                                                    </div>
                                                    <div class="author-info">
                                                        <div class="author-name">Sarah Lee</div>
                                                        <div class="review-source">
                                                            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google" class="google-logo">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-4">
                                            <div class="review-card">
                                                <div class="review-header">
                                                    <div class="review-rating">
                                                        <div class="stars">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-date">Apr 22, 2025</div>
                                                </div>
                                                <div class="review-text">Best halal restaurant in the area!</div>
                                                <div class="review-author">
                                                    <div class="author-avatar">
                                                        <div class="avatar-placeholder">RK</div>
                                                    </div>
                                                    <div class="author-info">
                                                        <div class="author-name">Robert Kim</div>
                                                        <div class="review-source">
                                                            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google" class="google-logo">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-4">
                                            <div class="review-card">
                                                <div class="review-header">
                                                    <div class="review-rating">
                                                        <div class="stars">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-date">Mar 15, 2025</div>
                                                </div>
                                                <div class="review-text">Excellent food quality and service!</div>
                                                <div class="review-author">
                                                    <div class="author-avatar">
                                                        <div class="avatar-placeholder">EM</div>
                                                    </div>
                                                    <div class="author-info">
                                                        <div class="author-name">Emma Martinez</div>
                                                        <div class="review-source">
                                                            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google" class="google-logo">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <!-- Navigation arrows -->
                    <button class="slider-nav prev" id="prevBtn">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="slider-nav next" id="nextBtn">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    
                    <!-- Dots indicator -->
                    <div class="slider-dots" id="sliderDots"></div>
                </div>
            </div>
            <div class="testimonials-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/hero-shape4.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/tomato.png') }}" alt="Shape">
                </div>
            </div>
        </section>
        <!-- Testimonials Area end -->
        
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('reviewsSlider');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const dotsContainer = document.getElementById('sliderDots');
            
            if (!slider) {
                console.log('Reviews slider not found');
                return;
            }
            
            let currentSlide = 0;
            const slides = slider.querySelectorAll('.reviews-slide');
            const totalSlides = slides.length;
            
            console.log('Found', totalSlides, 'slides');
            
            // Only create dots if we have more than one slide
            if (totalSlides > 1 && dotsContainer) {
                for (let i = 0; i < totalSlides; i++) {
                    const dot = document.createElement('div');
                    dot.classList.add('slider-dot');
                    if (i === 0) dot.classList.add('active');
                    dot.addEventListener('click', () => goToSlide(i));
                    dotsContainer.appendChild(dot);
                }
            } else if (totalSlides === 1) {
                // Hide navigation buttons and dots if only one slide
                if (prevBtn) prevBtn.style.display = 'none';
                if (nextBtn) nextBtn.style.display = 'none';
                if (dotsContainer) dotsContainer.style.display = 'none';
            } else {
                // Show navigation buttons for multiple slides
                if (prevBtn) prevBtn.style.display = 'block';
                if (nextBtn) nextBtn.style.display = 'block';
                if (dotsContainer) dotsContainer.style.display = 'flex';
            }
            
            function updateSlider() {
                const translateX = -currentSlide * 100;
                slider.style.transform = `translateX(${translateX}%)`;
                console.log('Moving to slide', currentSlide, 'translateX:', translateX);
                
                // Update dots
                if (dotsContainer) {
                    document.querySelectorAll('.slider-dot').forEach((dot, index) => {
                        dot.classList.toggle('active', index === currentSlide);
                    });
                }
                
                // Update button states
                if (prevBtn) prevBtn.style.opacity = currentSlide === 0 ? '0.5' : '1';
                if (nextBtn) nextBtn.style.opacity = currentSlide === totalSlides - 1 ? '0.5' : '1';
            }
            
            function goToSlide(slideIndex) {
                if (slideIndex >= 0 && slideIndex < totalSlides) {
                    currentSlide = slideIndex;
                    updateSlider();
                }
            }
            
            function nextSlide() {
                if (currentSlide < totalSlides - 1) {
                    currentSlide++;
                } else {
                    // Loop back to first slide
                    currentSlide = 0;
                }
                updateSlider();
            }
            
            function prevSlide() {
                if (currentSlide > 0) {
                    currentSlide--;
                } else {
                    // Loop to last slide
                    currentSlide = totalSlides - 1;
                }
                updateSlider();
            }
            
            // Event listeners
            if (nextBtn) {
                nextBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    console.log('Next button clicked');
                    nextSlide();
                });
            }
            
            if (prevBtn) {
                prevBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    console.log('Prev button clicked');
                    prevSlide();
                });
            }
            
            // Auto-slide functionality (only if more than one slide)
            let autoSlideInterval;
            if (totalSlides > 1) {
                autoSlideInterval = setInterval(nextSlide, 5000);
                
                // Pause auto-slide on hover
                const sliderContainer = document.querySelector('.reviews-slider-container');
                if (sliderContainer) {
                    sliderContainer.addEventListener('mouseenter', () => {
                        clearInterval(autoSlideInterval);
                    });
                    
                    sliderContainer.addEventListener('mouseleave', () => {
                        autoSlideInterval = setInterval(nextSlide, 5000);
                    });
                }
            }
            
            // Touch/swipe support (do not block vertical scroll)
            let startX = 0;
            let startY = 0;
            let isDragging = false;
            
            slider.addEventListener('touchstart', (e) => {
                startX = e.touches[0].clientX;
                startY = e.touches[0].clientY;
                isDragging = true;
                if (autoSlideInterval) clearInterval(autoSlideInterval);
            }, { passive: true });
            
            slider.addEventListener('touchmove', (e) => {
                if (!isDragging) return;
                const currentX = e.touches[0].clientX;
                const currentY = e.touches[0].clientY;
                const diffX = Math.abs(currentX - startX);
                const diffY = Math.abs(currentY - startY);
                // Only prevent default when horizontal gesture dominates
                if (diffX > diffY && diffX > 10) {
                    e.preventDefault();
                }
            }, { passive: false });
            
            slider.addEventListener('touchend', (e) => {
                if (!isDragging) return;
                isDragging = false;
                
                const endX = e.changedTouches[0].clientX;
                const diff = startX - endX;
                
                if (Math.abs(diff) > 50) {
                    if (diff > 0) {
                        nextSlide();
                    } else {
                        prevSlide();
                    }
                }
                
                if (totalSlides > 1) {
                    autoSlideInterval = setInterval(nextSlide, 5000);
                }
            });
            
            // Mouse drag support
            let mouseStartX = 0;
            let isMouseDragging = false;
            
            slider.addEventListener('mousedown', (e) => {
                mouseStartX = e.clientX;
                isMouseDragging = true;
                if (autoSlideInterval) clearInterval(autoSlideInterval);
                e.preventDefault();
            });
            
            slider.addEventListener('mousemove', (e) => {
                if (!isMouseDragging) return;
                e.preventDefault();
            });
            
            slider.addEventListener('mouseup', (e) => {
                if (!isMouseDragging) return;
                isMouseDragging = false;
                
                const mouseEndX = e.clientX;
                const diff = mouseStartX - mouseEndX;
                
                if (Math.abs(diff) > 50) {
                    if (diff > 0) {
                        nextSlide();
                    } else {
                        prevSlide();
                    }
                }
                
                if (totalSlides > 1) {
                    autoSlideInterval = setInterval(nextSlide, 5000);
                }
            });
            
            // Initialize
            updateSlider();
        });

        // Function to toggle review text
        function toggleReviewText(element) {
            const content = element.parentElement.querySelector('.review-text-content');
            const fullText = element.parentElement.querySelector('.review-text-full');
            
            if (fullText.style.display === 'none') {
                content.style.display = 'none';
                fullText.style.display = 'block';
                element.textContent = '... Less';
            } else {
                content.style.display = 'block';
                fullText.style.display = 'none';
                element.textContent = '... More';
            }
        }
        </script>
        
        
        <!-- Call To Action Area start -->
        <section class="cta-area py-100 rel z-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-8">
                        <div class="cta-content">
                            <div class="section-title text-white mb-20">
                                <span class="sub-title mb-5">Need new experience?</span>
                                <h2>You can request for any new hala food!</h2>
                            </div>
                            <a href="{{ route('contact') }}" class="theme-btn style-two">get a quote <i class="far fa-arrow-alt-right"></i></a>
                            <div class="cta-badge" style="background-image: url(assets/images/shapes/cta-shape.png)">
                                <span>halal<br> certified</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cta-bg" style="background-image: url(assets/images/background/kabab-platter-cta.png)"></div>
        </section>
        <!-- Call To Action Area end -->
        
        
        <!-- Dishes Area start -->
        {{-- <section class="dishes-area pt-130 rpt-100 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">popular dishes</span>
                            <h2>explore popular menus</h2>
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
        </section> --}}
        <!-- Dishes Area end -->
           
        
    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection
