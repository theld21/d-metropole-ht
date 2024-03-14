@extends('layouts.default')

@section('main-content')
    <!-- Hero Section Start -->
    <section class="hero-area py-250 rpt-150 corner-shapes-wrap"
        style="background-image: url({{ asset('images/background/hero-bg.jpeg') }});">
        <div class="corner-shapes"></div>
        <div class="container container-1170 pb-200 rpb-0">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7 col-lg-8">
                    <div class="hero-content rmb-65 wow fadeInUp delay-0-2s">
                        <h1>D’METROPOLE HÀ TĨNH</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- About Area start -->
    <section class="about-area pt-120">
        <div class="container">
            <div class="row rel z-1 justify-content-center">
                <div class="col-xl-8 col-lg-11">
                    <div class="section-title text-center">
                        <span class="sub-title mb-55 wow fadeInUp delay-0-2s">Giới thiệu về chủ đầu tư</span>
                    </div>
                    <div class="about-logo-icon wow zoomIn delay-0-4s"><img src="{{ asset('images/logos/logo-icon.png') }}"
                            alt="Logo Icon"></div>
                </div>
                <div class="col-xl-8 col-lg-11">
                    <div class="section-title mb-65 rmb-45 wow fadeInUp delay-0-3s">
                        <h2>DAX is a modern residential comlex in your city</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8">
                    <div class="section-text wow fadeInUp delay-0-4s">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Etiam dignissim diam quis enim lobortis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area end -->


    <!-- Introducing Area start -->
    <section class="introducing-area pt-100">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="introducing-left-image wow fadeInLeft delay-0-2s">
                        <img src="{{ asset('images/about/about-left.jpg') }}" alt="About Left">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="introducing-right-content mt-120 mb-240 rmb-150 wow fadeInUp delay-0-2s">
                                <div class="section-title mb-35">
                                    <h3>Location, Community, Quality Living. It Starts Here!</h3>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua sed faucibus turpis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="introducing-right-image wow fadeInUp delay-0-3s">
                        <img src="{{ asset('images/about/about-right.jpg') }}" alt="About Right">
                        <a href="https://elcon.kwst.net/site/video/3.mp4" class="mfp-iframe video-play"><i
                                class="fal fa-gem"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Introducing Area end -->

    <!-- Counter Area start -->
    <section class="counter-area pb-110 rpb-100">
        <div class="container" style="margin-top: 60px;">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-6">
                    <div class="counter-item wow fadeInUp delay-0-2s">
                        <span class="counter-count">264</span>
                        <h6>Apartments</h6>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-6">
                    <div class="counter-item wow fadeInUp delay-0-3s">
                        <span class="counter-count">12-21</span>
                        <h6>Floors</h6>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-6">
                    <div class="counter-item wow fadeInUp delay-0-4s">
                        <span class="counter-count">2100<sup>m2</sup></span>
                        <h6>of common green areas</h6>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-6">
                    <div class="counter-item wow fadeInUp delay-0-5s">
                        <span class="counter-count">979</span>
                        <h6>Underground parking spaces</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Area end -->

    <!-- Developer Area start -->
    <section class="developer-area rel z-1 py-120 rpb-100">
        <div class="container">
            <div class="row justify-content-between pb-25">
                <div class="col-lg-12">
                    <div class="section-title wow fadeInRight delay-0-2s">
                        <span class="sub-title mb-65">Dự án</span>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-title mb-35 wow fadeInRight delay-0-2s">
                        <h2>Các dự án đang triển khai</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-text mb-25 wow fadeInLeft delay-0-2s">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Etiam dignissim diam quis enim lobortis.</p>
                    </div>
                    <div class="socials mb-35 wow fadeInLeft delay-0-2s">
                        <b><a href="#">companyname.com</a></b>
                        <div class="social-style-one">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gap-40">
                <div class="col-xl-4 col-md-6">
                    <div class="developer-item wow fadeInUp delay-0-2s">
                        <img src="{{ asset('images/developer/developer1.jpg') }}" alt="Developer">
                        <div class="developer-content">
                            <div class="icon"><i class="fal fa-building"></i></div>
                            <h3><a href="project-details.html">Tower Business Center</a></h3>
                            <p>Volutpat diam ut venenatis tellus in metus vulputate. Phasellus egestas tellus rutrum
                                tellus pellentesque eu. Condimentum vitae sapien pellentesque habitant morbi
                                tristique.</p>
                            <a class="details-btn" href="project-details.html"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="developer-item wow fadeInUp delay-0-4s">
                        <img src="{{ asset('images/developer/developer2.jpg') }}" alt="Developer">
                        <div class="developer-content">
                            <div class="icon"><i class="fal fa-warehouse"></i></div>
                            <h3><a href="project-details.html">Kvartal <br>Residences</a></h3>
                            <p>Volutpat diam ut venenatis tellus in metus vulputate. Phasellus egestas tellus rutrum
                                tellus pellentesque eu. Condimentum vitae sapien pellentesque habitant morbi
                                tristique.</p>
                            <a class="details-btn" href="project-details.html"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="developer-item wow fadeInUp delay-0-6s">
                        <img src="{{ asset('images/developer/developer3.jpg') }}" alt="Developer">
                        <div class="developer-content">
                            <div class="icon"><i class="fal fa-gopuram"></i></div>
                            <h3><a href="project-details.html">Premiumpark Residences</a></h3>
                            <p>Volutpat diam ut venenatis tellus in metus vulputate. Phasellus egestas tellus rutrum
                                tellus pellentesque eu. Condimentum vitae sapien pellentesque habitant morbi
                                tristique.</p>
                            <a class="details-btn" href="project-details.html"><i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <a href="#" class="theme-btn mt-10 wow fadeInUp delay-0-2s">See all projects</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Developer Area end -->


    <!-- Features Area start -->
    <section class="features-area pb-120 rpb-0">
        <div class="container">
            <div class="row gap-60 align-items-center">
                <div class="section-title wow fadeInLeft delay-0-2s">
                    <span class="sub-title  mb-55">Tin tức</span>
                </div>
                <div class="col-lg-8">
                    <div class="features-image rmb-55 wow fadeInUp delay-0-2s">
                        <img src="{{ asset('images/features/features.jpg') }}" alt="Features">
                        <button type="button" class="hotspot-btn" data-bs-toggle="tooltip"
                            title="Hotspot Text"></button>
                        <button type="button" class="hotspot-btn" data-bs-toggle="tooltip"
                            title="Hotspot Text"></button>
                        <button type="button" class="hotspot-btn" data-bs-toggle="tooltip"
                            title="Hotspot Text"></button>
                        <button type="button" class="hotspot-btn" data-bs-toggle="tooltip"
                            title="Hotspot Text"></button>
                        <button type="button" class="hotspot-btn" data-bs-toggle="tooltip"
                            title="Hotspot Text"></button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-content-slider z-2 wow fadeInUp delay-0-4s">
                        <div class="features-content-item">
                            <h5>Modern conveniences & entertainment, all within your reach</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Purus gravida quis blandit turpis
                                cursus in hac habitasse platea.</p>
                            <p>Elit scelerisque mauris pellentesque pulvinar pellentesque habitant.</p>
                        </div>
                        <div class="features-content-item">
                            <h5>Modern conveniences & entertainment, all within your reach</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Purus gravida quis blandit turpis
                                cursus in hac habitasse platea.</p>
                            <p>Elit scelerisque mauris pellentesque pulvinar pellentesque habitant.</p>
                        </div>
                        <div class="features-content-item">
                            <h5>Modern conveniences & entertainment, all within your reach</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Purus gravida quis blandit turpis
                                cursus in hac habitasse platea.</p>
                            <p>Elit scelerisque mauris pellentesque pulvinar pellentesque habitant.</p>
                        </div>
                    </div>
                    <div class="navi-pagi-area mt-15 wow fadeInUp delay-0-5s">
                        <button class="feature-prev"><i class="fal fa-long-arrow-left"></i></button>
                        <button class="feature-next"><i class="fal fa-long-arrow-right"></i></button>
                        <span class="featurepagi paginginfo"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Area end -->


    <!-- Client Logo Area start -->
    <div class="client-logo-area py-100">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="section-title text-center mb-65 wow fadeInUp delay-0-2s">
                    <h3 class="sub-title mb-60">Đối tác</h3>
                </div>
                <div class="col-xl-3 col-lg-4 col-6">
                    <div class="client-logo-item wow fadeInUp delay-0-2s">
                        <a href="#"><img src="{{ asset('images/client-logos/client-logo1.png') }}"
                                alt="Client Logo"></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-6">
                    <div class="client-logo-item wow fadeInUp delay-0-3s">
                        <a href="#"><img src="{{ asset('images/client-logos/client-logo2.png') }}"
                                alt="Client Logo"></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-6">
                    <div class="client-logo-item wow fadeInUp delay-0-4s">
                        <a href="#"><img src="{{ asset('images/client-logos/client-logo3.png') }}"
                                alt="Client Logo"></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-6">
                    <div class="client-logo-item wow fadeInUp delay-0-5s">
                        <a href="#"><img src="{{ asset('images/client-logos/client-logo4.png') }}"
                                alt="Client Logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Client Logo Area end -->
@endsection
