@extends('user.layout.app')
@section("title")
    home page
@endsection

@section('navbar')
    @include('user.layout.navbar', ['page' => 'service'])
@endsection

@section('style')
    <style>
        .standard_courier {
            background-image: url('{{ asset('assets/user/img/serviceIcon/express_courier.jpg')}}');
        }
    </style>
@endsection

@section('maincontent')
    <div class="breadcrumb-area standard_courier">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="breadcrumb-title">
                        <h1>Express Courier</h1>
                        <p>As its name implies, the express delivery service is exclusively known for collecting and delivering parcels to destinations within a stipulated area on the same day. Their reliable delivery speed makes them ideal for organisations relying on private.</p>
                        <a href="pricing.html" class="main-btn primary">Our Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-meta">
        <div class="container">
            <ul class="breadcrumb d-flex">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="services.html">Service</a></li>
                <li class="breadcrumb-item active" aria-current="page">Express Courier</li>
            </ul>
        </div>
    </div>

    <section class="service-details pb-50">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-4 col-lg-5">
                    <div class="service-details_sidebar">
                        <div class="service-details_sidebar-service">
                            <ul class="service-details_sidebar-service-list list-unstyled">
                                <li class="d-block"><a href="{{ route('standard') }}">Standard Courier<span> <i
                                                class="las la-long-arrow-alt-right"></i></span></a></li>
                                <li class="d-block current"><a href="{{ route('express') }}">Express Courier<span> <i
                                                class="las la-long-arrow-alt-right"></i></span></a></li>
                                <li class="d-block"><a href="{{ route('nightshift') }}">Overnight Courier<span> <i
                                                class="las la-long-arrow-alt-right"></i></span></a></li>
                            </ul>
                        </div>
                        <div class="need_help_img">
                        </div>
                        <div class="service-details_need-help">
                            <h2 class="service-details_need-help-title">Let's Help You for Advice</h2>
                            <div class="service-details_need-help-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="service-details_need-help-contact">
                                <p>Call Anytime</p>
                                <a href="tel:+97430882665">+97 430 882 665</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="service-details_right">
                        <div class="service-details_img">
                            <img src="{{ asset('assets/user/img/serviceIcon/express_courier(1).jpg') }}" alt="">
                        </div>
                        <div class="service-details_content">
                            <h3 class="service-details_title">Overview</h3>
                            <p class="service-details_text-1">As its name implies, the express delivery service is exclusively known for collecting and delivering parcels to destinations within a stipulated area on the same day. Their reliable delivery speed makes them ideal for organisations relying on private and confidential communications.
                                </p>
                            <br>
                            <p class="service-details_text-2">This courier service is the most used and cost-effective service to send parcels to any destination. It is common for delivery services to prioritise a package's weight over its size. Unlike expedited delivery services, these companies ensure that your packages arrive within two to three days from processing, making them more cost-effective than faster delivery services.</p>                            
                            <ul class="list-unstyled service-list">
                                <li>
                                    <i class="las la-check"></i>Same-day collection availability
                                </li>
                                <li><i class="las la-check"></i>Delivery time: 24h-72h</li>
                                <li><i class="las la-check"></i>Parcels up to 70kg</li>
                            </ul>
                        </div>
                        
                        <div class="">
                          
                                <div class="slick_liders">
                                    <div>
                                        <img src="{{ asset('assets/user/img/serviceIcon/services.jpg') }}" alt="">
                                    </div>
                                    <div>
                                        <img src="{{ asset('assets/user/img/serviceIcon/single_service_slide_2.jpg') }}" alt="">
                                    </div>
                                </div>
                           
                        </div>

                        <div class="service-details_content">  
                            <h3 class="service-details_title">Type of Service</h3>     
                            <p class="service-details_text-2">This option is a good one if you know the weight of your expected package. If you’re uncertain though, then you may want to think of other options. They’ll surely offer a variety of delivery options, including some of the others on this list. Generally, though, most standard delivery services will transport packages by truck in 2 or 3 days. </p>                                                                             
                            <br>
                        </div>
                        <div class="service-details_img">
                            <img src="{{ asset('assets/user/img/serviceIcon/courier_service.jpg') }}" alt="">
                            <div class="pop-up-video">
                                <a href="https://www.youtube.com/watch?v=yFwGpiCs3ss" class="video-play-btn mfp-iframe">
                                    <i class="las la-play"></i> <span></span>
                                </a>
                            </div>
                        </div>
                        <div class="service-details_content">  
                            <h3 class="service-details_title">Conclusion</h3>                                                      
                            <p class="service-details_text-2">If you think the same day delivery service is fast, then you’ll find rush and immediate deliveries amazing. Rush and on-demand deliveries are for those who need it as soon as possible. You won’t need to wait more than half a day to get your deliveries this way.</p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@push('script')
    
    <script>

        $(document).ready(function(){
            $(".slick_liders").slick({
                centerMode: true,
                autoplay: true,
                autoplaySpeed: 1000,
                infinite: true,
                speed: 600,
                fade: true,
                cssEase: "linear"
            });
        });
    </script>

@endpush

