@extends('layouts.web.layout')

@section('title')
About
@endsection

@section('content')

  <section class="bp-about-hero">
    <div class="bp-background-container">
      <img
        src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80"
        alt="NextGen Publishing About Us Background" class="bp-background-image">
      <div class="bp-background-overlay"></div>
    </div>

    <div class="bp-content-container">
      <h1 class="bp-main-heading">About <span>NextGen Publishing</span></h1>
      <p class="bp-description">
        Books change lives. But writing one? That’s hard. We make it easy. With years of experience and a team of experts, we’ve already published over 5,000 books for hundreds of authors, and 98% of them love us. And we publish in 24 hours. Our story deserves this.
      </p>
      <a href="#about" class="btn btn-hero-primary">
        <i class="ri-book-open-line"></i> Our Story
      </a>
    </div>
  </section>

  <section class="bp-about" id="about">
    <div class="bp-container">
      <h2 class="bp-section-title" data-aos="fade-up">About NextGen Publishing</h2>

      <div class="bp-content-wrapper">
        <div class="bp-image-container" data-aos="fade-right">
          <img
            src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
            alt="BookPress Team" class="bp-main-img">
          <img
            src="https://images.unsplash.com/photo-1455390582262-044cdead277a?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
            alt="Book Writing" class="bp-floating-img bp-img-1">
          <img
            src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
            alt="Author Collaboration" class="bp-floating-img bp-img-2">
        </div>

        <div class="bp-text-container" data-aos="fade-left">
          <span class="bp-subtitle">Your Story, Our Expertise</span>
          <h3 class="bp-heading">Get your success-ready e-book with a one-time fee and no effort </h3>
          <p class="bp-description">
            Forget the overwhelming maze of writing, editing, proofreading, publishing and marketing.
          </p>
          <p class="bp-description">
            You can choose any of our services based on where you are in your e-book writing journey, or hand us the whole project to get it done faster, so you start getting sales for your new e-book.
          </p>
          <p class="bp-description">
           With over 5,000 books brought to life, we are the silent partner behind countless successful e-books that have sold thousands of copies.  </p>
          <p class="bp-description">
           Our meticulous process handles every detail, from a flawless edit to a cover that sells itself.  </p>
<p>Plus, we give you a dedicated manager to make sure your work is published lightning-fast and positioned for success, joining the 98% of authors thrilled with their finished masterpiece. </p>
          <ul class="bp-feature-list">
            <li>Success guaranteed editing & proofreading</li>
            <li>Cover Designs that sold thousands of copies </li>
            <li>Global distribution & marketing</li>
            <li>Custom author website to get more opportunities </li>
          </ul>

          <a href="#" class="btn btn-hero-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Become a successful author easily today</a>
        </div>
      </div>

      <div class="bp-stats-container" data-aos="fade-up">
        <div class="bp-stat" data-aos="zoom-in" data-aos-delay="700">
          <span class="bp-stat-number">5K+</span>
          <span class="bp-stat-text">Books Published</span>
        </div>
        <div class="bp-stat" data-aos="zoom-in" data-aos-delay="900">
          <span class="bp-stat-number">98%</span>
          <span class="bp-stat-text">Satisfied Authors</span>
        </div>
        <div class="bp-stat" data-aos="zoom-in" data-aos-delay="1100">
          <span class="bp-stat-number">24h</span>
          <span class="bp-stat-text">Publishing Time</span>
        </div>
      </div>
    </div>
  </section>
@endsection