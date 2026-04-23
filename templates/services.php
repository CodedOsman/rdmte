<section id="services" class="py-32 bg-[#FFFFFF]">
    <div class="container mx-auto px-6">
        <div class="mb-20 max-w-2xl">
            <h2 class="font-manrope text-4xl font-bold text-[#031636] mb-6">The Guardian Network.</h2>
            <p class="font-inter text-lg text-slate-500">Comprehensive roadside solutions tailored for the unique challenges of African roads.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-12">
            <?php 
            $services = json_decode(file_get_contents('data/services.json'), true);
            $iconMap = [
                'lightning' => 'M13 10V3L4 14h7v7l9-11h-7z',
                'shield-check' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                'clock' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'
            ];
            foreach($services as $i => $s): if(!$s['isFeatured']) continue; ?>
            <div class="p-10 rounded-3xl bg-slate-50 shadow-[0_8px_32px_0_rgba(3,22,54,0.06)] <?= $i % 2 == 0 ? 'mt-8' : '' ?> hover:translate-y-[-8px] transition-all duration-500 reveal-on-scroll">
                <div class="w-14 h-14 mb-8 bg-white rounded-2xl flex items-center justify-center shadow-sm">
                    <svg aria-hidden="true" class="w-7 h-7 text-[#031636]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="<?= $iconMap[$s['icon']] ?? 'M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z' ?>"></path>
                    </svg>
                </div>
                <h3 class="font-manrope text-2xl font-bold text-[#031636] mb-4"><?= $s['title'] ?></h3>
                <p class="font-inter text-slate-500 leading-relaxed"><?= $s['description'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>