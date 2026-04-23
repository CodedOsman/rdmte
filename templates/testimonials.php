<section id="social" class="py-32 bg-[#DADADA]">
    <div class="container mx-auto px-6 overflow-hidden">
        <div class="text-center mb-24">
            <h2 class="font-manrope text-4xl font-bold text-[#031636] mb-4">Trusted in the Chaos.</h2>
            <p class="font-inter text-slate-500">4.9/5 Average Rating from over 10,000 rescues.</p>
        </div>
        <div class="relative h-[450px]">
            <?php 
            $testimonials = json_decode(file_get_contents('data/testimonials.json'), true);
            foreach($testimonials as $i => $t): ?>
            <div class="absolute <?= $i % 2 == 0 ? 'left-0' : 'right-0 top-32' ?> max-w-md p-10 bg-white rounded-3xl shadow-[0_8px_32px_0_rgba(3,22,54,0.06)] z-10 reveal-on-scroll transform <?= $i % 2 == 0 ? '-rotate-1' : 'rotate-2' ?>">
                <p class="font-inter italic text-lg text-slate-600 mb-6">"<?= $t['quote'] ?>"</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-slate-200 rounded-full mr-4" style="background-image: url('<?= $t['avatar_url'] ?>'); background-size: cover;"></div>
                    <div>
                        <h4 class="font-bold text-[#031636]"><?= $t['author'] ?></h4>
                        <p class="text-xs text-slate-400 uppercase tracking-widest"><?= $t['location'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>