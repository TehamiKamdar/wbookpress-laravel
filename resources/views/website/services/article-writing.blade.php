@extends('layouts.web.layout')

@section('title')
Services | Article Writing
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
            <li class="breadcrumb-item active" aria-current="page">Article Writing</li>
          </ol>
        </nav>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Get expert articles that engage & deliver results </h1>
            <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Don’t spend hours writing articles with weak openings and messy structure. NextGen Publishing just needs an idea to turn it into an article that builds authority & saves you time. </p>
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
              src="{{ asset('assets/img/services/31.webp') }}"
              alt="Book Writing Process" class="img-fluid service-img">
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="service-content">
              <div class="service-header">
                <div class="service-icon-box">
                  <i class="ri-pencil-line"></i>
                </div>
                <h2 class="service-title">Why DIY Articles Fail to Move the Needle </h2>
              </div>

              <p>Writing is a task of tedious research, focus and how to put your words in a compelling way. But for busy professionals like you, it can take tremendous amounts of time and pain to get an article written. But writing alone isn't enough. </p>

              <p>Amateur articles miss the invisible architecture that separates viral content from ignored posts. They often have no hook strategy, weak structure, and zero understanding of how readers actually consume information online.  </p>

              <p>Your opening paragraph either grabs throats or gets ignored completely. That's why at NextGen Publishing, our separate team of writers will make sure your article is written in a way that's compelling, builds your authority and completes your goal.  </p>

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
              src="{{ asset('assets/img/services/32.webp') }}"
              alt="Genre Specialization" class="img-fluid service-img">
          </div>
          <div class="col-lg-6" data-aos="fade-right">
            <div class="service-content">
              <div class="service-header">
                <div class="service-icon-box">
                  <i class="ri-book-open-line"></i>
                </div>
                <h2 class="service-title">Benefits of Choosing Our Article Writing Services </h2>
              </div>
              <p>NextGen Publishing has a separate team of writers who've been writing for years. We take as much time to research to make sure your article will look like it's written by you as an expert, whether it's doing academic research, looking into study articles or even reading books.  </p>

              <p>You can save time as an author or business owner. We write the article exactly as you imagined in your voice, so you stay focused on what's important to you.</p>

              <p>If you need articles focused on SEO as well, then we have a large team including SEOs who'll make sure your content is optimised, gets discovered and ranks on search engines as well. You save time, get an expertly written article that will complete your goal, and not only that, you can save money with our affordable quotes as well. </p>

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
              src="{{ asset('assets/img/services/33.webp') }}"
              alt="Service Image 3" class="img-fluid service-img">
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="service-content">
              <div class="service-header">
                <div class="service-icon-box">
                  <i class="ri-team-line"></i>
                </div>
                <h2 class="service-title">Our Process Behind Writing Your Next Article </h2>
              </div>
              <p>After the discovery session and learning about your goals and voice. We research deeply, draft content outlines and search performance briefs that lock down killer headlines, compelling subpoints, SEO keywords that rank, target length, and engagement hooks. </p>

              <p>After the completion, you examine the article, give us feedback (we don't mind criticism), then we polish the article until you're satisfied with the tone and the overall article. </p>

              <p>We deliver you the ready-to-publish article, with formatting and everything, you just have to upload it.  </p>

              <button type="button" class="btn btn-hero-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Learn More <i class="ri-arrow-right-line"></i></button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection