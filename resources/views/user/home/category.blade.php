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
                                            @foreach ($categories as $category)

                                                <div class="service-single">
                                                <div class="service-icon">                         
                                                    <img style="width:70px;color:orange" src="{{ $category->img ? asset('storage').'/'.$category->img : asset('assets/user/img/serviceIcon/courier.png')}}" alt="fail to load">
                                                </div>
                                                 <div class="service-content">
                                                    <h4><a href="{{ route('standard') }}">{!! $category->name !!}</a></h4>
                                                    <hr>
                                                    {!! $category->long_description !!}
                                                    <a class="main-btn primary" href="{{ route('standard') }}">
                                                        Find out more <i class="las la-arrow-right"></i>
                                                    </a>
                                                </div>

                                            </div>

                                            
                                            @endforeach
                                            

                                                       

                                                        
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