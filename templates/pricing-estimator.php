<?php $pricing = json_decode(file_get_contents('data/pricing.json'), true); ?>
<section id="pricing" class="py-32 bg-slate-50">
    <div class="container mx-auto px-6 max-w-3xl">
        <div class="text-center mb-16">
            <h2 class="font-manrope text-4xl font-bold text-primary mb-4">Transparent, Upfront Pricing.</h2>
            <p class="text-slate-600 font-inter text-lg">No haggling on the side of the road. See what it costs before you request help.</p>
        </div>
        
        <div class="bg-white p-12 rounded-3xl shadow-[0_8px_32px_0_rgba(3,22,54,0.06)] reveal-on-scroll">
            <div class="grid md:grid-cols-2 gap-12">
                <div class="space-y-8">
                    <div>
                        <label for="service-select" class="block text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">Service Required</label>
                        <div class="relative">
                            <select id="service-select" class="w-full p-4 bg-slate-50 rounded-xl font-inter font-bold text-primary outline-none focus:ring-2 ring-primary/10 transition-all appearance-none cursor-pointer">
                                <?php foreach($pricing['base_prices'] as $item): ?>
                                <option value="<?= $item['base'] ?>"><?= $item['service'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-primary/40">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="vehicle-select" class="block text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">Vehicle Type</label>
                        <div class="relative">
                            <select id="vehicle-select" class="w-full p-4 bg-slate-50 rounded-xl font-inter font-bold text-primary outline-none focus:ring-2 ring-primary/10 transition-all appearance-none cursor-pointer">
                                <?php foreach($pricing['vehicle_multipliers'] as $type => $mult): ?>
                                <option value="<?= $mult ?>"><?= $type ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-primary/40">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-primary p-10 rounded-2xl flex flex-col justify-between text-white">
                    <div>
                        <p class="text-xs font-bold text-white/40 uppercase tracking-widest mb-1">Estimated Price</p>
                        <div class="text-4xl font-manrope font-bold text-secondary-container">GHS <span id="price-display">80</span></div>
                    </div>
                    <button class="w-full py-4 bg-secondary-container text-primary font-bold rounded-xl shadow-lg hover:scale-[1.02] transition-all">Calculate Estimate</button>
                    <p class="text-[10px] text-white/30 text-center uppercase tracking-widest mt-6">Estimates are subject to exact location and time.</p>
                </div>
            </div>
        </div>
    </div>
</section>