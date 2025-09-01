@extends('layouts.web.layout')

@section('title')
Home
@endsection

@section('content')

    <!-- Hero Section -->
    <section class="hero-section">
        <!-- Animated Shapes -->
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4"></div>
        <div class="shape shape-5"></div>
        <div class="shape shape-6"></div>
        <div class="shape shape-7"></div>
        <div class="shape shape-8"></div>
        <div class="shape shape-9"></div>
        <div class="shape shape-10"></div>

        <div class="container">
            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-lg-8 hero-content" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="hero-heading">
                        We’ll turn your <span>ideas</span> into a successful book
                    </h1>
                    <p class="hero-subheading" data-aos="fade-up" data-aos-delay="200">
                        We’ve helped hundreds of authors just like you to turn their ideas into successful books, even if you
                        don't enjoy writing. We write, edit and publish your book in your voice, your style, with a guarantee,
                        and you get 100% credit for life with no royalty attached.
                    </p>

                    <div class="hero-buttons" data-aos="zoom-in" data-aos-delay="400">
                        <button class="btn btn-hero-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="ri-book-open-line"></i> Get Your Book
                        </button>
                        <button class="btn btn-hero-secondary" onclick="document.querySelector('.chat-window').classList.add('active');document.querySelector('#badge').classList.add('d-none');">
                            <i class="ri-information-line"></i> Chat with us
                        </button>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="col-lg-4" data-aos="fade-left" data-aos-duration="1000">
                    <div class="hero-image text-center">
                        <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=998&q=80"
                            alt="Writing and Publishing" class="img-fluid rounded-3"
                            style="box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3); max-height: 500px; width: auto;">
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="stats-container" data-aos="fade-up">
                <div class="row">
                    <div class="col-4 stat-item" data-aos="zoom-in" data-aos-delay="700">
                        <div class="stat-number">5K+</div>
                        <div class="stat-label">Books Published</div>
                    </div>
                    <div class="col-4 stat-item" data-aos="zoom-in" data-aos-delay="900">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Satisfied Authors</div>
                    </div>
                    <div class="col-4 stat-item" data-aos="zoom-in" data-aos-delay="1100">
                        <div class="stat-number">24h</div>
                        <div class="stat-label">Publishing Time</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
                <h2>Our Publishing Services</h2>
                <p>We offer end-to-end solutions for authors and writers to bring their stories to life and reach readers
                    worldwide</p>
            </div>

            <div class="row">
                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-number">01</div>
                        <div class="service-icon">
                            <i class="ri-edit-box-line"></i>
                        </div>
                        <div class="service-content">
                            <h4>Manuscript Editing</h4>
                            <p>Professional editing services to refine your manuscript, including developmental editing,
                                copyediting, and proofreading to ensure your book is polished and ready for publication.</p>
                            <a href="#">Learn More <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-number">02</div>
                        <div class="service-icon">
                            <i class="ri-paint-brush-line"></i>
                        </div>
                        <div class="service-content">
                            <h4>Book Cover Design</h4>
                            <p>Captivating and professional book cover designs that grab attention and convey the essence of
                                your story. We create covers that stand out in both physical and digital marketplaces.</p>
                            <a href="#">Learn More <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-number">03</div>
                        <div class="service-icon">
                            <i class="ri-global-line"></i>
                        </div>
                        <div class="service-content">
                            <h4>Ebook Formatting</h4>
                            <p>Professional ebook formatting for all major platforms including Kindle, Apple Books, and
                                Kobo.
                                We ensure your ebook looks perfect on any device with responsive formatting.</p>
                            <a href="#">Learn More <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-number">04</div>
                        <div class="service-icon">
                            <i class="ri-printer-line"></i>
                        </div>
                        <div class="service-content">
                            <h4>Print Publishing</h4>
                            <p>High-quality print publishing services with options for paperback and hardcover editions. We
                                handle everything from interior layout to print-ready files for distribution.</p>
                            <a href="#">Learn More <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card">
                        <div class="service-number">05</div>
                        <div class="service-icon">
                            <i class="ri-line-chart-line"></i>
                        </div>
                        <div class="service-content">
                            <h4>Marketing & Promotion</h4>
                            <p>Comprehensive book marketing strategies including social media promotion, book launch
                                campaigns,
                                email marketing, and author website development to maximize your book's visibility.</p>
                            <a href="#">Learn More <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card">
                        <div class="service-number">06</div>
                        <div class="service-icon">
                            <i class="ri-store-line"></i>
                        </div>
                        <div class="service-content">
                            <h4>Distribution Services</h4>
                            <p>Global distribution network to get your book into online retailers, brick-and-mortar stores,
                                and
                                libraries worldwide. We handle ISBN registration and metadata management.</p>
                            <a href="#">Learn More <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Get Started Button -->
            <div class="get-started-btn" data-aos="zoom-in">
                <button class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Get Started <i class="ri-arrow-right-line"></i>
                </button>
            </div>
        </div>
    </section>

@endsection