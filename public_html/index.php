<?php require_once 'includes/functions.php'; ?>

<?php loadComponent('header'); ?>
<?php loadComponent('nav'); ?>

    <!-- HERO SECTION -->
    <section class="relative w-full">
        
        <div class="swiper hero-swiper w-full h-[50vh] sm:h-[60vw] max-h-[520px] min-h-[220px]">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/images/hero/Gemini_Generated_Image_6glg7y6glg7y6glg.png" alt="Hero 1" class="w-full h-full object-cover"/>
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/hero/hero-bg.jpg" alt="Hero 2" class="w-full h-full object-cover"/>
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/hero/hotel-hero.jpg" alt="Hero 3" class="w-full h-full object-cover"/>
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/hero/main-hero.jpg" alt="Hero 4" class="w-full h-full object-cover"/>
                </div>
            </div>
        </div>
        
        <div class="absolute left-0 bottom-0 w-full pb-24 z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-start space-y-2">
        <p class="text-white text-base sm:text-lg md:text-2xl font-medium drop-shadow mb-1"
           data-en="Empowering Development"
           data-ar="تمكين التنمية">
            Empowering Development
        </p>
        <h1 class="text-white text-2xl sm:text-4xl md:text-5xl font-bold drop-shadow-lg leading-tight">
            <span data-en="Through Integrity and" data-ar="من خلال النزاهة و">Through Integrity and</span>
            <span id="animatedWord" class="fade-word text-[#D4AF37] ml-2"
                  data-en="Innovation"
                  data-ar="الابتكار">Innovation</span>
        </h1>
    </div>
</div>

<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent z-10 pointer-events-none"></div>
    </section>

<!-- OUR SERVICES SECTION -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <h2 class="text-3xl sm:text-4xl font-bold text-center mb-4" style="font-family: 'Playfair Display', serif;"
        data-en="Our Services"
        data-ar="خدماتنا">
      Our Services
    </h2>
    <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12 text-base sm:text-lg font-sans"
       data-en="Alrafe Group’s ventures span travel, gold trading, restaurants, and Islamic clothing, reflecting our commitment to quality, trust, and innovation across diverse industries."
       data-ar="تشمل مشاريع مجموعة الرافع السفر وتجارة الذهب والمطاعم والملابس الإسلامية، مما يعكس التزامنا بالجودة والثقة والابتكار عبر مختلف الصناعات.">
      Alrafe Group’s ventures span travel, gold trading, restaurants, and Islamic clothing, reflecting our commitment to quality, trust, and innovation across diverse industries.
    </p>
    
    <div class="flex flex-wrap justify-center gap-8">
      
      <a href="businesses/travel.php" class="group w-full sm:w-[300px] block rounded-2xl bg-white p-6 hover:bg-sky-100 hover:text-sky-800 transition-all duration-300 shadow hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-sky-300" aria-label="Travel Service">
        <div class="flex items-center justify-center w-14 h-14 rounded-full bg-sky-50 mb-4 mx-auto">
          <i class="fas fa-plane-departure text-sky-500 text-2xl"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-center"
            data-en="Travel"
            data-ar="السفر">Travel</h3>
        <p class="text-gray-500 group-hover:text-sky-800 text-center text-sm"
           data-en="Seamless travel solutions and memorable journeys across the globe."
           data-ar="حلول سفر سلسة ورحلات لا تُنسى حول العالم.">
          Seamless travel solutions and memorable journeys across the globe.
        </p>
      </a>
      
      <a href="gold/index.php" class="group w-full sm:w-[300px] block rounded-2xl bg-white p-6 hover:bg-yellow-100 hover:text-yellow-800 transition-all duration-300 shadow hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-yellow-300" aria-label="Gold Trading Service">
        <div class="flex items-center justify-center w-14 h-14 rounded-full bg-yellow-50 mb-4 mx-auto">
          <i class="fas fa-coins text-yellow-500 text-2xl"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-center"
            data-en="Gold Trading"
            data-ar="تجارة الذهب">Gold Trading</h3>
        <p class="text-gray-500 group-hover:text-yellow-800 text-center text-sm"
           data-en="Trusted gold trading with integrity and transparency at every step."
           data-ar="تجارة ذهب موثوقة بالنزاهة والشفافية في كل خطوة.">
          Trusted gold trading with integrity and transparency at every step.
        </p>
      </a>
      
      <a href="#" class="group w-full sm:w-[300px] block rounded-2xl bg-white p-6 hover:bg-rose-100 hover:text-rose-800 transition-all duration-300 shadow hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-rose-300" aria-label="Restaurants Service">
        <div class="flex items-center justify-center w-14 h-14 rounded-full bg-rose-50 mb-4 mx-auto">
          <i class="fas fa-soon text-rose-500 text-2xl"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-center"
            data-en="Coming soon"
            data-ar="قريباً">Coming soon</h3>
        <p class="text-gray-500 group-hover:text-rose-800 text-center text-sm"
           data-en="Coming soon....."
           data-ar="قريباً.....">
          Coming soon.....
        </p>
      </a>
    </div>
  </div>
</section>
    
<!-- ABOUT US SECTION -->
<section class="py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 bg-white overflow-hidden shadow-lg">
      
      <div class="h-64 md:h-auto">
        <img src="assets/images/about/WhatsApp Image 2025-05-09 at 16.10.39_f73e7560.jpg"
             alt="About Alrafe Group"
             class="w-full h-full object-cover object-center" />
      </div>
      
      <div class="bg-[#0F1B2A] flex flex-col justify-center p-8 md:p-12">
        <span class="text-sm font-semibold uppercase text-gray-300 tracking-wider mb-2"
              data-en="Who We Are"
              data-ar="من نحن">Who We Are</span>
        <h3 class="text-2xl sm:text-3xl md:text-4xl font-serif font-bold text-white mb-4"
            data-en="Our Mission, Values and Motto"
            data-ar="مهمتنا وقيمنا وشعارنا">
          Our Mission, Values and Motto
        </h3>
        <p class="text-gray-300 font-sans mb-6 text-base sm:text-lg leading-relaxed"
           data-en="Alrafe Group empowers communities through diverse ventures, guided by integrity and innovation for a brighter future."
           data-ar="تمكن مجموعة الرافع المجتمعات من خلال مشاريع متنوعة، مسترشدة بالنزاهة والابتكار من أجل مستقبل أكثر إشراقًا.">
          Alrafe Group empowers communities through diverse ventures, guided by integrity and innovation for a brighter future.
        </p>
        <div class="flex items-center gap-4">
          <button class="rounded border-2 border-[#D4AF37] bg-[#D4AF37] text-[#0F1B2A] font-semibold px-5 py-1.5 text-base transition-all duration-300 hover:bg-transparent hover:text-[#D4AF37] focus:outline-none"
                  data-en="Learn More"
                  data-ar="اعرف المزيد">
            <a href="about/group.php">Learn More</a>
          </button>
          <div class="flex gap-2">
            <a href="#" aria-label="Facebook" class="group flex items-center justify-center w-10 h-10 rounded-full border-2 border-gray-500 transition-all duration-200 hover:bg-[#1877f3] hover:border-[#1877f3]">
              <i class="fab fa-facebook-f text-gray-400 group-hover:text-white transition-all duration-200"></i>
            </a>
            <a href="#" aria-label="Instagram" class="group flex items-center justify-center w-10 h-10 rounded-full border-2 border-gray-500 transition-all duration-200 hover:bg-gradient-to-tr hover:from-pink-500 hover:to-yellow-400 hover:border-pink-500">
              <i class="fab fa-instagram text-gray-400 group-hover:text-white transition-all duration-200"></i>
            </a>
            <a href="#" aria-label="TikTok" class="group flex items-center justify-center w-10 h-10 rounded-full border-2 border-gray-500 transition-all duration-200 hover:bg-black hover:border-black">
              <i class="fab fa-tiktok text-gray-400 group-hover:text-[#D4AF37] transition-all duration-200"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="relative w-full">
  
  <div class="w-full bg-cover bg-center bg-no-repeat" style="background-image: url('assets/images/8311157_12356.jpg');">
   
    <div class="absolute inset-0 bg-black/50"></div>
    
    <div class="relative z-10 flex flex-col items-center justify-center px-6 md:px-12 py-20">
      <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white text-center mb-4" style="font-family: 'Playfair Display', serif;"
          data-en="Our Global Presence"
          data-ar="وجودنا العالمي">
        Our Global Presence
      </h2>
      <p class="text-white text-center max-w-2xl mx-auto mb-8 text-base sm:text-lg opacity-90"
         data-en="Alrafe Group operates across multiple countries, building trusted partnerships and connecting communities throughout the Middle East, Africa, and North America."
         data-ar="تعمل مجموعة الرافع في عدة دول، وتبني شراكات موثوقة وتربط المجتمعات في جميع أنحاء الشرق الأوسط وأفريقيا وأمريكا الشمالية.">
        Alrafe Group operates across multiple countries, building trusted partnerships and connecting communities throughout the Middle East, Africa, and North America.
      </p>
      <div class="flex flex-nowrap justify-center gap-6 mt-2 overflow-x-auto">
        <span class="fi fi-ae w-10 h-7 rounded shadow" title="UAE"><span class="sr-only" data-en="Flag of UAE" data-ar="علم الإمارات">Flag of UAE</span></span>
        <span class="fi fi-eg w-10 h-7 rounded shadow" title="Egypt"><span class="sr-only" data-en="Flag of Egypt" data-ar="علم مصر">Flag of Egypt</span></span>
        <span class="fi fi-ss w-10 h-7 rounded shadow" title="South Sudan"><span class="sr-only" data-en="Flag of South Sudan" data-ar="علم جنوب السودان">Flag of South Sudan</span></span>
        <span class="fi fi-ug w-10 h-7 rounded shadow" title="Uganda"><span class="sr-only" data-en="Flag of Uganda" data-ar="علم أوغندا">Flag of Uganda</span></span>
        <span class="fi fi-ca w-10 h-7 rounded shadow" title="Canada"><span class="sr-only" data-en="Flag of Canada" data-ar="علم كندا">Flag of Canada</span></span>
      </div>
    </div>
  </div>
</section>


<section class="w-full bg-[#0F1B2A] px-4 sm:px-6 lg:px-8 py-8 flex flex-col sm:flex-row items-center justify-between gap-y-6 gap-x-8 mt-0">
  
  <div class="w-full sm:w-auto flex items-center justify-start">
    <span class="text-lg sm:text-xl font-semibold text-gray-200"
          data-en="Our collaborations"
          data-ar="شراكاتنا">
      Our collaborations
    </span>
  </div>
  
  <div class="hidden sm:block h-12 w-[2px] bg-gray-500 mx-4"></div>
  
  <div class="flex-1 flex flex-wrap items-center justify-center gap-x-8 gap-y-4">
    <a href="https://www.pesapal.com" target="_blank" rel="noopener" class="transition-transform duration-200 hover:scale-105 hover:opacity-90">
      <img src="https://www.pesapal.com/assets/images/logo.png"
           alt="Pesapal Logo"
           data-en="Pesapal Logo"
           data-ar="شعار بيسابال"
           class="max-h-10 max-w-[100px] object-contain" />
    </a>
  </div>
</section>

<!-- CONTACT US SECTION -->
<section class="bg-gray-50 py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 bg-white rounded-2xl shadow-lg overflow-hidden">
    
      <form class="p-8 md:p-10 flex flex-col justify-center space-y-4">
        <h2 class="text-2xl font-bold mb-2 text-[#1A2A4D]"
            data-en="Contact Us"
            data-ar="اتصل بنا">Contact Us</h2>
        <input type="text" placeholder="Full Name" class="w-full rounded-xl border-none bg-gray-100 px-4 py-3 focus:ring-2 focus:ring-[#D4AF37] transition"
               required
               data-en-placeholder="Full Name"
               data-ar-placeholder="الاسم الكامل">
        <input type="email" placeholder="Email Address" class="w-full rounded-xl border-none bg-gray-100 px-4 py-3 focus:ring-2 focus:ring-[#D4AF37] transition"
               required
               data-en-placeholder="Email Address"
               data-ar-placeholder="البريد الإلكتروني">
        <input type="text" placeholder="Subject" class="w-full rounded-xl border-none bg-gray-100 px-4 py-3 focus:ring-2 focus:ring-[#D4AF37] transition"
               data-en-placeholder="Subject"
               data-ar-placeholder="الموضوع">
        <textarea placeholder="Message" rows="5" class="w-full rounded-xl border-none bg-gray-100 px-4 py-3 focus:ring-2 focus:ring-[#D4AF37] transition resize-none"
                  data-en-placeholder="Message"
                  data-ar-placeholder="الرسالة"></textarea>
        <button type="submit" class="mt-2 w-fit px-8 py-3 rounded-full bg-[#D4AF37] text-white font-semibold shadow-md hover:bg-[#bfa13a] transition-all duration-200"
                data-en="Send Message"
                data-ar="إرسال الرسالة">
          Send Message
        </button>
      </form>
      
      <div class="p-8 md:p-10 flex flex-col justify-center bg-[#0F1B2A] text-gray-100 space-y-6">
        <div>
          <h3 class="text-xl font-bold mb-2 text-[#D4AF37]"
              data-en="Alrafe Group HQ"
              data-ar="المقر الرئيسي لمجموعة الرافع">Alrafe Group HQ</h3>
          <p data-en="Kampala, Uganda - Arua Park Plaza Shop No. C3/541"
             data-ar="كمبالا، أوغندا - أروى بارك بلازا محل رقم C3/541">
            Kampala, Uganda - Arua Park Plaza Shop No. C3/541
          </p>
        </div>
        <div>
          <span class="block font-semibold text-gray-300"
                data-en="Email:"
                data-ar="البريد الإلكتروني:">Email:</span>
          <a href="mailto:info@alrafe.com" class="text-[#D4AF37] hover:underline"
             data-en="info@alrafe.com"
             data-ar="info@alrafe.com">info@alrafe.com</a>
        </div>
        <div>
          <span class="block font-semibold text-gray-300"
                data-en="Phone:"
                data-ar="الهاتف:">Phone:</span>
          <a href="tel:+971123456789" class="text-[#D4AF37] hover:underline"
             data-en="+20 111 198 7883"
             data-ar="+20 111 198 7883">+20 111 198 7883</a>
        </div>
        
        <div class="rounded-xl overflow-hidden shadow mt-2">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d296.540485122514!2d32.574014387584675!3d0.31689683310365047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sug!4v1748986019477!5m2!1sen!2sug"
            width="100%" height="180" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Alrafe Group HQ Location"
            data-en-title="Alrafe Group HQ Location"
            data-ar-title="موقع المقر الرئيسي لمجموعة الرافع"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- UPCOMING EVENTS SECTION -->
<!-- <section class="w-full bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-4 md:px-12">
    
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold mb-2" style="font-family: 'Playfair Display', serif;">
        Upcoming Events
      </h2>
      <p class="text-gray-600 max-w-xl mx-auto text-base md:text-lg">
        Stay updated with Alrafe Group’s latest events, expos, and networking opportunities across our global network.
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 col-span-1 md:col-span-2 flex flex-col">
        <div class="overflow-hidden rounded-t-xl">
          <img src="https://picsum.photos/800/400?random=1" alt="Dubai Trade Expo 2025"
               class="w-full h-48 md:h-64 object-cover transform transition-transform duration-300 hover:scale-105" />
        </div>
        <div class="p-6 flex-1 flex flex-col">
          <h3 class="text-xl font-semibold mb-2">Dubai Trade Expo 2025</h3>
          <p class="text-gray-600 mb-4">
            Join industry leaders and innovators at the region’s premier trade event, featuring global exhibitors and insightful panels.
          </p>
          <a href="#" class="mt-auto text-[#1A2A4D] underline underline-offset-4 font-medium hover:text-[#D4AF37] transition">
            Learn more &rarr;
          </a>
        </div>
      </div>
      
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 row-span-1 md:row-span-2 flex flex-col">
        <div class="overflow-hidden rounded-t-xl">
          <img src="https://picsum.photos/400/600?random=2" alt="Cairo Business Forum"
               class="w-full h-48 md:h-64 object-cover transform transition-transform duration-300 hover:scale-105" />
        </div>
        <div class="p-6 flex-1 flex flex-col">
          <h3 class="text-xl font-semibold mb-2">Cairo Business Forum</h3>
          <p class="text-gray-600 mb-4">
            A gathering of entrepreneurs and investors to explore new opportunities and foster business growth in Africa.
          </p>
          <a href="#" class="mt-auto text-[#1A2A4D] underline underline-offset-4 font-medium hover:text-[#D4AF37] transition">
            Learn more &rarr;
          </a>
        </div>
      </div>
      
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 flex flex-col">
        <div class="overflow-hidden rounded-t-xl">
          <img src="https://picsum.photos/400/300?random=3" alt="Uganda Innovation Summit"
               class="w-full h-48 md:h-64 object-cover transform transition-transform duration-300 hover:scale-105" />
        </div>
        <div class="p-6 flex-1 flex flex-col">
          <h3 class="text-xl font-semibold mb-2">Uganda Innovation Summit</h3>
          <p class="text-gray-600 mb-4">
            Discover the latest in tech and entrepreneurship with workshops, demos, and networking sessions.
          </p>
          <a href="#" class="mt-auto text-[#1A2A4D] underline underline-offset-4 font-medium hover:text-[#D4AF37] transition">
            Learn more &rarr;
          </a>
        </div>
      </div>
      
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 flex flex-col">
        <div class="overflow-hidden rounded-t-xl">
          <img src="https://picsum.photos/400/300?random=4" alt="Canada-Africa Trade Week"
               class="w-full h-48 md:h-64 object-cover transform transition-transform duration-300 hover:scale-105" />
        </div>
        <div class="p-6 flex-1 flex flex-col">
          <h3 class="text-xl font-semibold mb-2">Canada-Africa Trade Week</h3>
          <p class="text-gray-600 mb-4">
            Connect with global partners and explore new markets at this international trade event.
          </p>
          <a href="#" class="mt-auto text-[#1A2A4D] underline underline-offset-4 font-medium hover:text-[#D4AF37] transition">
            Learn more &rarr;
          </a>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- NEWSLETTER SECTION -->
<section class="w-full bg-[#0F1B2A] py-16">
  <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-8">
      <h2 class="text-2xl sm:text-3xl font-bold text-white mb-2" style="font-family: 'Playfair Display', serif;"
          data-en="Subscribe to Our Newsletter"
          data-ar="اشترك في نشرتنا الإخبارية">
        Subscribe to Our Newsletter
      </h2>
      <p class="text-gray-300 max-w-xl mx-auto text-base sm:text-lg"
         data-en="Get the latest news, insights, and updates from Alrafe Group delivered straight to your inbox."
         data-ar="احصل على آخر الأخبار والرؤى والتحديثات من مجموعة الرافع مباشرة إلى بريدك الإلكتروني.">
        Get the latest news, insights, and updates from Alrafe Group delivered straight to your inbox.
      </p>
    </div>
    <form class="flex flex-col sm:flex-row items-center gap-4 justify-center">
      <input
        type="email"
        required
        placeholder="Enter your email address"
        class="w-full sm:w-auto flex-1 rounded-full px-5 py-3 bg-gray-900 text-white placeholder-gray-400 border-none focus:ring-2 focus:ring-[#D4AF37] transition"
        data-en-placeholder="Enter your email address"
        data-ar-placeholder="أدخل بريدك الإلكتروني"
      />
      <button
        type="submit"
        class="w-full sm:w-auto px-8 py-3 rounded-full bg-[#D4AF37] text-[#0F1B2A] font-semibold shadow-md hover:bg-[#bfa13a] transition-all duration-200"
        data-en="Subscribe"
        data-ar="اشترك"
      >
        Subscribe
      </button>
    </form>
  </div>
</section>
<?php loadComponent('footer'); ?>