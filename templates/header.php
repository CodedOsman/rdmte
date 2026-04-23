<!-- Sticky Glassmorphic Header -->
<header id="main-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-white/80 backdrop-blur-20 border-b border-slate-200/50">
    <div class="container mx-auto px-6 h-20 flex items-center justify-between">
        
        <!-- Logo -->
        <a href="#" class="flex items-center gap-3 group">
            <div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center shadow-lg group-hover:scale-105 transition-transform">
                <svg class="w-6 h-6" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 8C12 8 10 10 10 14V24H13V14C13 12 14 11 16 11C18 11 19 12 19 14V24H22V14C22 10 20 8 16 8Z" fill="#FDC003"/>
                </svg>
            </div>
            <span class="font-manrope font-bold text-xl text-primary tracking-tight">Roadmate</span>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center gap-8">
            <a href="#how-it-works" class="font-inter text-sm font-semibold text-slate-600 hover:text-primary transition-colors">How it Works</a>
            <a href="#services" class="font-inter text-sm font-semibold text-slate-600 hover:text-primary transition-colors">Services</a>
            <a href="#pricing" class="font-inter text-sm font-semibold text-slate-600 hover:text-primary transition-colors">Pricing</a>
            <a href="#faq" class="font-inter text-sm font-semibold text-slate-600 hover:text-primary transition-colors">FAQ</a>
        </nav>

        <!-- Desktop CTA -->
        <div class="hidden md:block">
            <a href="#footer" class="px-6 py-2.5 bg-primary text-white font-inter text-sm font-bold rounded-lg shadow-md hover:bg-primary-container transition-all">
                Join Waitlist
            </a>
        </div>

        <!-- Mobile Menu Toggle -->
        <button id="mobile-menu-btn" class="md:hidden p-2 text-primary focus:outline-none" aria-label="Toggle Navigation">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path id="menu-icon-bars" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                <path id="menu-icon-close" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

    </div>

    <!-- Mobile Navigation Dropdown -->
    <div id="mobile-menu" class="hidden bg-white border-b border-slate-100 shadow-xl absolute w-full left-0 top-20">
        <div class="flex flex-col px-6 py-4 space-y-4">
            <a href="#how-it-works" class="mobile-link font-inter font-semibold text-slate-600 text-lg py-2 border-b border-slate-50">How it Works</a>
            <a href="#services" class="mobile-link font-inter font-semibold text-slate-600 text-lg py-2 border-b border-slate-50">Services</a>
            <a href="#pricing" class="mobile-link font-inter font-semibold text-slate-600 text-lg py-2 border-b border-slate-50">Pricing</a>
            <a href="#faq" class="mobile-link font-inter font-semibold text-slate-600 text-lg py-2 border-b border-slate-50">FAQ</a>
            <a href="#footer" class="mobile-link text-center px-6 py-3 bg-secondary-container text-primary font-bold rounded-xl mt-4">Join Waitlist</a>
        </div>
    </div>
</header>
