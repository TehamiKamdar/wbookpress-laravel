@extends('layouts.web.layout')

@section('title')
Services | Cover Design
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
            <li class="breadcrumb-item active" aria-current="page">Cover Design</li>
          </ol>
        </nav>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Get a cover for your e-book that sells </h1>
            <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">For over five years, we've designed high-resolution e-book covers for 100s of authors that signal immediate credibility and attract more buyers in marketplaces  </p>
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
                <h2 class="service-title">Stop Losing Readers Because of the Cover </h2>
              </div>
              <p>Your reader makes a snap judgment in 7 seconds. That's it. Seven seconds looking at your cover decides if they buy or scroll past. </p>

              <p>But a professionally designed cover can boost your sales 30% to even 50%. The amateur one, on the other hand, doesn't make them trust your e-book. E-books with DIY covers with clipart fonts and stock photos ruin credibility while making it look cheap. Readers assume the writing inside isn't worth it.  </p>

              <p>NextGen Publishing experts have studied what's selling in your genre, and we know which colours trigger buying emotions. That's why you should get a professionally designed cover from experts, so your e-book won't be overlooked after all the hard work of writing and editing it. </p>

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
                <h2 class="service-title">Get Covers Backed by Research, Not Guesswork </h2>
              </div>
              <p>We guarantee you'll love your cover and so will your readers. If you don't like something, we'll revise it for free as many times as it takes until you're completely satisfied. </p>

              <p>We don't design e-book covers with guesswork. We research what makes readers buy in your exact genre. The fonts that signal "must-read." The colours that trigger desire before logic kicks in. </p>

              <p>Every design decision we've been making is deliberate. Plus, you get the files ready for every e-book platform, whether it's print-on-demand or social media ads. </p>
<p>You get high-resolution and perfectly sized files with no pixelated disasters when you upload to Amazon. Your cover will look expensive, professional and premium. </p>
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
                <h2 class="service-title">Design Process That You Control </h2>
              </div>
              <p>You stay in control at every step of the e-book cover design process. First, you talk to our design experts, not some random freelancer, but real professionals who understand what sells. You tell them your genre, audience and what your e-book's really about. </p>

              <p>Then we perform in-depth research in your genre. What's topping the charts in your category right now? What typography makes readers stop scrolling? </p>

              <p>Then you get concept samples based on this research. Don't like the first concept? Tell us exactly what to change, and we’ll revise. You review and then approve it, so you won't have any surprises at delivery.  </p>
<p>Most designers hand you their "vision" and hope you like it. We hand you market intelligence turned into visual selling power. </p>
              <button type="button" class="btn btn-hero-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Learn More <i class="ri-arrow-right-line"></i></button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection