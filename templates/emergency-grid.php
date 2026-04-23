<!-- Emergency Selection Grid Overlay -->
<div class="relative z-20 -mt-16 container mx-auto px-6">
    <div class="grid grid-cols-2 md:grid-cols-5 gap-6">
        <?php 
        $emergencies = [
            ['label' => 'Flat Tyre', 'icon' => 'M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6z'], 
            ['label' => 'Battery Jump', 'icon' => 'M7 2v3h10V2H7zm10 10h2v-2h-2V7h-2v3h-3v2h3v3h2v-3zM5 10h2v-2H5V7H3v3H0v2h3v3h2v-3z'], 
            ['label' => 'Fuel Delivery', 'icon' => 'M19.77 7.23l.01-.01-3.72-3.72L15 4.56l2.11 2.11c-.94.36-1.61 1.26-1.61 2.33 0 1.38 1.12 2.5 2.5 2.5.36 0 .69-.08 1-.21v7.21c0 .55-.45 1-1 1s-1-.45-1-1V14c0-1.1-.9-2-2-2h-1V5c0-1.1-.9-2-2-2H6c-1.1 0-2 .9-2 2v16h10v-7.5h1.5v7.5c0 1.38 1.12 2.5 2.5 2.5s2.5-1.12 2.5-2.5V9c0-.69-.28-1.32-.73-1.77zM12 10H6V5h6v5z'], 
            ['label' => 'Towing', 'icon' => 'M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM17 9.5h2.5l1.96 2.5H17V9.5z'], 
            ['label' => 'Key Retrieval', 'icon' => 'M12.65 10C11.83 7.67 9.61 6 7 6c-3.31 0-6 2.69-6 6s2.69 6 6 6c2.61 0 4.83-1.67 5.65-4H17v4h4v-4h2v-4H12.65zM7 14c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z']
        ];
        foreach($emergencies as $e): ?>
        <button class="flex flex-col items-center justify-center p-8 bg-white rounded-2xl shadow-[0_8px_32px_0_rgba(3,22,54,0.06)] hover:bg-[#031636] group transition-all duration-300 reveal-on-scroll">
            <div class="w-12 h-12 mb-4 bg-slate-100 rounded-full flex items-center justify-center group-hover:bg-[#1A2B4C]">
                <svg aria-hidden="true" class="w-6 h-6 text-[#031636] group-hover:text-white transition-colors" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="<?= $e['icon'] ?>"></path>
                </svg>
            </div>
            <span class="font-inter font-bold text-sm text-[#031636] group-hover:text-white uppercase tracking-wider"><?= $e['label'] ?></span>
        </button>
        <?php endforeach; ?>
    </div>
</div>