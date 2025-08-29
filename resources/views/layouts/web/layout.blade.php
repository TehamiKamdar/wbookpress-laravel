<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Next Gen Publishing | @yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.svg') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Remix Icons -->
    <link href="{{ asset('assets/lib/remixicons/remixicon.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- My Alert CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/myalert.css') }}">
    <!-- AOS CSS -->
    <link href="{{ asset('assets/lib/aos/aos.css') }}" rel="stylesheet">
    <!-- Fonts API -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/lib/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lib/owlcarousel/owl.theme.default.min.css') }}">
</head>
@yield('styles')

<body>
    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                {{-- <i class="ri-book-open-line"></i> Next Gen Publishing --}}
                <img src="{{ asset('assets/img/logo.png') }}" alt="Next Gen Logo" class="logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-menu" id="navbarContent">
                <button class="btn-close text-reset d-lg-none" type="button" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
                <div class="offcanvas-content">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('index') ? 'active' : '' }}"
                                href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link {{ Route::is('services.*') ? 'active' : '' }}" href="#"
                                id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                                <div class="row">
                                    <div class="col-md-4 dropdown-col">
                                        <h5 class="dropdown-header">
                                            <i class="ri-pencil-ruler-line"></i> Writing & Editing
                                        </h5>
                                        <a class="dropdown-item {{ Route::is('services.book-writing') ? 'active' : '' }}"
                                            href="{{ route('services.book-writing') }}">
                                            <i class="ri-arrow-right-s-line"></i> Book Writing
                                        </a>
                                        <a class="dropdown-item {{ Route::is('services.book-editing') ? 'active' : '' }}"
                                            href="{{ route('services.book-editing') }}">
                                            <i class="ri-arrow-right-s-line"></i> Book Editing
                                        </a>
                                        <a class="dropdown-item {{ Route::is('services.cover-design') ? 'active' : '' }}"
                                            href="{{ route('services.cover-design') }}">
                                            <i class="ri-arrow-right-s-line"></i> Cover Design
                                        </a>
                                    </div>
                                    <div class="col-md-4 dropdown-col">
                                        <h5 class="dropdown-header">
                                            <i class="ri-megaphone-line"></i> Publishing & Marketing
                                        </h5>
                                        <a class="dropdown-item {{ Route::is('services.illustration') ? 'active' : '' }}"
                                            href="{{ route('services.illustration') }}">
                                            <i class="ri-arrow-right-s-line"></i> Illustration
                                        </a>
                                        <a class="dropdown-item {{ Route::is('services.self-publishing') ? 'active' : '' }}"
                                            href="{{ route('services.self-publishing') }}">
                                            <i class="ri-arrow-right-s-line"></i> Self Publishing
                                        </a>
                                        <a class="dropdown-item {{ Route::is('services.book-marketing') ? 'active' : '' }}"
                                            href="{{ route('services.book-marketing') }}">
                                            <i class="ri-arrow-right-s-line"></i> Book Marketing
                                        </a>
                                        <a class="dropdown-item {{ Route::is('services.book-formatting') ? 'active' : '' }}"
                                            href="{{ route('services.book-formatting') }}">
                                            <i class="ri-arrow-right-s-line"></i> Book Formatting
                                        </a>
                                    </div>
                                    <div class="col-md-4 dropdown-col">
                                        <h5 class="dropdown-header">
                                            <i class="ri-global-line"></i> Digital Presence & Content
                                        </h5>
                                        <a class="dropdown-item {{ Route::is('services.author-website') ? 'active' : '' }}"
                                            href="{{ route('services.author-website') }}">
                                            <i class="ri-arrow-right-s-line"></i> Author Website
                                        </a>
                                        <a class="dropdown-item {{ Route::is('services.script-writing') ? 'active' : '' }}"
                                            href="{{ route('services.script-writing') }}">
                                            <i class="ri-arrow-right-s-line"></i> Script Writing
                                        </a>
                                        <a class="dropdown-item {{ Route::is('services.blog-writing') ? 'active' : '' }}"
                                            href="{{ route('services.blog-writing') }}">
                                            <i class="ri-arrow-right-s-line"></i> Blog Writing
                                        </a>
                                        <a class="dropdown-item {{ Route::is('services.article-writing') ? 'active' : '' }}"
                                            href="{{ route('services.article-writing') }}">
                                            <i class="ri-arrow-right-s-line"></i> Article Writing
                                        </a>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('about') ? 'active' : '' }}"
                                href="{{ route('about') }}">About
                                Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('contact') ? 'active' : '' }}"
                                href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>

                    <div class="d-flex d-lg-block mt-auto mt-lg-0">
                        <a href="#" class="btn btn-primary px-4 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Add this div just before the closing body tag -->
    <div class="offcanvas-backdrop fade"></div>

    @yield('content')




    <!-- Trusted Partners Section -->
    <section class="partners-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
                <h2>Our Trusted Partners</h2>
                <p>We collaborate with industry leaders and innovative brands to bring you the best content and reading
                    experience.</p>
            </div>

            <div class="partners-carousel" data-aos="fade-up" data-aos-duration="1000">
                <div class="carousel-track">
                    <!-- Partner 1 -->
                    <div class="partner-item" data-aos="zoom-in" data-aos-delay="100">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Medium_logo_Monogram.svg/1200px-Medium_logo_Monogram.svg.png"
                            alt="Medium" class="brand-partner">
                    </div>
                    <!-- Partner 2 -->
                    <div class="partner-item" data-aos="zoom-in" data-aos-delay="200">
                        <img src="https://static.cdnlogo.com/logos/d/56/dribbble-icon.svg" alt="Dribbble"
                            class="brand-partner">
                    </div>
                    <!-- Partner 3 -->
                    <div class="partner-item" data-aos="zoom-in" data-aos-delay="300">
                        <img src="https://cdn.worldvectorlogo.com/logos/forbes-2.svg" alt="Forbes"
                            class="brand-partner">
                    </div>
                    <!-- Partner 4 -->
                    <div class="partner-item" data-aos="zoom-in" data-aos-delay="400">
                        <img src="https://static.cdnlogo.com/logos/t/76/the-new-york-times.svg" alt="New York Times"
                            class="brand-partner">
                    </div>
                    <!-- Partner 5 -->
                    <div class="partner-item" data-aos="zoom-in" data-aos-delay="500">
                        <img src="https://static.cdnlogo.com/logos/p/74/penguin-books.svg" alt="Penguin Books"
                            class="brand-partner">
                    </div>
                    <!-- Partner 6 -->
                    <div class="partner-item" data-aos="zoom-in" data-aos-delay="600">
                        <img src="https://static.cdnlogo.com/logos/a/9/amazon-kindle.svg" alt="Kindle"
                            class="brand-partner">
                    </div>
                    <!-- Partner 7 -->
                    <div class="partner-item" data-aos="zoom-in" data-aos-delay="700">
                        <img src="https://static.cdnlogo.com/logos/a/14/audible.svg" alt="Audible"
                            class="brand-partner">
                    </div>
                </div>
            </div>

            <div class="divider" data-aos="fade-up"></div>

            <div class="owl-carousel owl-theme">
                <div class="testimonial">
                    <div class="testimonial-content">"Working with Next Gen Publishing has transformed our content
                        distribution.
                        Their
                        innovative approach and author-friendly policies make them an ideal partner for publishers and
                        writers
                        alike."</div>
                    <p class="testimonial-author">— Sarah Johnson, CEO of Penguin Books</p>
                </div>

                <div class="testimonial">
                    <div class="testimonial-content">"Next Gen Publishing gave my novel the global reach I dreamed of.
                        Their
                        tools
                        are
                        simple yet powerful."</div>
                    <p class="testimonial-author">— Daniel Carter, Author of *The Silent Sky*</p>
                </div>

                <div class="testimonial">
                    <div class="testimonial-content">"As a small publisher, we needed an affordable solution. Next Gen
                        Publishing
                        made
                        e-book publishing seamless and profitable."</div>
                    <p class="testimonial-author">— Priya Mehta, Founder of Lotus Reads</p>
                </div>

                <div class="testimonial">
                    <div class="testimonial-content">"The analytics dashboard is a game changer. With Next Gen
                        Publishing, I
                        finally
                        understand my readers better."</div>
                    <p class="testimonial-author">— Ahmed Khan, Independent Author</p>
                </div>

                <div class="testimonial">
                    <div class="testimonial-content">"Next Gen Publishing isn’t just a platform — it’s a supportive
                        community for
                        writers and publishers alike."</div>
                    <p class="testimonial-author">— Laura Martinez, Literary Agent</p>
                </div>

                <div class="testimonial">
                    <div class="testimonial-content">"Switching to Next Gen Publishing cut our distribution time in
                        half. Their
                        technology is ahead of the curve."</div>
                    <p class="testimonial-author">— Michael Roberts, Editor-in-Chief, BrightPage Publishing</p>
                </div>

                <div class="testimonial">
                    <div class="testimonial-content">"My students love accessing curated e-books through Next Gen
                        Publishing. It
                        has
                        made digital learning so much smoother."</div>
                    <p class="testimonial-author">— Dr. Emily Chen, Professor of Literature</p>
                </div>

                <div class="testimonial">
                    <div class="testimonial-content">"From manuscript upload to sales tracking, everything is effortless
                        with
                        Next Gen Publishing."</div>
                    <p class="testimonial-author">— Jonathan Lee, Self-Published Author</p>
                </div>

                <div class="testimonial">
                    <div class="testimonial-content">"The royalty transparency on Next Gen Publishing is unmatched. I
                        know
                        exactly
                        where my earnings come from."</div>
                    <p class="testimonial-author">— Sophia Williams, Poet</p>
                </div>

                <div class="testimonial">
                    <div class="testimonial-content">"Next Gen Publishing has redefined digital publishing for us. It’s
                        reliable,
                        fast, and author-first."</div>
                    <p class="testimonial-author">— Richard Allen, Publishing Director, Global Reads</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Books Section -->
    <section class="book-catalog">
        <div class="container">
            <div class="section-title">
                <h2>Browse Our Collection</h2>
                <p>Discover books from various genres to satisfy your reading needs</p>
            </div>

            <div class="category-filter">
                <button class="category-btn active" data-category="all">All Books</button>
                <button class="category-btn" data-category="fiction">Fiction</button>
                <button class="category-btn" data-category="non-fiction">Non-Fiction</button>
                <button class="category-btn" data-category="business">Business</button>
                <button class="category-btn" data-category="self-help">Self-Help</button>
                <button class="category-btn" data-category="technology">Technology</button>
            </div>

            <div class="books-grid">
                <!-- Book 1 -->
                <div class="book-card" data-category="fiction" data-aos="fade-up" data-aos-delay="100">
                    <div class="book-cover">
                        <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?auto=format&fit=crop&w=600&q=80"
                            alt="The Great Novel">
                        <span class="book-badge">Bestseller</span>
                    </div>
                </div>

                <!-- Book 2 -->
                <div class="book-card" data-category="non-fiction" data-aos="fade-up" data-aos-delay="200">
                    <div class="book-cover">
                        <img src="https://images.unsplash.com/photo-1532012197267-da84d127e765?auto=format&fit=crop&w=600&q=80"
                            alt="Deep History">
                        <span class="book-badge">New</span>
                    </div>
                </div>

                <!-- Book 3 -->
                <div class="book-card" data-category="business" data-aos="fade-up" data-aos-delay="300">
                    <div class="book-cover">
                        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&w=600&q=80"
                            alt="Startup Success">
                    </div>
                </div>

                <!-- Book 4 -->
                <div class="book-card" data-category="self-help" data-aos="fade-up" data-aos-delay="400">
                    <div class="book-cover">
                        <img src="https://images.unsplash.com/photo-1667408521317-bef962a97098?auto=format&fit=crop&w=435&q=80"
                            alt="Filosofi Teras">
                    </div>
                </div>

                <!-- Book 5 -->
                <div class="book-card" data-category="technology" data-aos="fade-up" data-aos-delay="500">
                    <div class="book-cover">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=600&q=80"
                            alt="Coding Mastery">
                        <span class="book-badge">Sale</span>
                    </div>
                </div>

                <!-- Book 6 -->
                <div class="book-card" data-category="fiction" data-aos="fade-up" data-aos-delay="600">
                    <div class="book-cover">
                        <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&w=600&q=80"
                            alt="Mystery of the Night">
                    </div>
                </div>

                <!-- Book 7 -->
                <div class="book-card" data-category="fiction" data-aos="fade-up" data-aos-delay="700">
                    <div class="book-cover">
                        <img src="https://images.unsplash.com/photo-1621351183012-e2f9972dd9bf?auto=format&fit=crop&w=435&q=80"
                            alt="The Two Towers">
                    </div>
                </div>

                <!-- Book 8 -->
                <div class="book-card" data-category="fiction" data-aos="fade-up" data-aos-delay="800">
                    <div class="book-cover">
                        <img src="https://images.unsplash.com/photo-1629992101753-56d196c8aabb?auto=format&fit=crop&w=390&q=80"
                            alt="The Chronicles of Narnia">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chatbot Container -->
    <div class="chatbot-container">
        <!-- Chat Window -->
        <div class="chat-window">
            <div class="chat-header">
                <h5>Customer Support</h5>
                <button class="close-btn">
                    <i class="ri-close-line"></i>
                </button>
            </div>
            <div class="chat-messages">
                <div class="bot-typing">
                    <span>Bot is typing</span>
                    <div class="typing-dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hidden Contact Form Template -->
        <div id="chatFormTemplate" style="display:none;">
            @include('include.form')
        </div>

        <!-- Chatbot Icon -->
        <div class="chatbot-icon">
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-white red-animation"
                id="badge">
                1
                <span class="visually-hidden">unread messages</span>
            </span>
            <i class="ri-chat-smile-3-line"></i>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade custom-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-lg modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <i class="ri-quill-pen-line"></i> Get in Touch
                    </h5>
                    <button type="button" class="bg-danger btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @include('include.form')
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Brand Details Section -->
                <div class="col-lg-4 col-md-6 footer-section">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="" class="brand-logo">
                    <div class="brand-info">
                        <p>Next Gen Publishing is a premier publishing platform helping authors transform their
                            manuscripts into
                            professionally published books. We provide end-to-end solutions from editing to
                            distribution.</p>
                        <p>Our mission is to empower writers and make publishing accessible to everyone.</p>
                    </div>
                    <div class="social-icons">
                        <a href="#"><i class="ri-facebook-fill"></i></a>
                        <a href="#"><i class="ri-twitter-fill"></i></a>
                        <a href="#"><i class="ri-instagram-line"></i></a>
                        <a href="#"><i class="ri-linkedin-fill"></i></a>
                        <a href="#"><i class="ri-youtube-line"></i></a>
                    </div>
                </div>

                <!-- Quick Links Section -->
                <div class="col-lg-2 col-md-6 footer-section">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="index.html"><i class="ri-arrow-right-s-line"></i> Home</a></li>
                        <li><a href="about.html"><i class="ri-arrow-right-s-line"></i> About Us</a></li>
                        <li><a href="book-writing.html"><i class="ri-arrow-right-s-line"></i> Services</a></li>
                        <li><a href="contact.html"><i class="ri-arrow-right-s-line"></i> Contact</a></li>
                    </ul>
                </div>

                <!-- More Links Section -->
                <div class="col-lg-2 col-md-6 footer-section">
                    <h4 class="footer-title">Our Services</h4>
                    <ul class="footer-links">
                        <li><a href="book-editing.html"><i class="ri-arrow-right-s-line"></i> Editing</a></li>
                        <li><a href="illustration.html"><i class="ri-arrow-right-s-line"></i> Design</a></li>
                        <li><a href="self-publishing.html"><i class="ri-arrow-right-s-line"></i> Publishing</a></li>
                        <li><a href="book-marketing.html"><i class="ri-arrow-right-s-line"></i> Marketing</a></li>
                    </ul>
                </div>

                <!-- Contact Form Section -->
                <div class="col-lg-4 col-md-6 footer-section">
                    <h4 class="footer-title">Get In Touch</h4>
                    @include('include.form')
                </div>
            </div>

            <!-- Copyright Section -->
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>&copy; 2023 Next Gen Publishing. All Rights Reserved. Designed with <i class="ri-heart-fill"
                                style="color: var(--primary-color);"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>

<script src="{{ asset('assets/lib/jquery/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/lib/aos/aos.js') }}"></script>
<script src="{{ asset('assets/js/myalert.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/lib/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script>
    $(document).on('submit', '#messageForm', function (e) {
        e.preventDefault();

        $.ajax({
            url: "{{ route('lead.store') }}",
            method: "POST",
            data: $(this).serialize(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                if (response.success) {
                    myAlert.success(response.message);
                    window.location.href = '/';
                }
            },
            error: function (xhr) {
                let errors = xhr.responseJSON.errors;
                $.each(errors, function (key, value) {
                    myAlert.error(value[0]); // error message dikhado
                });
            }
        });
    });


</script>
@yield('scripts')