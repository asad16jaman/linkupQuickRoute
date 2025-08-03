<div class="service-area gray-bg section-padding">
                        <div class="container">
                                        <div class="row justify-content-center text-center">
                                                        <div class="col-lg-7">
                                                                        <div class="section-title">
                                                                                        <p>Best Solution for Delivery Service!</p>
                                                                                        <h2>We provide best in Courier & Delivery Services</h2>
                                                                        </div>
                                                        </div>
                                        </div>

                                        <!-- Owl Carousel Start -->
                                        <div class="service-item-wrap mt-30 owl-carousel">
                                                        <!-- Item 1 -->
                                                        <div class="service-single">
                                                                        <div class="service-icon">
                                                                                        <!-- <i class="flaticon-delivery-man"></i> -->
                                                                                         <!-- <i class="fas fa-truck"></i> -->
                                                                                          <img style="width:70px;color:orange" src="{{ asset('assets/user/img/serviceIcon/courier.png')}}" alt="fail to load">
                                                                        </div>
                                                                        <div class="service-content">
                                                                                        <h4><a href="{{ route('standard') }}">Standard Courier <br> Services</a></h4>
                                                                                        <hr>
                                                                                        <p>The most affordable type of courier service available for sending
                                                                                                        regular-sized parcels
                                                                                                        and luggage.</p>
                                                                                        <ul class="list-unstyled service-list">
                                                                                                        <li><i class="las la-check"></i> Sending Regular-Sized Parcels</li>
                                                                                                        <li><i class="las la-check"></i> Parcels or suitcases up to 30kg</li>
                                                                                                        <li><i class="las la-check"></i> Basic shipping insurance</li>
                                                                                        </ul>
                                                                                        <a class="main-btn primary" href="{{ route('standard') }}">Find out more <i
                                                                                                                        class="las la-arrow-right"></i></a>
                                                                        </div>
                                                        </div>

                                                        <!-- Item 2 -->
                                                        <div class="service-single">
                                                                        <div class="service-icon">
                                                                                       
                                                                                       <img style="width:70px;color:orange" src="{{ asset('assets/user/img/serviceIcon/pickup-truck.png')}}" alt="fail to load">
                                                                        </div>
                                                                        <div class="service-content">
                                                                                        <h4><a href="{{ route('express') }}">Express Delivery <br> Services</a></h4>
                                                                                        <hr>
                                                                                        <p>The Express Delivery Service is the fastest shipping alternative among all
                                                                                                        types of
                                                                                                        courier services.</p>
                                                                                        <ul class="list-unstyled service-list">
                                                                                                        <li><i class="las la-check"></i> Same-day collection availability</li>
                                                                                                        <li><i class="las la-check"></i> Delivery time: 24h–72h</li>
                                                                                                        <li><i class="las la-check"></i> Parcels up to 70kg</li>
                                                                                        </ul>
                                                                                        <a class="main-btn primary" href="{{ route('express') }}">Find out more <i
                                                                                                                        class="las la-arrow-right"></i></a>
                                                                        </div>
                                                        </div>

                                                        <!-- Item 3 -->
                                                        <div class="service-single">
                                                                        <div class="service-icon">
                                                                                        
                                                                                        <img style="width:70px;color:orange" src="{{ asset('assets/user/img/serviceIcon/box.png')}}" alt="fail to load">
                                                                        </div>
                                                                        <div class="service-content">
                                                                                        <h4><a href="{{ route('nightshift') }}">Over Night <br> Courier</a></h4>
                                                                                        <hr>
                                                                                        <p>This service will usually transport the goods during the night or the early
                                                                                                        hours of
                                                                                                        the morning.</p>
                                                                                        <ul class="list-unstyled service-list">
                                                                                                        <li><i class="las la-check"></i> Sending Regular-Sized Parcels</li>
                                                                                                        <li><i class="las la-check"></i> Parcels or suitcases up to 30kg</li>
                                                                                                        <li><i class="las la-check"></i> Basic shipping insurance</li>
                                                                                        </ul>
                                                                                        <a class="main-btn primary" href="{{ route('nightshift') }}">Find out more <i
                                                                                                                        class="las la-arrow-right"></i></a>
                                                                        </div>
                                                        </div>
                                        </div>
                                        <!-- Owl Carousel End -->

                                        <div class="more-services text-center mt-4">
                                                        <p>Secured, Fastest and Affordable Delivery Service, <a href="{{ route('service') }}">Explore Our
                                                                                        Services!</a>
                                                        </p>
                                        </div>
                        </div>
        </div>



@push('script')
<script>
      $(".service-item-wrap").owlCarousel({
                                        items: 1,
                                        margin: 30,
                                        dots: true,
                                        nav: false,
                                        loop: true,
                                        autoplay: true,
                                        responsiveClass: true,
                                        center: false,
                                        responsive: {
                                                        0: {
                                                                        items: 1,
                                                                    
                                                                        dots: false,
                                                        },

                                                        575: {
                                                                        items: 1,
                                                                     
                                                                        dots: false,
                                                        },

                                                        767: {
                                                                        items: 2,
                                                                        
                                                        },

                                                        990: {
                                                                        items: 3,
                                                                        loop: true,
                                                        },
                                                        1200: {
                                                                        items: 3,
                                                                        dots: true,
                                                                        loop: true,
                                                        },
                                        },
                        });



</script>

@endpush