  <!-- Testimonial Start -->
        <div class="container-fluid testimonial bg-light py-2">
            <div class="container py-5">
                <div class="row g-4 align-items-center">
                   
                    <div class="col-xl-12">
                        <div class="testimonial-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                            @foreach ($clients as $client)
                                <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="d-flex">
                                    <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                                    <p class="mt-4">{{ $client->note }}
                                    </p>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <div class="my-auto text-end">
                                        <h5>{{ $client->name }}</h5>
                                        <p class="mb-0">{{ $client->profession }}</p>
                                    </div>
                                    <div class="bg-white rounded-circle ms-3">
                                        <img src="{{ 'storage/'.$client->photo }}" class="rounded-circle p-2" style="width: 80px; height: 80px; border: 1px solid; border-color: var(--bs-primary);" alt="">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

   