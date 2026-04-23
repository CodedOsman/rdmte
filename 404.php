<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found | Roadmate</title>
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
<body class="bg-primary text-white antialiased font-inter min-h-screen flex flex-col">
    <?php include 'templates/header.php'; ?>

    <main class="flex-grow flex items-center justify-center container mx-auto px-6 py-32 text-center mt-20">
        <div class="max-w-2xl bg-white/5 backdrop-blur-20 p-12 rounded-3xl border border-white/10 shadow-2xl">
            <h1 class="font-manrope text-8xl font-bold text-secondary-container mb-6">404</h1>
            <h2 class="font-manrope text-4xl font-bold mb-6">Lost your way?</h2>
            <p class="font-inter text-slate-300 text-lg mb-10">We couldn't find the page you're looking for. Let's get you back on the right road.</p>
            <a href="index.php" class="inline-block px-10 py-4 bg-secondary-container text-primary font-bold rounded-xl shadow-lg hover:scale-105 transition-all">
                Return to Safety
            </a>
        </div>
    </main>

    <script src="scripts/main.js"></script>
</body>
</html>