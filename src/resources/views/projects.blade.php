@extends('layouts.default')

@section('main-content')
    <!-- Banner Section Start -->
    <section class="banner-area">
        <div class="pt-220 pb-250 rpt-150 rpb-100 corner-shapes-wrap"
            style="background-image: url({{ asset('images/background/project-banner.jpg') }});">
            <div class="corner-shapes"></div>
            <div class="container container-1170 pb-200 rpb-0">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-8">
                        <div class="banner-content rmb-65 wow fadeInUp delay-0-2s">
                            <nav aria-label="breadcrumb" class="mb-35 rmb-20">
                                <ol class="breadcrumb wow fadeInUp delay-0-4s">
                                    <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                    <li class="breadcrumb-item active">projects</li>
                                </ol>
                            </nav>
                            <h1>Our projects</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->


    <!-- Cities Area start -->
    <section class="cities-area rel z-2 pt-120 pb-80">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <div class="section-title wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-65">Cities</span>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-7">
                    <div class="section-title text-white mb-35 wow fadeInUp delay-0-4s">
                        <h2><span>8 cities</span> in which we created comfort</h2>
                    </div>
                </div>
                <div class="col-lg-4 mb-35">
                    <div class="cities-select wow fadeInUp delay-0-2s">
                        <h3>Select city:</h3>
                        <select name="#">
                            <option value="New York">New York</option>
                            <option value="Memphis">Memphis</option>
                            <option value="Seattle" selected>Seattle</option>
                            <option value="Detroit">Detroit</option>
                            <option value="Seattle">Nashville</option>
                            <option value="Philadelphia">Philadelphia</option>
                            <option value="Houston">Houston</option>
                            <option value="Chicago">Chicago</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cities Area start -->


    <!-- Projects Area start -->
    <section class="projects-area rel z-1 pt-115 pb-120">
        <div class="container">
            <div class="row justify-content-between pb-25">
                <div class="col-lg-12">
                    <div class="section-title mb-35 wow fadeInUp delay-0-2s">
                        <h2>Seattle</h2>
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
                            <p>Volutpat diam ut venenatis tellus in metus vulputate. Phasellus egestas tellus rutrum tellus
                                pellentesque eu. Condimentum vitae sapien pellentesque habitant morbi tristique.</p>
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
                            <p>Volutpat diam ut venenatis tellus in metus vulputate. Phasellus egestas tellus rutrum tellus
                                pellentesque eu. Condimentum vitae sapien pellentesque habitant morbi tristique.</p>
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
                            <p>Volutpat diam ut venenatis tellus in metus vulputate. Phasellus egestas tellus rutrum tellus
                                pellentesque eu. Condimentum vitae sapien pellentesque habitant morbi tristique.</p>
                            <a class="details-btn" href="project-details.html"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="developer-item wow fadeInUp delay-0-2s">
                        <img src="{{ asset('images/developer/developer4.jpg') }}" alt="Developer">
                        <div class="developer-content">
                            <div class="icon"><i class="fal fa-house-flood"></i></div>
                            <h3><a href="project-details.html">Grand Loft Business Center</a></h3>
                            <p>Volutpat diam ut venenatis tellus in metus vulputate. Phasellus egestas tellus rutrum tellus
                                pellentesque eu. Condimentum vitae sapien pellentesque habitant morbi tristique.</p>
                            <a class="details-btn" href="project-details.html"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="developer-item wow fadeInUp delay-0-4s">
                        <img src="{{ asset('images/developer/developer5.jpg') }}" alt="Developer">
                        <div class="developer-content">
                            <div class="icon"><i class="fal fa-house-signal"></i></div>
                            <h3><a href="project-details.html">Alexandria Residences</a></h3>
                            <p>Volutpat diam ut venenatis tellus in metus vulputate. Phasellus egestas tellus rutrum tellus
                                pellentesque eu. Condimentum vitae sapien pellentesque habitant morbi tristique.</p>
                            <a class="details-btn" href="project-details.html"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="developer-item wow fadeInUp delay-0-6s">
                        <img src="{{ asset('images/developer/developer6.jpg') }}" alt="Developer">
                        <div class="developer-content">
                            <div class="icon"><i class="fal fa-laptop-house"></i></div>
                            <h3><a href="project-details.html">Parkroyal Residences</a></h3>
                            <p>Volutpat diam ut venenatis tellus in metus vulputate. Phasellus egestas tellus rutrum tellus
                                pellentesque eu. Condimentum vitae sapien pellentesque habitant morbi tristique.</p>
                            <a class="details-btn" href="project-details.html"><i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <ul class="pagination mt-40 flex-wrap justify-content-center wow fadeInUp delay-0-2s">
                        <li class="page-item active">
                            <span class="page-link">
                                1
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects Area end -->
@endsection
