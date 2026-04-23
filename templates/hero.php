<!-- Hero Section: Map-Driven with Glassmorphic Request Card -->
<section id="hero" class="relative w-full min-h-screen flex items-center overflow-hidden bg-slate-200">
    <!-- Map Background -->
    <div class="absolute inset-0 z-0 bg-[#031636]" style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.15) 1px, transparent 0); background-size: 40px 40px;">
        <div class="absolute top-1/2 left-2/3 w-6 h-6 bg-red-500 rounded-full animate-ping opacity-75 provider-marker"></div>
        <div class="absolute top-1/2 left-2/3 w-6 h-6 bg-red-600 rounded-full border-2 border-white"></div>
    </div>

    <div class="container mx-auto px-6 z-10">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-3/5 bg-white/85 backdrop-blur-20 p-12 rounded-3xl shadow-[0_8px_32px_0_rgba(3,22,54,0.06)] transform -rotate-1 border border-white/20">
                <h1 class="font-manrope text-5xl md:text-6xl font-bold text-primary leading-tight mb-6 tracking-tight">
                    Stay Calm. <br/>Help is on the way.
                </h1>
                <p class="font-inter text-xl text-slate-600 mb-10 max-w-lg leading-relaxed">
                    Ghana's most reliable on-demand roadside assistance. Professional rescue, just one tap away.
                </p>
                
                <form action="api/subscribe.php" method="POST" class="flex flex-col sm:flex-row gap-4 mb-10">
                    <input type="text" name="website" class="hidden" style="display:none !important;" tabindex="-1" autocomplete="off">
                    <label for="email-hero" class="sr-only">Email Address</label>
                    <input type="email" id="email-hero" name="email" required placeholder="Enter your email" aria-label="Email address for early access waitlist" autocomplete="email" class="flex-1 px-6 py-4 bg-white/50 border border-primary/10 rounded-xl font-inter focus:ring-2 ring-secondary-container outline-none transition-all">
                    <button type="submit" class="px-10 py-4 bg-secondary-container text-primary font-bold rounded-xl shadow-lg hover:translate-y-[-4px] transition-all">
                        Join the Waitlist
                    </button>
                </form>

                <div class="flex items-center gap-4 opacity-80 hover:opacity-100 transition-opacity">
                    <a href="#" class="inline-block transition-transform hover:scale-105" aria-label="Download Roadmate on the App Store">
                        <svg class="h-10 w-auto" viewBox="0 0 135 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="135" height="40" rx="6" fill="black"/>
                            <path d="M21.134 11.025C21.134 11.025 21.326 9.388 22.378 8.432C23.468 7.439 24.898 6.96 24.898 6.96C24.898 6.96 23.364 6.83 22.102 7.747C20.89 8.625 20.316 10.159 20.316 10.159C20.316 10.159 20.124 11.632 21.134 11.025ZM20.124 12.308C18.669 13.264 16.717 13.111 15.684 14.183C14.612 15.293 14.65 17.551 15.531 18.814C16.488 20.191 18.669 19.923 20.124 18.966C21.659 17.933 21.467 15.752 21.467 15.752C21.467 15.752 21.582 11.312 20.124 12.308Z" fill="white"/>
                            <text x="42" y="18" fill="white" font-family="Arial, sans-serif" font-size="7">Download on the</text>
                            <text x="42" y="32" fill="white" font-family="Arial, sans-serif" font-weight="bold" font-size="14">App Store</text>
                        </svg>
                    </a>
                    <a href="#" class="inline-block transition-transform hover:scale-105" aria-label="Get Roadmate on Google Play">
                        <svg class="h-10 w-auto" viewBox="0 0 135 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="135" height="40" rx="6" fill="black"/>
                            <path d="M16.5 10L16.5 30L31.5 20L16.5 10Z" fill="#00E676"/>
                            <path d="M16.5 10L24 20L16.5 30L16.5 10Z" fill="#42A5F5"/>
                            <path d="M16.5 10L24 20L31.5 20L16.5 10Z" fill="#FFEB3B"/>
                            <path d="M16.5 30L24 20L31.5 20L16.5 30Z" fill="#FF5252"/>
                            <text x="42" y="18" fill="white" font-family="Arial, sans-serif" font-size="7">GET IT ON</text>
                            <text x="42" y="32" fill="white" font-family="Arial, sans-serif" font-weight="bold" font-size="14">Google Play</text>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="hidden lg:block lg:w-2/5">
                <!-- Floating Card Detail -->
                <div class="bg-primary p-8 rounded-3xl shadow-2xl text-white transform rotate-3 reveal-on-scroll">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center">
                            <div class="w-6 h-6 border-2 border-secondary-container rounded-full"></div>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-white/40 uppercase tracking-widest">Live Guardian</p>
                            <p class="font-bold">Samuel A. • 1.2km away</p>
                        </div>
                    </div>
                    <div class="h-1 bg-white/10 rounded-full overflow-hidden">
                        <div class="h-full bg-secondary-container w-2/3"></div>
                    </div>
                    <p class="text-xs text-white/60 mt-4 font-inter italic">"On my way with a heavy-duty tow truck. ETA 8 mins."</p>
                </div>
            </div>
        </div>
    </div>
</section>