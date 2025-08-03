@extends('user.layout.app')
@section("title")
    home page
@endsection

@section('navbar')
     @include('user.layout.navbar',['page'=>'page'])
@endsection

@section('style')

<style>
    .team-bg {
            background-image: url('{{ $hero ? asset('storage/').'/'.$hero->img : asset('assets/user/img/team/team.jpg') }}');
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
                <li class="breadcrumb-item active" aria-current="page">Team</li>
            </ul>
        </div>
    </div>

        <!-- Header End -->

        
        


        <!-- Team Start -->
        @include("user.home.team",['teams'=>$teams])
        <!-- Team End -->


     @endsection