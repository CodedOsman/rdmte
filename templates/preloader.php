<!-- Branded Preloader Overlay -->
<div id="preloader" class="fixed inset-0 z-[100] bg-primary flex items-center justify-center transition-opacity duration-700">
    <div class="flex flex-col items-center">
        <!-- Pulsing R Logo -->
        <div class="w-20 h-20 bg-secondary-container rounded-3xl flex items-center justify-center shadow-[0_0_50px_rgba(253,192,3,0.3)] animate-pulse">
            <svg class="w-12 h-12 text-primary" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 8C12 8 10 10 10 14V24H13V14C13 12 14 11 16 11C18 11 19 12 19 14V24H22V14C22 10 20 8 16 8Z" fill="currentColor"/>
            </svg>
        </div>
        <!-- Authority Text -->
        <div class="mt-8 text-white font-manrope font-bold text-xl tracking-[0.2em] uppercase opacity-50">
            Roadmate
        </div>
    </div>
</div>

<style>
    /* Prevent scrolling while loading */
    body.loading {
        overflow: hidden;
    }
</style>
