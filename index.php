<!DOCTYPE html>
<html lang="en" class="scroll-smooth scroll-pt-24">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light">
    <meta name="theme-color" content="#031636">
    <link rel="manifest" href="site.webmanifest">
    <title>Roadmate | On-Demand Roadside Assistance & Recovery in Africa</title>
    <meta name="description" content="Instantly connect to verified roadside guardians near you. Professional towing, tyre changes, and battery jumps — one tap away.">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://roadmate.app/">
    <meta property="og:title" content="Roadmate | On-Demand Roadside Assistance">
    <meta property="og:description" content="Instantly connect to verified roadside guardians near you. Professional recovery simplified.">
    <meta property="og:image" content="assets/images/og-preview.svg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Roadmate | On-Demand Roadside Assistance">
    <meta property="twitter:description" content="Instantly connect to verified roadside guardians near you. Professional recovery simplified.">
    <meta property="twitter:image" content="assets/images/og-preview.svg">

    <link rel="icon" href="assets/icons/favicon.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <?php if (file_exists('styles.css')): ?>
    <link rel="stylesheet" href="styles.css">
    <?php endif; ?>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { 'manrope': ['Manrope', 'sans-serif'], 'inter': ['Inter', 'sans-serif'] },
                    colors: { 
                        'primary': '#031636', 
                        'primary-container': '#1A2B4C', 
                        'secondary-container': '#FDC003',
                        'surface-container-low': '#F3F4F6',
                        'surface-dim': '#DADADA'
                    }
                }
            }
        }
    </script>
    <style>
        .backdrop-blur-20 { backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
    
    <?php
    $faqData = file_exists('data/faq.json') ? json_decode(file_get_contents('data/faq.json'), true) : [];
    $faqSchema = [];
    if($faqData) {
        foreach($faqData as $faq) {
            $faqSchema[] = [
                "@type" => "Question",
                "name" => $faq['question'],
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => $faq['answer']
                ]
            ];
        }
    }
    ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "name": "Roadmate",
          "url": "https://roadmate.app/",
          "logo": "https://roadmate.app/assets/icons/roadmate-logo.svg"
        },
        {
          "@type": "FAQPage",
          "mainEntity": <?php echo json_encode($faqSchema); ?>
        }
      ]
    }
    </script>
</head>
<body class="bg-white text-slate-900 antialiased font-inter loading">
    <?php include 'templates/preloader.php'; ?>
    <noscript>
        <div class="bg-secondary-container text-primary font-bold text-center py-3 px-6 text-sm z-[100] relative">
            JavaScript is disabled in your browser. For the full Roadmate experience, including interactive map tracking and pricing estimates, please enable JavaScript.
        </div>
    </noscript>

    <?php include 'templates/header.php'; ?>

    <?php if (isset($_GET['subscribe']) && $_GET['subscribe'] === 'success'): ?>
    <div class="bg-green-500 text-white font-bold text-center py-3 px-6 text-sm z-[100] relative">
        Thank you! Email received successfully. ✓
    </div>
    <?php endif; ?>

    <?php include 'templates/hero.php'; ?>
    <?php include 'templates/emergency-grid.php'; ?>
    <?php include 'templates/how-it-works.php'; ?>
    <?php include 'templates/tracking.php'; ?>
    <?php include 'templates/services.php'; ?>
    <?php include 'templates/trust-verification.php'; ?>
    <?php include 'templates/pricing-estimator.php'; ?>
    <?php include 'templates/testimonials.php'; ?>
    <?php include 'templates/comparison.php'; ?>
    <?php include 'templates/coverage-map.php'; ?>
    <?php include 'templates/faq.php'; ?>
    <?php include 'templates/footer.php'; ?>
    <?php include 'templates/cookie-banner.php'; ?>
    <?php include 'templates/scroll-to-top.php'; ?>
    
    <script src="scripts/map.js"></script>
    <script src="scripts/animations.js"></script>
    <script src="scripts/pricing.js"></script>
    <script src="scripts/faq.js"></script>
    <script src="scripts/main.js"></script>
</body>
</html>