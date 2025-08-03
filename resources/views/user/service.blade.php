@extends('user.layout.app')
@section("title")
    home page
@endsection

@section('navbar')
     @include('user.layout.navbar',['page'=>'page'])
@endsection

@section('style')
    <style>
        .about-bg{
            background-image: url('{{  $hero ? asset('storage/').'/'.$hero->img : asset('assets/user/img/serviceIcon/services.jpg') }}');
        }
    </style>
@endsection

@section('maincontent')
        <!-- Hero Start -->
        <div class="breadcrumb-area about-bg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-title">
                        <h1>{{ optional($hero)->title }}</h1>
                        <p>{{  optional($hero)->description  }}
                        </p>
                        <a href="{{ route('service') }}" class="main-btn primary">Our Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-meta">
        <div class="container">
            <ul class="breadcrumb d-flex">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Service</li>
            </ul>
        </div>
    </div>
        <!-- Hero End -->

        <!-- Services Start -->
            @include("user.home.service")
        <!-- Services End -->

       <!-- Leader Service Section Start  -->
    @include("user.home.leaderservice")
    <!-- Leader Service Section End -->

        <!-- Testimonial Start -->
             @include("user.home.client",compact(['clients']))
        <!-- Testimonial End -->


        <!-- Package Start -->
        @include("user.home.pricing")

        <!-- Package End -->

     @endsection