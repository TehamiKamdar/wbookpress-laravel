@extends('layouts.web.layout')

@section('title')
Services | Illustration
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
            <li class="breadcrumb-item active" aria-current="page">Illustration</li>
          </ol>
        </nav>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Get illustrations That Sell Stories </h1>
            <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">From scroll-stopping covers to immersive interiors and comics, NextGen Publishing artists bring 5+ years of pro illustration expertise into art that hooks readers and drives sales </p>
            <a href="#" class="btn btn-hero-primary btn-lg px-4" data-bs-toggle="modal" data-bs-target="#exampleModal"
              data-aos="fade-up" data-aos-delay="200">Get
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
            <img
              src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
              alt="Book Writing Process" class="img-fluid service-img">
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="service-content">
              <div class="service-header">
                <div class="service-icon-box">
                  <i class="ri-pencil-line"></i>
                </div>
                <h2 class="service-title">Cover Illustrations That Look Good & Sell </h2>
              </div>
              <p>E-book browsers need visual shock within 0.3 seconds to stop and check out your book cover. The professional team at NextGen Publishing have mastered the genre-specific colour psychology that screams "romance" or "thriller" before readers even read your title. </p>

              <p>We design illustrations with a clean visual hierarchy to guide eyes exactly where they need to go. On top of that, we add scroll-stopping contrast that makes browsers pause mid-swipe so they check out your e-book. </p>

              <p>So, whether you are looking for illustrations for your next e-book cover in any genre or need comic book covers that exceed your expectations, we're not just any freelancers, but a whole team behind us who've been working with authors like you for over 5 years. </p>

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
            <img
              src="https://images.unsplash.com/photo-1455390582262-044cdead277a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
              alt="Genre Specialization" class="img-fluid service-img">
          </div>
          <div class="col-lg-6" data-aos="fade-right">
            <div class="service-content">
              <div class="service-header">
                <div class="service-icon-box">
                  <i class="ri-book-open-line"></i>
                </div>
                <h2 class="service-title">Interior Illustrations To Immerse Readers </h2>
              </div>
              <p>NextGen Publishing has a separate team of pro artists who have been working for over five years, drawing gorilla-level art that stops readers cold.</p>

<p>We first ask you questions about the story, then map narratives with rough sketches and detailed storyboards before touching the final artwork.</p>

<p>We've designed characters for hundreds of authors, with each face telling a story. Unique silhouettes, expressive features and bold ink to create cinematic drama. Thick action lines that show explosive movement. Dramatic shadows that build tension. Facial expressions are so raw they punch through the page.So, if you want your readers to not just read your comic but experience it, we have just the artists for that with price quotes that'll be affordable for you.</p>



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
            <img
              src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
              alt="Collaborative Process" class="img-fluid service-img">
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="service-content">
              <div class="service-header">
                <div class="service-icon-box">
                  <i class="ri-team-line"></i>
                </div>
                <h2 class="service-title">How We'll Illustrate Your Cover or Interior </h2>
              </div>
              <p>We start with understanding your story and expectation by having a call to learn deeply about your vision, tone, audience, and emotional beats you want readers to feel. </p>

              <p>Next, our artists create concept maps and mood boards that lock down your visual style and expectations while nailing genre cues that make readers click instantly. </p>

              <p>For authors needing comics and illustrated books, we design detailed storyboards, panel layouts that control pacing, and visual flow that guides eyes where they need to look at. </p>
<p>Once you approve the roadmap, we then finally design high-resolution, final artwork, whether you need an e-book cover, character designs, maps, action panels, or whatever your story demands, with a crystal-clear hierarchy and emotional punch. </p>
              <button type="button" class="btn btn-hero-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Learn More <i class="ri-arrow-right-line"></i></button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection