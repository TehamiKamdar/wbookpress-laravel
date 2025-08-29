$(document).ready(function () {
    // --- NEW: Off-Canvas Menu Logic ---
    const $navContent = $('#navbarContent');
    const $toggler = $('.navbar-toggler');
    const $closeBtn = $('.btn-close');
    const $backdrop = $('.offcanvas-backdrop');

    // Function to show/hide the menu and backdrop
    function toggleOffcanvas() {
        $navContent.toggleClass('show');
        $backdrop.toggleClass('show');
    }

    // Event listeners
    $toggler.on('click', toggleOffcanvas);
    $closeBtn.on('click', toggleOffcanvas);
    $backdrop.on('click', toggleOffcanvas);

    // Hide offcanvas if resizing to desktop
    $(window).on('resize', function () {
        if ($(window).width() > 992) {
            $navContent.removeClass('show');
            $backdrop.removeClass('show');
        }
    });

    // --- EXISTING: Carousel Logic ---
    const $track = $('.carousel-track');
    const $carousel = $('.partners-carousel');

    if ($carousel.length && $track.length) {
        $carousel.on('mouseenter', function () {
            $track.addClass('paused');
        }).on('mouseleave', function () {
            $track.removeClass('paused');
        });
    }

    // --- EXISTING: Book Filter Logic ---
    const $categoryButtons = $('.category-btn');
    const $bookCards = $('.book-card');

    $categoryButtons.on('click', function () {
        $categoryButtons.removeClass('active');
        $(this).addClass('active');

        const category = $(this).data('category');

        $bookCards.each(function () {
            const $card = $(this);
            if (category === 'all' || $card.data('category') === category) {
                $card.css('display', 'flex');
            } else {
                $card.css('display', 'none');
            }
        });
    });

    // --- EXISTING: Add to wishlist animation ---
    $('.btn-icon').on('click', function () {
        const $icon = $(this).find('i');
        if ($icon.hasClass('ri-heart-line')) {
            $icon.removeClass('ri-heart-line')
                .addClass('ri-heart-fill')
                .css('color', '#fd5656');
        } else {
            $icon.removeClass('ri-heart-fill')
                .addClass('ri-heart-line')
                .css('color', '');
        }
    });

    // --- EXISTING: Owl Carousel ---
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 3000,
        smartSpeed: 800,
        animateOut: 'fadeOut',
        animateIn: 'zoomIn'
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const dropdownToggles = document.querySelectorAll('.dropdown-hover .dropdown-toggle');
    const mediaQuery = window.matchMedia('(min-width: 992px)');

    function handleMediaQuery(e) {
        dropdownToggles.forEach(toggle => {
            if (e.matches) {
                // Desktop: remove click-related attributes
                toggle.removeAttribute('data-bs-toggle');
            } else {
                // Mobile: add click-related attributes
                toggle.setAttribute('data-bs-toggle', 'dropdown');
            }
        });
    }

    handleMediaQuery(mediaQuery);
    mediaQuery.addEventListener('change', handleMediaQuery);


    // ===== Rule Graph =====
    const RULES = {
        start: {
            message: "Hi! How can I help you today?",
            options: [
                { label: "Our Services", goto: "book" },
                { label: "Contact", goto: "editing" },
                { label: "Cover Design", goto: "design" },
                { label: "Contact", goto: "contact" }
            ]
        },
        book: {
            message: "We offer end-to-end book writing (outline → drafts → revisions). What would you like to see?",
            options: [
                { label: "Pricing", goto: "book_pricing" },
                { label: "Process", goto: "book_process" },
                { label: "Back", goto: "start" }
            ]
        },
        book_pricing: {
            message: "Typical projects start from $X depending on scope and timeline. Want to share your requirements?",
            options: [
                { label: "Share Requirements", goto: "lead_form" },
                { label: "Back", goto: "book" }
            ]
        },
        book_process: {
            message: "1) Discovery 2) Outline 3) Writing sprints 4) Revisions 5) Final delivery. What next?",
            options: [
                { label: "See Portfolio", goto: "portfolio" },
                { label: "Back", goto: "book" }
            ]
        },
        editing: {
            message: "We provide developmental, line, and copy editing. What do you need?",
            options: [
                { label: "Editing Pricing", goto: "edit_pricing" },
                { label: "Back", goto: "start" }
            ]
        },
        edit_pricing: {
            message: "Editing rates vary by manuscript length/quality. Share pages/word count & deadline?",
            options: [
                { label: "Share Requirements", goto: "lead_form" },
                { label: "Back", goto: "editing" }
            ]
        },
        design: {
            message: "We design covers for Kindle, paperback, and hardback with 2–3 concepts. What would you like?",
            options: [
                { label: "See Samples", goto: "portfolio" },
                { label: "Back", goto: "start" }
            ]
        },
        portfolio: {
            message: "Awesome! You can view samples on our Portfolio page. Anything else?",
            options: [
                { label: "Contact", goto: "contact" },
                { label: "Back to Start", goto: "start" }
            ]
        },
        contact: {
            message: "📮 Email: info@example.com | WhatsApp: +92-xxx | Or share your details below.",
            options: [
                { label: "Share Requirements", goto: "lead_form" },
                { label: "Back", goto: "start" }
            ]
        },
        lead_form: {
            message: "Please share your Name, Email, and a short project brief. Our team will reach out.",
            options: [
                { label: "Back to Start", goto: "start" }
            ]
        }
    };

    // ===== UI Elements =====
    const els = {
        launcher: document.querySelector('.chatbot-icon'),
        widget: document.querySelector('.chat-window'),
        body: document.querySelector('.chat-messages'),
        btnClose: document.querySelector('.close-btn'),
        suggWrap: null
    };

    // ===== Toggle =====
    els.launcher.addEventListener('click', () => {
        els.widget.classList.add('active');
    });
    els.btnClose.addEventListener('click', (e) => {
        e.stopPropagation();
        els.widget.classList.remove('active');
    });

    // ===== Helpers =====
    function scrollBottom() {
        els.body.scrollTop = els.body.scrollHeight;
    }
    function addMsg(text, who = 'bot') {
        const div = document.createElement('div');
        div.className = `message ${who}-message`;
        div.innerHTML = `<div>${text}</div><div class="timestamp">${new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })}</div>`;
        els.body.appendChild(div);
        scrollBottom();
    }
    function showTyping() {
        const wrap = document.createElement('div');
        wrap.className = 'bot-typing';
        wrap.innerHTML = `
        <span>Bot is typing</span>
        <div class="typing-dots"><span></span><span></span><span></span></div>`;
        els.body.appendChild(wrap);
        scrollBottom();
        return wrap;
    }

    // ===== Suggestions Renderer =====
    function renderOptions(options) {
        if (els.suggWrap) els.suggWrap.remove();

        els.suggWrap = document.createElement('div');
        els.suggWrap.className = 'suggestions';

        options.forEach(opt => {
            const b = document.createElement('button');
            b.className = 'chip';
            b.type = 'button';
            b.textContent = opt.label;
            b.addEventListener('click', () => handleChoice(opt));
            els.suggWrap.appendChild(b);
        });

        els.widget.appendChild(els.suggWrap);
    }

    // ===== Bot Flow =====
    function botStep(key) {
        const node = RULES[key];
        if (!node) return;

        const typer = showTyping();
        setTimeout(() => {
            typer.remove();
            addMsg(node.message, 'bot');
            if (node.options && node.options.length > 0) {
                renderOptions(node.options);
            }
        }, 600);
    }

    function handleChoice(opt) {
        addMsg(opt.label, 'user');
        botStep(opt.goto);
    }

    // ===== Start conversation =====
    botStep('start');

    function scrollToBottom() {
        const messages = $('.chat-messages');
        messages.scrollTop(messages[0].scrollHeight);
    }

    function sendMessage() {
        const input = $('.chat-input input');
        const message = input.val().trim();

        if (message !== '') {
            // Add user message (insert before typing indicator)
            const timestamp = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            $(`
            <div class="message user-message">
                <div>${message}</div>
                <div class="timestamp">${timestamp}</div>
            </div>
        `).insertBefore('.bot-typing');

            scrollToBottom();

            // Clear input
            input.val('');

            // Show bot is typing
            $('.bot-typing').show();
            scrollToBottom();

            // Simulate bot response after a delay
            setTimeout(function () {
                $('.bot-typing').hide();

                // Add bot response
                $(`
                <div class="message bot-message">
                    <div>Thanks for your message. This is a static demo. Real functionality would be implemented with JavaScript.</div>
                    <div class="timestamp">${new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })}</div>
                </div>
            `).insertBefore('.bot-typing');

                scrollToBottom();
            }, 1500);
        }
    }

    // Initially hide typing indicator
    $('.bot-typing').hide();

    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    });

    const forms = document.querySelectorAll('.needs-validation');
    forms.forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();

                form.querySelectorAll(':invalid').forEach(el => {
                    el.classList.add('animate__animated', 'animate__headShake');
                    setTimeout(() => el.classList.remove('animate__animated', 'animate__headShake'), 1000);
                });
            }
            form.classList.add('was-validated');
        }, false);
    });
});