@extends('user.layout.app')
@section("title")
    home page
@endsection

@section('navbar')
    @include('user.layout.navbar', ['page' => 'about'])
@endsection

@section('style')
    <style>
        .about-bg {
            background-image: url('{{ asset('assets/user/img/heroImg/about.jpg') }}');
        }

        .expertise-img {
            background-image: url('{{ asset('assets/user/img/heroImg/expertise.jpg') }}');
            background-size: cover;
            height: 50%;
            width: 100%;
        }
    </style>
@endsection

@section('maincontent')

    <!-- Header Start -->
    <div class="breadcrumb-area about-bg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-title">
                        <h1>About Us</h1>
                        <p>QIUCK route delivery company invests in its own fleet of car, motorcycle and drivers for fast
                            delivery and better quality&nbsp;of&nbsp;service.
                            Our employees are our assets, and we provide them with a safe working environment that ensures
                            their satisfaction and security while doing&nbsp;their&nbsp;job.
                        </p>
                        <a href="services.html" class="main-btn primary">Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-meta">
        <div class="container">
            <ul class="breadcrumb d-flex">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ul>
        </div>
    </div>
    <!-- Header End -->
     
    <!-- About Start -->
    <div class="about-area section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="about-img wow fadeInRight  animated" data-wow-delay="100ms"
                        style="visibility: visible; animation-delay: 100ms; animation-name: fadeInRight;">
                        <img src="{{ asset('assets/user/img/about/1.jpg')}}" alt="">
                        <div class="about-counter wow fadeInLeft" data-wow-delay="400ms"
                            style="visibility: visible; animation-delay: 400ms; animation-name: fadeInLeft;">
                            <div class="counter-icon">
                                <img src="{{ asset('assets/user/img/about/courier.png')}}" alt="">
                            </div>
                            <div class="counter-number">
                                <span class="counting" data-counterup-nums="154">121</span>
                            </div>
                            <h6>World Wide Branch</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="about-content-wrap">
                        <div class="section-title">
                            <p>Entire Domestic and International Courier Services</p>
                            <h2>
                                We Are Providing best way Of Courier &amp; Parcel Delivery!
                            </h2>
                        </div>
                        <div class="about-content">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <div class="about-content-left">
                                        <p class="highlight mb-30">
                                            We provide the trustworthy to deliver any packages with our latest
                                            technologies, also provide secured &amp; on time service!
                                        </p>
                                        <p>
                                            Courier companies and delivery agency stay on the ground and do most of the
                                            authority to ensure that customers get their orders on time, is greatly
                                            dependent on the kind of courier company.
                                        </p>

                                    </div>
                                </div>
                                <div class="col-12 col-lg-5">
                                    <div class="about-content-right">
                                        <p>
                                            What service Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias,
                                            fugiat!?
                                        </p>
                                        <ul class="list-unstyled feature-list mt-30">
                                            <li>
                                                <i class="las la-check"></i>Reliability and
                                                Trustworthy
                                            </li>
                                            <li>
                                                <i class="las la-check"></i>Fast &amp; Secured Deliveries
                                            </li>
                                            <li><i class="las la-check"></i>World Wide Shipping</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Experiance Start -->
    @include("user.home.expertis")
    <!-- Experiance End -->

    <!-- Leader Service Section Start  -->
    @include("user.home.leaderservice")
    <!-- Leader Service Section End -->

    <!-- Feature Section Start -->
                @include("user.home.feature")
        <!-- Feature Section end  -->
    <!-- Team Start -->
    @include("user.home.team", ['teams' => $teams])
    <!-- Team End -->


@endsection



@push('script')
    <script>

        $('.feature-slider').owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });

    </script>
@endpush