@extends('layouts.web.layout')

@section('title')
Services | e-book Formatting
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
            <li class="breadcrumb-item active" aria-current="page">e-book Formatting</li>
          </ol>
        </nav>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Formatting Services To Make Your E-Book Unskippable </h1>
            <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Bad formatting ruins great books. The NextGen Publishing team will deliver a flawlessly formatted e-book that works on Kindle, Apple Books & more, so readers stay hooked and reviews stay glowing. Bad formatting ruins great books. The NextGen Publishing team will deliver a flawlessly formatted e-book that works on Kindle, Apple Books & more, so readers stay hooked and reviews stay glowing. </p>
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
                <h2 class="service-title">Why Wrong Formatting Can Ruin Your Book </h2>
              </div>
              <p>Sloppy formatting makes the book feel tacky more than typo issues. Readers judge your professionalism in the first 30 seconds of opening your book. </p>

              <p>One formatting glitch could trigger instant refund requests. Fonts that jump around. Line spacing that breaks mid-sentence. Kindle reflows that turn your careful prose into digital vomit. </p>

              <p>Your brilliant story never gets a fair shot when readers are wrestling with unreadable text. They hit "return" before finishing chapter one, and Amazon's algorithm notices those abandoned reads. </p>
              <p>Bad formatting also devastates your review scores before anyone judges your actual writing. You spent months and years writing the book, so don't let amateur formatting destroy it in minutes. </p>

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
                <h2 class="service-title">Benefits of Professional E-Book Formatting </h2>
              </div>
              <p>The best formatting is actually invisible. Readers don't notice it; they just stay immersed in your story. However, when margins shift, fonts break, or chapters glitch, it stands out immediately, and they can be hit with bad reviews and refunds.  </p>

              <p>Clean and professional formatting keeps readers hooked from first page to last, and they don't experience any frustrating issues of words jumping around here and there, whether they're reading on Kindle, Mobile Phone, Apple Books, Kobo, Printed Book and more.  </p>

              <p>Professional formatting builds subconscious authority: readers trust polished books, recommend them, and are more likely to buy them again. At NextGen Publishing, we make sure nothing distracts from your words. Your book flows, your audience stays, and your sales grow, and we format your e-book faster in case of any deadlines.  </p>

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
                <h2 class="service-title">How We Professionally Format Your E-Book </h2>
              </div>
              <p>The NextGen Publishing team has been formatting e-books for over five years. Novels, memoirs, business books, technical manuals, we've seen every genre's quirks and mastered them all. </p>

              <p>There are many technicalities when you're formatting your e-book alone, but we do it every day. We know those Kindle's picky algorithms, Apple Books' strict guidelines, Kobo's formatting rules and Google Play's requirements. </p>

              <p>We format once, format right and faster, and you won't tell us for emergency fixes after launch. And your readers won't complain about broken layouts. </p>
<p>Clean typography that doesn't hurt eyes. Clickable tables of contents that actually work. Images that stay put instead of floating into text disasters, we'll do it all.  </p>
              <button type="button" class="btn btn-hero-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Learn More <i class="ri-arrow-right-line"></i></button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection