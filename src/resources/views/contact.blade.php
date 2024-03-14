@extends('layouts.default')

@section('main-content')
    <!-- Banner Section Start -->
    <section class="banner-area pt-220 pb-250 rpy-150 corner-shapes-wrap"
        style="background-image: url({{ asset('images/background/blog-banner.jpg') }});">
        <div class="corner-shapes"></div>
        <div class="container container-1170 pb-200 rpb-0">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-8 col-lg-12">
                    <div class="banner-content wow fadeInUp delay-0-2s">
                        <nav aria-label="breadcrumb" class="mb-35 rmb-20">
                            <ol class="breadcrumb wow fadeInUp delay-0-4s">
                                <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                <li class="breadcrumb-item active">contact</li>
                            </ol>
                        </nav>
                        <h1>Get in touch now</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->


    <!-- Contact Form Area start -->
    <section class="contact-area py-120">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-5 wow fadeInLeft delay-0-2s">
                    <div class="section-title mb-60">
                        <span class="sub-title mb-60">WRITE A MESSAGE</span>
                        <h2>We’re here to help You</h2>
                    </div>
                    <div class="contact-info-item">
                        <div class="icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="content">
                            <span class="title">Have any question?</span>
                            <span class="text"><span>Free</span> <a href="callto:+61(313)83766284">+61 (313) 8376
                                    6284</a></span>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="content">
                            <span class="title">Write email</span>
                            <span class="text"><a href="mailto:info@dax.com">info@dax.com</a></span>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="content">
                            <span class="title">Visit anytime</span>
                            <span class="text">2425 Westview Dr W, Seattle, WA 98119, USA</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight delay-0-2s">
                    <form id="contactForm" class="contact-form rmt-55 contactForm" action="#" name="contactForm"
                        method="post">
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control" value=""
                                placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control" value=""
                                placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" rows="9" placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group text-center mb-0">
                            <button type="submit" class="theme-btn style-three w-100">Send a message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form Area end -->


    <!-- Services Area start -->
    <section class="sservices-area bgc-secondary pt-120 pb-80">
        <div class="container">
            <div class="row gap-40">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-item wow fadeInUp delay-0-2s">
                        <div class="icon">
                            <i class="fal fa-building"></i>
                        </div>
                        <h5>Tower<br> Business Center</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-item wow fadeInUp delay-0-4s">
                        <div class="icon">
                            <i class="fal fa-house-leave"></i>
                        </div>
                        <h5>Kvartal<br> Residences</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-item wow fadeInUp delay-0-6s">
                        <div class="icon">
                            <i class="fal fa-house"></i>
                        </div>
                        <h5>Premiumpark<br> Residences</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-item wow fadeInUp delay-0-8s">
                        <div class="icon">
                            <i class="fal fa-monument"></i>
                        </div>
                        <h5>Alexandria<br> Residences</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Area end -->
@endsection
