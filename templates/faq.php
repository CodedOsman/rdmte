<?php $faqs = json_decode(file_get_contents('data/faq.json'), true); ?>
<section id="faq" class="py-32 bg-slate-50">
    <div class="container mx-auto px-6 max-w-4xl">
        <div class="text-center mb-24">
            <h2 class="font-manrope text-4xl font-bold text-primary mb-4">Frequently Asked Questions</h2>
            <p class="text-slate-600 font-inter text-lg">Everything you need to know about the Roadmate experience.</p>
        </div>
        
        <div class="space-y-4">
            <?php foreach($faqs as $i => $faq): ?>
            <div class="faq-item bg-white rounded-2xl overflow-hidden transition-all duration-500 reveal-on-scroll" style="transition-delay: <?= $i * 100 ?>ms;">
                <button class="faq-toggle w-full px-8 py-6 flex items-center justify-between text-left group">
                    <span class="font-manrope text-xl font-bold text-primary group-hover:text-primary/70 transition-colors"><?= $faq['question'] ?></span>
                    <div aria-hidden="true" class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center transition-all faq-icon">
                        <div class="w-4 h-4 border-r-2 border-b-2 border-primary rotate-45 mb-1"></div>
                    </div>
                </button>
                <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 bg-slate-50">
                    <div class="px-8 py-8 font-inter text-slate-600 leading-relaxed">
                        <?= $faq['answer'] ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>