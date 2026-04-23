<section id="comparison" class="py-32 bg-white">
    <div class="container mx-auto px-6 max-w-4xl">
        <h2 class="font-manrope text-3xl font-bold text-[#031636] mb-12 text-center italic">The Roadmate Difference.</h2>
        <?php $comp = json_decode(file_get_contents('data/comparison.json'), true); ?>
        <div class="grid grid-cols-3 gap-1">
            <div class="p-6"></div>
            <div class="p-6 bg-[#031636] text-white rounded-t-2xl font-bold text-center">Roadmate</div>
            <div class="p-6 bg-slate-100 text-[#031636] rounded-t-2xl font-bold text-center">Others</div>
            <?php foreach($comp['rows'] as $row): ?>
            <div class="p-6 bg-slate-50 font-bold text-[#031636] flex items-center"><?= $row['label'] ?></div>
            <div class="p-6 bg-slate-100 text-center font-bold text-[#031636]"><?= $row['roadmate'] ?></div>
            <div class="p-6 bg-white text-center text-slate-400"><?= $row['others'] ?></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>