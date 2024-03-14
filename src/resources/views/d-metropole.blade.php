@extends('layouts.default')

@section('main-content')
    <!-- Banner Section Start -->
    <section class="banner-area pt-220 pb-250 rpt-150 rpb-100 corner-shapes-wrap"
        style="background-image: url({{ asset('images/background/hero-bg.jpeg') }});">
        <div class="corner-shapes"></div>
        <div class="container container-1170 pb-200 rpb-0">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-9 col-lg-12">
                    <div class="banner-content rmb-65 wow fadeInUp delay-0-2s">
                        <nav aria-label="breadcrumb" class="mb-35 rmb-20">
                            <ol class="breadcrumb wow fadeInUp delay-0-4s">
                                <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                <li class="breadcrumb-item"><a href="projects.html">Projects</a></li>
                                <li class="breadcrumb-item active">Project Details</li>
                            </ol>
                        </nav>
                        <h1>DAX is a modern residential complex in your city</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->


    <!-- Overview Area start -->
    <section class="overview-area pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="overview-images">
                        <div class="image-one wow fadeInRight delay-0-2s">
                            <img src="{{ asset('images/overview/overview1.jpg') }}" alt="Overview">
                        </div>
                        <div class="image-two wow fadeInRight delay-0-4s">
                            <img src="{{ asset('images/overview/overview2.jpg') }}" alt="Overview">
                            <a href="https://elcon.kwst.net/site/video/3.mp4" class="mfp-iframe video-play"><i
                                    class="fal fa-gem"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end pt-100">
                    <div class="row justify-content-end">
                        <div class="col-xl-10">
                            <div class="section-title mb-60 wow fadeInRight delay-0-2s">
                                <span class="sub-title mb-55 rmb-25 wow fadeInRight delay-0-4s">overview</span>
                                <h2>Modern & premium apartments</h2>
                                <div class="section-text pt-40 wow fadeInRight delay-0-2s">
                                    <p>Odio tempor orci dapibus ultrices. Volutpat sed cras ornare arcu dui vivamus arcu
                                        felis. Sed elementum tempus egestas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="counter-three-wrap">
                        <div class="row gap-40">
                            <div class="col-md-3 col-6 col-small">
                                <div class="counter-item-three counter-text-wrap wow fadeInUp delay-0-2s">
                                    <img src="{{ asset('images/icons/overfiew-icon1.png') }}" alt="Icon">
                                    <span class="count-text" data-speed="3000" data-stop="11700">0</span>
                                    <span class="counter-title">SQAURE AREAS</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 col-small">
                                <div class="counter-item-three counter-text-wrap wow fadeInUp delay-0-4s">
                                    <img src="{{ asset('images/icons/overfiew-icon2.png') }}" alt="Icon">
                                    <span class="count-text" data-speed="3000" data-stop="264">0</span>
                                    <span class="counter-title">APARTMENTS</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 col-small">
                                <div class="counter-item-three counter-text-wrap wow fadeInUp delay-0-6s">
                                    <img src="{{ asset('images/icons/overfiew-icon3.png') }}" alt="Icon">
                                    <span class="count-text" data-speed="3000" data-stop="520">0</span>
                                    <span class="counter-title">CAR PARKINGS</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 col-small">
                                <div class="counter-item-three counter-text-wrap wow fadeInUp delay-0-8s">
                                    <img src="{{ asset('images/icons/overfiew-icon4.png') }}" alt="Icon">
                                    <span class="count-text meter" data-speed="3000" data-stop="2100">0</span>
                                    <span class="counter-title">park areas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Overview Area end -->


    <!-- Benefits Area start -->
    <section class="benefits-area-two pt-120 pb-25">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-5">
                    <div class="benefit-are-two-content mb-55">
                        <div class="section-title text-white mb-45 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-60 wow fadeInUp delay-0-4s">benefits</span>
                            <h2>Our main property features</h2>
                        </div>
                        <div class="section-text text-white mb-35 wow fadeInUp delay-0-2s">
                            <p>Condimentum vitae sapien pellentesque habitant morbi tristique. Sem et tortor consequat id
                                porta. Auctor neque vitae tempus quam pellentesque.</p>
                        </div>
                        <div class="row gap-40">
                            <div class="col-lg-6">
                                <ul class="list-style-one text-white wow fadeInUp delay-0-2s">
                                    <li>Condimentum vitae sapien pellentesque habitant morbi.</li>
                                    <li>Mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. Amet commodo.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-style-one text-white wow fadeInUp delay-0-4s">
                                    <li>Nec feugiat in fermentum posuere urna nec tincidunt. Venenatis urna cursus eget.
                                    </li>
                                    <li>Purus sit amet volutpat consequat mauris nunc.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row gap-40 mb-55">
                        <div class="col-sm-6">
                            <div class="benefit-two-item wow fadeInUp delay-0-2s">
                                <div class="icon">
                                    <img src="{{ asset('images/icons/benefit-icon1.png') }}" alt="Icon">
                                    <h6>Air<br> cleaning</h6>
                                </div>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua vestibulum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="benefit-two-item wow fadeInUp delay-0-4s">
                                <div class="icon">
                                    <img src="{{ asset('images/icons/benefit-icon2.png') }}" alt="Icon">
                                    <h6>Ventilation</h6>
                                </div>
                                <div class="content">
                                    <p>Platea dictumst quisque sagittis purus sit amet. Massa sed elementum tempus egestas
                                        sed sed.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="benefit-two-item wow fadeInUp delay-0-2s">
                                <div class="icon">
                                    <img src="{{ asset('images/icons/benefit-icon3.png') }}" alt="Icon">
                                    <h6>Heating</h6>
                                </div>
                                <div class="content">
                                    <p>Duis convallis convallis tellus id interdum velit. Posuere lorem ipsum dolor sit
                                        amet. Adipiscing commodo elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="benefit-two-item wow fadeInUp delay-0-4s">
                                <div class="icon">
                                    <img src="{{ asset('images/icons/benefit-icon4.png') }}" alt="Icon">
                                    <h6>Water<br> Supply</h6>
                                </div>
                                <div class="content">
                                    <p>Arcu non odio euismod lacinia at quis risus sed vulputate. Enim nulla aliquet
                                        porttitor lacus. Turpis massa tincidunt dui ut ornare.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="benefit-two-item wow fadeInUp delay-0-2s">
                                <div class="icon">
                                    <img src="{{ asset('images/icons/benefit-icon5.png') }}" alt="Icon">
                                    <h6>Power<br> Supply</h6>
                                </div>
                                <div class="content">
                                    <p>Lobortis mattis aliquam faucibus purus in massa tempor. Vel fringilla est ullamcorper
                                        eget nulla facilisi etiam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="benefit-two-item wow fadeInUp delay-0-4s">
                                <div class="icon">
                                    <img src="{{ asset('images/icons/benefit-icon6.png') }}" alt="Icon">
                                    <h6>Security</h6>
                                </div>
                                <div class="content">
                                    <p>Ac turpis egestas integer eget. Morbi quis commodo odio aenean sed. Tellus mauris a
                                        diam maecenas. Nisl suscipit adipiscing bibendum est ultricies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Benefits Area end -->


    <!-- Apartments Area start -->
    <section class="apartments-area pb-115">
        <div class="container">
            <div class="row rel z-1 justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-65 wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-60 wow fadeInUp delay-0-4s">Apartments</span>
                        <h2>Home is where the amenities are</h2>
                        <div class="section-text pt-45 wow fadeInUp delay-0-2s">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore.</p>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="tab-style-one nav nav-pills nav-fill mb-45 rmb-15">
                <li class="nav-item wow fadeInUp delay-0-2s">
                    <a class="nav-link active" data-bs-toggle="tab" href="#apart-tap1">One room</a>
                </li>
                <li class="nav-item wow fadeInUp delay-0-4s">
                    <a class="nav-link" data-bs-toggle="tab" href="#apart-tap2">Two rooms</a>
                </li>
                <li class="nav-item wow fadeInUp delay-0-6s">
                    <a class="nav-link" data-bs-toggle="tab" href="#apart-tap3">Three rooms</a>
                </li>
                <li class="nav-item wow fadeInUp delay-0-8s">
                    <a class="nav-link" data-bs-toggle="tab" href="#apart-tap4">Four rooms</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="apart-tap1">
                    <div class="row gap-50 align-items-center">
                        <div class="col-lg-8">
                            <div class="apartment-image rmb-45 wow fadeInLeft delay-0-2s">
                                <img src="{{ asset('images/apartments/apartment.png') }}" alt="Apartment">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="apartment-content wow fadeInRight delay-0-2s">
                                <h6>From</h6>
                                <span class="big-text">64m</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua etiam dignissim diam.</p>
                                <a href="projects.html" class="theme-btn style-four mt-25 mb-40">Show offer of
                                    apartments</a><br>
                                <a href="projects.html">6 vacant apartments</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="apart-tap2">
                    <div class="row gap-50 align-items-center">
                        <div class="col-lg-4">
                            <div class="apartment-content rmt-15">
                                <h6>From</h6>
                                <span class="big-text">64m</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua etiam dignissim diam.</p>
                                <a href="projects.html" class="theme-btn style-four mt-25 mb-40">Show offer of
                                    apartments</a><br>
                                <a href="projects.html">6 vacant apartments</a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="apartment-image rmt-45">
                                <img src="{{ asset('images/apartments/apartment.png') }}" alt="Apartment">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="apart-tap3">
                    <div class="row gap-50 align-items-center">
                        <div class="col-lg-8">
                            <div class="apartment-image rmb-45">
                                <img src="{{ asset('images/apartments/apartment.pn') }}" alt="Apartment">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="apartment-content">
                                <h6>From</h6>
                                <span class="big-text">64m</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua etiam dignissim diam.</p>
                                <a href="projects.html" class="theme-btn style-four mt-25 mb-40">Show offer of
                                    apartments</a><br>
                                <a href="projects.html">6 vacant apartments</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="apart-tap4">
                    <div class="row gap-50 align-items-center">
                        <div class="col-lg-4">
                            <div class="apartment-content rmt-15">
                                <h6>From</h6>
                                <span class="big-text">64m</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua etiam dignissim diam.</p>
                                <a href="projects.html" class="theme-btn style-four mt-25 mb-40">Show offer of
                                    apartments</a><br>
                                <a href="projects.html">6 vacant apartments</a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="apartment-image rmt-45">
                                <img src="{{ asset('images/apartments/apartment.png') }}" alt="Apartment">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Apartments Area end -->


    <!-- Tour Area start -->
    <section class="tour-area pb-120 rpb-0">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7">
                    <div class="tour-video-part rel rmb-75 wow fadeInRight delay-0-2s">
                        <img src="{{ asset('images/background/tour-video.jpg') }}" alt="About Right">
                        <a href="https://elcon.kwst.net/site/video/3.mp4" class="mfp-iframe video-play"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="section-title wow fadeInLeft delay-0-2s">
                        <span class="sub-title mb-60 wow fadeInLeft delay-0-4s">tour</span>
                        <h2>Video tour</h2>
                        <div class="section-text pt-35 wow fadeInLeft delay-0-2s">
                            <p>Cursus in hac habitasse platea dictumst quisque sagittis purus. Dolor sit amet consectetur
                                adipiscing elit ut.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tour Area end -->
@endsection
