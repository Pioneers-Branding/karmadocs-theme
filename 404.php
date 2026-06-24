<?php get_header(); ?>

<div class="container mx-auto px-4 py-20 text-center">
    <h1 class="text-6xl font-bold text-gray-800 mb-4">404</h1>
    <h2 class="text-3xl font-bold text-gray-600 mb-8">Page Not Found</h2>
    <p class="text-lg text-gray-500 mb-8">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
    <a href="<?php echo home_url('/'); ?>" class="inline-block bg-brand-orange text-white px-8 py-3 rounded-full font-bold uppercase tracking-wider hover:bg-brand-orangeHover transition-colors">
        Go Back Home
    </a>
</div>

<?php get_footer(); ?>
