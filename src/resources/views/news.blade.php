@extends('layouts.default')

@section('main-content')
    <!-- Banner Section Start -->
    <section class="banner-area pt-220 pb-250 rpt-150 rpb-100 corner-shapes-wrap"
        style="background-image: url({{ asset('images/background/blog-banner.jpg') }});">
        <div class="corner-shapes"></div>
        <div class="container container-1170 pb-200 rpb-0">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-8 col-lg-12">
                    <div class="banner-content rmb-65 wow fadeInUp delay-0-2s">
                        <nav aria-label="breadcrumb" class="mb-35 rmb-20">
                            <ol class="breadcrumb wow fadeInUp delay-0-4s">
                                <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                <li class="breadcrumb-item active">blog</li>
                            </ol>
                        </nav>
                        <h1>Latest news updates & articles</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Blog Area start -->
    <section class="blog-area rel z-1 pt-115 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <ul class="blog-filter filter-btns-one mb-55 wow fadeInRight delay-0-2s">
                        <li data-filter="*" class="current">all News</li>
                        <li data-filter=".construction">Construction works</li>
                        <li data-filter=".exterior">exterior</li>
                        <li data-filter=".interior">Interior</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="blog-item wow fadeInUp delay-0-2s">
                        <div class="image">
                            <img src="{{ asset('images/blog/blog1.jpg') }}" alt="Blog">
                        </div>
                        <div class="content">
                            <a href="blog.html" class="category">Construction works</a>
                            <h5><a href="blog-details.html">Start of installation of water and heating systems</a></h5>
                            <p>Dolor morbi non arcu risus quis varius quam quisque. Purus faucibus ornare suspendisse sed.
                                Blandit volutpat maecenas volutpat...</p>
                            <a href="blog-details.html" class="theme-btn style-five">Read more <i
                                    class="fal fa-long-arrow-right"></i></a>
                            <ul class="blog-meta">
                                <li>
                                    <i class="fal fa-comment-dots"></i>
                                    <a href="#">17</a>
                                </li>
                                <li>
                                    <i class="fal fa-user"></i>
                                    <a href="#">by Admin</a>
                                </li>
                                <li>
                                    <i class="fal fa-calendar-alt"></i>
                                    <a href="#">28.03.2023</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="blog-item wow fadeInUp delay-0-4s">
                        <div class="image">
                            <img src="{{ asset('images/blog/blog2.jpg') }}" alt="Blog">
                        </div>
                        <div class="content">
                            <a href="blog.html" class="category">Exterior</a>
                            <h5><a href="blog-details.html">The different types of luxury spaces</a></h5>
                            <p>Maecenas pharetra convallis posuere morbi leo urna molestie at. Posuere urna nec tincidunt
                                praesent semper feugiat nibh sed pulvinar. Nunc non blandit massa enim...</p>
                            <a href="blog-details.html" class="theme-btn style-five">Read more <i
                                    class="fal fa-long-arrow-right"></i></a>
                            <ul class="blog-meta">
                                <li>
                                    <i class="fal fa-comment-dots"></i>
                                    <a href="#">23</a>
                                </li>
                                <li>
                                    <i class="fal fa-user"></i>
                                    <a href="#">by Admin</a>
                                </li>
                                <li>
                                    <i class="fal fa-calendar-alt"></i>
                                    <a href="#">23.03.2023</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="blog-item wow fadeInUp delay-0-6s">
                        <div class="image">
                            <img src="{{ asset('images/blog/blog4.jpg') }}" alt="Blog">
                        </div>
                        <div class="content">
                            <a href="blog.html" class="category">News</a>
                            <h5><a href="blog-details.html">Our sales office holiday schedule</a></h5>
                            <p>Nam aliquam sem et tortor. Nullam ac tortor vitae purus faucibus ornare. Varius morbi enim
                                nunc faucibus a pellentesque.</p>
                            <a href="blog-details.html" class="theme-btn style-five">Read more <i
                                    class="fal fa-long-arrow-right"></i></a>
                            <ul class="blog-meta">
                                <li>
                                    <i class="fal fa-comment-dots"></i>
                                    <a href="#">23</a>
                                </li>
                                <li>
                                    <i class="fal fa-user"></i>
                                    <a href="#">by Admin</a>
                                </li>
                                <li>
                                    <i class="fal fa-calendar-alt"></i>
                                    <a href="#">17.03.2023</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
    </section>
    <!-- Blog Area end -->
@endsection
