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
      @foreach ($delivery as $dly)
        <div class="service-item">
          <div class="service-img-wrap">
            <div class="service-thumb">
              <img src="{{ $dly->img ? asset('storage/').'/'.$dly->img : asset('assets/user/img/about/service-1.jpg') }}" alt="Free Estimate">
            </div>
          </div>
          <div class="service-content">
            <h4><a href="">{{ $dly->title }}</a></h4>
            <p>{{ $dly->description }}</p>
            <a class="main-btn primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      @endforeach
      
    </div>

  </div>
</div>


@push('script')

  <script>
    $(document).ready(function () {
  $('.service-carousel').owlCarousel({
    loop: true,
    margin: 30,
    // default nav false (will be overridden per breakpoint)
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    smartSpeed: 600,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      768: {
        items: 2,
        nav: false
      },
      1024: {
        items: 3,
        nav: true
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