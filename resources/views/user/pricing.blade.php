@extends('user.layout.app')
@section("title")
    home page
@endsection

@section('navbar')
     @include('user.layout.navbar',['page'=>'pricing'])
@endsection

@section('style')

<style>
    .container-fluid,
    body,
    html {
        overflow: visible !important;
    
    }
    .team-bg {
            background-image: url('{{ $hero ? asset('storage/').'/'.$hero->img : asset('assets/user/img/team/pricing.jpg') }}');
        }
</style>

@endsection

@section('maincontent')
         <!-- Header Start -->
        <div class="breadcrumb-area team-bg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-title">
                        <h1>{{ optional($hero)->title }}</h1>
                        <p>{{ optional($hero)->description }} </p>
                        					
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-meta">
        <div class="container">
            <ul class="breadcrumb d-flex">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>        
                <li class="breadcrumb-item active" aria-current="page">Pricing</li>
            </ul>
        </div>
    </div>
        <!-- Header End -->

        <!-- Package Start -->
        @include("user.home.pricing")
        <!-- Package End -->


     @endsection