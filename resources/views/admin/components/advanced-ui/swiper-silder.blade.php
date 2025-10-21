@extends('layouts.components', ['title' => 'Swiper Slider'])

@section('css')
    @vite(['node_modules/swiper/swiper-bundle.min.css', 'node_modules/swiper/modules/navigation.css'])
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Default Swiper
                    </h5>
                    <p class="card-subtitle">Use <code>data-swiper="default"</code> attribute to set a default swiper.</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Default Swiper -->
                            <div class="swiper rounded" data-swiper="default">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-1.jpg" alt="" class="img-fluid" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-2.jpg" alt="" class="img-fluid" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-3.jpg" alt="" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Navigation & Pagination Swiper
                    </h5>
                    <p class="card-subtitle">Use <code>data-swiper="navigation"</code> attribute to set a swiper with navigation and pagination.</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <!-- Navigation & Pagination Swiper -->
                            <div class="swiper rounded" data-swiper="navigation">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-4.jpg" alt="" class="img-fluid" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-5.jpg" alt="" class="img-fluid" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-6.jpg" alt="" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Pagination Dynamic Swiper
                    </h5>
                    <p class="card-subtitle">Use <code>data-swiper="dynamic"</code> attribute to set a swiper with dynamic and pagination.</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <!-- Pagination Dynamic Swiper -->
                            <div class="swiper rounded" data-swiper="dynamic">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-4.jpg" alt="" class="img-fluid" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-5.jpg" alt="" class="img-fluid" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-6.jpg" alt="" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="swiper-pagination dynamic-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Effect Fade Swiper
                    </h5>
                    <p class="card-subtitle">Use <code>data-swiper="effect-fade"</code> attribute to set a swiper with fade effect.</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <!-- Effect Fade Swiper -->
                            <div class="swiper rounded" data-swiper="effect-fade">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-3.jpg" alt="" class="img-fluid" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-4.jpg" alt="" class="img-fluid" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-5.jpg" alt="" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Effect Creative Swiper
                    </h5>
                    <p class="card-subtitle">Use <code>data-swiper="creative"</code> attribute to set a swiper with creative custom effect.</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Effect Creative Swiper -->
                            <div class="swiper" data-swiper="creative">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-3.jpg" alt="" class="img-fluid rounded" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-4.jpg" alt="" class="img-fluid rounded" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-5.jpg" alt="" class="img-fluid rounded" />
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Effect Flip Swiper
                    </h5>
                    <p class="card-subtitle">Use <code>data-swiper="flip"</code> attribute to set a swiper with flip custom effect.</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <!-- Effect Flip Swiper -->
                            <div class="swiper" data-swiper="flip">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-3.jpg" alt="" class="img-fluid rounded" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-4.jpg" alt="" class="img-fluid rounded" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-5.jpg" alt="" class="img-fluid rounded" />
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Scrollbar Swiper
                    </h5>
                    <p class="card-subtitle">Use <code>data-swiper="scrollbar"</code> attribute to set a swiper with scrollbar pagination.</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <!-- Scrollbar Swiper Swiper -->
                            <div class="swiper" data-swiper="scrollbar">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-3.jpg" alt="" class="img-fluid rounded" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-4.jpg" alt="" class="img-fluid rounded" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-5.jpg" alt="" class="img-fluid rounded" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-scrollbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Vertical Swiper
                    </h5>
                    <p class="card-subtitle">Use <code>data-swiper="vertical"</code> attribute to set a swiper with vertical pagination.</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <!-- Vertical Swiper -->
                            <div class="swiper" data-swiper="vertical" style="height: 320px;">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-3.jpg" alt="" class="img-fluid rounded" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-4.jpg" alt="" class="img-fluid rounded" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-5.jpg" alt="" class="img-fluid rounded" />
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">


            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Mousewheel Control Swiper
                    </h5>
                    <p class="card-subtitle">Use <code>data-swiper="mousewheel"</code> attribute to set a swiper with mousewheel scroll.</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <!-- Mousewheels Swiper -->
                            <div class="swiper rounded" data-swiper="mousewheel" style="height: 324px;">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-3.jpg" alt="" class="img-fluid rounded" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-4.jpg" alt="" class="img-fluid rounded" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/small/img-5.jpg" alt="" class="img-fluid rounded" />
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Responsive Breakpoints Swiper
                    </h5>
                    <p class="card-subtitle">Use <code>data-swiper="responsive"</code> attribute to set a responsive swiper.</p>
                </div>
                <div class="card-body">
                    <!-- Responsive Breakpoints Swiper -->
                    <div class="swiper rounded gallery-light pb-4" data-swiper="responsive">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/images/small/img-1.jpg" alt="" class="img-fluid rounded" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/small/img-2.jpg" alt="" class="img-fluid rounded" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/small/img-3.jpg" alt="" class="img-fluid rounded" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/small/img-4.jpg" alt="" class="img-fluid rounded" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/small/img-5.jpg" alt="" class="img-fluid rounded" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/small/img-6.jpg" alt="" class="img-fluid rounded" />
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-dark"></div>
                    </div>

                </div> <!-- end card body -->
            </div>
        </div> <!-- end col -->
    </div> 
@endsection