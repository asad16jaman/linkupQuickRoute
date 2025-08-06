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
            background-image: url('{{ $hero ? asset('storage/').'/'.$hero->img : asset('assets/user/img/heroImg/about.jpg') }}');
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
                        <h1>{{ optional($hero)->title }}</h1>
                        <p>{{ optional($hero)->description }}
                        </p>
                        <a href="{{ route('service') }}" class="main-btn primary">Our Services</a>
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
                        <img src="{{ $about->picture ? asset('storage').'/'.$about->picture : asset('assets/user/img/heroImg/3.jpg')}}" alt="">
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
                                
                                
                               {!! $about->description !!}
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

    <!-- client section start -->
                        <div class="container py-4">
                              <div class="text-center mx-auto pb-3 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                                <h2 class="text-primary mt-3">Our Clients</h2>
                                <h3>Our {{ optional($company)->name }} Company Happy Clients</h3>
                            </div>
                              <div class="">
                                    <div class="owl-carousel clientCarousel">
                                          @foreach ($clients as $client)
                                                <div class="swiper-slide">
                                                <div class="card">
                                                      <div class="card-body" style="display:flex;justify-content:center">
                                                           <img src="{{ asset('storage/'.$client->photo) }}" class="img-fluid" style="height: 50px!important" alt="">
                                                      </div>
                                                </div>
                                                </div>
                                          
                                          @endforeach
                                          
                                         
                                    </div>
                              </div>
                        </div>
                  <!-- client section end -->


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

        $(document).ready(function () {
        $('.clientCarousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 2000,      
            autoplaySpeed:1500,
            slideBy: 1,
            responsive: {
            0:   { items: 2 },   // phones
            576: { items: 3 },
            768: { items: 4 },
            1024:{ items: 5 },
            1400:{ items: 6 }    // large screens
            },
            // optional: remove mouse/touch dragging so it's pure automatic (enable if you want users to drag)
            mouseDrag: true,
            touchDrag: true
        });
        });

    </script>
@endpush