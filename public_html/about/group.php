<?php require_once '../includes/functions.php'; ?>
<?php loadComponent('header'); ?>

<?php loadComponent('nav'); ?>

<!-- HERO SECTION -->
<section class="relative w-full h-[60vh] min-h-[340px] flex items-center justify-center bg-gray-900 overflow-hidden">
  <img src="../assets/images/gold-about-hero.jpg" alt="Alrafe Group Hero" class="absolute inset-0 w-full h-full object-cover object-center opacity-70" />
  <div class="absolute inset-0 bg-gradient-to-br from-[#0F1B2A]/80 via-[#0F1B2A]/60 to-transparent"></div>
  <div class="relative z-10 max-w-3xl mx-auto text-center px-4">
    <h1 class="text-3xl sm:text-5xl font-bold text-white drop-shadow-lg mb-4" style="font-family: 'Playfair Display', serif;"
        data-en="Empowering Industries, Enriching Lives"
        data-ar="تمكين الصناعات، وإثراء الحياة">
      Empowering Industries, Enriching Lives
    </h1>
    <p class="text-white text-lg sm:text-2xl mb-6 font-sans opacity-90"
       data-en="Alrafe Group is a diversified leader in travel, gold trading, and emerging sectors, building trust and opportunity across continents."
       data-ar="مجموعة الرافع رائدة متنوعة في السفر وتجارة الذهب والقطاعات الناشئة، تبني الثقة والفرص عبر القارات.">
      Alrafe Group is a diversified leader in travel, gold trading, and emerging sectors, building trust and opportunity across continents.
    </p>
    <a href="#overview" class="inline-block px-8 py-3 rounded-full bg-[#D4AF37] text-[#0F1B2A] font-semibold shadow hover:bg-[#bfa13a] transition-all duration-200"
       data-en="Discover Our Story"
       data-ar="اكتشف قصتنا">
      Discover Our Story
    </a>
  </div>
</section>

<!-- COMPANY OVERVIEW & TIMELINE -->
<section id="overview" class="py-16 bg-gradient-to-br from-white via-gray-50 to-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
    <!-- Overview -->
    <div>
      <h2 class="text-2xl sm:text-3xl font-bold mb-4 text-[#0F1B2A]" style="font-family: 'Playfair Display', serif;"
          data-en="Who We Are"
          data-ar="من نحن">
        Who We Are
      </h2>
      <p class="text-gray-700 text-base sm:text-lg mb-4"
         data-en="Founded in 2010, Alrafe Group has grown from a visionary startup into a multi-sector enterprise with a global footprint. Our mission is to empower communities and industries through integrity, innovation, and excellence."
         data-ar="تأسست مجموعة الرافع في عام 2010، ونمت من شركة ناشئة ذات رؤية إلى مؤسسة متعددة القطاعات ذات حضور عالمي. مهمتنا هي تمكين المجتمعات والصناعات من خلال النزاهة والابتكار والتميز.">
        Founded in 2010, Alrafe Group has grown from a visionary startup into a multi-sector enterprise with a global footprint. Our mission is to empower communities and industries through integrity, innovation, and excellence.
      </p>
      <p class="text-gray-700 text-base sm:text-lg mb-4"
         data-en="With operations spanning travel & tourism, gold trading & refinery, and new ventures, we are committed to delivering value, building trust, and driving sustainable growth."
         data-ar="مع عمليات تمتد عبر السفر والسياحة وتجارة الذهب والتكرير والمشاريع الجديدة، نحن ملتزمون بتقديم القيمة وبناء الثقة ودفع النمو المستدام.">
        With operations spanning travel & tourism, gold trading & refinery, and new ventures, we are committed to delivering value, building trust, and driving sustainable growth.
      </p>
      <ul class="mt-6 space-y-2">
        <li>
          <span class="font-semibold text-[#D4AF37]" data-en="Mission:" data-ar="المهمة:">Mission:</span>
          <span data-en="To connect people and markets with quality, trust, and innovation."
                data-ar="ربط الناس والأسواق بالجودة والثقة والابتكار.">To connect people and markets with quality, trust, and innovation.</span>
        </li>
        <li>
          <span class="font-semibold text-[#D4AF37]" data-en="Vision:" data-ar="الرؤية:">Vision:</span>
          <span data-en="To be a catalyst for positive change and opportunity across industries."
                data-ar="أن نكون محفزًا للتغيير الإيجابي والفرص عبر الصناعات.">To be a catalyst for positive change and opportunity across industries.</span>
        </li>
      </ul>
    </div>
    <!-- Timeline -->
    <div class="relative">
      <div class="absolute inset-0 pointer-events-none">
        <img src="../assets/images/rafe-gold-logo@2x.png" alt="" class="w-full h-full object-contain opacity-20" />
      </div>
      <ol class="relative border-l-4 border-[#D4AF37] pl-8 z-10">
        <li class="mb-10">
          <span class="absolute -left-5 top-1 w-4 h-4 bg-[#D4AF37] rounded-full border-2 border-white"></span>
          <div>
            <span class="text-sm text-gray-500">2010</span>
            <h4 class="font-bold text-[#0F1B2A]" data-en="Founded" data-ar="تأسست">Founded</h4>
            <p class="text-gray-600 text-sm"
               data-en="Alrafe Group established in UAE."
               data-ar="تأسست مجموعة الرافع في الإمارات العربية المتحدة.">
              Alrafe Group established in UAE.
            </p>
          </div>
        </li>
        <li class="mb-10">
          <span class="absolute -left-5 top-1 w-4 h-4 bg-[#D4AF37] rounded-full border-2 border-white"></span>
          <div>
            <span class="text-sm text-gray-500">2013</span>
            <h4 class="font-bold text-[#0F1B2A]" data-en="Travel & Tourism Launch" data-ar="إطلاق السفر والسياحة">Travel & Tourism Launch</h4>
            <p class="text-gray-600 text-sm"
               data-en="Expanded into travel and tourism services."
               data-ar="التوسع في خدمات السفر والسياحة.">
              Expanded into travel and tourism services.
            </p>
          </div>
        </li>
        <li class="mb-10">
          <span class="absolute -left-5 top-1 w-4 h-4 bg-[#D4AF37] rounded-full border-2 border-white"></span>
          <div>
            <span class="text-sm text-gray-500">2017</span>
            <h4 class="font-bold text-[#0F1B2A]" data-en="Gold Trading & Refinery" data-ar="تجارة الذهب والتكرير">Gold Trading & Refinery</h4>
            <p class="text-gray-600 text-sm"
               data-en="Launched gold trading and refinery operations."
               data-ar="إطلاق عمليات تجارة الذهب والتكرير.">
              Launched gold trading and refinery operations.
            </p>
          </div>
        </li>
        <li>
          <span class="absolute -left-5 top-1 w-4 h-4 bg-[#D4AF37] rounded-full border-2 border-white"></span>
          <div>
            <span class="text-sm text-gray-500">2024+</span>
            <h4 class="font-bold text-[#0F1B2A]" data-en="New Ventures" data-ar="مشاريع جديدة">New Ventures</h4>
            <p class="text-gray-600 text-sm"
               data-en="Expanding into restaurants, Islamic clothing, and more."
               data-ar="التوسع في المطاعم والملابس الإسلامية والمزيد.">
              Expanding into restaurants, Islamic clothing, and more.
            </p>
          </div>
        </li>
      </ol>
    </div>
  </div>
</section>

<!-- CORE VALUES -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-2xl sm:text-3xl font-bold text-center mb-10 text-[#0F1B2A]" style="font-family: 'Playfair Display', serif;"
        data-en="Our Core Values"
        data-ar="قيمنا الأساسية">
      Our Core Values
    </h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-6">
      <!-- Value Card -->
      <div class="backdrop-blur bg-white/60 rounded-2xl shadow-lg p-6 flex flex-col items-center transition-transform hover:-translate-y-2 hover:shadow-2xl border border-[#D4AF37]/10">
        <i class="fas fa-handshake text-3xl text-[#D4AF37] mb-3"></i>
        <span class="font-semibold text-[#0F1B2A] mb-1" data-en="Integrity" data-ar="النزاهة">Integrity</span>
        <span class="text-gray-500 text-sm text-center"
              data-en="We act with honesty and fairness in all we do."
              data-ar="نتصرف بأمانة وعدل في كل ما نقوم به.">We act with honesty and fairness in all we do.</span>
      </div>
      <div class="backdrop-blur bg-white/60 rounded-2xl shadow-lg p-6 flex flex-col items-center transition-transform hover:-translate-y-2 hover:shadow-2xl border border-[#D4AF37]/10">
        <i class="fas fa-lightbulb text-3xl text-[#D4AF37] mb-3"></i>
        <span class="font-semibold text-[#0F1B2A] mb-1" data-en="Innovation" data-ar="الابتكار">Innovation</span>
        <span class="text-gray-500 text-sm text-center"
              data-en="We embrace new ideas and technologies."
              data-ar="نحتضن الأفكار والتقنيات الجديدة.">We embrace new ideas and technologies.</span>
      </div>
      <div class="backdrop-blur bg-white/60 rounded-2xl shadow-lg p-6 flex flex-col items-center transition-transform hover:-translate-y-2 hover:shadow-2xl border border-[#D4AF37]/10">
        <i class="fas fa-award text-3xl text-[#D4AF37] mb-3"></i>
        <span class="font-semibold text-[#0F1B2A] mb-1" data-en="Excellence" data-ar="التميز">Excellence</span>
        <span class="text-gray-500 text-sm text-center"
              data-en="We strive for the highest standards."
              data-ar="نسعى لأعلى المعايير.">We strive for the highest standards.</span>
      </div>
      <div class="backdrop-blur bg-white/60 rounded-2xl shadow-lg p-6 flex flex-col items-center transition-transform hover:-translate-y-2 hover:shadow-2xl border border-[#D4AF37]/10">
        <i class="fas fa-users text-3xl text-[#D4AF37] mb-3"></i>
        <span class="font-semibold text-[#0F1B2A] mb-1" data-en="Customer Focus" data-ar="التركيز على العميل">Customer Focus</span>
        <span class="text-gray-500 text-sm text-center"
              data-en="We put our clients and partners first."
              data-ar="نضع عملاءنا وشركاءنا أولاً.">We put our clients and partners first.</span>
      </div>
      <div class="backdrop-blur bg-white/60 rounded-2xl shadow-lg p-6 flex flex-col items-center transition-transform hover:-translate-y-2 hover:shadow-2xl border border-[#D4AF37]/10">
        <i class="fas fa-leaf text-3xl text-[#D4AF37] mb-3"></i>
        <span class="font-semibold text-[#0F1B2A] mb-1" data-en="Sustainability" data-ar="الاستدامة">Sustainability</span>
        <span class="text-gray-500 text-sm text-center"
              data-en="We care for our communities and planet."
              data-ar="نهتم بمجتمعاتنا وكوكبنا.">We care for our communities and planet.</span>
      </div>
    </div>
  </div>
</section>

<!-- BUSINESS DIVISIONS TABS -->
<section class="py-16 bg-gradient-to-br from-gray-50 via-white to-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-2xl sm:text-3xl font-bold text-center mb-10 text-[#0F1B2A]" style="font-family: 'Playfair Display', serif;"
        data-en="Our Business Divisions"
        data-ar="قطاعات أعمالنا">
      Our Business Divisions
    </h2>
    <div id="businessTabs" class="flex flex-col items-center">
      <div class="flex gap-4 mb-8">
        <button class="tab-btn px-6 py-2 rounded-full font-semibold text-[#0F1B2A] bg-[#D4AF37]/10 hover:bg-[#D4AF37]/30 transition"
                data-tab="travel"
                data-en="Travel & Tourism"
                data-ar="السفر والسياحة">Travel & Tourism</button>
        <button class="tab-btn px-6 py-2 rounded-full font-semibold text-[#0F1B2A] bg-[#D4AF37]/10 hover:bg-[#D4AF37]/30 transition"
                data-tab="gold"
                data-en="Gold Trading & Refinery"
                data-ar="تجارة الذهب والتكرير">Gold Trading & Refinery</button>
        <button class="tab-btn px-6 py-2 rounded-full font-semibold text-[#0F1B2A] bg-[#D4AF37]/10 hover:bg-[#D4AF37]/30 transition"
                data-tab="upcoming"
                data-en="Upcoming Ventures"
                data-ar="مشاريع قادمة">Upcoming Ventures</button>
      </div>
      <div class="w-full max-w-3xl">
        <!-- Travel Tab -->
        <div class="tab-content" id="tab-travel">
          <div class="flex flex-col md:flex-row items-center gap-8">
            <img src="../assets/images/about/paris.jpg" alt="Travel & Tourism" class="w-full md:w-1/2 rounded-xl shadow-lg object-cover" />
            <div>
              <h3 class="text-xl font-bold mb-2 text-[#0F1B2A]"
                  data-en="Travel & Tourism"
                  data-ar="السفر والسياحة">Travel & Tourism</h3>
              <p class="text-gray-600 mb-3"
                 data-en="Connecting people and destinations with seamless travel experiences, tailored packages, and trusted partnerships across the globe."
                 data-ar="ربط الناس والوجهات بتجارب سفر سلسة وباقات مخصصة وشراكات موثوقة حول العالم.">
                Connecting people and destinations with seamless travel experiences, tailored packages, and trusted partnerships across the globe.
              </p>
              <a href="/alrafe_website/public_html/businesses/travel.php" class="text-[#D4AF37] font-semibold hover:underline"
                 data-en="Learn more &rarr;"
                 data-ar="اعرف المزيد &rarr;">Learn more &rarr;</a>
            </div>
          </div>
        </div>
        <!-- Gold Tab -->
        <div class="tab-content hidden" id="tab-gold">
          <div class="flex flex-col md:flex-row items-center gap-8">
            <img src="../assets/images/about/gold.png" alt="Gold Trading & Refinery" class="w-full md:w-1/2 rounded-xl shadow-lg object-cover" />
            <div>
              <h3 class="text-xl font-bold mb-2 text-[#0F1B2A]"
                  data-en="Gold Trading & Refinery"
                  data-ar="تجارة الذهب والتكرير">Gold Trading & Refinery</h3>
              <p class="text-gray-600 mb-3"
                 data-en="Delivering excellence in gold trading, refining, and logistics, with a commitment to transparency and global standards."
                 data-ar="تقديم التميز في تجارة الذهب والتكرير واللوجستيات مع الالتزام بالشفافية والمعايير العالمية.">
                Delivering excellence in gold trading, refining, and logistics, with a commitment to transparency and global standards.
              </p>
              <a href="/alrafe_website/public_html/businesses/gold.php" class="text-[#D4AF37] font-semibold hover:underline"
                 data-en="Learn more &rarr;"
                 data-ar="اعرف المزيد &rarr;">Learn more &rarr;</a>
            </div>
          </div>
        </div>
        <!-- Upcoming Tab -->
        <div class="tab-content hidden" id="tab-upcoming">
          <div class="flex flex-col md:flex-row items-center gap-8">
            <img src="../assets/images/about/th.jpeg" alt="Upcoming Ventures" class="w-full md:w-1/2 rounded-xl shadow-lg object-cover" />
            <div>
              <h3 class="text-xl font-bold mb-2 text-[#0F1B2A]"
                  data-en="Upcoming Ventures"
                  data-ar="مشاريع قادمة">Upcoming Ventures</h3>
              <p class="text-gray-600 mb-3"
                 data-en="Expanding into new sectors including restaurants, Islamic clothing, and innovative business solutions for tomorrow’s markets."
                 data-ar="التوسع في قطاعات جديدة تشمل المطاعم والملابس الإسلامية وحلول الأعمال المبتكرة لأسواق الغد.">
                Expanding into new sectors including restaurants, Islamic clothing, and innovative business solutions for tomorrow’s markets.
              </p>
              <a href="/alrafe_website/public_html/businesses/comingsoon.php" class="text-[#D4AF37] font-semibold hover:underline"
                 data-en="Learn more &rarr;"
                 data-ar="اعرف المزيد &rarr;">Learn more &rarr;</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Tabs JS -->
    <script>
      document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.addEventListener('click', function() {
          document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('bg-[#D4AF37]', 'text-white'));
          btn.classList.add('bg-[#D4AF37]', 'text-white');
          document.querySelectorAll('.tab-content').forEach(tab => tab.classList.add('hidden'));
          document.getElementById('tab-' + btn.dataset.tab).classList.remove('hidden');
        });
      });
      // Set default tab
      document.querySelector('.tab-btn[data-tab="travel"]').click();
    </script>
  </div>
</section>

<!-- GALLERY SECTION -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-2xl sm:text-3xl font-bold text-center mb-10 text-[#0F1B2A]" style="font-family: 'Playfair Display', serif;"
        data-en="Our Journey in Pictures"
        data-ar="رحلتنا بالصور">
      Our Journey in Pictures
    </h2>
    <!-- Masonry Gallery -->
    <div class="columns-2 md:columns-3 gap-4 space-y-4">
      <!-- Example images, replace with your own -->
      <div class="break-inside-avoid relative group">
        <img src="../assets/images/about/dubai_landscape.jpg" alt="Travel Event" class="rounded-xl shadow-lg w-full object-cover cursor-pointer transition-transform group-hover:scale-105" onclick="openLightbox(this)" />
        <div class="absolute bottom-2 left-2 bg-black/60 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition"
             data-en="Travel - Dubai Expo"
             data-ar="السفر - معرض دبي">Travel - Dubai Expo</div>
      </div>
      <div class="break-inside-avoid relative group">
        <img src="../assets/images/about/gold-lab.JPG" alt="Gold Lab" class="rounded-xl shadow-lg w-full object-cover cursor-pointer transition-transform group-hover:scale-105" onclick="openLightbox(this)" />
        <div class="absolute bottom-2 left-2 bg-black/60 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition"
             data-en="Gold Lab - Uganda"
             data-ar="مختبر الذهب - أوغندا">Gold Lab - Uganda</div>
      </div>
      <div class="break-inside-avoid relative group">
        <img src="../assets/images/about/team.JPG" alt="Team Event" class="rounded-xl shadow-lg w-full object-cover cursor-pointer transition-transform group-hover:scale-105" onclick="openLightbox(this)" />
        <div class="absolute bottom-2 left-2 bg-black/60 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition"
             data-en="Team - Annual Meetup"
             data-ar="الفريق - الاجتماع السنوي">Team - Annual Meetup</div>
      </div>
      <div class="break-inside-avoid relative group">
        <img src="../assets/images/about/cairo-office.jpg" alt="Office" class="rounded-xl shadow-lg w-full object-cover cursor-pointer transition-transform group-hover:scale-105" onclick="openLightbox(this)" />
        <div class="absolute bottom-2 left-2 bg-black/60 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition"
             data-en="Office - Cairo"
             data-ar="المكتب - القاهرة">Office - Cairo</div>
      </div>
      <div class="break-inside-avoid relative group">
        <img src="../assets/images/about/gold-conference.JPG" alt="Event" class="rounded-xl shadow-lg w-full object-cover cursor-pointer transition-transform group-hover:scale-105" onclick="openLightbox(this)" />
        <div class="absolute bottom-2 left-2 bg-black/60 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition"
             data-en="Event - Gold Conference"
             data-ar="فعالية - مؤتمر الذهب">Event - Gold Conference</div>
      </div>
    </div>
    <!-- Lightbox Modal -->
    <div id="lightboxModal" class="fixed inset-0 bg-black/80 flex items-center justify-center z-50 hidden">
      <div class="relative">
        <img id="lightboxImg" src="" alt="" class="max-h-[80vh] rounded-xl shadow-2xl" />
        <button onclick="closeLightbox()" class="absolute top-2 right-2 bg-white/80 rounded-full p-2 text-[#0F1B2A] hover:bg-white"><i class="fas fa-times text-xl"></i></button>
      </div>
    </div>
    <script>
      function openLightbox(img) {
        document.getElementById('lightboxImg').src = img.src;
        document.getElementById('lightboxModal').classList.remove('hidden');
      }
      function closeLightbox() {
        document.getElementById('lightboxModal').classList.add('hidden');
      }
    </script>
  </div>
</section>

<!-- MEET THE TEAM (OPTIONAL) -->
<section class="py-16 bg-gradient-to-br from-gray-50 via-white to-gray-50">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-2xl sm:text-3xl font-bold text-center mb-10 text-[#0F1B2A]" style="font-family: 'Playfair Display', serif;"
        data-en="Meet Our Leadership"
        data-ar="تعرف على قيادتنا">
      Meet Our Leadership
    </h2>
    <div class="flex gap-6 overflow-x-auto pb-4">
      <!-- Example team members, replace with your own -->
      <div class="flex-shrink-0 w-64 bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center text-center mx-2">
        <img src="../assets/images/about/cairo-office.jpg" alt="CEO" class="w-24 h-24 rounded-full object-cover mb-4 border-4 border-[#D4AF37]/30" />
        <span class="font-bold text-[#0F1B2A] mb-1"
              data-en="Abdallah Alrafe"
              data-ar="عبد الله الرافع">Abdallah Alrafe</span>
        <span class="text-gray-500 text-sm mb-2"
              data-en="Founder & CEO"
              data-ar="المؤسس والرئيس التنفيذي">Founder & CEO</span>
        <span class="italic text-gray-400 text-xs"
              data-en='"Vision drives opportunity."'
              data-ar='"الرؤية تصنع الفرص."'>"Vision drives opportunity."</span>
      </div>
    </div>
  </div>
</section>

<!-- CALL TO ACTION -->
<section class="py-16 bg-[#0F1B2A] text-center">
  <div class="max-w-2xl mx-auto px-4">
    <h2 class="text-2xl sm:text-3xl font-bold text-white mb-4" style="font-family: 'Playfair Display', serif;"
        data-en="Partner with Alrafe. Let’s build the future together."
        data-ar="شارك مع الرافع. دعنا نبني المستقبل معًا.">
      Partner with Alrafe. Let’s build the future together.
    </h2>
    <a href="/contact.php" class="inline-block px-8 py-3 rounded-full bg-[#D4AF37] text-[#0F1B2A] font-semibold shadow hover:bg-[#bfa13a] transition-all duration-200"
       data-en="Contact Us"
       data-ar="اتصل بنا">
      Contact Us
    </a>
  </div>
</section>

<?php loadComponent('footer'); ?>