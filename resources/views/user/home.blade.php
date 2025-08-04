@extends('user.layout.app')
@section("title")
        home page
@endsection

@section('style')

        <style>
                        .hero-area-bg-6 {
                                        background-image: url('{{ $hero ? asset('storage/') . '/' . $hero->img : asset('assets/user/img/heroImg/slide-6.jpg')  }}');
                                        height: 700px;
                        }

                        .single-slide-item {
                                        background-image: url('{{  $hero ? asset('storage/') . '/' . $hero->img : asset('assets/user/img/heroImg/slide-6.jpg') }}');

                        }

                        .feature-area {
                                        background-image: url('{{ asset('assets/user/img/heroImg/feature-bg.jpg') }}');
                        }

                        .servicHeader {
                                        font-size: 20px;
                        }

                        .serviceletter {
                                        font-size: 15px;
                        }

                        .expertise-img {
                                        background-image: url('{{ asset('assets/user/img/heroImg/expertise.jpg') }}');
                                        background-size: cover;
                                        height: 50%;
                                        width: 100%;
                        }

                        .about-content ul {
                                        list-style-type: disc;
                                        padding-left: 20px;
                                        margin-bottom: 1em;
                        }

                        .about-content li {
                                        margin-bottom: 5px;
                        }
        </style>

@endsection

@section('navbar')
        @include('user.layout.navbar', ['page' => 'home'])
@endsection

@section('maincontent')
        <!-- Hero Start -->
        <!-- include("user.home.carousel",['carousels' => $carousels]) -->
        <div id="home-3" class="hero-area">
                        <div class="single-slide-item hero-area-bg-6">
                                        <div class="overlay"></div>
                                        <div class="container">
                                                        <div class="row align-items-center">
                                                                        <div class="col-12 col-lg-7 wow fadeInUp animated" data-wow-delay=".2s">
                                                                                        <div class="hero-area-content">
                                                                                                        <div class="section-title">
                                                                                                                        <h1>{{ optional($hero)->title }}</h1>
                                                                                                                        <p>{{ optional($hero)->description }}</p>
                                                                                                        </div>
                                                                                                        <div class="slide-action">
                                                                                                                        <img src="{{ asset('assets/user/img/heroImg/1.png') }}" alt="">
                                                                                                                        <img src="{{ asset('assets/user/img/heroImg/2.png') }}" alt="">
                                                                                                                        <img src="{{ asset('assets/user/img/heroImg/3.png') }}" alt="">

                                                                                                        </div>
                                                                                        </div>
                                                                        </div>
                                                        </div>
                                        </div>
                        </div>
        </div>
        <!-- Hero End -->
        <div class="promo-area">
                        <div class="container">
                                        <div class="row gx-0">
                                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                                                        <div class="quick_contact">
                                                                                        <div class="contact-icon"><i style="font-size:25px"
                                                                                                                        class="bi bi-telephone-plus-fill"></i></div>
                                                                                        <div class="contact-body">
                                                                                                        <h6>Quick Contact </h6>
                                                                                                        <p>email: <a
                                                                                                                                        href="mailto:info@ecofix.com">{{ optional($company)->email }}</a>
                                                                                                        </p>
                                                                                                        <p>phone: <a
                                                                                                                                        href="tel:992688272500">&#x202A;{{ optional($company)->phone }}</a>
                                                                                                        </p>
                                                                                        </div>
                                                                        </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                                                        <div class="quick_contact">
                                                                                        <div class="contact-icon"><i style="font-size:25px"
                                                                                                                        class="bi bi-geo-alt-fill"></i></div>
                                                                                        <div class="contact-body">
                                                                                                        <h6>Our Location </h6>
                                                                                                        <p>
                                                                                                                        {!! optional($company)->address !!}
                                                                                                        </p>

                                                                                        </div>
                                                                        </div>
                                                        </div>
                                                        <div class="offset-xl-1 col-xl-5 offset-lg-1 col-lg-5">
                                                                        <div class="promo-wrapper">
                                                                                        <div class="promo-inner">
                                                                                                        <div class="promo-icon"><img
                                                                                                                                        src="{{ asset('assets/user/img/heroImg/courier.png') }}"
                                                                                                                                        alt=""></div>
                                                                                                        <div class="promo-content">
                                                                                                                        <h3 class="promo-heading">Residential &amp; Commercial Fastest
                                                                                                                                        Delivery
                                                                                                                                        Service!</h3>
                                                                                                                        <p class="promo-desc">Qiuck Route Delivery Services offers
                                                                                                                                        Parcel &amp;
                                                                                                                                        Courier
                                                                                                                                        services <br> in your local area.</p>
                                                                                                                        <p></p>
                                                                                                        </div>
                                                                                        </div>
                                                                        </div>
                                                        </div>
                                        </div>
                        </div>
        </div>


        <!-- About Start -->
        <!-- include("user.home.about",['about'=> $about]) -->
        <div class="about-area about-3 section-padding">
                        <div class="container">
                                        <div class="row">

                                                        <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay=".4s"
                                                                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                                                        <div class="info-content-area-2">
                                                                                        <div class="section-title">
                                                                                                        <p>You Know About Us!</p>
                                                                                                        <h2>{{ optional($about)->title }}</h2>
                                                                                        </div>
                                                                                        <div class="about-content">
                                                                                                        {!! $about->description !!}
                                                                                        </div>

                                                                                        <div class="signature-wrap">
                                                                                                        <a href="{{ route('about') }}"
                                                                                                                        class="main-btn primary d-none d-md-block">Learn
                                                                                                                        More</a>


                                                                                        </div>

                                                                        </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-12 col-sm-12 text-right wow fadeInLeft" data-wow-delay=".3s"
                                                                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                                        <div class="about_image_3 text-end">
                                                                                        <img src="{{ asset('assets/user/img/heroImg/3.jpg')}}" alt="">
                                                                        </div>
                                                        </div>

                                        </div>
                        </div>
        </div>
        <!-- About End -->


        <!-- Services Start -->
        @include("user.home.category", ['categories' => $categories, 'page' => 'home'])


        <!-- Feature Section Start -->
        @include("user.home.feature")
        <!-- Feature Section end  -->

        <!-- Project Start -->

        <div class="project-area section-padding pt-30 pb-30">
                <div class="container">
                        <div class="row">
                                <h3 class="text-center pb-20">Gallery</h3>
                        </div>
                        <div class="project-list mt-10">
                                <div class="row mt-30">
                                        @forelse($galleries as $gallery)

                                                <div class="col-xl-4 col-lg-4 col-md-6">
                                                        <a href="{{ route('project') }}" class="single-project-wrapper">
                                                                <div class="project-bg">
                                                                        <img src="{{ $gallery->img ? asset('storage').'/'.$gallery->img : asset('assets/user/img/heroImg/1-1.jpg') }}" alt="">
                                                                </div>
                                                                <div class="project-details">
                                                                        <h5>{{ $gallery->title }}</h5>
                                                                        <span>{{ $gallery->type }}</span>
                                                                </div>
                                                        </a>
                                                </div>

                                        @empty
                                                <div class="col-xl-4 col-lg-4 col-md-6">
                                                        <a href="{{ route('project') }}" class="single-project-wrapper">
                                                                <div class="project-bg">
                                                                        <img src="{{ asset('assets/user/img/heroImg/1-1.jpg')}}" alt="">
                                                                </div>
                                                                <div class="project-details">
                                                                        <h5>Standard Courier</h5>
                                                                        <span>Road Freight</span>
                                                                </div>
                                                        </a>
                                                </div>
                                        @endforelse
                                        
                                                                        
                                 </div>
                        </div>
                </div>
        </div>

        <!-- Project End -->


        <!-- Experiance Start -->
                 @include("user.home.expertis")
        <!-- Experiance End -->

        <!-- article section start -->
        <div class="blog-area gray-bg section-padding">
                        <div class="container">
                                        <div class="row justify-content-center text-center">
                                                        <div class="col-lg-7">
                                                                        <div class="section-title">
                                                                                        <p>Read Our Latest News</p>
                                                                                        <h2>Recent Articles</h2>
                                                                        </div>
                                                        </div>
                                        </div>
                                        <div class="row">
                                                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp  animated" data-wow-delay="200ms"
                                                                        style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                                                                        <div class="blog-wrap">
                                                                                        <div class="blog-content">
                                                                                                        <div class="blog-meta">
                                                                                                                        <div class="blog-date">
                                                                                                                                        <span>Jan 21, 2024</span>
                                                                                                                        </div>
                                                                                                        </div>
                                                                                                        <div class="blog-title">
                                                                                                                        <h5>Five Importance logistics solutions for Parcel &amp;
                                                                                                                                        Delivery Services
                                                                                                                        </h5>
                                                                                                        </div>
                                                                                                        <div class="blog-img-wrap">
                                                                                                                        <div class="blog-img">
                                                                                                                                        <img src="{{ asset('assets/user/img/heroImg/1.jpg')}}"
                                                                                                                                                        alt="">
                                                                                                                        </div>
                                                                                                                        <div class="blog-cat">
                                                                                                                                        <a href="blog-details.html">standard, </a>
                                                                                                                                        <a href="blog-details-2.html"> express</a>
                                                                                                                        </div>
                                                                                                        </div>
                                                                                                        <div class="blog-desc">
                                                                                                                        <p>There are some reason Lorem ipsum dolor sit amet, consectetur
                                                                                                                                        adipisicing
                                                                                                                                        elit. Dolorem, facilis perferendis ipsam.</p>
                                                                                                        </div>
                                                                                                        <div class="blog-more">
                                                                                                                        <a href="blog-details.html" class="main-btn border-btn">Read
                                                                                                                                        More <i class="las la-arrow-right"></i></a>
                                                                                                        </div>
                                                                                        </div>
                                                                        </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp  animated" data-wow-delay="200ms"
                                                                        style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                                                                        <div class="blog-wrap">
                                                                                        <div class="blog-content">
                                                                                                        <div class="blog-meta">
                                                                                                                        <div class="blog-date">
                                                                                                                                        <span>Jan 07, 2024</span>
                                                                                                                        </div>

                                                                                                        </div>
                                                                                                        <div class="blog-title">
                                                                                                                        <h5>Cargo Shipment on Ocean Freight Demands Frequently Costly
                                                                                                                        </h5>
                                                                                                        </div>
                                                                                                        <div class="blog-img-wrap">
                                                                                                                        <div class="blog-img">
                                                                                                                                        <img src="{{ asset('assets/user/img/heroImg/2.jpg')}}"
                                                                                                                                                        alt="">
                                                                                                                        </div>
                                                                                                                        <div class="blog-cat">
                                                                                                                                        <a href="blog-details.html">standard, </a>
                                                                                                                                        <a href="blog-details-2.html"> express</a>
                                                                                                                        </div>
                                                                                                        </div>
                                                                                                        <div class="blog-desc">
                                                                                                                        <p>There are some reason Lorem ipsum dolor sit amet, consectetur
                                                                                                                                        adipisicing
                                                                                                                                        elit. Dolorem, facilis perferendis ipsam.</p>
                                                                                                        </div>
                                                                                                        <div class="blog-more">
                                                                                                                        <a href="blog-details.html" class="main-btn border-btn">Read
                                                                                                                                        More <i class="las la-arrow-right"></i></a>
                                                                                                        </div>
                                                                                        </div>
                                                                        </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp  animated" data-wow-delay="200ms"
                                                                        style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                                                                        <div class="blog-wrap">
                                                                                        <div class="blog-content">
                                                                                                        <div class="blog-meta">
                                                                                                                        <div class="blog-date">
                                                                                                                                        <span>Dec 16, 2022</span>
                                                                                                                        </div>

                                                                                                        </div>
                                                                                                        <div class="blog-title">
                                                                                                                        <h5>We believe in building long lasting our business
                                                                                                                                        relationships</h5>
                                                                                                        </div>
                                                                                                        <div class="blog-img-wrap">
                                                                                                                        <div class="blog-img">
                                                                                                                                        <img src="{{ asset('assets/user/img/heroImg/31.jpg')}}"
                                                                                                                                                        alt="">
                                                                                                                        </div>
                                                                                                                        <div class="blog-cat">
                                                                                                                                        <a href="blog-details.html">standard, </a>
                                                                                                                                        <a href="blog-details-2.html"> express</a>
                                                                                                                        </div>
                                                                                                        </div>
                                                                                                        <div class="blog-desc">
                                                                                                                        <p>There are some reason Lorem ipsum dolor sit amet, consectetur
                                                                                                                                        adipisicing
                                                                                                                                        elit. Dolorem, facilis perferendis ipsam.</p>
                                                                                                        </div>
                                                                                                        <div class="blog-more">
                                                                                                                        <a href="blog-details.html" class="main-btn border-btn">Read
                                                                                                                                        More <i class="las la-arrow-right"></i></a>
                                                                                                        </div>
                                                                                        </div>
                                                                        </div>
                                                        </div>
                                        </div>
                        </div>
        </div>

        <!-- article section end  -->




@endsection

