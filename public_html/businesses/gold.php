<?php require_once '../includes/functions.php'; ?>

<?php loadComponent('header'); ?>
<?php loadComponent('nav'); ?>

<!-- HERO SECTION -->
<section class="relative min-h-[60vh] md:min-h-[80vh] flex items-center justify-center overflow-hidden bg-black">
  <!-- Background Slideshow -->
  <div class="absolute inset-0 z-0">
    <div class="swiper gold-hero-swiper h-full w-full">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="../assets/images/hero/Gemini_Generated_Image_6glg7y6glg7y6glg.png" alt="Gold Mining Field" class="object-cover w-full h-full swiper-zoom" />
        </div>
        <div class="swiper-slide">
          <img src="../assets/images/hero/hero-bg.jpg" alt="Gold Lab" class="object-cover w-full h-full swiper-zoom" />
        </div>
        <div class="swiper-slide">
          <img src="../assets/images/hero/hotel-hero.jpg" alt="Gold Trading" class="object-cover w-full h-full swiper-zoom" />
        </div>
        <div class="swiper-slide">
          <img src="../assets/images/hero/main-hero.jpg" alt="Gold Crafting" class="object-cover w-full h-full swiper-zoom" />
        </div>
      </div>
    </div>
    <!-- Dark overlay for readability -->
    <div class="absolute inset-0 bg-black/70 z-10 pointer-events-none"></div>
  </div>
  <!-- Overlay Content -->
  <div class="relative z-20 flex flex-col items-center justify-center text-center px-4">
    <h1 class="text-3xl md:text-5xl font-bold text-[#fff] mb-4" style="font-family: 'Playfair Display', serif;">
      Rafe Gold – Opening Soon
    </h1>
    <p class="text-lg md:text-2xl text-[#fff] mb-6 max-w-2xl">
      Your trusted partner in gold mining, testing, trading &amp; crafting.
    </p>
  </div>
</section>

<!-- SERVICES SECTION -->
<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-2xl md:text-3xl font-bold mb-10 text-center text-[#1A2A4D]" style="font-family: 'Playfair Display', serif;">
      Our Services in the Gold Industry
    </h2>
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
      <!-- Gold Mining -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" alt="Gold Mining" class="w-full h-44 object-cover" />
        <div class="p-5 flex-1 flex flex-col">
          <h3 class="text-lg font-semibold text-[#D4AF37] mb-2">Gold Mining</h3>
          <p class="text-gray-700 text-sm">Mining operations in Africa’s richest gold regions, managed with expertise and responsibility.</p>
        </div>
      </div>
      <!-- Gold Testing & Laboratory -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
        <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=600&q=80" alt="Gold Testing" class="w-full h-44 object-cover" />
        <div class="p-5 flex-1 flex flex-col">
          <h3 class="text-lg font-semibold text-[#D4AF37] mb-2">Gold Testing & Laboratory</h3>
          <p class="text-gray-700 text-sm">In-house labs for purity testing and certification, ensuring every gram meets global standards.</p>
        </div>
      </div>
      <!-- Buying and Selling of Gold -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
        <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80" alt="Gold Trading" class="w-full h-44 object-cover" />
        <div class="p-5 flex-1 flex flex-col">
          <h3 class="text-lg font-semibold text-[#D4AF37] mb-2">Buying &amp; Selling of Gold</h3>
          <p class="text-gray-700 text-sm">Transparent, secure gold trading and commerce for local and international clients.</p>
        </div>
      </div>
      <!-- Gold Jewelry & Crafting -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
        <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=600&q=80" alt="Gold Crafting" class="w-full h-44 object-cover" />
        <div class="p-5 flex-1 flex flex-col">
          <h3 class="text-lg font-semibold text-[#D4AF37] mb-2">Gold Jewelry &amp; Crafting</h3>
          <p class="text-gray-700 text-sm">Premium gold jewelry and custom-crafted pieces, blending tradition with modern artistry.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE US -->
<section class="py-16 bg-[#fffbe6]">
  <div class="max-w-4xl mx-auto px-4">
    <h2 class="text-2xl md:text-3xl font-bold mb-8 text-center text-[#1A2A4D]" style="font-family: 'Playfair Display', serif;">
      What Sets Us Apart
    </h2>
    <div class="grid md:grid-cols-2 gap-6">
      <div class="bg-white rounded-xl shadow p-6">
        <ul class="list-disc list-inside text-gray-800 space-y-2">
          <li>Experienced in multinational gold mining operations</li>
          <li>In-house testing and certification lab</li>
        </ul>
      </div>
      <div class="bg-white rounded-xl shadow p-6">
        <ul class="list-disc list-inside text-gray-800 space-y-2">
          <li>Trusted trade networks</li>
          <li>Premium crafted gold products</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT CTA -->
<section class="py-14 bg-white">
  <div class="max-w-xl mx-auto px-4 text-center">
    <h3 class="text-xl md:text-2xl font-bold mb-4 text-[#1A2A4D]">Interested in working with Rafe Gold?</h3>
    <a href="/contact" class="inline-block px-8 py-3 rounded-full bg-[#D4AF37] text-white font-semibold shadow hover:bg-[#bfa13a] transition-all duration-200">
      Contact Us
    </a>
  </div>
</section>


<?php loadComponent('footer'); ?>