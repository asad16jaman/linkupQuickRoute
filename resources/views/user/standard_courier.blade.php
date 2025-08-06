@extends('user.layout.app')
@section("title")
    home page
@endsection

@section('navbar')
    @include('user.layout.navbar', ['page' => 'service'])
@endsection

@section('style')
<!-- Add the slick-theme.css if you want default styling -->
    <style>
        .standard_courier {
            background-image: url('{{ $hero ? asset('storage/').'/'.$hero->img :  asset('assets/user/img/team/standard_courier.jpg')}}');
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
                        <h1>{{ optional($hero)->title }}</h1>
                        <p>{{ optional($hero)->description }}</p>
                        <a href="{{ route('pricing') }}" class="main-btn primary">Our Plan</a>
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
                <li class="breadcrumb-item active" aria-current="page">{{ $detailService->nav_name }}</li>
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
                                @forelse($services as $service)
                                    <li class="d-block {{ ($service->nav_name == $detailService->nav_name) ? 'current' : ''  }}"><a href="{{ route('user.service',['name'=>$service->nav_name]) }}">{{ $service->nav_name }}<span> <i
                                                class="las la-long-arrow-alt-right"></i></span></a></li>
                                @empty

                                @endforelse
                                
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
                                <a href="tel:+97430882665">{{ $company->phone ?? '+8801xxxxxxxxx' }}</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="service-details_right">
                        <div class="service-details_img">
                            <img src="{{ optional($detailService->service)->picture ? asset('storage').'/'.$detailService->service->picture : asset('assets/user/img/serviceIcon/standard_courier(1).jpg') }}" alt="">
                        </div>
                        <div class="service-details_content">
                            <h3 class="service-details_title">Overview</h3>
                            {!!  optional($detailService->service)->logn_description !!}
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
                            <p class="service-details_text-2">{{ $detailService->description ?? '' }}</p>
                            <br>
                        </div>
                        <div class="service-details_img">
                            <img src="{{ asset('assets/user/img/serviceIcon/courier_service.jpg') }}" alt="">
                            <div class="pop-up-video">
                                <a href="{{ optional($detailService->service)->video }}" class="video-play-btn mfp-iframe d-flex align-items-center justify-content-center">
                                     <span>
                                        <i class="fas fa-play" style="font-size:20px"></i>
                                     </span>
                                </a>
                            </div>
                        </div>
                        <div class="service-details_content">
                            <h3 class="service-details_title">Conclusion</h3>
                            <p class="service-details_text-2">{{ optional($detailService->service)->description }}</p>
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

