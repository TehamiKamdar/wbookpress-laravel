@extends('layouts.web.layout')

@section('title')
Services | Book Editing
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
            <li class="breadcrumb-item active" aria-current="page">Book Editing</li>
          </ol>
        </nav>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Your manuscript into a publish-ready e-book </h1>
            <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">A rough draft is just the beginning. Our experienced e-book editors will line and copy edit your manuscript to make it intriguing enough to keep the readers hooked  </p>
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
                <h2 class="service-title">How Do We Edit Your E-book for Success? </h2>
              </div>
              <p>The manuscript you’ve written needs more than proofreading. For authors for whom we delivered the work, their e-books were praised by readers, which resulted in positive reviews.  </p>

              <p>We first perform development editing on your manuscript to make sure the entire picture of the story is perfect. Then we perform line editing to ensure every sentence flows smoothly and has a greater impact on the reader and their emotions.  </p>

              <p>Then we hand your manuscript to our copy editing experts. They eradicate your script from every error that could break a reader's trust.  </p>
              <p>In the end, you get a guaranteed publish-ready manuscript that's free of errors, strong enough to immerse the readers with a higher chance of success. </p>
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
                <h2 class="service-title">Why Editing Matters for Your Manuscript? </h2>
              </div>
              <p>Because you’ve written your manuscript, you are too close to your own story and know it too well. This makes you blind to its flaws. Awkward sentences may feel normal to you, and you might not be able to notice plot gaps.  </p>

              <p>For example, the character's eye colour changes halfway through, and you won’t even notice it. This is why you need us. We are your experienced fresh eyes and can see what you cannot see.  </p>

              <p>We cut the repetition, fix the errors and find the missing pieces in your manuscript. And if you’re working with factual details, we check for accuracy and spot any continuity slips that might break your reader’s trust, so you’ll be worry-free and confident in publishing your e-book, completely error-free. </p>

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
                <h2 class="service-title">Why Choose NextGen Publishing for Your E-book Editing? </h2>
              </div>
              <p>NextGen Publishing’s professional editors have edited e-books for over five years, where we know what makes a chapter weak, what elements in the story make it interesting and so on.  </p>

              <p>But we keep our prices fair. You get top quality at reasonable prices. Plus, we work with you in a collaborative way so you are always in control.  </p>

              <p>We'll send you updates often, you'll see every draft and give feedback at every step while approving all changes, so you're satisfied at every step of the process.</p>
<p>This is your e-book. We just help you make it perfect. We find the errors you miss. We improve the flow, strengthen the story and make sure your e-book is ready for readers. Plus, if you need your e-book edited urgently, we can deliver it faster. </p>
              <button type="button" class="btn btn-hero-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Learn More <i class="ri-arrow-right-line"></i></button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection