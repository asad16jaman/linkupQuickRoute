@extends('user.layout.app')
@section("title")
        home page
@endsection

@section('style')
       
        <style>
                        .hero-area-bg-6 {
                                        background-image: url('{{ asset('assets/user/img/heroImg/slide-6.jpg') }}');
                                        height: 700px;
                        }

                        .single-slide-item {
                                        background-image: url('{{ asset('assets/user/img/heroImg/slide-6.jpg') }}');
                                        background-size: cover;
                                        background-position: center;
                                        background-color: #ddd;
                                        color: #fff;
                                        width: 100%;
                                        height: 700px;
                                        position: relative;
                                        z-index: 1;
                                        display: flex !important;
                                        align-items: center;
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
                                                                                                                        <h1>Pickup and Delivery</h1>
                                                                                                                        <p>Your daily needs, everywhere Qatar , service we offer Pickup
                                                                                                                                        and delivery
                                                                                                                                        same
                                                                                                                                        time, everywhere 24/7, why costumers love us, we never
                                                                                                                                        broke costumer
                                                                                                                                        promise,
                                                                                                                                        join our family become a rider.</p>
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
                                                                                        <div class="contact-icon"><i class="bi bi-telephone-plus-fill"></i></div>
                                                                                        <div class="contact-body">
                                                                                                        <h6>Quick Contact </h6>
                                                                                                        <p>email: <a
                                                                                                                                        href="mailto:info@ecofix.com">qiuckroutedelivery@gmail.com</a>
                                                                                                        </p>
                                                                                                        <p>phone: <a href="tel:992688272500">&#x202A;+97 430 882 665</a></p>
                                                                                        </div>
                                                                        </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                                                        <div class="quick_contact">
                                                                                        <div class="contact-icon"><i class="bi bi-geo-alt-fill"></i></div>
                                                                                        <div class="contact-body">
                                                                                                        <h6>Our Location </h6>
                                                                                                        <p>Al Muntazah Trading Centre Building, Doha <br> Qatar.</p>

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
                                                                                                        <h2>Qiuck route is the only company pickup and delivery all Qatar!</h2>
                                                                                        </div>
                                                                                        <p class="text-black"><b>QIUCK route delivery company invests in its own fleet
                                                                                                                        of car,
                                                                                                                        motorcycle and drivers for fast delivery and better
                                                                                                                        quality&nbsp;of&nbsp;service.</b>
                                                                                        </p>
                                                                                        <p><b>Mission:</b><br>
                                                                                                        To give people residing everywhere the complete accessible to all their
                                                                                                        needs,
                                                                                                        <br>
                                                                                                        <b>Vision:</b><br>
                                                                                                        To become number one go to with equal accessibility to
                                                                                                        everyone&nbsp;everywhere
                                                                                        </p>
                                                                                        <br>

                                                                                        <div class="signature-wrap">
                                                                                                        <a href="about.html" class="main-btn primary d-none d-md-block">Learn
                                                                                                                        More</a>
                                                                                                        <div class="signature-body">
                                                                                                                        <h6>Michael Brian</h6>
                                                                                                                        <p>Managing Director</p>
                                                                                                        </div>

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
        @include("user.home.service")

        



        <!-- Services End -->


        <!-- Project Start -->
        <!-- include("user.home.project", ['projects' => $projects]) -->

        <div class="project-area section-padding pt-100 pb-100">
                        <div class="container">
                                        <div class="project-list mt-10">
                                                        <div class="row mt-30">
                                                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                                                                        <a href="project-details.html" class="single-project-wrapper">
                                                                                                        <div class="project-bg">
                                                                                                                        <img src="{{ asset('assets/user/img/heroImg/1-1.jpg')}}" alt="">
                                                                                                        </div>
                                                                                                        <div class="project-details">
                                                                                                                        <h5>Standard Courier</h5>
                                                                                                                        <span>Road Freight</span>
                                                                                                        </div>
                                                                                        </a>
                                                                        </div>

                                                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                                                                        <a href="project-details.html" class="single-project-wrapper">
                                                                                                        <div class="project-bg">
                                                                                                                        <img src="{{ asset('assets/user/img/heroImg/1-2.jpg')}}" alt="">
                                                                                                        </div>
                                                                                                        <div class="project-details">
                                                                                                                        <h5>Express Courier</h5>
                                                                                                                        <span>Sea Freight</span>
                                                                                                        </div>
                                                                                        </a>
                                                                        </div>

                                                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                                                                        <a href="project-details.html" class="single-project-wrapper">
                                                                                                        <div class="project-bg">
                                                                                                                        <img src="{{ asset('assets/user/img/heroImg/1-3.jpg')}}" alt="">
                                                                                                        </div>
                                                                                                        <div class="project-details">
                                                                                                                        <h5>International Courier</h5>
                                                                                                                        <span>Air Freight</span>
                                                                                                        </div>
                                                                                        </a>
                                                                        </div>

                                                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                                                                        <a href="project-details.html" class="single-project-wrapper">
                                                                                                        <div class="project-bg">
                                                                                                                        <img src="{{ asset('assets/user/img/heroImg/1-5.jpg')}}" alt="">
                                                                                                        </div>
                                                                                                        <div class="project-details">
                                                                                                                        <h5>Warehousing</h5>
                                                                                                                        <span>Rail Freight</span>
                                                                                                        </div>
                                                                                        </a>
                                                                        </div>
                                                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                                                                        <a href="project-details.html" class="single-project-wrapper">
                                                                                                        <div class="project-bg">
                                                                                                                        <img src="{{ asset('assets/user/img/heroImg/1-6.jpg')}}" alt="">
                                                                                                        </div>
                                                                                                        <div class="project-details">
                                                                                                                        <h5>Pallet Courier</h5>
                                                                                                                        <span>Rail Freight</span>
                                                                                                        </div>
                                                                                        </a>
                                                                        </div>
                                                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                                                                        <a href="project-details.html" class="single-project-wrapper">
                                                                                                        <div class="project-bg">
                                                                                                                        <img src="{{ asset('assets/user/img/heroImg/1-7.jpg')}}" alt="">
                                                                                                        </div>
                                                                                                        <div class="project-details">
                                                                                                                        <h5>Same Day Courier</h5>
                                                                                                                        <span>Road Freight</span>
                                                                                                        </div>
                                                                                        </a>
                                                                        </div>
                                                        </div>
                                        </div>
                        </div>
        </div>

        <!-- Project End -->


        <!-- Feature Section Start -->
                @include("user.home.feature")
        <!-- Feature Section end  -->



        <!-- Team Start -->
        <!-- include("user.home.team", ['teams' => $teams]) -->
        <!-- Team End -->


        <!-- Testimonial Start -->
        @include("user.home.client", compact(['clients']))
        <!-- Testimonial End -->


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


@push('script')

        <script>
                        // Service Slider
                      
                       
        </script>

@endpush