
<?php
require_once '../includes/functions.php';
loadComponent('header');
loadComponent('nav');
?>

<section class="min-h-screen flex flex-col justify-center items-center bg-white px-4">
  <h1 class="text-4xl md:text-6xl font-bold text-[#1A2A4D] mb-6 text-center" style="font-family: 'Playfair Display', serif;">
    Coming Soon
  </h1>
  <p class="text-lg md:text-2xl text-gray-600 mb-8 text-center">
    This page is under development. Please check back soon.
  </p>
  <a href="/index.php" class="px-8 py-3 rounded-full bg-[#D4AF37] text-white font-semibold shadow hover:bg-[#bfa13a] transition-all duration-200">
    Back to Home
  </a>
</section>

<?php loadComponent('footer'); ?>