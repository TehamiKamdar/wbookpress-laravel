<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>NextGen Publishing | @yield('title')</title>
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
                {{-- <i class="ri-book-open-line"></i> NextGen Publishing --}}
                <img src="{{ asset('assets/img/logo.png') }}" alt="NextGen Logo" class="logo">
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
                                            <i class="ri-arrow-right-s-line"></i> e-book Writing
                                        </a>
                                        <a class="dropdown-item {{ Route::is('services.book-editing') ? 'active' : '' }}"
                                            href="{{ route('services.book-editing') }}">
                                            <i class="ri-arrow-right-s-line"></i> e-book Editing
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
                                            <i class="ri-arrow-right-s-line"></i> e-book Marketing
                                        </a>
                                        <a class="dropdown-item {{ Route::is('services.book-formatting') ? 'active' : '' }}"
                                            href="{{ route('services.book-formatting') }}">
                                            <i class="ri-arrow-right-s-line"></i> e-book Formatting
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
                                href="{{ route('about') }}">About Us</a>
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
    <section class="partners-section {{ Route::is('contact') ? 'd-none' : '' }}">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
                <h2>See Why They Trust Us</h2>
                <p>Authors and partners trust us as we've delivered hundreds of popular e-books from just ideas   </p>
            </div>
            <div class="divider" data-aos="fade-up"></div>

            <div class="owl-carousel owl-theme">
                <div class="testimonial">
                    <div class="testimonial-content">"NextGen Publishing exactly wrote the E-book I had expectations for. The way they wrote was clear and really interesting"</div>
                    <p class="testimonial-author">— Noah R., Historical Fiction Author (London, UK) </p>
                </div>

                <div class="testimonial">
                    <div class="testimonial-content">"I had a messy pile of notes to write my eBook. Writers at NextGen Publishing were eager to listen and answered every question until they wrote and published my eBook, that's got many buyers"</div>
                    <p class="testimonial-author">— Mark Devonshire, Business Coach (Manchester, UK) </p>
                </div>

                <div class="testimonial">
                    <div class="testimonial-content">"Simply, I just loved the services of NextGen Publishing; they read minds. I just gave them some details about my E-book, and they made the exact same thing that was in my mind. It's mind-blowing."</div>
                    <p class="testimonial-author">— Jonathan Blake – Crime fiction author, (Manchester, Greater Manchester) </p>
                </div>

                <div class="testimonial">
                    <div class="testimonial-content">"It was my first time making a E-Book, and I tried NextGen Publishing for this work. I gave them the idea and my thoughts they made the E-Book novel that I needed. I couldn't expect that they would make such a professional E-Book."</div>
                    <p class="testimonial-author">— Charlotte Whitmore – contemporary romance novelist, (Bath, Somerset) </p>
                </div>

                <div class="testimonial">
                    <div class="testimonial-content">"How can anyone make a hook of the e-book like that? They made the hook of my E-book that's so catchy, I wanted to make it enjoyable to read in and NextGen Publishing has such professional writers who make my e-book catchy and enjoyable."</div>
                    <p class="testimonial-author">— Miles Ashbury – fantasy writer, (London, Greater London) </p>
                </div>


            </div>
        </div>
    </section>


    <!-- Our Books Section -->
    <section class="book-catalog {{ Route::is('contact') ? 'd-none' : '' }}">
        <div class="container">
            <div class="section-title">
                <h2>Browse Our Collection</h2>
                <p>Our successful e-books collection of hundreds of authors we've worked with.</p>
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
                    <p>NextGen Publishing is a professional team of expert e-book ghostwriters, cover designers, illustration artists and e-book marketers with decades of experience in writing e-books, designing covers and interior illustrations for hundreds of authors.
 </p>
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
                        <li><a href="{{ route('index') }}"><i class="ri-arrow-right-s-line"></i> Home</a></li>
                        <li><a href="{{ route('about') }}"><i class="ri-arrow-right-s-line"></i> About Us</a></li>
                        <li><a href="{{ route('services.book-writing') }}"><i class="ri-arrow-right-s-line"></i> Services</a></li>
                        <li><a href="{{ route('contact') }}"><i class="ri-arrow-right-s-line"></i> Contact</a></li>
                    </ul>
                </div>

                <!-- More Links Section -->
                <div class="col-lg-2 col-md-6 footer-section">
                    <h4 class="footer-title">Our Services</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('services.book-editing') }}"><i class="ri-arrow-right-s-line"></i> Editing</a></li>
                        <li><a href="{{ route('services.illustration') }}"><i class="ri-arrow-right-s-line"></i> Design</a></li>
                        <li><a href="{{ route('services.self-publishing') }}"><i class="ri-arrow-right-s-line"></i> Publishing</a></li>
                        <li><a href="{{ route('services.book-marketing') }}"><i class="ri-arrow-right-s-line"></i> Marketing</a></li>
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
                        <p>&copy; 2025 NextGen Publishing. All Rights Reserved. Designed with <i class="ri-heart-fill"
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