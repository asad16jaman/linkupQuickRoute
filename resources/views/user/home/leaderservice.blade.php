<div class="service-area gray-bg service-3 section-padding pt-100">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-xl-8 col-lg-8">
        <div class="section-title">
          <p>Popular Service With Quick Response!</p>
          <h2>
            A Leading corporation of Courier Deliveries &amp; Suppliers.
          </h2>
        </div>
      </div>
    </div>
    <div class="service-carousel owl-carousel owl-theme mt-30">
      <!-- Feature Item 1 -->
      <div class="service-item">
        <div class="service-img-wrap">
          <div class="service-thumb">
            <img src="{{ asset('assets/user/img/about/service-1.jpg') }}" alt="Free Estimate">
          </div>
          <div class="services_icon">
            <!-- <i class="flaticon-delivery-man"></i> -->
            <i class="fas fa-truck-moving"></i>
          </div>
        </div>
        <div class="service-content">
          <h4><a href="">Free Estimate</a></h4>
          <p>Courier services will package according to customers' needs.</p>
          <a class="main-btn primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Feature Item 2 -->
      <div class="service-item">
        <div class="service-img-wrap">
          <div class="service-thumb">
            <img src="{{ asset('assets/user/img/about/service-1.jpg') }}" alt="24/7 Services">
          </div>
          <div class="services_icon">
            <i class="fas fa-box-tissue"></i>
          </div>
        </div>
        <div class="service-content">
          <h4><a href="">24/7 Services</a></h4>
          <p>Shipments any day or time, even on weekends and holidays.</p>
          <a class="main-btn primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Feature Item 3 -->
      <div class="service-item">
        <div class="service-img-wrap">
          <div class="service-thumb">
            <img src="{{ asset('assets/user/img/about/service-1.jpg') }}" alt="Flat Rate Fees">
          </div>
          <div class="services_icon">
            <i class="fas fa-box"></i>
          </div>
        </div>
        <div class="service-content">
          <h4><a href="">Flat Rate Fees</a></h4>
          <p>Parcel Charge depends on speedy delivery at a flexible price.</p>
          <a class="main-btn primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Feature Item 4 -->
      <div class="service-item">
        <div class="service-img-wrap">
          <div class="service-thumb">
            <img src="{{ asset('assets/user/img/about/service-1.jpg') }}" alt="Fast Delivery">
          </div>
          <div class="services_icon">
            <i class="fas fa-truck"></i>
          </div>
        </div>
        <div class="service-content">
          <h4><a href="">Fast Delivery</a></h4>
          <p>Specialty couriers are able to deliver items faster than other services.</p>
          <a class="main-btn primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Feature Item 5 -->
      <div class="service-item">
        <div class="service-img-wrap">
          <div class="service-thumb">
            <img src="{{ asset('assets/user/img/about/service-1.jpg') }}" alt="Secured Service">
          </div>
          <div class="services_icon">
            <i class="fas fa-shipping-fast"></i>
          </div>
        </div>
        <div class="service-content">
          <h4><a href="">Secured Service</a></h4>
          <p>Specialty couriers provide the highest level of security and tracking.</p>
          <a class="main-btn primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Feature Item 6 -->
      <div class="service-item">
        <div class="service-img-wrap">
          <div class="service-thumb">
            <img src="{{ asset('assets/user/img/about/service-1.jpg') }}" alt="Well Disciplined">
          </div>
          <div class="services_icon">
           <i class="fas fa-comments"></i>
          </div>
        </div>
        <div class="service-content">
          <h4><a href="">Well Disciplined</a></h4>
          <p>Delivery team trained to handle your product carefully and respectfully.</p>
          <a class="main-btn primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Feature Item 7 -->
      <div class="service-item">
        <div class="service-img-wrap">
          <div class="service-thumb">
            <img src="{{ asset('assets/user/img/about/service-1.jpg') }}" alt="Customer Support">
          </div>
          <div class="services_icon">
            <i class="fas fa-headset"></i>
          </div>
        </div>
        <div class="service-content">
          <h4><a href="">Customer Support</a></h4>
          <p>24/7 customer support to assist you with shipment tracking and queries.</p>
          <a class="main-btn primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Feature Item 8 -->
      <div class="service-item">
        <div class="service-img-wrap">
          <div class="service-thumb">
            <img src="{{ asset('assets/user/img/about/service-1.jpg') }}" alt="Live Tracking">
          </div>
          <div class="services_icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
        </div>
        <div class="service-content">
          <h4><a href="">Live Tracking</a></h4>
          <p>Track your courier in real time with our advanced GPS tracking system.</p>
          <a class="main-btn primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>

  </div>
</div>


@push('script')

  <script>
    $(document).ready(function () {
    $('.service-carousel').owlCarousel({
      loop: true,
      margin: 30,
      nav: true,
      dots: true,
      autoplay: true,
      autoplayTimeout: 5000,
      smartSpeed: 600,
      responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      1024: {
        items: 3
      }
      },
      navText: [
      '<i class="bi bi-chevron-left"></i>',
      '<i class="bi bi-chevron-right"></i>'
      ]
    });
    });



  </script>

@endpush