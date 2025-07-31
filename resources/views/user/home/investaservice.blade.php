<!-- Services Start -->
        <div class="container-fluid service py-2">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Services</h4>
                    <h1 class="display-5"> Offering the Best Consulting & Investa Services</h1>
                </div>
                <div class="row g-4 justify-content-center text-center">
                    @foreach ($services as $service)
                    
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-light rounded">
                            <div class="service-img">
                                <img src="{{ asset('storage/'.$service->img) }}" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="service-content text-center p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="h4 mb-4 d-inline-flex text-start servicHeader"><i class="fas fa-donate fa-2x me-2"></i> {{ substr($service->name,0,30) }}</a>
                                    <p class="mb-4 serviceletter"> {{ substr($service->description,0,100) }}
                                    </p>
                                    <a class="btn btn-light rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    
                    <div class="col-12">
                        <a class="btn btn-primary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">Services More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->