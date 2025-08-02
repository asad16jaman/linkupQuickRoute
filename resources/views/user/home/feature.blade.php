  <div class="feature-area dark-bg section-padding">
                        <div class="container">
                                        <div class="row align-items-center">
                                                        <div class="col-xl-6 col-lg-5">
                                                                        <div class="section-title">
                                                                                        <p>Secured, Fastest &amp; Reliable Delivery Service!</p>
                                                                                        <h2 class="text-white">
                                                                                                        Since during our launch, to deliver high value package.
                                                                                        </h2>
                                                                        </div>
                                                        </div>
                                                        <div class="offset-xl-1 col-xl-5 col-lg-6 offset-lg-1">
                                                                        <div class="feature-right-content">
                                                                                        <p class="text-white">
                                                                                                        Company providing its own fulfilment to a domestic depot, which is then
                                                                                                        picked up by
                                                                                                        the courier and distributed to customers, or couriers pick up packages
                                                                                                        directly from
                                                                                                        the vendor.
                                                                                        </p>
                                                                                        <p class="text-white">
                                                                                                        The process of courier or parcel delivery depends on the company,
                                                                                                        contract, location
                                                                                                        and a variety of other factors.
                                                                                        </p>
                                                                        </div>
                                                        </div>
                                        </div>


                                        <div class="feature-item-wrap">
                                                        <div class="feature-slider owl-carousel">

                                                                        <!-- Feature 1 -->
                                                                        <div class="feature-single wow fadeInLeft" data-wow-delay="100ms">
                                                                                        <div class="feature-icon">
                                                                                                        <img src="{{ asset('assets/user/img/feature/1.png') }}" alt="">
                                                                                        </div>
                                                                                        <div class="feature-title">
                                                                                                        <h5>Free Estimate</h5>
                                                                                        </div>
                                                                                        <div class="feature-desc">
                                                                                                        <p>Courier services will package according to customers' needs.</p>
                                                                                        </div>
                                                                                        <a href="{{ route('service') }}"><i class="bi bi-arrow-right"></i></a>
                                                                        </div>

                                                                        <!-- Feature 2 -->
                                                                        <div class="feature-single wow fadeInLeft" data-wow-delay="200ms">
                                                                                        <div class="feature-icon">
                                                                                                        <img src="{{ asset('assets/user/img/feature/2.png') }}" alt="">
                                                                                        </div>
                                                                                        <div class="feature-title">
                                                                                                        <h5>24/7 Services</h5>
                                                                                        </div>
                                                                                        <div class="feature-desc">
                                                                                                        <p>Shipments any day or time, even on weekends and holidays.</p>
                                                                                        </div>
                                                                                        <a href="{{ route('service') }}"><i class="bi bi-arrow-right"></i></a>
                                                                        </div>

                                                                        <!-- Feature 3 -->
                                                                        <div class="feature-single wow fadeInLeft" data-wow-delay="300ms">
                                                                                        <div class="feature-icon">
                                                                                                        <img src="{{ asset('assets/user/img/feature/3.png') }}" alt="">
                                                                                        </div>
                                                                                        <div class="feature-title">
                                                                                                        <h5>Flat Rate Fees</h5>
                                                                                        </div>
                                                                                        <div class="feature-desc">
                                                                                                        <p>Parcel charge depends on speedy delivery at a flexible price.</p>
                                                                                        </div>
                                                                                        <a href="{{ route('service') }}"><i class="bi bi-arrow-right"></i></a>
                                                                        </div>

                                                                        <!-- Feature 4 -->
                                                                        <div class="feature-single wow fadeInLeft" data-wow-delay="400ms">
                                                                                        <div class="feature-icon">
                                                                                                        <img src="{{ asset('assets/user/img/feature/4.png') }}" alt="">
                                                                                        </div>
                                                                                        <div class="feature-title">
                                                                                                        <h5>Fast Delivery</h5>
                                                                                        </div>
                                                                                        <div class="feature-desc">
                                                                                                        <p>Specialty couriers deliver items faster than other services.</p>
                                                                                        </div>
                                                                                        <a href="{{ route('service') }}"><i class="bi bi-arrow-right"></i></a>
                                                                        </div>

                                                                        <!-- Feature 5 -->
                                                                        <div class="feature-single wow fadeInLeft" data-wow-delay="500ms">
                                                                                        <div class="feature-icon">
                                                                                                        <img src="{{ asset('assets/user/img/feature/5.png') }}" alt="">
                                                                                        </div>
                                                                                        <div class="feature-title">
                                                                                                        <h5>Secured Service</h5>
                                                                                        </div>
                                                                                        <div class="feature-desc">
                                                                                                        <p>Highest level of security and tracking for your packages.</p>
                                                                                        </div>
                                                                                        <a href="{{ route('service') }}"><i class="bi bi-arrow-right"></i></a>
                                                                        </div>

                                                        </div>
                                        </div>



                        </div>

        </div>



@push('script')

<script>


   $(".feature-slider").owlCarousel({
                                        items: 1,
                                        margin: 30,
                                        dots: true,
                                        nav: false,
                                        loop: true,
                                        autoplay: true,
                                        smartSpeed: 1000,
                                        responsiveClass: true,
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
                                                                        nav: false,
                                                        },

                                                        990: {
                                                                        items: 3,
                                                                       
                                                                        dots: false,
                                                        },
                                                        1200: {
                                                                        items: 4,
                                                                        dots: true,
                                                                        
                                                        },
                                        },
                        });



</script>
@endpush