<footer id="footer" class="bg-[#031636] py-32">
    <div class="container mx-auto px-6 text-center max-w-3xl">
        <h2 class="font-manrope text-5xl font-bold text-white mb-8 leading-tight">Secure Your Peace of Mind.</h2>
        <p class="font-inter text-slate-400 text-lg mb-12">Whether you're in a crisis now or preparing for the journey ahead, Roadmate is your silent guardian.</p>
        
        <form action="api/subscribe.php" method="POST" class="flex flex-col sm:flex-row gap-4 mb-16 max-w-md mx-auto">
            <input type="text" name="website" class="hidden" style="display:none !important;" tabindex="-1" autocomplete="off">
            <label for="email-footer" class="sr-only">Email Address</label>
            <input type="email" id="email-footer" name="email" required placeholder="Enter your email" aria-label="Email address for waitlist" autocomplete="email" class="flex-1 px-6 py-4 bg-white/10 border border-white/10 rounded-xl font-inter text-white focus:ring-2 ring-secondary-container outline-none transition-all">
            <button type="submit" class="px-10 py-4 bg-secondary-container text-primary font-bold rounded-xl shadow-[0_0_30px_rgba(253,192,3,0.3)] hover:scale-105 transition-all">
                Join Waitlist
            </button>
        </form>

        <div class="flex flex-col md:flex-row items-center justify-center gap-6">
            <a href="#" class="inline-block transition-transform hover:scale-105" aria-label="Download Roadmate on the App Store">
                <svg class="h-12 w-auto" viewBox="0 0 135 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="135" height="40" rx="6" fill="black" stroke="white" stroke-opacity="0.1"/>
                    <path d="M21.134 11.025C21.134 11.025 21.326 9.388 22.378 8.432C23.468 7.439 24.898 6.96 24.898 6.96C24.898 6.96 23.364 6.83 22.102 7.747C20.89 8.625 20.316 10.159 20.316 10.159C20.316 10.159 20.124 11.632 21.134 11.025ZM20.124 12.308C18.669 13.264 16.717 13.111 15.684 14.183C14.612 15.293 14.65 17.551 15.531 18.814C16.488 20.191 18.669 19.923 20.124 18.966C21.659 17.933 21.467 15.752 21.467 15.752C21.467 15.752 21.582 11.312 20.124 12.308Z" fill="white"/>
                    <text x="42" y="18" fill="white" font-family="Arial, sans-serif" font-size="7">Download on the</text>
                    <text x="42" y="32" fill="white" font-family="Arial, sans-serif" font-weight="bold" font-size="14">App Store</text>
                </svg>
            </a>
            <a href="#" class="inline-block transition-transform hover:scale-105" aria-label="Get Roadmate on Google Play">
                <svg class="h-12 w-auto" viewBox="0 0 135 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="135" height="40" rx="6" fill="black" stroke="white" stroke-opacity="0.1"/>
                    <path d="M16.5 10L16.5 30L31.5 20L16.5 10Z" fill="#00E676"/>
                    <path d="M16.5 10L24 20L16.5 30L16.5 10Z" fill="#42A5F5"/>
                    <path d="M16.5 10L24 20L31.5 20L16.5 10Z" fill="#FFEB3B"/>
                    <path d="M16.5 30L24 20L31.5 20L16.5 30Z" fill="#FF5252"/>
                    <text x="42" y="18" fill="white" font-family="Arial, sans-serif" font-size="7">GET IT ON</text>
                    <text x="42" y="32" fill="white" font-family="Arial, sans-serif" font-weight="bold" font-size="14">Google Play</text>
                </svg>
            </a>
            <button class="px-10 py-5 bg-transparent border-[2px] border-white/20 text-white font-bold rounded-xl hover:bg-white/5 transition-all">
                Become a Provider
            </button>
        </div>

        <div class="mt-24 pt-12 border-t border-white/5 flex flex-col md:flex-row justify-between items-center text-slate-500 text-xs uppercase tracking-widest font-medium">
            <div class="flex flex-col md:items-start items-center">
                <p>&copy; <?php echo date('Y'); ?> Roadmate Assistance. Engineered for trust.</p>
                <div class="flex gap-6 mt-4">
                    <a href="privacy.php" class="hover:text-white transition-colors">Privacy</a>
                    <a href="terms.php" class="hover:text-white transition-colors">Terms</a>
                    <a href="mailto:contact@roadmate.app" class="hover:text-white transition-colors">Contact</a>
                </div>
            </div>
            
            <div class="flex gap-8 mt-12 md:mt-0">
                <!-- X / Twitter -->
                <a href="#" class="text-slate-500 hover:text-white transition-all transform hover:scale-110" aria-label="Roadmate on X">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M18.244 2.25h3.308l-7.227 7.717L22.875 21.75h-6.652l-5.207-6.793L5.035 21.75H1.725l7.737-8.27L1.125 2.25h6.822l4.706 6.136L18.244 2.25zM16.924 19.75h1.832L7.045 4.126H5.078L16.924 19.75z"></path>
                    </svg>
                </a>
                <!-- LinkedIn -->
                <a href="#" class="text-slate-500 hover:text-white transition-all transform hover:scale-110" aria-label="Roadmate on LinkedIn">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                    </svg>
                </a>
                <!-- Instagram -->
                <a href="#" class="text-slate-500 hover:text-white transition-all transform hover:scale-110" aria-label="Roadmate on Instagram">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.074 4.771 4.85.058 1.266.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.064 4.771-4.85 4.771-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.099-4.771-4.85-.058-1.266-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.064-4.771 4.85-4.771 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-5.838 2.435-5.838 5.838s2.435 5.838 5.838 5.838 5.838-2.435 5.838-5.838-2.435-5.838-5.838-5.838zm0 9.513c-2.03 0-3.675-1.645-3.675-3.675 0-2.03 1.645-3.675 3.675-3.675 2.03 0 3.675 1.645 3.675 3.675 0 2.03-1.645 3.675-3.675 3.675zm4.846-9.957c0-.73-.593-1.322-1.322-1.322-.73 0-1.322.593-1.322 1.322 0 .73.592 1.322 1.322 1.322.73 0 1.322-.592 1.322-1.322z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>