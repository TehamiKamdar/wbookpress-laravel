@extends('layouts.web.layout')

@section('title')
    Services | Script Writing
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
                        <li class="breadcrumb-item active" aria-current="page">Script Writing</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Get scripts that hook, persuade & win the
                            audience </h1>
                        <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">You don’t have to write a script with
                            hard work that won’t work. NextGen Publishing team will write a script with sharp loglines,
                            killer pacing that works </p>
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
                        <img src="{{ asset('assets/img/services/25.webp') }}" alt="Service Image 1"
                            class="img-fluid service-img">
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="service-content">
                            <div class="service-header">
                                <div class="service-icon-box">
                                    <i class="ri-pencil-line"></i>
                                </div>
                                <h2 class="service-title">Why Amateur Scripts Don’t Work </h2>
                            </div>
                            <p>Scripts aren't just stories with dialogue, but rather, they demand razor-sharp structure,
                                industry-standard formatting, and pacing that grips. </p>

                            <p>Your brilliant concept can die in development hell without structural expertise, with
                                dialogues that sound natural but read flat, scene transitions that confuse instead of
                                compelling, and formatting errors. </p>

                            <p>Whether you're planning to write screenplays, podcast segments, explained videos, or comic
                                dialogue, amateur mistakes can ruin your credibility. </p>
                            <p>At NextGen Publishing, our team knows more than writing well-read scripts. We make it
                                compelling enough so that viewers stay hooked through expert pacing, better dialogues, and
                                formatting.</p>
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
                        <img src="{{ asset('assets/img/services/26.webp') }}" alt="Service Image 2"
                            class="img-fluid service-img">
                    </div>
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="service-content">
                            <div class="service-header">
                                <div class="service-icon-box">
                                    <i class="ri-book-open-line"></i>
                                </div>
                                <h2 class="service-title">How we’ll help you write a compelling script </h2>
                            </div>
                            <p>Concept surgery comes first. We start with killer loglines, detailed treatments, and beat
                                sheets that lock your structure. Scene-by-scene outlines make sure every moment serves your
                                story's mission. </p>

                            <p>We even help you improve your story with suggestions like pacing adjustments, character arcs
                                that actually complete, while making sure there's clean grammar, perfect punctuation, and
                                presentation so polished that readers focus on your story, not formatting fumbles. </p>

                            <p>We edit your script so it cuts straight to what matters through highlighting your strengths,
                                identifying weak spots and more. So, from raw concept to production-ready script, we handle
                                every technical detail for you. </p>

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
                        <img src="{{ asset('assets/img/services/27.webp') }}" alt="Service Image 3"
                            class="img-fluid service-img">
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="service-content">
                            <div class="service-header">
                                <div class="service-icon-box">
                                    <i class="ri-team-line"></i>
                                </div>
                                <h2 class="service-title">Our process to write a script that you 100% approve</h2>
                            </div>
                            <p>Starting from the discovery call, where we learn your intent, tone, target audience, and
                                creative vision, and you know more about your unique voice.</p>

                            <p>Then our years of experienced script writers start working on your script with structured
                                outlines, killer loglines, tight act breaks, and pacing that keeps audiences glued while you
                                approve every single line. </p>

                            <p>We add dialogues that crackle, action that flows, and every line serves your story's mission
                                with laser precision. After getting your feedback and final polish, you get a script that's
                                formatted to industry standards, proofread to perfection, and ready for pitch sessions,
                                content creation or recording studios. </p>

                            <button type="button" class="btn btn-hero-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Learn More <i class="ri-arrow-right-line"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection