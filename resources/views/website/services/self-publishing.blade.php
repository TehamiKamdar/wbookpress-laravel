@extends('layouts.web.layout')

@section('title')
Services | Self Publishing
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
            <li class="breadcrumb-item active" aria-current="page">Self Publishing</li>
          </ol>
        </nav>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Self-publish your e-book without the hard work  </h1>
            <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Doing things wrong when self-publishing can ruin your e-book’s visibility. We handle the tech so you focus on writing another one, and your e-book starts getting buyers </p>
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
                <h2 class="service-title">Why Self-Publishing Alone Isn’t Ideal</h2>
              </div>
              <p>Self-publishing sounds like freedom. But then you're suddenly wearing five hats at once, writer, designer, marketer, tech wizard, which is a big pressure for authors.  </p>

              <p>Your homemade cover feels amateur. Then comes the formatting nightmare. You upload your masterpiece, and the text goes messy. Margins shift. Spacing breaks.</p>

              <p>Furthermore, messing with ISBNs, category placement, and keyword strategy means your e-book disappears into the void because Amazon's algorithm doesn't forgive mistakes. </p>
<p>There are different formats, e-books need clean code, paperbacks demand precise margins, and hardcovers require a specialty setup. </p>
<p>Most self-published authors spend more time fighting technology than writing their next e-book. </p>
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
                <h2 class="service-title">How Our Self-Publishing Benefits You  </h2>
              </div>
              <p>If you choose NextGen Publishing for self-publishing your e-book, you keep the higher royalties. Traditional publishers take 85-90% of your earnings, while other self-publishing services might charge you half. We help you keep 80% or more.  </p>

              <p>We have no rights over your e-book. Your e-book stays yours, forever, with no sneaky contracts and no rights reversions. You wrote it, you own it.  </p>

              <p>With us, you set the price. Want to run a 99-cent promotion? Do it. Ready to charge a premium for your expertise? We'll make it happen.  </p>
              <p>Additionally, we handle the technical aspects, such as formatting, editing, and proofreading and even e-book cover and marketing if you opt for it, while you retain all the benefits that led you to choose self-publishing in the first place. </p>

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
                <h2 class="service-title">Our Simple & Fast Publishing Process </h2>
              </div>
              <p>You join a 45-minute call with our self-publishing specialist to discuss your e-book, timeline, and goals while answering all your questions.  </p>

              <p>Within 48 hours, you get your complete roadmap, including design mockups, ISBN strategy, and exact costs. Zero hidden fees or surprise charges later. </p>

              <p>You pick your launch date, and we'll project your potential earnings based on your genre and pricing strategy. </p>
<p>If you choose us for your e-book cover as well, we'll design a sell-worthy e-book cover and then format your e-book for every platform, testing it on real devices.</p>
             <p>We register your ISBNs under your name, launch your e-book on all platforms, and make sure it gets the maximum visibility from day one. We then monitor everything to ensure smooth discovery and zero technical hiccups. </p>
              <button type="button" class="btn btn-hero-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Learn More <i class="ri-arrow-right-line"></i></button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection