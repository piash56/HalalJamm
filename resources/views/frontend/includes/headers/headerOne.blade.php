<!-- main header -->
<header class="main-header white-menu menu-absolute">
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="container-fluid clearfix">

            <div class="header-inner rel d-flex align-items-center">
                <div class="logo-outer">
                    <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('/assets/images/logos/halalljamm.png') }}" alt="Logo" title="Logo"></a></div>
                </div>

                <div class="nav-outer ms-lg-5 ps-xxl-4 clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header py-10">
                            <div class="mobile-logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('/assets/images/logos/halalljamm.png') }}" alt="Logo" title="Logo">
                                </a>
                            </div>
                            
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                @include('frontend.includes.partials.navbar')
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                </div>
                
                <div class="header-number">
                    <i class="far fa-phone"></i>Call : <a href="{{ url('callto:+13472333715') }}">+1 347-233-3715</a>
                </div>
                
                <!-- Menu Button -->
                <div class="menu-btns">
                    <button onclick="window.location.href='{{ route('cart') }}'"><i class="far fa-shopping-cart"></i> <span id="cart-count">{{ count(session()->get('cart', [])) }}</span></button>
                    <a href="https://halal-jamm-queens.cloveronline.com/menu/all" target="_blank" class="theme-btn">Order now <i class="far fa-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
</header>
<!--Form Back Drop-->

