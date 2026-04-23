<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service | Roadmate</title>
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
</head>
<body class="bg-slate-50 text-slate-900 antialiased font-inter">
    <?php include 'templates/header.php'; ?>

    <main class="pt-32 pb-24 container mx-auto px-6 max-w-3xl">
        <h1 class="font-manrope text-4xl font-bold text-primary mb-8">Terms of Service</h1>
        
        <div class="prose prose-slate max-w-none font-inter text-slate-600 space-y-6">
            <p><strong>Last Updated:</strong> <?php echo date('F j, Y'); ?></p>
            
            <p>Welcome to Roadmate. By using our website and joining our waitlist, you agree to comply with and be bound by the following terms and conditions.</p>

            <h2 class="font-manrope text-2xl font-bold text-primary mt-8 mb-4">1. Acceptance of Terms</h2>
            <p>By accessing this website, you acknowledge that you have read, understood, and agree to be bound by these Terms of Service and our Privacy Policy.</p>
            
            <h2 class="font-manrope text-2xl font-bold text-primary mt-8 mb-4">2. Use of the Site</h2>
            <p>The content on this website is for your general information and promotional use only. It is subject to change without notice. Unauthorized use of this website may give rise to a claim for damages and/or be a criminal offense.</p>
            
            <h2 class="font-manrope text-2xl font-bold text-primary mt-8 mb-4">3. Waitlist Subscription</h2>
            <p>By joining our waitlist, you consent to receive periodic emails from Roadmate regarding our launch, services, and company updates. You may opt out at any time by following the unsubscribe link in our emails.</p>
            
            <h2 class="font-manrope text-2xl font-bold text-primary mt-8 mb-4">4. Limitation of Liability</h2>
            <p>Roadmate shall not be liable for any direct, indirect, incidental, or consequential damages resulting from the use or inability to use this website or its services.</p>
            
            <h2 class="font-manrope text-2xl font-bold text-primary mt-8 mb-4">5. Governing Law</h2>
            <p>These terms are governed by and construed in accordance with the laws of Ghana.</p>

            <h2 class="font-manrope text-2xl font-bold text-primary mt-8 mb-4">6. Contact Us</h2>
            <p>If you have any questions regarding these Terms, please contact us at legal@roadmate.app.</p>
        </div>
    </main>

    <?php include 'templates/footer.php'; ?>
    <script src="scripts/main.js"></script>
</body>
</html>