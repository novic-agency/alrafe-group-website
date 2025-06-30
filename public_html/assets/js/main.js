window.addEventListener('DOMContentLoaded', function () {
    const loader = document.getElementById('alrafe-loader');
    if (loader) {
        // Fade out smoothly
        loader.style.transition = 'opacity 0.3s';
        loader.style.opacity = '0';
        // Remove from DOM after fade
        setTimeout(() => {
            if (loader.parentNode) loader.parentNode.removeChild(loader);
        }, 300);
    }
});

// Language Switcher Logic
function setLanguage(lang) {
    // Set all [data-en] and [data-ar] elements
    document.querySelectorAll('[data-en], [data-ar]').forEach(el => {
        // For input/textarea, update placeholder
        if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
            if (lang === 'ar' && el.hasAttribute('data-ar-placeholder')) {
                el.setAttribute('placeholder', el.getAttribute('data-ar-placeholder'));
            } else if (lang === 'en' && el.hasAttribute('data-en-placeholder')) {
                el.setAttribute('placeholder', el.getAttribute('data-en-placeholder'));
            }
        } else {
            if (lang === 'ar' && el.hasAttribute('data-ar')) {
                el.textContent = el.getAttribute('data-ar');
            } else if (lang === 'en' && el.hasAttribute('data-en')) {
                el.textContent = el.getAttribute('data-en');
            }
        }
    });

    // Set dir and lang attributes on <html>
    document.documentElement.setAttribute('lang', lang);
    document.documentElement.setAttribute('dir', lang === 'ar' ? 'rtl' : 'ltr');
    // Store in localStorage
    localStorage.setItem('alrafe-lang', lang);

    // Update language button states (desktop)
    document.querySelectorAll('[data-lang]').forEach(btn => {
        if (btn.getAttribute('data-lang') === lang) {
            btn.classList.add('bg-[#1A2A4D]', 'text-white');
            btn.classList.remove('bg-gray-200', 'text-[#1A2A4D]');
        } else {
            btn.classList.remove('bg-[#1A2A4D]', 'text-white');
            btn.classList.add('bg-gray-200', 'text-[#1A2A4D]');
        }
    });
    // Update mobile language button states
    document.querySelectorAll('.lang-btn-mobile').forEach(btn => {
        if ((lang === 'ar' && btn.getAttribute('data-en').toLowerCase() === 'ar') ||
            (lang === 'en' && btn.getAttribute('data-en').toLowerCase() === 'en')) {
            btn.classList.add('bg-[#1A2A4D]', 'text-white');
            btn.classList.remove('bg-gray-200', 'text-[#1A2A4D]');
        } else {
            btn.classList.remove('bg-[#1A2A4D]', 'text-white');
            btn.classList.add('bg-gray-200', 'text-[#1A2A4D]');
        }
    });

    // Update the language dropdown button text ONLY (do not replace innerHTML!)
    const btnText = document.getElementById('langDropdownBtnText');
    if (btnText) {
        btnText.textContent = lang === 'ar' ? btnText.getAttribute('data-ar') : btnText.getAttribute('data-en');
    }

    // Update animated word language and reset index
    currentLang = lang;
    wordIndex = 0;
    updateAnimatedWord(lang);
}

function updateLangDropdownBtnText(lang) {
    const btnText = document.getElementById('langDropdownBtnText');
    if (btnText) {
        btnText.textContent = lang === 'ar' ? btnText.getAttribute('data-ar') : btnText.getAttribute('data-en');
    }
}

// On page load, set language from localStorage or default to 'en'
document.addEventListener('DOMContentLoaded', function () {
    let lang = localStorage.getItem('alrafe-lang') || 'en';
    setLanguage(lang);

    // Desktop language dropdown
    document.querySelectorAll('[data-lang]').forEach(btn => {
        btn.addEventListener('click', function () {
            setLanguage(this.getAttribute('data-lang'));
        });
    });

    // Mobile language buttons
    document.querySelectorAll('.lang-btn-mobile').forEach(btn => {
        btn.addEventListener('click', function () {
            setLanguage(this.getAttribute('data-en').toLowerCase() === 'ar' ? 'ar' : 'en');
        });
    });
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
const words = {
    en: [
        "Innovation", "Opportunity", "Trust", "Excellence", "People",
        "Commerce", "Vision", "Leadership", "Unity", "Growth"
    ],
    ar: [
        "ابتكار", "فرصة", "ثقة", "تميز", "أشخاص",
        "تجارة", "رؤية", "قيادة", "وحدة", "نمو"
    ]
};
let wordIndex = 0;
let currentLang = localStorage.getItem('alrafe-lang') || 'en';
let animatedWord = document.getElementById('animatedWord');

function updateAnimatedWord(lang) {
    if (!animatedWord) return;
    const langWords = words[lang] || words.en;
    animatedWord.textContent = langWords[wordIndex % langWords.length];
}

if (animatedWord) {
    updateAnimatedWord(currentLang);
    setInterval(() => {
        animatedWord.style.opacity = 0;
        setTimeout(() => {
            wordIndex = (wordIndex + 1) % words[currentLang].length;
            animatedWord.textContent = words[currentLang][wordIndex];
            animatedWord.style.opacity = 1;
        }, 500);
    }, 2200);
}

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

// Swiper for hero (gold)
new Swiper('.gold-hero-swiper', {
    loop: true,
    effect: 'fade',
    autoplay: { delay: 3500, disableOnInteraction: false },
    speed: 1200,
    fadeEffect: { crossFade: true },
});

// About Us Dropdown
const aboutBtn = document.getElementById('aboutDropdownBtn');
const aboutDropdown = document.getElementById('aboutDropdown');
aboutBtn && aboutBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    aboutDropdown.classList.toggle('hidden');
    // Hide others
    destDropdown && destDropdown.classList.add('hidden');
});
aboutDropdown && aboutDropdown.addEventListener('click', (e) => e.stopPropagation());

// Destinations Dropdown
const destBtn = document.getElementById('destDropdownBtn');
const destDropdown = document.getElementById('destDropdown');
destBtn && destBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    destDropdown.classList.toggle('hidden');
    // Hide others
    aboutDropdown && aboutDropdown.classList.add('hidden');
});
destDropdown && destDropdown.addEventListener('click', (e) => e.stopPropagation());

// Hide dropdowns when clicking outside
document.addEventListener('click', () => {
    aboutDropdown && aboutDropdown.classList.add('hidden');
    destDropdown && destDropdown.classList.add('hidden');
});

