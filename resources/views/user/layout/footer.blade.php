<footer class="footer-area">
        <div class="container">
            <div class="footer-up">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp  animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="logo">
                            <img style="width:50px;height:50px" src="{{ asset('storage').'/'.optional($company)->logo }}" alt="Qiuck Route Delivery Services logo">
                        </div>
                        <div class="contact-info">
                            {!! optional($company)->address !!}
                            <p><b>Phone:</b> {{ optional($company)->phone }}</p>
                            <p><b>E-mail:</b> {{ optional($company)->email }}</p>
                            <p><b>Opening Hour:</b> 24/7 hours</p>
                        </div>

                    </div>
                    <div class="col-lg-5 col-md-6 com-sm-12 wow fadeInUp  animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <h6>Company</h6>
                                <ul>
                                    <li>
                                        <a href="{{ route('about') }}">About Us</a>
                                        <a href="{{ route('team') }}">Meet Our Team</a>
                                        <a href="{{ route('service') }}">Service</a>
                                        <a href="{{ route('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                                <h6>Services</h6>
                                <ul>
                                    <li>

                                    @forelse($services as $service)
                                        <a href="{{ route('user.service',['name'=>$service->nav_name]) }}">{{ $service->nav_name }}</a>
                                    @empty
                                        <p>No Page Found</p>
                                    @endforelse

                                        <!-- <a href="standard_courier.html">Standard Courier</a>
                                        <a href="express_courier.html">Express Courier</a>
                                        <a href="overnight_courier.html">Over Night Courier</a> -->
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp  animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="subscribe-form">
                            <h6>Newsletter</h6>
                            <form action="#">
                                <input type="email" placeholder="Your email">
                                <button type="submit" style="padding: 17px 20px;"><i class="bi bi-envelope-fill"></i></button>
                            </form>
                            <p>Stay tuned for our latest news</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>