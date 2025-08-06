<div class="container-fluid px-0" id="navbar">
            <div class="container-fluid px-0">
                <nav class="navbar navbar-expand-lg navbar-dark bg-white py-2 px-4">
                    <a href="{{ route('home') }}" class="navbar-brand p-0">
                        <h3 class="text-primary m-0" style="color:#f65e44 !important">
                            <img style="width:50px;height:50px" src="{{ asset('storage').'/'.optional($company)->logo }}" alt="Qiuck Route Delivery Services logo">
                            <span id="typing-animation" style="width: 183px;"></span>
                        </h3>

                        <script>

									// Initialize the typing animation
									let typingAnimationElement2 = document.getElementById('typing-animation');

                                    let company = "{{ $company->name ?? 'company Name' }}"
									// Create an array of typing text
									let typingTexts = [
										company
									];

									// Create a function to display the typing animation for a given text
									function playTypingAnimation(text) {
										// Loop through each character and add it to the element
										for (let i = 0; i < text.length; i++) {
											setTimeout(() => {
												typingAnimationElement2.textContent += text[i];
											}, i * 200); // Increase the delay to slow down the typing animation
										}

										// Once the animation is complete, reset the text and start over
										setTimeout(() => {
											typingAnimationElement2.textContent = '';
											playTypingAnimation(typingTexts[(typingTexts.indexOf(text) + 1) % typingTexts.length]);
										}, text.length * 200);
									}

									// Start the typing animation loop
									playTypingAnimation(typingTexts[0]);

						</script>

                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarCollapse">
                        <!-- ms-auto -->
                        <div class="navbar-nav py-0">
                            <a href="{{ route('home') }}" class="nav-item nav-link {{ ($page=='home') ? 'active' : "" }}">Home</a>
                            <a href="{{ route('about') }}" class="nav-item nav-link {{ ($page=='about') ? 'active' : "" }}">About</a>
                            
                            <div class="nav-item dropdown {{ ($page=='page') ? 'active' : "" }}">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0">
                                    <a href="{{ route('service') }}" class="dropdown-item">Service List</a>
                                    <a href="{{ route('team') }}" class="dropdown-item">Management</a>
                                    <!-- <a href="" class="dropdown-item">Testimonial</a> -->
                                    <a href="{{ route('fqa') }}" class="dropdown-item">FAQs</a>
                                    <a href="{{ route('pricing') }}" class="dropdown-item">Pricing</a>
                                    <!-- <a href="404.html" class="dropdown-item">404 Page</a> -->
                                </div>
                            </div>
                            <div class="nav-item dropdown {{ ($page=='service') ? 'active' : "" }}">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                                <div class="dropdown-menu m-0">
                                    @forelse($services as $service)
                                        <a href="{{ route('user.service',['name'=>$service->nav_name]) }}" class="dropdown-item">{{ $service->nav_name }}</a>
                                    @empty
                                        <p>No Page Found</p>
                                    @endforelse
                                    
                                    <!-- <a href="" class="dropdown-item">Express Courier</a>
                                    <a href="" class="dropdown-item">Over Night Courier</a> -->
                                </div>
                            </div>
                            <a href="{{ route('contact') }}" class="nav-item nav-link {{ ($page=='contact') ? 'active' : "" }}">Contact</a>
                        </div>
                        
                    </div>
                </nav>
            </div>
        </div>