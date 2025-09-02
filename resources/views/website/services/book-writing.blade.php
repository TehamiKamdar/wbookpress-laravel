@extends('layouts.web.layout')

@section('title')
Services | e-book Writing
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
            <li class="breadcrumb-item active" aria-current="page">e-book Writing</li>
          </ol>
        </nav>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">E-book ghostwriters to write your masterpiece</h1>
            <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Your ideas become an e-book while you keep full ownership and credit. NextGen Publishing ghostwriters handle the writing for busy authors with complete confidentiality. </p>
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
                <h2 class="service-title">Why Writing Your E-book Alone Is A Disaster</h2>
              </div>
              <p>Writing alone seems normal, but it's also a disaster because over 90% of solo manuscripts die in digital graveyards and never get published.  </p>

              <p>Even if busy authors write a manuscript, they often have weak pacing, flat character arcs and zero market awareness.  </p>

              <p>Solo writers get trapped in endless "is this good enough?" loops. Uneven pacing, unresolved subplots and narrative dead zones make readers quit on chapter three. </p>
<p>Your favourite authors aren't writing alone. They use ghostwriting teams. Their names stay on covers, but experts shape the stories that hook millions of readers. </p>
<p>NextGen Publishing ghostwriters will write your e-book while adding expertise that makes it stick in readers' minds for weeks. </p>
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
                <h2 class="service-title">You Own Your E-Book And Rights With Us </h2>
              </div>
              <p>NextGen Publishing has a zero royalty policy. You pay once, own everything forever. There'll be no sneaky contracts or surprise fees. </p>

              <p>Your name goes on the cover, and we never get credit for it; that's what the ghostwriters are about. </p>

              <p>We sign iron-clad NDAs, which means everything from your ideas, conversations, and drafts is private and confidential. </p>
<p>If you need any changes, we give unlimited revisions and don't clock out until you're thrilled with every sentence. Most clients need 3-5 rounds; some need more than 10 changes. We make sure the e-book sounds like you and you're 100% satisfied with the outcome.  </p>
<p>While other writers disappear for months, we deliver quality manuscripts on schedule and always take the deadline seriously.  </p>
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
                <h2 class="service-title">How We'll Complete Your Best Book Soon </h2>
              </div>
              <p>First, you share your raw idea with our ghostwriting experts, and we dissect it and map out your entire book. Then we research what's currently working in your genre. </p>

              <p>Next, we start writing your masterpiece while keeping you in the driver's seat. Every two chapters, you review and steer the direction. </p>

              <p>As your book takes shape, we continue to fix pacing that drags, sharpen flat characters, and tighten themes until they resonate with your readers and you're completely satisfied, too. </p>
<p>When it's polished to perfection, you read the complete manuscript and give final approval. We transfer all rights to you, destroy our copies, and you walk away owning a professional-grade book that's ready to publish and get buyers. </p>
              <button type="button" class="btn btn-hero-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Learn More <i class="ri-arrow-right-line"></i></button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection