<!-- FAQ Start -->
        <div class="container-fluid faq py-2">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="pb-5">
                            <h4 class="text-primary">FAQs</h4>
                            <h1 class="display-5">Get the Answers to Common Questions</h1>
                        </div>
                       <div class="accordion bg-light rounded p-4" id="accordionExample">

                            @foreach ($faqs as $faq)
                            
                            
                            <div class="accordion-item border-0 mb-4">
                                <h2 class="accordion-header" id="headingOne">
                                    <button style="font-size:15px!important" class="accordion-button text-dark fs-5 fw-bold rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $faq->id }}" aria-expanded="true" aria-controls="collapseTOne">
                                        {{ $faq->question }}
                                    </button>
                                </h2>
                                <div id="collapseOne{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body my-2">
                                       
                                        <p style="font-size: 13px;">{{ $faq->answer }}</p>
                                    </div>
                                </div>
                            </div>
                            
                            @endforeach
                            
                            
                            
                       </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="faq-img RotateMoveRight rounded">
                            <img src="{{ asset("assets/user/img/faq-img.jpg") }}" class="img-fluid rounded w-100" alt="Image">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ End -->