<!-- Real-Time Tracking Mock -->
<section id="tracking" class="py-32 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-1/2">
                <h2 class="font-manrope text-4xl font-bold text-primary mb-6">Zero Guesswork. <br/>Total Visibility.</h2>
                <p class="text-slate-600 font-inter text-lg mb-8">Watch your rescuer arrive in real-time. Know exactly who is coming and when they'll be there.</p>
                <div class="space-y-4">
                    <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-xl">
                        <div class="w-2 h-2 bg-secondary-container rounded-full animate-ping"></div>
                        <span class="font-inter font-bold text-primary eta-value">Calculating ETA...</span>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 relative h-[400px] w-full rounded-3xl overflow-hidden shadow-2xl">
                 <div class="absolute inset-0 bg-slate-100" style="background-image: radial-gradient(circle at 2px 2px, rgba(3,22,54,0.1) 1px, transparent 0); background-size: 24px 24px;"></div>
                 <!-- Live Marker Mock -->
                 <div class="absolute top-1/2 left-2/3 w-8 h-8 bg-secondary-container rounded-full shadow-lg flex items-center justify-center provider-marker border-2 border-white z-10 transition-all duration-100">
                     <div class="w-3 h-3 bg-primary rounded-full"></div>
                 </div>
                 <!-- User Location -->
                 <div class="absolute top-1/2 left-1/2 w-4 h-4 bg-blue-500 rounded-full border-2 border-white z-0"></div>
                 <!-- Glassmorphic Status Overlay -->
                 <div class="absolute bottom-6 left-6 bg-white/85 backdrop-blur-20 p-6 rounded-2xl shadow-lg border border-white/20">
                     <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Coming Now</p>
                     <p class="font-bold text-primary">Samuel A. • Towing</p>
                 </div>
            </div>
        </div>
    </div>
</section>