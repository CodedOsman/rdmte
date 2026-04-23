<?php $coverage = json_decode(file_get_contents('data/coverage.json'), true); ?>
<section id="coverage" class="py-32 bg-white overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="font-manrope text-4xl font-bold text-primary mb-4">Operating Across Major Hubs.</h2>
            <p class="text-slate-600 font-inter text-lg max-w-2xl mx-auto">We are rapidly expanding our Guardian network to cover the most critical routes in the region.</p>
        </div>
        
        <div class="relative h-[600px] bg-primary/5 rounded-[40px] border border-primary/5 overflow-hidden reveal-on-scroll">
            <!-- Mock SVG Map Container -->
            <div class="absolute inset-0 flex items-center justify-center opacity-20">
                <div class="w-full h-full bg-slate-50" style="background-image: radial-gradient(circle at 2px 2px, rgba(3,22,54,0.15) 1px, transparent 0); background-size: 20px 20px;"></div>
            </div>
            
            <?php foreach($coverage as $city): ?>
            <div class="absolute group" style="left: <?= $city['coords']['x'] ?>%; top: <?= $city['coords']['y'] ?>%;">
                <div class="w-4 h-4 <?= $city['status'] == 'Active' ? 'bg-secondary-container' : 'bg-slate-300' ?> rounded-full animate-ping opacity-75"></div>
                <div class="absolute top-0 left-0 w-4 h-4 <?= $city['status'] == 'Active' ? 'bg-secondary-container' : 'bg-slate-400' ?> rounded-full border-2 border-white shadow-lg"></div>
                <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 bg-white px-3 py-1 rounded-lg shadow-xl opacity-0 group-hover:opacity-100 transition-all whitespace-nowrap">
                    <p class="text-xs font-bold text-primary"><?= $city['city'] ?> <span class="text-[10px] text-slate-400 font-normal"><?= $city['status'] ?></span></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>