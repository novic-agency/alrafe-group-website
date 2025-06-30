<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alrafe Gold - Premium Gold Division | Excellence in Gold Trading & Manufacturing</title>
    <meta name="description" content="Alrafe Gold - Premium gold division specializing in gold trading, manufacturing, testing, and certification. Your trusted partner in gold excellence.">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Cairo:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="styles.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold: {
                            50: '#fefbf3',
                            100: '#fdf4e1',
                            200: '#fae6c1',
                            300: '#f6d192',
                            400: '#f0b760',
                            500: '#D4AF37',
                            600: '#c5941f',
                            700: '#a4791a',
                            800: '#85611a',
                            900: '#6d4f19'
                        },
                        dark: {
                            50: '#4a4a4a',
                            100: '#3a3a3a',
                            200: '#2a2a2a',
                            300: '#1f1f1f',
                            400: '#1a1a1a',
                            500: '#141414',
                            600: '#0f0f0f',
                            700: '#0e0e0e',
                            800: '#0a0a0a',
                            900: '#000000'
                        }
                    },
                    fontFamily: {
                        'playfair': ['Playfair Display', 'serif'],
                        'inter': ['Inter', 'sans-serif'],
                        'cairo': ['Cairo', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-dark-700 text-white overflow-x-hidden">
    <!-- Loading Screen -->
    <div id="loading-screen" class="fixed inset-0 bg-dark-900 z-50 flex items-center justify-center">
        <div class="text-center">
            <div class="animate-spin rounded-full h-16 w-16 border-t-2 border-gold-500 mx-auto mb-4"></div>
            <p class="text-gold-500 font-playfair text-xl">Loading Excellence...</p>
        </div>
    </div>

    <!-- Navigation -->
    <nav id="navbar" class="fixed top-0 w-full z-40 transition-all duration-300 bg-dark-900/90 backdrop-blur-lg border-b border-gold-500/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-16 bg-gradient-to-b from-gold-400 to-gold-600 rounded-lg flex items-center justify-center">
                        <img src="assets/logo/alrafe-gold-logo.png" alt="Alrafe Gold Logo" class="w-10 h-10 object-contain">
                    </div>
                    <div class="hidden sm:block">
                        <h1 class="font-playfair text-2xl font-bold text-gold-500">Alrafe Gold</h1>
                        <span class="text-xs text-gray-400 uppercase tracking-wide">Premium Division</span>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#about" class="nav-link font-inter text-sm font-medium hover:text-gold-500 transition-colors" data-en="About" data-ar="حول">About</a>
                    
                    <!-- Services Dropdown -->
                    <div class="relative group">
                        <button class="nav-link font-inter text-sm font-medium hover:text-gold-500 transition-colors flex items-center space-x-1">
                            <span data-en="Services" data-ar="خدمات">Services</span>
                            <i class="fas fa-chevron-down text-xs transition-transform group-hover:rotate-180"></i>
                        </button>
                        <div class="absolute top-full left-0 mt-2 w-64 bg-dark-800 border border-gold-500/20 rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            <a href="#services" class="block px-4 py-3 hover:bg-dark-700 transition-colors border-b border-gold-500/10" data-en="Manufacturing" data-ar="التصنيع">Manufacturing</a>
                            <a href="#lab" class="block px-4 py-3 hover:bg-dark-700 transition-colors border-b border-gold-500/10" data-en="Gold Lab" data-ar="مختبر الذهب">Gold Lab</a>
                            <a href="#trading" class="block px-4 py-3 hover:bg-dark-700 transition-colors" data-en="Buying & Selling" data-ar="الشراء والبيع">Buying & Selling</a>
                        </div>
                    </div>
                    
                    <a href="#materials" class="nav-link font-inter text-sm font-medium hover:text-gold-500 transition-colors" data-en="Materials" data-ar="المواد">Materials</a>
                    <a href="#partners" class="nav-link font-inter text-sm font-medium hover:text-gold-500 transition-colors" data-en="Partners" data-ar="شركاء">Partners</a>
                    <a href="#contact" class="nav-link font-inter text-sm font-medium hover:text-gold-500 transition-colors" data-en="Contact" data-ar="اتصال">Contact</a>
                </div>

                <!-- Language Switcher & Mobile Menu -->
                <div class="flex items-center space-x-4">
                    <div class="flex items-center bg-dark-800 rounded-full p-1">
                        <button id="lang-en" class="lang-btn px-3 py-1 rounded-full text-sm font-medium transition-all duration-300 bg-gold-500 text-dark-900">EN</button>
                        <button id="lang-ar" class="lang-btn px-3 py-1 rounded-full text-sm font-medium transition-all duration-300 text-gray-400">ع</button>
                    </div>
                    
                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-btn" class="lg:hidden text-gold-500 hover:text-gold-400 transition-colors">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden bg-dark-800 border-t border-gold-500/20 transform -translate-y-full opacity-0 transition-all duration-300">
            <div class="px-4 py-6 space-y-4">
                <a href="#about" class="block py-2 hover:text-gold-500 transition-colors" data-en="About" data-ar="حول">About</a>
                <a href="#services" class="block py-2 hover:text-gold-500 transition-colors" data-en="Our Services" data-ar="خدماتنا">Our Services</a>
                <a href="#lab" class="block py-2 hover:text-gold-500 transition-colors" data-en="Gold Lab" data-ar="مختبر الذهب">Gold Lab</a>
                <a href="#manufacturing" class="block py-2 hover:text-gold-500 transition-colors" data-en="Manufacturing" data-ar="التصنيع">Manufacturing</a>
                <a href="#trading" class="block py-2 hover:text-gold-500 transition-colors" data-en="Trading" data-ar="التجارة">Trading</a>
                <a href="#materials" class="block py-2 hover:text-gold-500 transition-colors" data-en="Materials" data-ar="المواد">Materials</a>
                <a href="#partners" class="block py-2 hover:text-gold-500 transition-colors" data-en="Partners" data-ar="شركاء">Partners</a>
                <a href="#contact" class="block py-2 hover:text-gold-500 transition-colors" data-en="Contact" data-ar="اتصال">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-dark-900 via-dark-800 to-dark-700"></div>
        <div class="absolute inset-0 bg-[url('assets/gold-hero.png')] bg-cover bg-center opacity-10"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-dark-900/90 via-transparent to-dark-900/50"></div>
        
        <!-- Gold Particles Animation -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="gold-particle"></div>
            <div class="gold-particle"></div>
            <div class="gold-particle"></div>
            <div class="gold-particle"></div>
            <div class="gold-particle"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 text-center max-w-5xl mx-auto px-4">
            
            <h1 class="font-playfair text-5xl md:text-7xl font-bold mb-6 leading-tight animate-fade-in-up animation-delay-200">
                <span class="block text-gold-500" data-en="Gold is our craft." data-ar="الذهب حرفتنا.">Gold is our craft.</span>
                <span class="block text-white" data-en="Excellence is our signature." data-ar="التميز توقيعنا.">Excellence is our signature.</span>
            </h1>
            
            <p class="font-inter text-xl md:text-2xl text-gray-300 mb-12 max-w-3xl mx-auto leading-relaxed animate-fade-in-up animation-delay-400" data-en="Discover the pinnacle of gold trading, manufacturing, and certification with Alrafe Gold - where tradition meets innovation in the world of precious metals." data-ar="اكتشف قمة تجارة الذهب والتصنيع والتصديق مع الأعراف الذهب - حيث يلتقي التقليد بالابتكار في عالم المعادن الثمينة.">
                Discover the pinnacle of gold trading, manufacturing, and certification with Alrafe Gold - where tradition meets innovation in the world of precious metals.
            </p>
            
            <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-6 animate-fade-in-up animation-delay-600">
                <a href="#about" class="btn-primary">
                    <span data-en="Explore Our Heritage" data-ar="استكشف تراثنا">Explore Our Heritage</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
                <a href="#contact" class="btn-secondary">
                    <span data-en="Start Partnership" data-ar="ابدأ الشراكة">Start Partnership</span>
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <div class="flex flex-col items-center space-y-2 text-gold-500">
                <span class="text-sm font-inter" data-en="Scroll to explore" data-ar="انتقل للاستكشاف">Scroll to explore</span>
                <i class="fas fa-chevron-down text-xl"></i>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <?php include 'sections/about.php'; ?>

    <!-- Services Section -->
    <?php include 'sections/services.php'; ?>

    <!-- Gold Lab Section -->
    <?php include 'sections/lab.php'; ?>

    <!-- Manufacturing Section -->
    <?php include 'sections/manufacturing.php'; ?>

    <!-- Trading Section -->
    <?php include 'sections/trading.php'; ?>

    <!-- Materials & Products Section -->
    <?php include 'sections/materials.php'; ?>

    <!-- Partners Section -->
    <?php include 'sections/partners.php'; ?>

    <!-- Contact Section -->
    <?php include 'sections/contact.php'; ?>

    <!-- Footer -->
    <?php include 'sections/footer.php'; ?>
    
    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-8 right-8 w-12 h-12 bg-gold-500 hover:bg-gold-600 text-dark-900 rounded-full shadow-lg transition-all duration-300 opacity-0 invisible">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Scripts -->
    <script src="script.js"></script>
</body>
</html>