@extends('layouts.web.layout')

@section('title')
Services | Book Marketing
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
            <li class="breadcrumb-item active" aria-current="page">Book Marketing</li>
          </ol>
        </nav>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">E-book marketing to get sales ASAP </h1>
            <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Your book is competing with 11,000 new titles a day. NextGen Publishing gives you the cover, algorithm strategy & branding to rise above the noise. </p>
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
                <h2 class="service-title">Why Your Book Will Fail Without Proper Marketing </h2>
              </div>
              <p>Your brilliant book is drowning in an ocean of 4 million new titles published every year. That's 11,000 new books being added on Amazon daily. </p>

              <p>Being a great writer doesn't guarantee readers. Stephen King could publish anonymously tomorrow and sell 12 copies without marketing muscle behind it. </p>

              <p>Hope doesn't bring buyers, and it's not a strategy, and the algorithm doesn't care about your sleepless nights or perfect prose. It rewards books that generate clicks, reviews, and sales velocity in the first 72 hours. </p>
<p>You need a solid marketing strategy like NextGen Publishing experts to cut through the noise, get your book discovered, get buyers and great reviews. Every bestseller you've ever loved had marketing machinery working behind the scenes. </p>
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
                <h2 class="service-title">How We'll Market Your Book </h2>
              </div>
              <p>At NextGen Publishing, we design covers that stop the scroll. Every colour, font, and image choice targets your genre's buyers and makes the e-book look premium and readworthy.  </p>

              <p>Then we work on your Amazon account, focusing on strategic keyword placement and targeted category selection. We then optimise click-through rates and conversion funnels that turn lookers into purchasers. </p>

              <p>But Amazon's just the starting line. We build your author brand across social media, reader communities, and book blogs where your ideal readers actually hang out. BookTok, Goodreads, and genre-specific Facebook groups, we plant seeds everywhere and focus on long-term visibility and sales rather than just one week's sales. </p>

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
                <h2 class="service-title">Why NextGen Publishing Is Different </h2>
              </div>
              <p>We're not another self-publishing tutorial site, but battle-tested professionals who've spent five years in the publishing trenches with hundreds of authors who've enjoyed the results. </p>

              <p>While others guess, we use data with strategies that come from analysing what actually gets buyers for e-books, not just theories. </p>

              <p>Our designers aren't any normal freelancers but specialists who understand genre psychology and buying triggers. They know why romance covers need different colour schemes than thrillers. </p>
              <p>NextGen Publishing has worked and has expertise in the Amazon algorithm. When they change ranking factors, we adapt within 48 hours. Our clients continue to sell, while others scramble to figure out what happened. </p>
              <button type="button" class="btn btn-hero-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Learn More <i class="ri-arrow-right-line"></i></button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection