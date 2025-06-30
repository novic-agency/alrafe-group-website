// Alrafe Gold - Main JavaScript File

// Language Management
class LanguageManager {
    constructor() {
        this.currentLanguage = 'en';
        this.init();
    }

    init() {
        // Load saved language
        const savedLanguage = localStorage.getItem('alrafe-language') || 'en';
        this.setLanguage(savedLanguage);
        
        // Setup language switcher
        this.setupLanguageSwitcher();
    }

    setupLanguageSwitcher() {
        const langButtons = document.querySelectorAll('.lang-btn');
        
        langButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const lang = btn.id === 'lang-en' ? 'en' : 'ar';
                this.setLanguage(lang);
            });
        });
    }

    setLanguage(lang) {
        this.currentLanguage = lang;
        localStorage.setItem('alrafe-language', lang);
        
        // Update UI
        this.updateLanguageButtons();
        this.updateContent();
        this.updateDirection();
    }

    updateLanguageButtons() {
        const langButtons = document.querySelectorAll('.lang-btn');
        langButtons.forEach(btn => {
            btn.classList.remove('active');
            if ((btn.id === 'lang-en' && this.currentLanguage === 'en') ||
                (btn.id === 'lang-ar' && this.currentLanguage === 'ar')) {
                btn.classList.add('active');
            }
        });
    }

    updateContent() {
        const elements = document.querySelectorAll('[data-en][data-ar]');
        elements.forEach(element => {
            const text = element.getAttribute(`data-${this.currentLanguage}`);
            if (text) {
                element.textContent = text;
            }
        });

        // Update placeholders
        const inputs = document.querySelectorAll(`[data-${this.currentLanguage}-placeholder]`);
        inputs.forEach(input => {
            const placeholder = input.getAttribute(`data-${this.currentLanguage}-placeholder`);
            if (placeholder) {
                input.placeholder = placeholder;
            }
        });
    }

    updateDirection() {
        const html = document.documentElement;
        if (this.currentLanguage === 'ar') {
            html.setAttribute('dir', 'rtl');
            html.setAttribute('lang', 'ar');
        } else {
            html.setAttribute('dir', 'ltr');
            html.setAttribute('lang', 'en');
        }
    }
}

// Navigation Manager
class NavigationManager {
    constructor() {
        this.navbar = document.getElementById('navbar');
        this.mobileMenuBtn = document.getElementById('mobile-menu-btn');
        this.mobileMenu = document.getElementById('mobile-menu');
        this.navLinks = document.querySelectorAll('.nav-link');
        this.isMenuOpen = false;
        this.init();
    }

    init() {
        this.setupScrollEffect();
        this.setupMobileMenu();
        this.setupSmoothScrolling();
        this.setupActiveSection();
    }

    setupScrollEffect() {
        let lastScrollY = window.scrollY;
        window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;
            if (currentScrollY > 100) {
                this.navbar.classList.add('bg-dark-900/95', 'backdrop-blur-lg');
            } else {
                this.navbar.classList.remove('bg-dark-900/95', 'backdrop-blur-lg');
            }
            lastScrollY = currentScrollY;
        });
    }

    setupMobileMenu() {
        // Hide menu by default
        this.mobileMenu.style.display = 'none';

        this.mobileMenuBtn.addEventListener('click', () => {
            this.isMenuOpen = !this.isMenuOpen;
            if (this.isMenuOpen) {
                this.mobileMenu.style.display = 'block';
                setTimeout(() => {
                    this.mobileMenu.classList.add('show');
                }, 10);
                // Change icon
                this.mobileMenuBtn.querySelector('i').className = 'fas fa-times text-xl';
                // Prevent body scroll when menu is open
                document.body.style.overflow = 'hidden';
            } else {
                this.mobileMenu.classList.remove('show');
                setTimeout(() => {
                    this.mobileMenu.style.display = 'none';
                }, 300);
                this.mobileMenuBtn.querySelector('i').className = 'fas fa-bars text-xl';
                document.body.style.overflow = '';
            }
        });


        // Close mobile menu when clicking on links
        this.mobileMenu.addEventListener('click', (e) => {
            if (e.target.tagName === 'A') {
                this.isMenuOpen = false;
                this.mobileMenu.classList.remove('show');
                setTimeout(() => {
                    this.mobileMenu.style.display = 'none';
                }, 300);
                this.mobileMenuBtn.querySelector('i').className = 'fas fa-bars text-xl';
                document.body.style.overflow = '';
            }
        });

        // Optional: close menu on resize to desktop
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                this.isMenuOpen = false;
                this.mobileMenu.classList.remove('show');
                this.mobileMenu.style.display = 'none';
                this.mobileMenuBtn.querySelector('i').className = 'fas fa-bars text-xl';
                document.body.style.overflow = '';
            }
    });
    }
    setupSmoothScrolling() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', (e) => {
                e.preventDefault();
                const target = document.querySelector(anchor.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    setupActiveSection() {
        const sections = document.querySelectorAll('section[id]');
        
        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY + 100;
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                const sectionId = section.getAttribute('id');
                
                if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                    this.navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === `#${sectionId}`) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        });
    }
}

// Product Tabs Manager
class ProductTabsManager {
    constructor() {
        this.tabButtons = document.querySelectorAll('.product-tab-btn');
        this.tabContents = document.querySelectorAll('.product-content');
        this.init();
    }

    init() {
        this.tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const category = button.getAttribute('data-category');
                this.switchTab(category);
            });
        });
    }

    switchTab(category) {
    // Update buttons
    this.tabButtons.forEach(btn => {
        btn.classList.remove('active');
        if (btn.getAttribute('data-category') === category) {
            btn.classList.add('active');
        }
    });

    // Hide all content using Tailwind's hidden class
    this.tabContents.forEach(content => {
        content.classList.remove('active');
        content.classList.add('hidden');
    });

    // Remove old dynamic container if exists
    let allContainer = document.getElementById('all-dynamic');
    if (allContainer) allContainer.remove();

    if (category === 'all') {
        // Temporarily unhide all product-content for cloning
        this.tabContents.forEach(content => content.classList.remove('hidden'));

        // Create a temporary container
        allContainer = document.createElement('div');
        allContainer.id = 'all-dynamic';
        allContainer.className = 'product-content active';
        allContainer.innerHTML = '<div class="grid md:grid-cols-3 gap-8"></div>';
        const grid = allContainer.querySelector('.grid');
        // Collect all product cards from all categories
        this.tabContents.forEach(content => {
            content.querySelectorAll('.product-card').forEach(card => {
                grid.appendChild(card.cloneNode(true));
            });
        });
        // Insert after tab buttons
        const tabButtonsRow = document.querySelector('.flex.flex-wrap.justify-center');
        tabButtonsRow.parentNode.insertBefore(allContainer, tabButtonsRow.nextSibling);

        // Re-hide all product-content after cloning
        this.tabContents.forEach(content => content.classList.add('hidden'));
    } else {
        // Show only the selected category
        const activeContent = document.getElementById(category);
        if (activeContent) {
            activeContent.classList.add('active');
            activeContent.classList.remove('hidden');
        }
    }
}
}

// Form Manager
class FormManager {
    constructor() {
        this.contactForm = document.getElementById('contact-form');
        this.newsletterForm = document.getElementById('newsletter-form');
        this.init();
    }

    init() {
        if (this.contactForm) {
            this.contactForm.addEventListener('submit', this.handleContactForm.bind(this));
        }
        
        if (this.newsletterForm) {
            this.newsletterForm.addEventListener('submit', this.handleNewsletterForm.bind(this));
        }
    }

    async handleContactForm(e) {
        e.preventDefault();
        
        const formData = new FormData(this.contactForm);
        const data = Object.fromEntries(formData);
        
        // Show loading state
        const submitBtn = this.contactForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Sending...';
        submitBtn.disabled = true;
        
        try {
            // Simulate API call
            await new Promise(resolve => setTimeout(resolve, 2000));
            
            // Show success message
            this.showNotification('Message sent successfully! We\'ll get back to you soon.', 'success');
            this.contactForm.reset();
            
        } catch (error) {
            this.showNotification('Failed to send message. Please try again.', 'error');
        } finally {
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        }
    }

    async handleNewsletterForm(e) {
        e.preventDefault();
        
        const formData = new FormData(this.newsletterForm);
        const email = formData.get('newsletter-email');
        
        const submitBtn = this.newsletterForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Subscribing...';
        submitBtn.disabled = true;
        
        try {
            // Simulate API call
            await new Promise(resolve => setTimeout(resolve, 1500));
            
            this.showNotification('Successfully subscribed to our newsletter!', 'success');
            this.newsletterForm.reset();
            
        } catch (error) {
            this.showNotification('Failed to subscribe. Please try again.', 'error');
        } finally {
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        }
    }

    showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg max-w-sm transform translate-x-full transition-transform duration-300 ${
            type === 'success' ? 'bg-green-600 text-white' :
            type === 'error' ? 'bg-red-600 text-white' :
            'bg-blue-600 text-white'
        }`;
        
        notification.innerHTML = `
            <div class="flex items-center space-x-3">
                <i class="fas ${type === 'success' ? 'fa-check-circle' : type === 'error' ? 'fa-exclamation-circle' : 'fa-info-circle'}"></i>
                <span>${message}</span>
                <button class="ml-auto text-white hover:text-gray-200" onclick="this.parentElement.parentElement.remove()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        `;
        
        document.body.appendChild(notification);
        
        // Animate in
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        // Auto remove after 5 seconds
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => notification.remove(), 300);
        }, 5000);
    }
}

// Scroll Animations Manager
class ScrollAnimationsManager {
    constructor() {
        this.animatedElements = document.querySelectorAll('.scroll-animate');
        this.init();
    }

    init() {
        this.setupIntersectionObserver();
    }

    setupIntersectionObserver() {
        const options = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, options);

        this.animatedElements.forEach(element => {
            observer.observe(element);
        });
    }
}

// Back to Top Manager
class BackToTopManager {
    constructor() {
        this.backToTopBtn = document.getElementById('back-to-top');
        this.init();
    }

    init() {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                this.backToTopBtn.classList.add('show');
            } else {
                this.backToTopBtn.classList.remove('show');
            }
        });

        this.backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
}

// Loading Manager
class LoadingManager {
    constructor() {
        this.loadingScreen = document.getElementById('loading-screen');
        this.init();
    }

    init() {
        window.addEventListener('load', () => {
            setTimeout(() => {
                this.loadingScreen.style.opacity = '0';
                setTimeout(() => {
                    this.loadingScreen.style.display = 'none';
                }, 500);
            }, 1000);
        });
    }
}

// Performance Optimization
class PerformanceManager {
    constructor() {
        this.init();
    }

    init() {
        this.lazyLoadImages();
        this.preloadCriticalResources();
    }

    lazyLoadImages() {
        const images = document.querySelectorAll('img[data-src]');
        
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        images.forEach(img => imageObserver.observe(img));
    }

    preloadCriticalResources() {
        const criticalImages = [
            'https://images.pexels.com/photos/128867/coins-currency-investment-insurance-128867.jpeg',
            'https://images.pexels.com/photos/844923/pexels-photo-844923.jpeg'
        ];

        criticalImages.forEach(src => {
            const link = document.createElement('link');
            link.rel = 'preload';
            link.as = 'image';
            link.href = src;
            document.head.appendChild(link);
        });
    }
}

// Analytics Manager
class AnalyticsManager {
    constructor() {
        this.init();
    }

    init() {
        this.trackPageView();
        this.trackUserInteractions();
    }

    trackPageView() {
        // Track page view
        console.log('Page view tracked:', window.location.pathname);
    }

    trackUserInteractions() {
        // Track button clicks
        document.addEventListener('click', (e) => {
            if (e.target.matches('.btn-primary, .btn-secondary')) {
                console.log('Button clicked:', e.target.textContent.trim());
            }
        });

        // Track form submissions
        document.addEventListener('submit', (e) => {
            console.log('Form submitted:', e.target.id);
        });

        // Track section views
        const sections = document.querySelectorAll('section[id]');
        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    console.log('Section viewed:', entry.target.id);
                }
            });
        }, { threshold: 0.5 });

        sections.forEach(section => sectionObserver.observe(section));
    }
}

// Initialize Application
document.addEventListener('DOMContentLoaded', () => {
    // Initialize all managers
    new LoadingManager();
    new LanguageManager();
    new NavigationManager();
    new ProductTabsManager();
    new FormManager();
    new ScrollAnimationsManager();
    new BackToTopManager();
    new PerformanceManager();
    new AnalyticsManager();

    // Add scroll animations to elements
    const elementsToAnimate = document.querySelectorAll('.service-card, .product-card, .section-title, .section-subtitle');
    elementsToAnimate.forEach(element => {
        element.classList.add('scroll-animate');
    });

    console.log('Alrafe Gold website initialized successfully');
});

// Error Handling
window.addEventListener('error', (e) => {
    console.error('JavaScript error:', e.error);
});

window.addEventListener('unhandledrejection', (e) => {
    console.error('Unhandled promise rejection:', e.reason);
});

// Utility Functions
const utils = {
    // Format currency
    formatCurrency: (amount, currency = 'USD') => {
        return new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: currency
        }).format(amount);
    },

    // Format date
    formatDate: (date, locale = 'en-US') => {
        return new Intl.DateTimeFormat(locale, {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        }).format(new Date(date));
    },

    // Debounce function
    debounce: (func, wait) => {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    },

    // Throttle function
    throttle: (func, limit) => {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    }
};

// Export for potential module usage
if (typeof module !== 'undefined' && module.exports) {
    module.exports = {
        LanguageManager,
        NavigationManager,
        ProductTabsManager,
        FormManager,
        utils
    };
}