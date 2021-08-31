@extends('layouts.frontend')
@section('content')
<div id="main-wrapper">
    <div class="site-wrapper-reveal">

        <!-- Hero Area Start -->
        <div class="hero-area-three">
            <div class="swiper-container hero-slider-three-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 order-2 order-md-1">
                                    <div class="hero-area-three-post text-left">
                                        <div class="hero-area-three-post-author">
                                            By <a href="#">Julian Marshall</a>
                                        </div>
                                        <h1 class="title"><a href="blog-details.html">WooLentor is a powerful
                                                WordPress plugin for
                                                WooCommerce</a>
                                        </h1>
                                        <p class="dec mt-4">That necessitates a robust ecommerce platform that
                                            optimizes your store & products</p>
                                        <div class="hero-area-three-post-meta">
                                            <span class="hero-area-three-post-date">
                                            <a href="#">03 April, 2021</a>
                                        </span>
                                            <span>10 min read</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 order-1 order-md-2">
                                    <div class="hero-three-box">
                                        <div class="hero-three-inner-image">
                                            <img src="{{ asset('frontend/images/hero/home-3-hero-image-01.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-md-6 order-2 order-md-1">
                                    <div class="hero-area-three-post text-left">
                                        <div class="hero-area-three-post-author">
                                            By <a href="#">Andrew Hoffman</a>
                                        </div>
                                        <h1 class="title"><a href="blog-details.html">All of these amazing features
                                                come at an affordable price!</a>
                                        </h1>
                                        <p class="dec mt-4">That necessitates a robust ecommerce platform that
                                            optimizes your store & products</p>
                                        <div class="hero-area-three-post-meta">
                                            <span class="hero-area-three-post-date">
                                            <a href="#">03 April, 2021</a>
                                        </span>
                                            <span>10 min read</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 offset-lg-1 col-md-6 order-1 order-md-2">
                                    <div class="hero-three-box">
                                        <div class="hero-three-inner-image">
                                            <img src="{{ asset('frontend/images/hero/home-3-hero-image-01.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-md-6 order-2 order-md-1">
                                    <div class="hero-area-three-post text-left">
                                        <div class="hero-area-three-post-author">
                                            By <a href="#">Andrew Hoffman</a>
                                        </div>
                                        <h1 class="title"><a href="blog-details.html">All of these amazing features
                                                come at an affordable price!</a>
                                        </h1>
                                        <p class="dec mt-4">That necessitates a robust ecommerce platform that
                                            optimizes your store & products</p>
                                        <div class="hero-area-three-post-meta">
                                            <span class="hero-area-three-post-date">
                                            <a href="#">03 April, 2021</a>
                                        </span>
                                            <span>10 min read</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 offset-lg-1 col-md-6 order-1 order-md-2">
                                    <div class="hero-three-box">
                                        <div class="hero-three-inner-image">
                                            <img src="{{ asset('frontend/images/hero/home-3-hero-image-01.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-swiper-pagination"></div>
        </div><!-- Hero Area End -->

        <div class="mostpopular-category-area section-space--pt_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-three text-center mb-40" data-aos="fade-up">
                            <h2 class="title">Most Popular Category</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-three-category">
                            <div class="category-step-1" data-aos="fade-up">
                                <a href="#" class="btn-primary-three btn-large">WooCommerce</a>
                                <a href="#" class="btn-primary-three btn-large">WordPress</a>
                                <a href="#" class="btn-primary-three btn-large">Magento</a>
                                <a href="#" class="btn-primary-three btn-large">Laravel</a>
                                <a href="#" class="btn-primary-three btn-large">UI/UX Design</a>
                            </div>
                            <div class="category-step-2" data-aos="fade-up">
                                <a href="#" class="btn-primary-three btn-large">Online Tutorial</a>
                                <a href="#" class="btn-primary-three btn-large">JavaScript</a>
                                <a href="#" class="btn-primary-three btn-large">Lifestyle</a>
                                <a href="#" class="btn-primary-three btn-large">Marketing</a>
                            </div>
                            <div class="category-step-3" data-aos="fade-up">
                                <a href="#" class="btn-primary-three btn-large">Magento</a>
                                <a href="#" class="btn-primary-three btn-large">UX Design</a>
                                <a href="#" class="btn-primary-three btn-large">Marketing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Article Area Start -->
        <div class="recent-article-area section-space--pb_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="recent-article-header-two border-top">
                            <div class="section-title-three" data-aos="fade-up">
                                <h2 class="title">Recent Article</h2>
                            </div>
                            <div class="search-box">
                                <div class="input-search-box" data-aos="fade-up">
                                    <input class="input" type="text" placeholder="Search here">
                                    <button class="submit-button"><i class="icofont-search-1"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Single Recent Article Item Start -->
                        <div class="single-recent-article-item" data-aos="fade-up">
                            <a href="#!" class="recent-article-thum">
                                <img src="{{ asset('frontend/images/recent-article/02-recent-article.jpg') }}" alt="" />
                            </a>
                            <div class="recent-article-content">
                                <div class="recent-article-post-author">
                                    By <a href="#">Andrew Hoffman</a>
                                </div>
                                <h3 class="title"><a href="blog-details.html">All of these amazing features
                                        come at an affordable price!</a>
                                </h3>
                                <p class="dec mt-3">Lorem Ipsum is simply dummy text themes print
                                    industry orem psum has been them industry spa
                                    also the loep into type setting.</p>
                                <div class="recent-article-post-meta">
                                    <span class="post-date">
                                    <a href="#">03 April, 2021</a>
                                </span>
                                    <span>10 min read</span>
                                </div>
                            </div>
                        </div><!-- Single recent Article Item End -->

                        <!-- Single Recent Article Item Start -->
                        <div class="single-recent-article-item" data-aos="fade-up">
                            <a href="#!" class="recent-article-thum">
                                <img src="{{ asset('frontend/images/recent-article/10-recent-article.jpg') }}" alt="" />
                            </a>
                            <div class="recent-article-content">
                                <div class="recent-article-post-author">
                                    By <a href="#">Andrew Hoffman</a>
                                </div>
                                <h3 class="title"><a href="blog-details.html">Create beautiful designs that
                                        will help convert more...</a>
                                </h3>
                                <p class="dec mt-3">Lorem Ipsum is simply dummy text themes print
                                    industry orem psum has been them industry spa
                                    also the loep into type setting.</p>
                                <div class="recent-article-post-meta">
                                    <span class="post-date">
                                    <a href="#">03 April, 2021</a>
                                </span>
                                    <span>10 min read</span>
                                </div>
                            </div>
                        </div><!-- Single recent Article Item End -->

                        <!-- Single Recent Article Item Start -->
                        <div class="single-recent-article-item" data-aos="fade-up">
                            <a href="#!" class="recent-article-thum">
                                <img src="{{ asset('frontend/images/recent-article/01-recent-article.jpg') }}" alt="" />
                            </a>
                            <div class="recent-article-content">
                                <div class="recent-article-post-author">
                                    By <a href="#">Andrew Hoffman</a>
                                </div>
                                <h3 class="title"><a href="blog-details.html">All of these amazing features
                                        come at an affordable price!</a>
                                </h3>
                                <p class="dec mt-3">Lorem Ipsum is simply dummy text themes print
                                    industry orem psum has been them industry spa
                                    also the loep into type setting.</p>
                                <div class="recent-article-post-meta">
                                    <span class="post-date">
                                    <a href="#">03 April, 2021</a>
                                </span>
                                    <span>10 min read</span>
                                </div>
                            </div>
                        </div><!-- Single recent Article Item End -->

                        <!-- Single Recent Article Item Start -->
                        <div class="single-recent-article-item" data-aos="fade-up">
                            <a href="#!" class="recent-article-thum">
                                <img src="{{ asset('frontend/images/recent-article/05-recent-article.jpg') }}" alt="" />
                            </a>
                            <div class="recent-article-content">
                                <div class="recent-article-post-author">
                                    By <a href="#">Andrew Hoffman</a>
                                </div>
                                <h3 class="title"><a href="blog-details.html">Create beautiful designs that
                                        will help convert more...</a>
                                </h3>
                                <p class="dec mt-3">Lorem Ipsum is simply dummy text themes print
                                    industry orem psum has been them industry spa
                                    also the loep into type setting.</p>
                                <div class="recent-article-post-meta">
                                    <span class="post-date">
                                    <a href="#">03 April, 2021</a>
                                </span>
                                    <span>10 min read</span>
                                </div>
                            </div>
                        </div><!-- Single recent Article Item End -->

                        <!-- Single Recent Article Item Start -->
                        <div class="single-recent-article-item" data-aos="fade-up">
                            <a href="#!" class="recent-article-thum">
                                <img src="{{ asset('frontend/images/recent-article/08-recent-article.jpg') }}" alt="" />
                            </a>
                            <div class="recent-article-content">
                                <div class="recent-article-post-author">
                                    By <a href="#">Andrew Hoffman</a>
                                </div>
                                <h3 class="title"><a href="blog-details.html">All of these amazing features
                                        come at an affordable price!</a>
                                </h3>
                                <p class="dec mt-3">Lorem Ipsum is simply dummy text themes print
                                    industry orem psum has been them industry spa
                                    also the loep into type setting.</p>
                                <div class="recent-article-post-meta">
                                    <span class="post-date">
                                    <a href="#">03 April, 2021</a>
                                </span>
                                    <span>10 min read</span>
                                </div>
                            </div>
                        </div><!-- Single recent Article Item End -->

                        <!-- Single Recent Article Item Start -->
                        <div class="single-recent-article-item" data-aos="fade-up">
                            <a href="#!" class="recent-article-thum">
                                <img src="{{ asset('frontend/images/recent-article/03-recent-article.jpg') }}" alt="" />
                            </a>
                            <div class="recent-article-content">
                                <div class="recent-article-post-author">
                                    By <a href="#">Andrew Hoffman</a>
                                </div>
                                <h3 class="title"><a href="blog-details.html">Create beautiful designs that
                                        will help convert more...</a>
                                </h3>
                                <p class="dec mt-3">Lorem Ipsum is simply dummy text themes print
                                    industry orem psum has been them industry spa
                                    also the loep into type setting.</p>
                                <div class="recent-article-post-meta">
                                    <span class="post-date">
                                    <a href="#">03 April, 2021</a>
                                </span>
                                    <span>10 min read</span>
                                </div>
                            </div>
                        </div><!-- Single recent Article Item End -->

                    </div>

                    <div class="col-lg-4">
                        <div class="recent-post-right-area">
                            <!-- Single Most Populer Item Start -->
                            <div class="single-most-populer-item" data-aos="fade-up">
                                <a href="#!" class="most-populer-thum">
                                    <img src="{{ asset('frontend/images/recent-article/01-side-recent-article.jpg') }}" alt="" />
                                </a>
                                <div class="most-populer-content">
                                    <div class="most-populer-post-author">
                                        By <a href="#">Andrew Hoffman</a>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Create beautiful designs that
                                            will help convert more...</a>
                                    </h3>
                                    <p class="dec mt-2">Lorem Ipsum is simply dummy text themes print
                                        industry orem psum has been them industry spa
                                        also the loep into type setting.</p>
                                    <div class="most-populer-post-meta">
                                        <span class="post-date">
                                        <a href="#">03 April, 2021</a>
                                    </span>
                                        <span>10 min read</span>
                                    </div>
                                </div>
                            </div><!-- Single Most Populer Item End -->
                            <!-- Single Most Populer Item Start -->
                            <div class="single-most-populer-item" data-aos="fade-up">
                                <a href="#!" class="most-populer-thum">
                                    <img src="{{ asset('frontend/images/recent-article/02-side-recent-article.jpg') }}" alt="">
                                </a>
                                <div class="most-populer-content">
                                    <div class="most-populer-post-author">
                                        By <a href="#">Andrew Hoffman</a>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">WooCommerce comes with
                                            an intuitive drag-and-drop...</a>
                                    </h3>
                                    <p class="dec mt-2">Lorem Ipsum is simply dummy text themes print
                                        industry orem psum has been them industry spa
                                        also the loep into type setting.</p>
                                    <div class="most-populer-post-meta">
                                        <span class="post-date">
                                        <a href="#">03 April, 2021</a>
                                    </span>
                                        <span>10 min read</span>
                                    </div>
                                </div>
                            </div><!-- Single Most Populer Item End -->
                            <!-- Single Most Populer Item Start -->
                            <div class="single-most-populer-item" data-aos="fade-up">
                                <a href="#!" class="most-populer-thum">
                                    <img src="{{ asset('frontend/images/recent-article/03-side-recent-article.jpg') }}" alt="">
                                </a>
                                <div class="most-populer-content">
                                    <div class="most-populer-post-author">
                                        By <a href="#">Andrew Hoffman</a>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">All of these amazing features
                                            come at an affordable price!</a>
                                    </h3>
                                    <p class="dec mt-2">Lorem Ipsum is simply dummy text themes print
                                        industry orem psum has been them industry spa
                                        also the loep into type setting.</p>
                                    <div class="most-populer-post-meta">
                                        <span class="post-date">
                                        <a href="#">03 April, 2021</a>
                                    </span>
                                        <span>10 min read</span>
                                    </div>
                                </div>
                            </div><!-- Single Most Populer Item End -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Recent Article Area End -->


        <!-- Related Newsletter Area Start -->
        <div class="related-newsletter-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="related-newsletter-three-box">
                            <div class="related-newsletter-three-inner-box">
                                <h2 class="title">28k People <span class="normal-width">Receive Weekly
                                WordPress Related Newsletter</span>.</h2>
                                <div class="button-box mt-30">
                                    <a href="#" class="btn-primary btn-medium">Subscribe Now</a>
                                </div>
                            </div>
                            <div class="subscribe-today-update">
                                <h4 class="today-update-text"><span>93+</span> People Subscribe today.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Related Newsletter Area End -->


        <!-- Most Popular Area Start -->
        <div class="most-populer-area section-space--pt_120 section-space--pb_30">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="section-title-three" data-aos="fade-up">
                            <h2 class="title">Trending Today’s</h2>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="most-popular-slider-navigation" data-aos="fade-up">
                            <div class="popular-swiper-button-prev navigation-button"><i class="icofont-long-arrow-left"></i></div>
                            <div class="popular-swiper-button-next navigation-button"><i class="icofont-long-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
                <!-- Swiper -->
                <div class="swiper-container most-popular-slider-active">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <!-- Single Most Populer Item Start -->
                            <div class="single-most-populer-item" data-aos="fade-up">
                                <a href="#!" class="most-populer-thum">
                                    <img src="{{ asset('frontend/images/populer/01_populer.jpg') }}" alt="" />
                                </a>
                                <div class="most-populer-content">
                                    <div class="most-populer-post-author">
                                        By <a href="#">Andrew Hoffman</a>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">All of these amazing features
                                            come at an affordable price!</a>
                                    </h3>
                                    <div class="most-populer-post-meta">
                                        <span class="post-date">
                                        <a href="#">03 April, 2021</a>
                                    </span>
                                        <span>10 min read</span>
                                    </div>
                                </div>
                            </div><!-- Single Most Populer Item End -->
                        </div>

                        <div class="swiper-slide">
                            <!-- Single Most Populer Item Start -->
                            <div class="single-most-populer-item" data-aos="fade-up">
                                <a href="#!" class="most-populer-thum">
                                    <img src="{{ asset('frontend/images/populer/02_populer.jpg') }}" alt="" />
                                </a>
                                <div class="most-populer-content">
                                    <div class="most-populer-post-author">
                                        By <a href="#">Andrew Hoffman</a>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">WooCommerce comes with an
                                            intuitive drag-and-drop...</a>
                                    </h3>
                                    <div class="most-populer-post-meta">
                                        <span class="post-date">
                                        <a href="#">03 April, 2021</a>
                                    </span>
                                        <span>10 min read</span>
                                    </div>
                                </div>
                            </div><!-- Single Most Populer Item End -->
                        </div>

                        <div class="swiper-slide">
                            <!-- Single Most Populer Item Start -->
                            <div class="single-most-populer-item" data-aos="fade-up">
                                <a href="#!" class="most-populer-thum">
                                    <img src="{{ asset('frontend/images/populer/03_populer.jpg') }}" alt="" />
                                </a>
                                <div class="most-populer-content">
                                    <div class="most-populer-post-author">
                                        By <a href="#">Andrew Hoffman</a>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Create beautiful designs that
                                            will help convert more...</a>
                                    </h3>
                                    <div class="most-populer-post-meta">
                                        <span class="post-date">
                                        <a href="#">03 April, 2021</a>
                                    </span>
                                        <span>10 min read</span>
                                    </div>
                                </div>
                            </div><!-- Single Most Populer Item End -->
                        </div>

                        <div class="swiper-slide">
                            <!-- Single Most Populer Item Start -->
                            <div class="single-most-populer-item" data-aos="fade-up">
                                <a href="#!" class="most-populer-thum">
                                    <img src="{{ asset('frontend/images/populer/02_populer.jpg') }}" alt="" />
                                </a>
                                <div class="most-populer-content">
                                    <div class="most-populer-post-author">
                                        By <a href="#">Andrew Hoffman</a>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">WooCommerce comes with an
                                            intuitive drag-and-drop...</a>
                                    </h3>
                                    <div class="most-populer-post-meta">
                                        <span class="post-date">
                                        <a href="#">03 April, 2021</a>
                                    </span>
                                        <span>10 min read</span>
                                    </div>
                                </div>
                            </div><!-- Single Most Populer Item End -->
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <!-- Most Popular Area End -->

        <!-- Trusted Partners Area Start -->
        <div class="trusted-partners-area section-space--pb_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-three text-center mb-40" data-aos="fade-up">
                            <h2 class="title">Trusted Partner’s</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trusted-partners-box" data-aos="fade-up">
                            <div class="swiper-container trusted-partners-slider-active">
                                <div class="swiper-wrapper trusted-partners-slider-wrap">
                                    <div class="swiper-slide">
                                        <a href="#!"><img src="{{ asset('frontend/images/partners/01-partners.png') }}" alt="" /></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#!"><img src="{{ asset('frontend/images/partners/02-partners.png') }}" alt="" /></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#!"><img src="{{ asset('frontend/images/partners/03-partners.png') }}" alt="" /></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#!"><img src="{{ asset('frontend/images/partners/04-partners.png') }}" alt="" /></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#!"><img src="{{ asset('frontend/images/partners/02-partners.png') }}" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="partners-swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trusted Partners Area End -->


    </div>
</div>
@endsection
