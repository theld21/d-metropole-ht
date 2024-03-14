@extends('layouts.default')

@section('main-content')
    <!-- Banner Section Start -->
    <section class="banner-area pt-220 pb-250 rpt-150 rpb-100 corner-shapes-wrap"
        style="background-image: url({{ asset('images/background/banner-bg.jpg') }});">
        <div class="corner-shapes"></div>
        <div class="container container-1170 pb-200 rpb-0">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7 col-lg-8">
                    <div class="banner-content rmb-65 wow fadeInUp delay-0-2s">
                        <nav aria-label="breadcrumb" class="mb-35 rmb-20">
                            <ol class="breadcrumb wow fadeInUp delay-0-4s">
                                <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                <li class="breadcrumb-item active">About Us</li>
                            </ol>
                        </nav>
                        <h1>About Us</h1>
                        <p>Let’s Create Something new and awesome togeather.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->


    <!-- What We Do Area Start -->
    <section class="what-we-do-area pt-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-5">
                    <div class="section-title rmb-55 wow fadeInUp delay-0-3s">
                        <span class="sub-title mb-50 rmb-30 wow fadeInUp delay-0-2s">what we do</span>
                        <h2>Quality construction. Honest service. Great value.</h2>
                        <div class="section-text mt-45 wow fadeInUp delay-0-4s">
                            <p>Malesuada pellentesque elit eget gravida. Elit sed vulputate mi sit amet mauris commodo. In
                                hac habitasse platea dictumst. Odio tempor orci dapibus ultrices. Volutpat sed cras ornare
                                arcu dui vivamus arcu felis. Sed elementum tempus egestas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="row gap-40">
                        <div class="col-sm-6">
                            <div class="what-we-do-item wow fadeInUp delay-0-2s">
                                <div class="icon">
                                    <img src="{{ asset('images/icons/wwd-icon1.png') }}" alt="Icon">
                                </div>
                                <div class="content">
                                    <h6>Modern<br> Construction</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="what-we-do-item wow fadeInUp delay-0-4s">
                                <div class="icon">
                                    <img src="{{ asset('images/icons/wwd-icon2.png') }}" alt="Icon">
                                </div>
                                <div class="content">
                                    <h6>Solving complex<br> problems</h6>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="what-we-do-item wow fadeInUp delay-0-2s">
                                <div class="icon">
                                    <img src="{{ asset('images/icons/wwd-icon3.png') }}" alt="Icon">
                                </div>
                                <div class="content">
                                    <h6>Professional<br> specialists</h6>
                                    <p>Sodales ut etiam sit amet nisl purus in mollis. Ullamcorper malesuada proin libero
                                        nunc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="what-we-do-item wow fadeInUp delay-0-4s">
                                <div class="icon">
                                    <img src="{{ asset('images/icons/wwd-icon4.png') }}" alt="Icon">
                                </div>
                                <div class="content">
                                    <h6>Creative<br> approach</h6>
                                    <p>Maecenas volutpat blandit aliquam etiam erat. Dis parturient montes nascetur
                                        ridiculus mus. Diam donec adipiscing tristique.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What We Do Area End -->


    <!-- Team Area start -->
    <section class="team-area rel z-1 pt-80">
        <div class="container">
            <div class="row justify-content-between align-items-end pb-50">
                <div class="col-lg-8">
                    <div class="section-title rmb-55 wow fadeInUp delay-0-4s">
                        <span class="sub-title mb-55 rmb-25 wow fadeInUp delay-0-2s">meet the team</span>
                        <h2>Our expert agents</h2>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-end">
                    <a href="contact.html" class="theme-btn style-five mb-15 wow fadeInUp delay-0-2s">Contact us <i
                            class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="team-member wow fadeInUp delay-0-2s">
                        <img src="{{ asset('images/team/member1.jpg') }}" alt="Team">
                        <span class="designation">Lead architect</span>
                        <h6>Philip Demarco</h6>
                        <hr>
                        <div class="social-style-one">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="team-member wow fadeInUp delay-0-4s">
                        <img src="{{ asset('images/team/member2.jpg') }}" alt="Team">
                        <span class="designation">Advisor</span>
                        <h6><span>Ann</span> Vaccaro</h6>
                        <hr>
                        <div class="social-style-one">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="team-member wow fadeInUp delay-0-6s">
                        <img src="{{ asset('images/team/member3.jpg') }}" alt="Team">
                        <span class="designation">Chief Executive</span>
                        <h6>Marcus Madsen</h6>
                        <hr>
                        <div class="social-style-one">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="team-member wow fadeInUp delay-0-8s">
                        <img src="{{ asset('images/team/member4.jpg') }}" alt="Team">
                        <span class="designation">Art Director</span>
                        <h6>Tiana Levin</h6>
                        <hr>
                        <div class="social-style-one">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Area end -->


    <!-- Achievements Area start -->
    <section class="achievement-area bgc-secondary pt-90 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="achievement-image mb-75 wow fadeInLeft delay-0-2s">
                        <img src="{{ asset('images/background/achievement-left-image.jpg') }}" alt="Our achievements">
                    </div>
                </div>
                <div class="col-xl-5 mb-75">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title mb-80 rmb-50 wow fadeInRight delay-0-4s">
                                <span class="sub-title mb-55 rmb-25 wow fadeInRight delay-0-2s">Our achievements</span>
                                <h2>We Working for You</h2>
                            </div>
                        </div>
                    </div>
                    <div class="counter-wrap">
                        <div class="row gap-40">
                            <div class="col-md-6">
                                <div class="counter-item-two counter-text-wrap wow fadeInUp delay-0-2s">
                                    <span class="count-text" data-speed="3000" data-stop="8">0</span>
                                    <span class="counter-title">Cities<br> built up</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="counter-item-two counter-text-wrap wow fadeInUp delay-0-4s">
                                    <span class="count-text" data-speed="3000" data-stop="123">0</span>
                                    <span class="counter-title">Complexes<br> erected</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="counter-item-two counter-text-wrap wow fadeInUp delay-0-2s">
                                    <span class="count-text" data-speed="3000" data-stop="872">0</span>
                                    <span class="counter-title">Workers<br> employed</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="counter-item-two counter-text-wrap wow fadeInUp delay-0-4s">
                                    <span class="count-text" data-speed="3000" data-stop="1321">0</span>
                                    <span class="counter-title">Satisfied<br> customers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Achievements Area end -->


    <!-- Reviews Area start -->
    <section class="reviews-area pt-115">
        <div class="container">
            <div class="row rel z-1 justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="section-title text-center mb-55 wow fadeInUp delay-0-4s">
                        <span class="sub-title mb-60 rmb-40 wow fadeInUp delay-0-2s">reviews</span>
                        <h2>What Our Clients Says</h2>
                    </div>
                </div>
            </div>
            <div class="testimonials-slider-two mb-115">
                <div class="testimonial-item style-two wow fadeInUp delay-0-2s">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <div class="author-speech">“Venenatis urna cursus eget nunc scelerisque viverra mauris. Lectus urna
                        duis convallis convallis tellus. Volutpat commodo sed egestas egestas fringilla. Porttitor leo a
                        diam sollicitudin”.</div>
                    <h6>Jordyn Lipshutz</h6>
                    <span class="designations">Office Manager</span>
                </div>
                <div class="testimonial-item style-two wow fadeInUp delay-0-4s">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <div class="author-speech">“Quis vel eros donec ac odio tempor orci dapibus ultrices. Interdum varius
                        sit amet mattis vulputate enim. Vel eros donec ac odio. Pulvinar mattis nunc sed blandit libero
                        volutpat sed cras”.</div>
                    <h6>Ruben Vetrov</h6>
                    <span class="designations">Office Manager</span>
                </div>
                <div class="testimonial-item style-two wow fadeInUp delay-0-6s">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <div class="author-speech">“Venenatis urna cursus eget nunc scelerisque viverra mauris. Lectus urna
                        duis convallis convallis tellus. Volutpat commodo sed egestas egestas fringilla. Porttitor leo a
                        diam sollicitudin”.</div>
                    <h6>Jordyn Lipshutz</h6>
                    <span class="designations">Office Manager</span>
                </div>
                <div class="testimonial-item style-two wow fadeInUp delay-0-8s">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <div class="author-speech">“Quis vel eros donec ac odio tempor orci dapibus ultrices. Interdum varius
                        sit amet mattis vulputate enim. Vel eros donec ac odio. Pulvinar mattis nunc sed blandit libero
                        volutpat sed cras”.</div>
                    <h6>Ruben Vetrov</h6>
                    <span class="designations">Office Manager</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Reviews Area end -->
@endsection
