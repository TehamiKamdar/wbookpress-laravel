<form id="messageForm" class="needs-validation" novalidate>
    @csrf
    <div class="mb-3">
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
        <div class="invalid-feedback">Please enter valid name.</div>
    </div>
    <div class="mb-3">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        <div class="invalid-feedback">Please enter valid email address.</div>
    </div>
    <div class="mb-3">
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
        <div class="invalid-feedback">Please enter valid phone number.</div>
    </div>
    <div class="mb-3">
        <textarea class="form-control" id="message" name="message" placeholder="Tell us about your project"></textarea>
    </div>
    <button type="submit" class="btn btn-footer"><i class="ri-send-plane-line"></i> Send Message</button>
</form>