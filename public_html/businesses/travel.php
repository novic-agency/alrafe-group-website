<?php 
require_once '../includes/functions.php';
loadComponent('header');
loadComponent('nav');
?>

<!-- HERO SECTION -->
<section class="relative min-h-[60vh] md:min-h-[80vh] flex items-center justify-center overflow-hidden bg-black">
  <div class="absolute inset-0 z-0">
    <div class="swiper travel-hero-swiper h-full w-full">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1200&q=80" alt="Safari" class="object-cover w-full h-full swiper-zoom" />
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=1200&q=80" alt="Hotel" class="object-cover w-full h-full swiper-zoom" />
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?auto=format&fit=crop&w=1200&q=80" alt="Flight" class="object-cover w-full h-full swiper-zoom" />
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1465156799763-2c087c332922?auto=format&fit=crop&w=1200&q=80" alt="City" class="object-cover w-full h-full swiper-zoom" />
        </div>
      </div>
    </div>
    <div class="absolute inset-0 bg-black/60 z-10 pointer-events-none"></div>
  </div>
  <div class="relative z-20 flex flex-col items-center justify-center text-center px-4">
    <span class="inline-block border border-[#D4AF37] text-[#D4AF37] font-semibold px-4 py-1 rounded-full mb-5 mt-2 tracking-wider"
          data-en="COMING SOON"
          data-ar="قريباً">COMING SOON</span>
    <h1 class="text-3xl md:text-5xl font-bold text-white mb-3" style="font-family: 'Playfair Display', serif;"
        data-en="Your Next Journey Begins Here"
        data-ar="رحلتك القادمة تبدأ من هنا">
      Your Next Journey Begins Here
    </h1>
    <p class="text-lg md:text-2xl text-white mb-2"
       data-en="Rafe Travel — Redefining Travel & Tourism"
       data-ar="رافع ترافل — إعادة تعريف السفر والسياحة">
      Rafe Travel — Redefining Travel & Tourism
    </p>
    <button id="notifyTravelBtn" class="px-8 py-3 rounded-full bg-[#D4AF37] text-white font-semibold shadow-lg hover:bg-[#bfa13a] transition-all duration-200 text-lg"
            data-en="Notify Me"
            data-ar="أبلغني">
      Notify Me
    </button>
  </div>
</section>

<!-- NOTIFY MODAL -->
<div id="notifyTravelModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 hidden">
  <div class="bg-white rounded-2xl shadow-xl p-8 max-w-md w-full relative">
    <button id="closeNotifyTravelModal" class="absolute top-3 right-3 text-gray-400 hover:text-gray-700 text-2xl">&times;</button>
    <h2 class="text-2xl font-bold mb-2 text-[#1A2A4D]"
        data-en="Get Notified"
        data-ar="احصل على إشعار">
      Get Notified
    </h2>
    <p class="mb-4 text-gray-600"
       data-en="Be the first to know when Rafe Travel launches."
       data-ar="كن أول من يعلم عند إطلاق رافع ترافل.">
      Be the first to know when Rafe Travel launches.
    </p>
    <form>
      <input type="email" 
             placeholder="Your Email" 
             required 
             class="w-full rounded-xl border border-gray-200 bg-gray-100 px-4 py-3 mb-4 focus:ring-2 focus:ring-[#D4AF37] transition"
             data-en-placeholder="Your Email"
             data-ar-placeholder="بريدك الإلكتروني"
      />
      <button type="submit" class="w-full px-6 py-3 rounded-full bg-[#D4AF37] text-white font-semibold shadow-md hover:bg-[#bfa13a] transition-all duration-200"
              data-en="Notify Me"
              data-ar="أبلغني">
        Notify Me
      </button>
      <p class="text-xs text-gray-400 mt-2"
         data-en="We’ll never spam you."
         data-ar="لن نرسل لك رسائل مزعجة.">
        We’ll never spam you.
      </p>
    </form>
  </div>
</div>

<!-- SERVICES GRID -->
<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-2xl md:text-3xl font-bold mb-10 text-center text-[#1A2A4D]" style="font-family: 'Playfair Display', serif;"
        data-en="Our Future Travel Services"
        data-ar="خدمات السفر المستقبلية لدينا">
      Our Future Travel Services
    </h2>
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
      <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
        <img src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?auto=format&fit=crop&w=600&q=80" alt="Flight Bookings" class="w-full h-40 object-cover" />
        <div class="p-5 flex-1 flex flex-col">
          <h3 class="text-lg font-semibold text-[#D4AF37] mb-2"
              data-en="Flight Bookings"
              data-ar="حجوزات الطيران">Flight Bookings</h3>
          <p class="text-gray-700 text-sm"
             data-en="Book flights to and from East Africa with ease and flexibility."
             data-ar="احجز رحلات الطيران من وإلى شرق أفريقيا بسهولة ومرونة.">
            Book flights to and from East Africa with ease and flexibility.
          </p>
        </div>
      </div>
      <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
        <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80" alt="Hotel Reservations" class="w-full h-40 object-cover" />
        <div class="p-5 flex-1 flex flex-col">
          <h3 class="text-lg font-semibold text-[#D4AF37] mb-2"
              data-en="Hotel Reservations"
              data-ar="حجوزات الفنادق">Hotel Reservations</h3>
          <p class="text-gray-700 text-sm"
             data-en="Handpicked hotels and lodges for every budget and taste."
             data-ar="فنادق ونُزل مختارة لكل ميزانية وذوق.">
            Handpicked hotels and lodges for every budget and taste.
          </p>
        </div>
      </div>
      <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" alt="Safari & Tours" class="w-full h-40 object-cover" />
        <div class="p-5 flex-1 flex flex-col">
          <h3 class="text-lg font-semibold text-[#D4AF37] mb-2"
              data-en="Safari & Tour Packages"
              data-ar="باقات السفاري والجولات">Safari & Tour Packages</h3>
          <p class="text-gray-700 text-sm"
             data-en="Curated safari adventures and cultural tours across East Africa."
             data-ar="مغامرات سفاري وجولات ثقافية مختارة عبر شرق أفريقيا.">
            Curated safari adventures and cultural tours across East Africa.
          </p>
        </div>
      </div>
      <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
        <img src="https://images.unsplash.com/photo-1465156799763-2c087c332922?auto=format&fit=crop&w=600&q=80" alt="Airport Transfers" class="w-full h-40 object-cover" />
        <div class="p-5 flex-1 flex flex-col">
          <h3 class="text-lg font-semibold text-[#D4AF37] mb-2"
              data-en="Airport Transfers"
              data-ar="خدمات النقل من وإلى المطار">Airport Transfers</h3>
          <p class="text-gray-700 text-sm"
             data-en="Reliable airport pickups and drop-offs for a smooth journey."
             data-ar="خدمة استقبال وتوصيل موثوقة من وإلى المطار لرحلة سلسة.">
            Reliable airport pickups and drop-offs for a smooth journey.
          </p>
        </div>
      </div>
      <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
        <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=600&q=80" alt="Visa Application Help" class="w-full h-40 object-cover" />
        <div class="p-5 flex-1 flex flex-col">
          <h3 class="text-lg font-semibold text-[#D4AF37] mb-2"
              data-en="Visa Application Help"
              data-ar="مساعدة في طلبات التأشيرة">Visa Application Help</h3>
          <p class="text-gray-700 text-sm"
             data-en="Guidance and support for your travel visa needs."
             data-ar="إرشاد ودعم لاحتياجات تأشيرة السفر الخاصة بك.">
            Guidance and support for your travel visa needs.
          </p>
        </div>
      </div>
      <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" alt="Corporate Travel" class="w-full h-40 object-cover" />
        <div class="p-5 flex-1 flex flex-col">
          <h3 class="text-lg font-semibold text-[#D4AF37] mb-2"
              data-en="Corporate Travel"
              data-ar="سفر الشركات">Corporate Travel</h3>
          <p class="text-gray-700 text-sm"
             data-en="Business travel solutions tailored for organizations and teams."
             data-ar="حلول سفر الأعمال مصممة للمؤسسات والفرق.">
            Business travel solutions tailored for organizations and teams.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE US -->
<section class="py-16 bg-[#fffbe6]">
  <div class="max-w-4xl mx-auto px-4">
    <h2 class="text-2xl md:text-3xl font-bold mb-8 text-center text-[#1A2A4D]" style="font-family: 'Playfair Display', serif;"
        data-en="What Makes Us Different"
        data-ar="ما الذي يميزنا">
      What Makes Us Different
    </h2>
    <div class="grid md:grid-cols-3 gap-6 text-center">
      <div class="bg-white rounded-xl shadow p-6">
        <p class="text-[#1A2A4D] font-semibold mb-2"
           data-en="Local experts in East Africa"
           data-ar="خبراء محليون في شرق أفريقيا">Local experts in East Africa</p>
      </div>
      <div class="bg-white rounded-xl shadow p-6">
        <p class="text-[#1A2A4D] font-semibold mb-2"
           data-en="Secure, smart booking tools"
           data-ar="أدوات حجز ذكية وآمنة">Secure, smart booking tools</p>
      </div>
      <div class="bg-white rounded-xl shadow p-6">
        <p class="text-[#1A2A4D] font-semibold mb-2"
           data-en="Personalized itineraries"
           data-ar="برامج سفر مخصصة">Personalized itineraries</p>
      </div>
    </div>
    <p class="mt-8 text-center text-gray-700"
       data-en="We combine local knowledge with global standards for unforgettable journeys."
       data-ar="نمزج بين المعرفة المحلية والمعايير العالمية لرحلات لا تُنسى.">
      We combine local knowledge with global standards for unforgettable journeys.
    </p>
  </div>
</section>

<!-- COMING SOON BANNER -->
<section class="py-10">
  <div class="max-w-lg mx-auto bg-white/80 border border-[#D4AF37] rounded-xl shadow text-center px-6 py-8">
    <h3 class="text-xl font-bold text-[#D4AF37] mb-2"
        data-en="We’re finalizing experiences worth remembering."
        data-ar="نحن نعد تجارب تستحق التذكر.">
      We’re finalizing experiences worth remembering.
    </h3>
    <form class="flex flex-col sm:flex-row gap-4 justify-center items-center mt-4">
      <input type="email" 
             placeholder="Your Email" 
             required 
             class="w-full sm:w-auto flex-1 rounded-xl border border-gray-200 bg-gray-100 px-4 py-3 focus:ring-2 focus:ring-[#D4AF37] transition"
             data-en-placeholder="Your Email"
             data-ar-placeholder="بريدك الإلكتروني"
      />
      <button type="submit" class="w-full sm:w-auto px-8 py-3 rounded-full bg-[#D4AF37] text-white font-semibold shadow-md hover:bg-[#bfa13a] transition-all duration-200"
              data-en="Notify Me"
              data-ar="أبلغني">
        Notify Me
      </button>
    </form>
    <p class="text-xs text-gray-500 mt-2"
       data-en="We’ll never spam you."
       data-ar="لن نرسل لك رسائل مزعجة.">
      We’ll never spam you.
    </p>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  // Swiper for hero
  new Swiper('.travel-hero-swiper', {
    loop: true,
    effect: 'fade',
    autoplay: { delay: 3500, disableOnInteraction: false },
    speed: 1200,
    fadeEffect: { crossFade: true },
  });

  // Modal logic
  const notifyBtn = document.getElementById('notifyTravelBtn');
  const notifyModal = document.getElementById('notifyTravelModal');
  const closeNotifyModal = document.getElementById('closeNotifyTravelModal');
  if (notifyBtn && notifyModal) {
    notifyBtn.onclick = () => notifyModal.classList.remove('hidden');
    closeNotifyModal.onclick = () => notifyModal.classList.add('hidden');
    notifyModal.onclick = (e) => { if (e.target === notifyModal) notifyModal.classList.add('hidden'); };
  }
</script>
<?php loadComponent('footer'); ?>