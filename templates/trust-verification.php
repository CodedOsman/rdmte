<?php $trust = json_decode(file_get_contents('data/trust.json'), true); ?>
<section id="trust" class="py-32 bg-white overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center gap-24">
            <div class="lg:w-1/2">
                <h2 class="font-manrope text-4xl font-bold text-primary mb-8">Safety is not a feature. <br/>It's our foundation.</h2>
                <p class="text-slate-600 font-inter text-lg mb-12">Every Guardian on our network undergoes a rigorous vetting process before they are ever dispatched to you.</p>
                <button class="px-8 py-4 border-2 border-primary/10 text-primary font-bold rounded-xl hover:bg-primary/5 transition-all">Learn About Our Standards</button>
            </div>
            <div class="lg:w-1/2 relative">
                <div class="absolute inset-0 bg-primary/5 rounded-3xl -rotate-2"></div>
                <div class="relative bg-white/85 backdrop-blur-20 p-12 rounded-3xl shadow-[0_8px_32px_0_rgba(3,22,54,0.06)] border border-white/20">
                    <ul class="space-y-8">
                        <?php 
                        $iconMap = [
                            'Biometric Verification' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                            'Criminal Background Check' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                            'Vehicle & Equipment Audit' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4',
                            'Quality Score Monitoring' => 'M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z'
                        ];
                        foreach($trust['vetting_process'] as $item): ?>
                        <li class="flex gap-6 reveal-on-scroll">
                            <div class="w-12 h-12 bg-secondary-container/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg aria-hidden="true" class="w-6 h-6 text-secondary-container" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="<?= $iconMap[$item['title']] ?? 'M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z' ?>"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-manrope text-xl font-bold text-primary mb-1"><?= $item['title'] ?></h4>
                                <p class="text-slate-500 font-inter text-sm"><?= $item['description'] ?></p>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>