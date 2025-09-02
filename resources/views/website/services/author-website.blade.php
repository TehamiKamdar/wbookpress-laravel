@extends('layouts.web.layout')

@section('title')
    Services | Author Website
@endsection

@section('content')
    <div class="service-page">
        <!-- Hero Banner -->
        <section class="service-hero">
            <div class="container">
                <nav aria-label="breadcrumb" class="service-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Author Website</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Stop Leaving Book Sales & Fans to Amazon </h1>
                        <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">LWe build you a website to increase your discovery, get more opportunities, help your fans know about your story achievements, and even help you sell your e-book </p>
                        <a href="#" class="btn btn-hero-primary btn-lg px-4" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-aos="fade-up" data-aos-delay="200">Get
                            Started Today</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Section 1 -->
        <section class="service-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="{{ asset('assets/img/services/22.webp') }}" alt="Service Image 1"
                            class="img-fluid service-img">
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="service-content">
                            <div class="service-header">
                                <div class="service-icon-box">
                                    <i class="ri-pencil-line"></i>
                                </div>
                                <h2 class="service-title">Why a professional website is crucial for authors </h2>
                            </div>
                            <p>Social media is good for getting more discovery, but it's not when your fans want to know more about you. Your fans, media contacts, industry professionals, and potential collaborators visit your website to learn more about you. No professional opportunities happen only through Amazon author pages.  </p>

                            <p>With your website, you can make more discoveries with SEO to bring readers from Google searches. Plus, you own your website, unlike Facebook or Instagram, which could ban your account. You can also sell signed copies, bonus content, and exclusive editions directly from your own website to earn all the profits. Why give Amazon 30% when readers can buy straight from you? </p>



                            <button type="button" class="btn btn-hero-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Learn More <i class="ri-arrow-right-line"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Section 2 -->
        <section class="service-section bg-light">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6" data-aos="fade-left">
                        <img src="{{ asset('assets/img/services/23.webp') }}" alt="Service Image 2"
                            class="img-fluid service-img">
                    </div>
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="service-content">
                            <div class="service-header">
                                <div class="service-icon-box">
                                    <i class="ri-book-open-line"></i>
                                </div>
                                <h2 class="service-title">Our Author Website Blueprint We’ll Use On Your Site </h2>
                            </div>
                            <p>We design your homepage to make the best ever impression within the second someone visits your website. We add your brand’s vibe in the design, clear navigation, and your bestselling titles front and centre so visitors know exactly who you are and what you write within 5 seconds. </p>

                            <p>We focus more on adding personal stories that connect, achievements that impress, and calls-to-action that guide visitors on what to do next. </p>

                            <p>With research and collaboration with you, we add high-res photos, interview availability, contact details and everything journalists and podcasters need to feature you. If you're ready, we'll add event calendars, book signings and webinar popups and banners to prove you're active and accessible. </p>

                            <button type="button" class="btn btn-hero-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Learn More <i class="ri-arrow-right-line"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Section 3 -->
        <section class="service-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="{{ asset('assets/img/services/24.webp') }}" alt="Service Image 3"
                            class="img-fluid service-img">
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="service-content">
                            <div class="service-header">
                                <div class="service-icon-box">
                                    <i class="ri-team-line"></i>
                                </div>
                                <h2 class="service-title">Our process for building your new website </h2>
                            </div>
                            <p>We jump on an initial call to know more about your brand, themes, target readers, voice, design expectations, and more.  </p>

                            <p>Then we hand it over to our UI/UX designers to research colours that match your genre and prepare some concept designs.  </p>

                            <p>After your approval, we continue to design your website and develop it with your preferred CMS, whether it's WordPress, Squarespace, or another. </p>

                            <p>We take care of the mobile-optimised for thumb-scrolling readers, ADA-compliant for accessibility, while giving you ongoing support that keeps your site fresh, whether you need edits for new book releases, event updates, and blog posts. We handle the technical stuff. At the same time, you stay focused on writing bestsellers. </p>
                            <button type="button" class="btn btn-hero-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Learn More <i class="ri-arrow-right-line"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection