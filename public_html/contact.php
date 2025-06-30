<?php
require_once 'includes/functions.php';
loadComponent('header');
loadComponent('nav');
?>

<!-- HERO HEADER -->
<section class="w-full bg-[#fffbe6] py-14">
  <div class="max-w-2xl mx-auto px-4 text-center">
    <h1 class="text-3xl md:text-4xl font-bold mb-3" style="font-family: 'Playfair Display', serif;"
        data-en="Get in Touch with Rafe Group"
        data-ar="تواصل مع مجموعة الرافع">
      Get in Touch with Rafe Group
    </h1>
    <p class="text-lg text-gray-700"
       data-en="We’re here to answer your questions and explore new opportunities together."
       data-ar="نحن هنا للإجابة على أسئلتك واستكشاف فرص جديدة معًا.">
      We’re here to answer your questions and explore new opportunities together.
    </p>
  </div>
</section>

<!-- MAIN CONTACT SECTION -->
<section class="py-12 bg-white">
  <div class="max-w-5xl mx-auto px-4 grid md:grid-cols-2 gap-10">
    <!-- Contact Form -->
    <div>
      <form method="post" class="bg-white rounded-xl shadow p-6 space-y-5">
        <div>
          <label class="block text-sm font-semibold mb-1 text-[#1A2A4D]"
                 data-en="Full Name"
                 data-ar="الاسم الكامل">Full Name</label>
          <input type="text" name="name" required class="w-full rounded-lg border border-gray-200 px-4 py-3 bg-gray-50 focus:ring-2 focus:ring-[#D4AF37] transition"
                 data-en-placeholder="Full Name"
                 data-ar-placeholder="الاسم الكامل"
                 placeholder="Full Name" />
        </div>
        <div>
          <label class="block text-sm font-semibold mb-1 text-[#1A2A4D]"
                 data-en="Email Address"
                 data-ar="البريد الإلكتروني">Email Address</label>
          <input type="email" name="email" required class="w-full rounded-lg border border-gray-200 px-4 py-3 bg-gray-50 focus:ring-2 focus:ring-[#D4AF37] transition"
                 data-en-placeholder="Email Address"
                 data-ar-placeholder="البريد الإلكتروني"
                 placeholder="Email Address" />
        </div>
        <div>
          <label class="block text-sm font-semibold mb-1 text-[#1A2A4D]"
                 data-en="Phone Number"
                 data-ar="رقم الهاتف">Phone Number</label>
          <input type="tel" name="phone" class="w-full rounded-lg border border-gray-200 px-4 py-3 bg-gray-50 focus:ring-2 focus:ring-[#D4AF37] transition"
                 data-en-placeholder="Phone Number"
                 data-ar-placeholder="رقم الهاتف"
                 placeholder="Phone Number" />
        </div>
        <div>
          <label class="block text-sm font-semibold mb-1 text-[#1A2A4D]"
                 data-en="Message"
                 data-ar="رسالتك">Message</label>
          <textarea name="message" rows="4" required class="w-full rounded-lg border border-gray-200 px-4 py-3 bg-gray-50 focus:ring-2 focus:ring-[#D4AF37] transition"
                    data-en-placeholder="Type your message"
                    data-ar-placeholder="اكتب رسالتك"
                    placeholder="Type your message"></textarea>
        </div>
        <button type="submit" class="w-full px-6 py-3 rounded-full bg-[#D4AF37] text-white font-semibold shadow hover:bg-[#bfa13a] transition-all duration-200"
                data-en="Send Message"
                data-ar="إرسال الرسالة">
          Send Message
        </button>
        <!-- Success/Failure Message Placeholder -->
        <?php if (isset($_GET['sent']) && $_GET['sent'] === '1'): ?>
          <p class="text-green-600 text-sm mt-2"
             data-en="Thank you! Your message has been sent."
             data-ar="شكرًا لك! تم إرسال رسالتك.">Thank you! Your message has been sent.</p>
        <?php elseif (isset($_GET['sent']) && $_GET['sent'] === '0'): ?>
          <p class="text-red-600 text-sm mt-2"
             data-en="Sorry, there was a problem sending your message."
             data-ar="عذرًا، حدثت مشكلة أثناء إرسال رسالتك.">Sorry, there was a problem sending your message.</p>
        <?php endif; ?>
      </form>
    </div>
    <!-- Contact Info & Map -->
    <div class="flex flex-col gap-6">
      <div class="rounded-xl overflow-hidden shadow">
        <!-- Google Map Embed (replace src with your location if needed) -->
        <iframe class="w-full h-56 md:h-64" frameborder="0" style="border:0"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.03184709794!2d32.5825198!3d0.3475966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbb1b1b1b1b1b%3A0x1b1b1b1b1b1b1b1b!2sKampala%2C%20Uganda!5e0!3m2!1sen!2sug!4v1680000000000!5m2!1sen!2sug"
          allowfullscreen="" aria-hidden="false" tabindex="0"
          title="Kampala, Uganda"
          data-en-title="Kampala, Uganda"
          data-ar-title="كمبالا، أوغندا"></iframe>
      </div>
      <div class="bg-[#fffbe6] rounded-xl shadow p-5">
        <h3 class="font-semibold text-[#1A2A4D] mb-2"
            data-en="Contact Information"
            data-ar="معلومات الاتصال">Contact Information</h3>
        <p class="text-gray-700 text-sm mb-1">
          <span class="font-semibold"
                data-en="Email:"
                data-ar="البريد الإلكتروني:">Email:</span>
          <span data-en="info@alrafe.com" data-ar="info@alrafe.com">info@alrafe.com</span>
        </p>
        <p class="text-gray-700 text-sm mb-1">
          <span class="font-semibold"
                data-en="Phone:"
                data-ar="الهاتف:">Phone:</span>
          <span data-en="+20 111 198 7883" data-ar="+20 111 198 7883">+20 111 198 7883</span>
        </p>
        <p class="text-gray-700 text-sm">
          <span class="font-semibold"
                data-en="Office:"
                data-ar="المكتب:">Office:</span>
          <span data-en="Kampala, Uganda" data-ar="كمبالا، أوغندا">Kampala, Uganda</span>
        </p>
        <p class="text-gray-700 text-sm mt-2">
          <span class="font-semibold"
                data-en="Working Hours:"
                data-ar="ساعات العمل:">Working Hours:</span>
          <span data-en="Mon–Sat, 9am–8pm" data-ar="الاثنين - السبت، 9 صباحًا - 8 مساءً">Mon–Sat, 9am–8pm</span>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- QUICK CONTACT INFO BOXES -->
<section class="py-8 bg-white">
  <div class="max-w-4xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-3 gap-6">
    <div class="bg-[#fffbe6] rounded-xl shadow p-6 text-center">
      <div class="font-semibold text-[#D4AF37] mb-1"
           data-en="Email"
           data-ar="البريد الإلكتروني">Email</div>
      <div class="text-gray-700 text-sm"
           data-en="info@alrafe.com"
           data-ar="info@alrafe.com">info@alrafe.com</div>
    </div>
    <div class="bg-[#fffbe6] rounded-xl shadow p-6 text-center">
      <div class="font-semibold text-[#D4AF37] mb-1"
           data-en="Phone"
           data-ar="الهاتف">Phone</div>
      <div class="text-gray-700 text-sm"
           data-en="+20 111 198 7883"
           data-ar="+20 111 198 7883">+20 111 198 7883</div>
    </div>
    <div class="bg-[#fffbe6] rounded-xl shadow p-6 text-center">
      <div class="font-semibold text-[#D4AF37] mb-1"
           data-en="Office Address"
           data-ar="عنوان المكتب">Office Address</div>
      <div class="text-gray-700 text-sm"
           data-en="Kampala, Uganda"
           data-ar="كمبالا، أوغندا">Kampala, Uganda</div>
    </div>
  </div>
</section>

<?php loadComponent('footer'); ?>