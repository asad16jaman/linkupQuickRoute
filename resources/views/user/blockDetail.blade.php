@extends('user.layout.app')
@section("title")
    home page
@endsection

@section('navbar')
    @include('user.layout.navbar', ['page' => 'page'])
@endsection

@section('style')

    <style>
        .team-bg {
            background-image: url('{{ $hero ? asset('storage/') . '/' . $hero->img : asset('assets/user/img/team/team.jpg') }}');
        }
    </style>

@endsection

@section('maincontent')

    <!-- Header Start -->
    <div class="breadcrumb-area team-bg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-title">
                        <h1>{{ optional($hero)->title }}</h1>
                        <p>{{ optional($hero)->description }} </p>
                        <a href="services.html" class="main-btn primary">Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="breadcrumb-meta">
        <div class="container">
            <ul class="breadcrumb d-flex">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog Detail</li>
            </ul>
        </div>
    </div>

    <!-- Header End -->

    <div id="blog-page" class="blog-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-blog-wrap">
                        <img src="{{ asset('assets/user/img/detail/single-blog.jpg') }}" alt="">
                        <div class="blog-meta mt-20">
                            <span>Jan 21, 2024</span>
                        </div>
                        <h3>Cargo Shipment on Ocean Freight Demands Costly</h3>
                        <p>Left fruit Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis saepe fuga sunt,
                            atque ratione adipisci autem ducimus, quisquam sapiente magnam assumenda modi optio,
                            officiis incidunt aut consequuntur commodi ipsa eos!</p>
                        <p>Quas optio sapiente sunt excepturi adipisci temporibus maiores quos sequi alias? Illo eaque
                            error officia unde, quos expedita debitis fugit? Dolorum, deleniti? Quidem deserunt,
                            consequatur officia voluptatum amet possimus assumenda ratione? Optio maiores doloremque
                            numquam facere eaque architecto quas obcaecati, necessitatibus, ipsam dolorem accusamus
                            soluta odio delectus atque laborum, a incidunt nesciunt.</p>
                        <p>Expedita aspernatur, molestiae veritatis aut placeat et corporis, tempora ad tenetur quo
                            blanditiis sapiente sint reiciendis, eius quidem hic vitae perspiciatis illo officia ullam.
                            Et quos in necessitatibus doloremque nostrum quaerat quod repellat incidunt commodi cumque.
                            Sed eos explicabo voluptate deleniti hic magni officia omnis atque consequatur quo ratione
                            repellat, veniam, pariatur aliquam minima dolor fugit quisquam quis ipsum minus nam maiores
                            laborum asperiores quasi. Nisi minima, nostrum natus excepturi nemo, unde provident eaque
                            velit ea optio laudantium quos illum eveniet quia molestias animi placeat sint delectus
                            error consequatur dolore. Delectus, ad?</p>
                        <h3>A Freight Relationship Built On Trust</h3>
                        <p>It seemed innocent at the time. The import shipping clerk at this particular global container
                            carrier had a good relationship with the Importer. The customer received at least one container
                            of foodstuffs from the shipper every single week. He had been importing for over three years and
                            his business was valuable to the carrier and their agent. The import shipping clerk knew the
                            procedures well and had over 20 years experience in the business.</p>
                        <div class="row">
                            <div class="col-lg-6 mb-30">
                                <img class="blog-inside" src="assets/img/blog/single-blog-2.jpg" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="blog-inside" src="assets/img/blog/single-blog-3.jpg" alt="">
                            </div>
                        </div>


                        <h3>Give An Inch, Take A Mile</h3>
                        <p>One day, the importer called the customer service representative and said that he could not
                            arrive at the office to surrender the bill of lading that day. Instead he would fax (yes that
                            long ago) the front and back of the bill to get the release, and subsequently be in the office
                            the very next day to deliver the original bill of lading as required. The carrier acted in
                            accordance and the importer was in the office the next day to deliver the bill of lading as
                            promised.</p>
                        <hr>
                        <div class="author-profile">
                            <img src="{{ asset('assets/user/img/detail/author-img.jpg') }}" alt="">
                            <div class="author-info">
                                <h6>Harvert Milan</h6>
                                <p>While publishing our article in a journal, to claim it as our article, where should
                                    be our name in the authors list, the first name</p>

                            </div>
                        </div>
                        <hr>

                        
                    </div>
                    <div class="comments-form">
                        <h3>Leave A Reply</h3>
                        <p>Your email address will not be published. Required fiels are marked</p>
                        <div class="row">
                            <div class="col-lg-12">
                                <textarea name="message" id="message" cols="30" rows="10"
                                    placeholder="Write Your Comment"></textarea>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" placeholder="Email here" autocomplete="off">
                            </div>
                            <div class="col-lg-12 mt-3">
                                <a href="#" class="main-btn primary">Post Comment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-search">
                        <div class="search-form">
                            <form action="https://capricorn-theme.com/html/xperia/blog.html">
                                <input type="search" placeholder="Search here">
                            </form>
                        </div>
                        <div class="search-icon">
                            <i class="las la-search"></i>
                        </div>
                    </div>
                    <div class="blog-category">
                        <h5>Categories</h5>
                        <a class="active" href="#">Door to Door (8)</a>
                        <a href="#">Express (6)</a>
                        <a href="#">Pallet (4)</a>
                        <a href="#">International (5)</a>
                        <a href="#">Warehousing (2)</a>
                    </div>
                    <div class="recent-post">
                        <h5>Recent Post</h5>
                        <img src="{{ asset('assets/user/img/detail/recent-post-bg-1.jpg') }}" alt="">
                        <div class="single-recent-post">
                            <h6>E-commerce on Freight Forwarding and Logistics</h6>
                            <p class="blog-date">Jan 21, 2024</p>
                        </div>
                       
                    </div>
                    <div class="archive">
                        <h5>Archive</h5>
                        <a class="active" href="#">Air Freight (25)</a>
                        <a href="#">Ocean Freight (18)</a>
                        <a href="#">Ground Freight (32)</a>
                        <a href="#"> Train Freight (13)</a>
                        <a href="#">Storage Solution (04)</a>
                    </div>
                    <div class="popular-tag">
                        <h5>Popular Tags</h5>
                        <span class="active"><a href="#">freight</a></span>
                        <span><a href="#">express</a></span>
                        <span><a href="#">courier</a></span>
                        <span><a href="#">delivery</a></span>
                        <span><a href="#">cargo</a></span>
                        <span><a href="#">transport</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection