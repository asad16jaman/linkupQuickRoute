@extends('user.layout.app')
@section("title")
    home page
@endsection

@section('navbar')
     @include('user.layout.navbar',['page'=>'project'])
@endsection

@section('style')
    <style>
        .project-detail {
            background-image: url('{{ asset('assets/user/img/serviceIcon/project-details.jpg')}}');
        }
    </style>
@endsection

@section('maincontent')

        <!-- Hero Start -->
        <div class="breadcrumb-area project-detail">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-title">
                        <h1>Project Details</h1>
                        <p>We delivery products Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse provident explicabo atque numquam enim debitis earum minus, perferendis sed ipsum.</p>
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
                <li class="breadcrumb-item active" aria-current="page">Project Details</li>
            </ul>
        </div>
    </div>
        <!-- Hero End -->


    <div id="project-page">
    <div class="project_details-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-content-wrapper">
                        <div class="single-image-wrapper">
                            <img src="{{ asset('assets/user/img/project/single-project.jpg')}}" alt="">
                        </div>
                        <div class="project-details-box">
                            <div class="project-details-box-title">
                                <h4>Project Info</h4>									
                            </div>	                            
                                <ul class="detail-box-list">
                                    <li>
                                        <div class="list-details">												
                                            <i class="las la-tasks"></i>
                                            <h5>Project <span>Standard Courier</span> </h5>												
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="list-details">												
                                            <i class="las la-film"></i>
                                            <h5>Categories <span>Parcel, Freight</span> </h5>												
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list-details">												
                                            <i class="las la-calendar"></i>
                                            <h5>Date <span>22 January 2024</span> </h5>												
                                        </div>
                                    </li>										
                                    <li>
                                        <div class="list-details">												
                                            <i class="las la-user"></i>
                                            <h5>Client <span>Exelsior Courier Ltd.</span> </h5>												
                                        </div>
                                    </li>
                                </ul>                            
                        </div>
                    </div>
                    <div class="single-content-area">
                        <h4>The Back Story</h4>
                        <p>Delivery Service Solutions specializes in courier and helps to local &amp; domestics delivery costs while increasing recycling rates. We offer both pick-up and drop-off services for our customer.  As with all services, if you are unsure whether your products are recyclable, contact us and we will be happy to navigate you through the process.Paper waste from offices, data centers, and businesses is often shredded or bailed. Twenty ton loads are then transported and resold for re-manufacturing purposes.</p>
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                            <div class="single-img-wrapper">
                                <img src="{{ asset('assets/user/img/project/project-details-1.jpg')}}" alt="">
                            </div>																
                        </div>
                        
                        <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                            <div class="single-img-wrapper">
                                <img src="{{ asset('assets/user/img/project/project-details-2.jpg')}}" alt="">
                            </div>																
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                            <div class="single-img-wrapper d-none d-lg-block">
                                <img src="{{ asset('assets/user/img/project/project-details-3.jpg')}}" alt="">
                            </div>																
                        </div>
                    </div>
                    <div class="single-content-area">
                        <h4>Project Challenge</h4>
                        <p>Wecusandae debitis facere quidem animi placeat maxime cuuntur at voluptatib uod numuam pariatur libero laborum laudantium non. Vitae optio, distinctio earum facere magni natus eaque esse corporis dolorem! Similique fugiatime magnis dis parturient montes, nascetur ridiculus mus faucibus sed eros dapibus. Excepturi quos conse ctetur adipi sicing elit provi dent laud atium Wecusandae debitis facere quidem animi placeat maxime cuuntur at voluptatib uod numuam.</p>
                    </div>
                    
                    <div class="row mt-50">
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-content-area">
                                <h4>Project Solutions</h4>
                            </div>										
                            <ul class="project-solutions-list">
                                    
                                <li><i class="las la-long-arrow-alt-right"></i>We use the best and newest product for developing technologies</li>                                
                                <li><i class="las la-long-arrow-alt-right"></i>Manage and test all systems to our experienced qualified Experts</li>                                
                                <li><i class="las la-long-arrow-alt-right"></i>Always ready to easy way in installing all security systems</li>                                
                                <li><i class="las la-long-arrow-alt-right"></i>We use the best and newest product for developing technologies</li>                                
                                <li><i class="las la-long-arrow-alt-right"></i>Manage and test all systems to our experienced qualified Experts</li>                                
                                <li><i class="las la-long-arrow-alt-right"></i>Always ready to easy way in installing all security systems</li>   
                                <li><i class="las la-long-arrow-alt-right"></i>We use the best and newest product for developing technologies</li>                                
                                                                                                                          								
                            </ul>
                            </div>							
                            <div class="col-xl-6 col-lg-6">
                            <img src="{{ asset('assets/user/img/project/project-wide-img.jpg')}}" alt="">
                        </div>
                    </div>

                    <div class="single-content-area">
                        <h4>Project Result</h4>
                        <p>Wecusandae debitis facere quidem animi placeat maxime cuuntur at voluptatib uod numuam pariatur libero laborum laudantium non. Vitae optio, distinctio earum facere magni natus eaque esse corporis dolorem! Similique fugiatime magnis dis parturient montes, nascetur ridiculus mus faucibus sed eros dapibus. Excepturi quos conse ctetur adipi sicing elit provi dent laud atium vWecusandae debitis facere quidem animi placeat maxim</p>
                    </div>                                    
                </div>
            </div>
        </div>
    </div>
</div>

        

     @endsection