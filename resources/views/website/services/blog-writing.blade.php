@extends('layouts.web.layout')

@section('title')
Services | Blog Writing
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
            <li class="breadcrumb-item active" aria-current="page">Blog Writing</li>
          </ol>
        </nav>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Save time and get results with our blog posts </h1>
            <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Busy authors and business owners can’t risk time and effort to write blogs that won’t get results. NextGen Publishing writes rank-worthy, client-winning content so you don’t have to </p>
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
                <h2 class="service-title">Why Amateur Blogging Doesn't Build Results </h2>
              </div>
              <p>Blog posts without an SEO strategy, a clear structure, or a strategic purpose disappear faster and give you zero results. You get zero clicks, zero retention, zero impact on your business. </p>

              <p>Inconsistent publishing also ruins the momentum before it starts. Post randomly for three months, then vanish for six weeks? Search engines notice that they neglect and bury your site. Additionally, weak introductions and fluff content neither rank nor convert. </p>

              <p>We at NextGen Publishing have been managing blog writing for years. Our team of writers are always improving to adapt to new search engine algorithms to rank your content. Not only that, we've been writing funnel blog posts for businesses to get many customers every month. </p>

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
                <h2 class="service-title">Why do you need our blog post writing services? </h2>
              </div>
              <p>The rank-worthy blog posts have strategic keyword incorporation that feels natural, informative and engaging in a way that readers keep reading while you promote your offer to convert them as well.   </p>

              <p>If you give us the entire blog content creation authority, we'll audit your site for on-page SEO, handle topic ideation for audience and ranking, research that adds depth, and writing that converts for you so you get results for your business without spending time writing blog posts that get you nowhere.  </p>

              <p>With the quality blog posts from the NextGen Publishing team, you'll gradually see improvement in your site's ranking and get more people to visit your website, whether you're a busy author or business owner.  </p>

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
                <h2 class="service-title">Fast blog post delivery process </h2>
              </div>
              <p>In our first consultation call, we ask you about your audience, business, brand voice nuances, and business goals to help us understand what kind of blog post you want. </p>

              <p>Want posts that sound exactly like you? Send us writing samples and we'll clone your tone so perfectly that readers think you wrote every word yourself. </p>

              <p>If you hire us for bulk content creation, we give a FREE site on-page SEO audit because great blogs need solid foundations to rank and convert. </p>
<p>We move on to doing SEO keyword research, research and then writing. When we deliver our work, we give clients 24 hours to check the blog post in their busy routine, so you're 100% satisfied. Most freelancers charge higher; we are a team of writers and SEOs who will work on your blog post.  </p>
              <button type="button" class="btn btn-hero-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Learn More <i class="ri-arrow-right-line"></i></button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection