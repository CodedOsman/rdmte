<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy | Roadmate</title>
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
        <h1 class="font-manrope text-4xl font-bold text-primary mb-8">Privacy Policy</h1>
        
        <div class="prose prose-slate max-w-none font-inter text-slate-600 space-y-6">
            <p><strong>Effective Date:</strong> <?php echo date('F j, Y'); ?></p>
            
            <h2 class="font-manrope text-2xl font-bold text-primary mt-8 mb-4">1. Information We Collect</h2>
            <p>When you join our waitlist, we collect your email address and temporarily log your IP address to prevent spam and abuse of our systems.</p>
            
            <h2 class="font-manrope text-2xl font-bold text-primary mt-8 mb-4">2. How We Use Your Information</h2>
            <p>We use your email address solely to notify you when Roadmate launches and to provide updates regarding our services. We do not sell or share your personal information with third parties.</p>
            
            <h2 class="font-manrope text-2xl font-bold text-primary mt-8 mb-4">3. Cookies</h2>
            <p>We use minimal cookies necessary for the basic functioning of the website and to remember your consent preferences.</p>
            
            <h2 class="font-manrope text-2xl font-bold text-primary mt-8 mb-4">4. Contact Us</h2>
            <p>If you have any questions about this Privacy Policy, please contact us at privacy@roadmate.app.</p>
        </div>
    </main>

    <?php include 'templates/footer.php'; ?>
    <script src="scripts/main.js"></script>
</body>
</html>