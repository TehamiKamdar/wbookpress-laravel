@extends('layouts.web.layout')

@section('content')
<div class="bp-contact">
    <!-- Hero Section -->
    <section class="bp-contact-hero">
        <div class="bp-background-container">
            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80"
                 alt="BookPress Contact Background" class="bp-background-image">
            <div class="bp-background-overlay"></div>
        </div>

        <div class="bp-content-container">
            <h1 class="bp-main-heading">Contact <span>W-BookPress</span></h1>
            <p class="bp-subheading">Send us a message and we'll get back to you soon</p>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="bp-contact-form-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bp-contact-form-container">
                        <h3 class="bp-form-heading">Send us a Message</h3>
                        <form>
                            <div class="bp-form-group">
                                <label for="name" class="bp-form-label">Your Name</label>
                                <input type="text" class="form-control bp-form-control" id="name" placeholder="Enter your full name" required>
                            </div>
                            <div class="bp-form-group">
                                <label for="email" class="bp-form-label">Email Address</label>
                                <input type="email" class="form-control bp-form-control" id="email" placeholder="Enter your email address" required>
                            </div>
                            <div class="bp-form-group">
                                <label for="phone" class="bp-form-label">Phone Number (Optional)</label>
                                <input type="tel" class="form-control bp-form-control" id="phone" placeholder="Enter your phone number">
                            </div>
                            <div class="bp-form-group">
                                <label for="message" class="bp-form-label">Message</label>
                                <textarea class="form-control bp-form-control" id="message" rows="5" placeholder="How can we help you?" required></textarea>
                            </div>
                            <button type="submit" class="bp-form-btn">
                                <i class="ri-send-plane-line"></i> Send Message
                            </button>
                        </form>

                        <div class="bp-form-footer">
                            <p>We typically respond to all inquiries within 24 hours</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   </div>
@endsection