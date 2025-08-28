@extends('layouts.web.layout')

@section('title')
About
@endsection

@section('content')

  <section class="bp-about-hero">
    <div class="bp-background-container">
      <img
        src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80"
        alt="BookPress About Us Background" class="bp-background-image">
      <div class="bp-background-overlay"></div>
    </div>

    <div class="bp-content-container">
      <h1 class="bp-main-heading">About <span>Next Gen Publishing</span></h1>
      <p class="bp-description">
        For over a decade, we've been helping authors transform their ideas into published masterpieces.
        Our team of experienced writers, editors, and designers are passionate about bringing stories to life.
        We believe every author has a unique voice that deserves to be heard.
      </p>
      <a href="#about" class="btn btn-hero-primary">
        <i class="ri-book-open-line"></i> Our Story
      </a>
    </div>
  </section>

  <section class="bp-about" id="about">
    <div class="bp-container">
      <h2 class="bp-section-title" data-aos="fade-up">About Next Gen Publishing</h2>

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
          <h3 class="bp-heading">Transforming Ideas Into Published Masterpieces</h3>
          <p class="bp-description">
            At BookPress, we believe every author has a unique voice waiting to be heard.
            Since 2010, we've helped thousands of writers transform their ideas into professionally
            published books that captivate readers and stand out in the marketplace.
          </p>
          <p class="bp-description">
            Our team of experienced editors, designers, and publishing consultants work
            collaboratively with you to ensure your vision becomes reality. From initial
            concept to finished book, we provide the guidance and expertise needed to
            navigate the complex world of publishing.
          </p>

          <ul class="bp-feature-list">
            <li>Comprehensive book writing and editing services</li>
            <li>Professional cover design and typesetting</li>
            <li>Author website development and marketing</li>
            <li>Traditional and self-publishing guidance</li>
          </ul>

          <a href="#" class="btn btn-hero-primary">Discover Our Services</a>
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