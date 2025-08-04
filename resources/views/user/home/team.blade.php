<!-- Team Start -->
        <div class="container-fluid team pb-2 pt-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-3 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h2 class="text-primary mt-3">Our Team</h2>
                    <h3>Our {{ optional($company)->name }} Company Dedicated Team Member</h3>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach ($teams as $team)
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item rounded">
                                <div class="team-img">
                                    <img src="{{ asset('storage/'.$team->photo) }}" class="img-fluid w-100 rounded-top" style="height:260px;object-fit:contain" alt="Image">
                                    <div class="team-icon">
                                        <!-- <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a> -->
                                        <div class="team-icon-share">
                                            <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-content bg-dark text-center rounded-bottom p-4">
                                    <div class="team-content-inner rounded-bottom">
                                        <h4 class="text-white">{{ substr($team->name,0,15) }}</h4>
                                        <p class="text-muted mb-0">{{ $team->designation }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    @endforeach
                    
                    
                </div>
            </div>
        </div>
        <!-- Team End -->