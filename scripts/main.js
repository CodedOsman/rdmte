/**
 * Roadmate Main UI Controller
 */
const UIController = {
    init() {
        console.log("Roadmate Guardian Interface Active.");
        this.bindEvents();
        this.handleScroll();
        this.initCookieBanner();
        this.initTracking();
        this.dismissPreloader();
    },

    dismissPreloader() {
        const preloader = document.getElementById('preloader');
        if (preloader) {
            window.addEventListener('load', () => {
                setTimeout(() => {
                    preloader.classList.add('opacity-0');
                    document.body.classList.remove('loading');
                    setTimeout(() => {
                        preloader.style.display = 'none';
                    }, 700);
                }, 800); // Small buffer for initial animations
            });
        }
    },

    initCookieBanner() {
        const banner = document.getElementById('cookie-banner');
        const acceptBtn = document.getElementById('accept-cookies');
        const declineBtn = document.getElementById('decline-cookies');

        if (banner && !localStorage.getItem('roadmate_cookie_consent')) {
            setTimeout(() => {
                banner.classList.remove('translate-y-full');
            }, 1000);
        }

        const hideBanner = (consent) => {
            localStorage.setItem('roadmate_cookie_consent', consent);
            banner.classList.add('translate-y-full');
        };

        if (acceptBtn) acceptBtn.addEventListener('click', () => hideBanner('accepted'));
        if (declineBtn) declineBtn.addEventListener('click', () => hideBanner('declined'));
    },

    // Lightweight Analytics Architecture
    initTracking() {
        window.roadmateEvents = window.roadmateEvents || [];
        this.track('page_view', { path: window.location.pathname });
    },

    track(eventName, params = {}) {
        const timestamp = new Date().toISOString();
        const eventData = { event: eventName, ...params, timestamp };
        window.roadmateEvents.push(eventData);
        
        // Console logging for dev verification
        if (window.location.hostname === 'localhost') {
            console.log(`[Analytics] ${eventName}:`, params);
        }

        // Integration point for GA4 / Meta Pixel
        if (window.dataLayer) {
            window.dataLayer.push(eventData);
        }
    },

    bindEvents() {
        // Mobile Menu Toggle
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuBars = document.getElementById('menu-icon-bars');
        const menuClose = document.getElementById('menu-icon-close');

        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', () => {
                const isHidden = mobileMenu.classList.contains('hidden');
                if (isHidden) {
                    mobileMenu.classList.remove('hidden');
                    menuBars.classList.add('hidden');
                    menuClose.classList.remove('hidden');
                } else {
                    mobileMenu.classList.add('hidden');
                    menuBars.classList.remove('hidden');
                    menuClose.classList.add('hidden');
                }
            });

            // Close menu on link click
            document.querySelectorAll('.mobile-link').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    menuBars.classList.remove('hidden');
                    menuClose.classList.add('hidden');
                });
            });
        }

        // Global CTA Handlers
        const ctas = document.querySelectorAll('button:not([type="submit"]), .mobile-link');
        ctas.forEach(cta => {
            cta.addEventListener('click', (e) => {
                const text = e.currentTarget.innerText.toLowerCase();
                if (text.includes('emergency')) {
                    this.handleEmergencyRequest();
                }
            });
        });

        // Global Form Handlers
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            if(form.getAttribute('action') && form.getAttribute('action').includes('subscribe.php')) {
                form.addEventListener('submit', (e) => {
                    e.preventDefault();
                    const button = form.querySelector('button[type="submit"]');
                    this.handleWaitlistSubmission(button, form);
                });
            }
        });

        // Real-time Email Validation
        const emailInputs = document.querySelectorAll('input[type="email"]');
        emailInputs.forEach(input => {
            input.addEventListener('input', (e) => {
                if (e.target.value && this.validateEmail(e.target.value)) {
                    input.classList.remove('ring-red-500', 'ring-secondary-container');
                    input.classList.add('ring-2', 'ring-green-500', 'bg-green-50/10');
                } else {
                    input.classList.remove('ring-green-500', 'bg-green-50/10');
                    if (e.target.value) {
                        input.classList.add('ring-2', 'ring-red-500');
                    } else {
                        input.classList.remove('ring-2', 'ring-red-500');
                    }
                }
            });
        });

        // Scroll Handlers
        window.addEventListener('scroll', () => this.handleScroll());

        // Scroll to Top Click
        const scrollTopBtn = document.getElementById('scroll-to-top');
        if (scrollTopBtn) {
            scrollTopBtn.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }
    },

    handleScroll() {
        this.handleHeaderScroll();
        
        // Scroll to top button visibility
        const scrollTopBtn = document.getElementById('scroll-to-top');
        if (scrollTopBtn) {
            if (window.scrollY > 500) {
                scrollTopBtn.classList.remove('translate-y-24', 'opacity-0');
                scrollTopBtn.classList.add('translate-y-0', 'opacity-100');
            } else {
                scrollTopBtn.classList.add('translate-y-24', 'opacity-0');
                scrollTopBtn.classList.remove('translate-y-0', 'opacity-100');
            }
        }
    },

    handleHeaderScroll() {
        const header = document.getElementById('main-header');
        if (header) {
            if (window.scrollY > 50) {
                header.classList.add('h-16', 'bg-white/95', 'shadow-md');
                header.classList.remove('h-20', 'bg-white/80');
            } else {
                header.classList.add('h-20', 'bg-white/80');
                header.classList.remove('h-16', 'bg-white/95', 'shadow-md');
            }
        }
    },

    async handleWaitlistSubmission(button, form) {
        const input = form.querySelector('input[type="email"]');
        const honeypot = form.querySelector('input[name="website"]');
        
        if (input && input.value && this.validateEmail(input.value)) {
            const email = input.value;
            const website = honeypot ? honeypot.value : '';
            button.disabled = true;
            input.disabled = true;
            const originalText = button.innerText;
            button.innerText = "Processing...";
            
            try {
                const formData = new FormData();
                formData.append('email', email);
                formData.append('website', website);
                formData.append('ajax', '1');

                const response = await fetch('api/subscribe.php', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();

                if (result.status === 'success') {
                    this.track('waitlist_success', { 
                        email_domain: email.split('@')[1],
                        location: button.closest('#hero') ? 'hero' : 'footer'
                    });
                    button.innerText = "Thank you! Email received. ✓";
                    button.classList.remove('bg-secondary-container', 'bg-primary');
                    button.classList.add('bg-green-500', 'text-white');
                    input.classList.add('bg-green-50', 'border-green-200');
                } else {
                    throw new Error(result.message);
                }
            } catch (error) {
                this.track('waitlist_error', { message: error.message });
                console.error("Subscription error:", error);
                button.disabled = false;
                input.disabled = false;
                button.innerText = originalText;
                input.classList.add('ring-2', 'ring-red-500');
                setTimeout(() => input.classList.remove('ring-2', 'ring-red-500'), 2000);
            }
        } else {
            this.track('waitlist_validation_fail');
            if (input) {
                input.classList.add('ring-2', 'ring-red-500');
                setTimeout(() => input.classList.remove('ring-2', 'ring-red-500'), 2000);
            }
        }
    },

    validateEmail(email) {
        return String(email)
            .toLowerCase()
            .match(
                /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            );
    },

    handleEmergencyRequest() {
        this.track('emergency_request_start');
        const heroCard = document.querySelector('#hero .bg-white\\/85');
        if (heroCard) {
            heroCard.innerHTML = `
                <div class="text-center py-12">
                    <div class="w-16 h-16 border-4 border-secondary-container border-t-transparent rounded-full animate-spin mx-auto mb-8"></div>
                    <h2 class="font-manrope text-2xl font-bold text-primary">Locating your Guardian...</h2>
                    <p class="font-inter text-slate-500 mt-4">Help is being dispatched to your exact coordinates.</p>
                </div>
            `;
            setTimeout(() => {
                this.track('emergency_request_scroll_to_tracking');
                const tracking = document.querySelector('#tracking');
                if (tracking) tracking.scrollIntoView({ behavior: 'smooth' });
            }, 2000);
        }
    }
};

document.addEventListener('DOMContentLoaded', () => UIController.init());
