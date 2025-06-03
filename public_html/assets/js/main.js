   window.addEventListener('load', function () {
    const loader = document.getElementById('alrafe-loader');
    if (loader) {
      loader.style.opacity = '0';
      setTimeout(() => loader.style.display = 'none', 400);
    }
  });
  
// Initialize Swiper for hero section
 const heroSwiper = new Swiper('.hero-swiper', {
            loop: true,
            effect: 'fade',
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            speed: 900,
            fadeEffect: { crossFade: true },
        });

        // Animated word in hero
        const words = [
            "Innovation", "Opportunity", "Trust", "Excellence", "People",
            "Commerce", "Vision", "Leadership", "Unity", "Growth"
        ];
        let wordIndex = 0;
        const animatedWord = document.getElementById('animatedWord');
        setInterval(() => {
            animatedWord.style.opacity = 0;
            setTimeout(() => {
                wordIndex = (wordIndex + 1) % words.length;
                animatedWord.textContent = words[wordIndex];
                animatedWord.style.opacity = 1;
            }, 500);
        }, 2200);

        // Language dropdown for desktop
        const langBtn = document.getElementById('langDropdownBtn');
        const langDropdown = document.getElementById('langDropdown');
        langBtn && langBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            langDropdown.classList.toggle('hidden');
        });
        document.addEventListener('click', () => {
            langDropdown && langDropdown.classList.add('hidden');
        });
        langDropdown && langDropdown.addEventListener('click', (e) => e.stopPropagation());

        const quickLinksBtn = document.getElementById('quickLinksBtn');
        const quickLinksDropdown = document.getElementById('quickLinksDropdown');
        quickLinksBtn && quickLinksBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            quickLinksDropdown.classList.toggle('hidden');
        });
        document.addEventListener('click', () => {
            quickLinksDropdown && quickLinksDropdown.classList.add('hidden');
        });
        quickLinksDropdown && quickLinksDropdown.addEventListener('click', (e) => e.stopPropagation());

        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeMobileMenu = document.getElementById('closeMobileMenu');
        mobileMenuBtn && mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('translate-x-full');
        });
        closeMobileMenu && closeMobileMenu.addEventListener('click', () => {
            mobileMenu.classList.add('translate-x-full');
        });
        // Mobile dropdowns
        document.querySelectorAll('[data-mobile-dropdown]').forEach(btn => {
            btn.addEventListener('click', () => {
                const key = btn.getAttribute('data-mobile-dropdown');
                const menu = document.querySelector(`[data-mobile-dropdown-menu="${key}"]`);
                if (menu) menu.classList.toggle('hidden');
            });
        });

       
        document.querySelectorAll('.dropdown-menu').forEach(menu => {
            menu.addEventListener('click', e => e.stopPropagation());
        });

        // Search input expand
        function setupSearchInput(id) {
        const input = document.getElementById(id);
        function updateOpacity() {
            if (document.activeElement === input || input.value) {
                input.classList.add('opacity-100');
                input.classList.remove('opacity-0');
            } else {
                input.classList.remove('opacity-100');
                input.classList.add('opacity-0');
            }
        }
        if (input) {
            input.addEventListener('focus', updateOpacity);
            input.addEventListener('blur', updateOpacity);
            input.addEventListener('input', updateOpacity);
            updateOpacity();
        }
    }
    setupSearchInput('searchInput');
    setupSearchInput('mobileSearchInput');

      // Swiper for hero
  new Swiper('.gold-hero-swiper', {
    loop: true,
    effect: 'fade',
    autoplay: { delay: 3500, disableOnInteraction: false },
    speed: 1200,
    fadeEffect: { crossFade: true },
  });