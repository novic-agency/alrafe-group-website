    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <nav class="w-full border-b border-gray-200">
       
        <div class="hidden md:flex justify-end items-center py-1 px-6 md:px-12 text-sm bg-white gap-6">
            <a href="#" class="nav-link text-gray-700 hover:text-[#1A2A4D] transition">Insights</a>
            <a href="#" class="nav-link text-gray-700 hover:text-[#1A2A4D] transition">Help Center</a>
           
            <div class="relative group">
                <button id="langDropdownBtn" class="nav-link flex items-center gap-1 text-gray-700 hover:text-[#1A2A4D] focus:outline-none transition">
                    EN <svg class="w-3 h-3 align-middle" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div id="langDropdown" class="dropdown-menu absolute right-0 mt-2 w-28 bg-white border border-gray-200 rounded shadow-lg z-20 hidden">
                    <button class="block w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-700" data-lang="en">English</button>
                    <button class="block w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-700" data-lang="ar">العربية</button>
                </div>
            </div>
            
            <div class="relative">
    <input id="searchInput" type="text" placeholder="Search..." 
        class="transition-all duration-300 w-8 focus:w-40 px-2 py-1 bg-gray-100 rounded border-none outline-none text-gray-700 placeholder:text-gray-400 opacity-0 focus:opacity-100"
        autocomplete="off"
    />
    <svg class="absolute right-2 top-1.5 w-4 h-4 text-gray-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <circle cx="11" cy="11" r="8" stroke-width="2"></circle>
        <line x1="21" y1="21" x2="16.65" y2="16.65" stroke-width="2"></line>
    </svg>
</div>
        </div>
    
        
        <div class="flex md:hidden justify-between items-center py-1 px-4 bg-white">
            <div class="relative">
                <button id="quickLinksBtn" class="flex items-center gap-1 text-gray-700 text-sm font-medium focus:outline-none">
                    Quick Links <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div id="quickLinksDropdown" class="dropdown-menu absolute left-0 mt-2 w-40 bg-white border border-gray-200 rounded shadow-lg z-20 hidden">
                    <a href="#" class="block px-4 py-2 hover:bg-gray-50 text-gray-700">Insights</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-50 text-gray-700">Help Center</a>
                    <div class="border-t border-gray-100"></div>
                    <div class="px-4 py-2">
                        <span class="block text-xs text-gray-400 mb-1">Language</span>
                        <button class="block w-full text-left py-1 hover:bg-gray-50 text-gray-700" data-lang="en">English</button>
                        <button class="block w-full text-left py-1 hover:bg-gray-50 text-gray-700" data-lang="ar">العربية</button>
                    </div>
                </div>
            </div>
            
            <div class="relative">
    <input id="mobileSearchInput" type="text" placeholder="Search..." 
        class="transition-all duration-300 w-8 focus:w-40 px-2 py-1 bg-gray-100 rounded border-none outline-none text-gray-700 placeholder:text-gray-400 opacity-0 focus:opacity-100"
        autocomplete="off"
    />
    <svg class="absolute right-2 top-1.5 w-4 h-4 text-gray-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <circle cx="11" cy="11" r="8" stroke-width="2"></circle>
        <line x1="21" y1="21" x2="16.65" y2="16.65" stroke-width="2"></line>
    </svg>
</div>
        </div>
        
        <div class="flex items-center justify-between bg-white border-b border-gray-200 px-6 md:px-12 py-3 relative">
            <!-- Logo -->
            <div class="flex items-center">
    <span class="text-2xl font-bold" style="font-family: 'Playfair Display', serif;">
        ALRAFE
    </span>
    <span class="ml-2 text-xl font-extrabold tracking-tight text-[#D4AF37] font-sans" style="letter-spacing:0.04em;">
        .GROUP
    </span>
</div>
            
            <div class="hidden md:flex flex-1 justify-center gap-8">
                
                <div class="relative group">
                    <button class="nav-link flex items-center gap-1 text-gray-800 font-medium focus:outline-none">
                        Businesses <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="dropdown-menu absolute left-0 mt-2 w-44 bg-white border border-gray-200 rounded shadow-lg z-20 hidden group-hover:block">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-50 text-gray-700">Business 1</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-50 text-gray-700">Business 2</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-50 text-gray-700">Business 3</a>
                    </div>
                </div>
                
                <div class="relative group">
                    <button class="nav-link flex items-center gap-1 text-gray-800 font-medium focus:outline-none">
                        Ecosystems <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="dropdown-menu absolute left-0 mt-2 w-44 bg-white border border-gray-200 rounded shadow-lg z-20 hidden group-hover:block">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-50 text-gray-700">Gold</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-50 text-gray-700">Jewelry</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-50 text-gray-700">Clothes</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-50 text-gray-700">Tech</a>
                    </div>
                </div>
                
                <div class="relative group">
                    <button class="nav-link flex items-center gap-1 text-gray-800 font-medium focus:outline-none">
                        Destinations <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="dropdown-menu absolute left-0 mt-2 w-44 bg-white border border-gray-200 rounded shadow-lg z-20 hidden group-hover:block">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-50 text-gray-700">Egypt</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-50 text-gray-700">Uganda</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-50 text-gray-700">UAE</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-50 text-gray-700">South Sudan</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-50 text-gray-700">Saudi Arabia</a>
                    </div>
                </div>
            </div>
            
            <div class="hidden md:flex">
                <a href="#" class="ml-8 px-5 py-2 rounded bg-[#1A2A4D] text-white font-semibold hover:bg-[#D4AF37] hover:text-[#1A2A4D] transition">Contact Us</a>
            </div>
            
            <button id="mobileMenuBtn" class="md:hidden flex items-center justify-center w-10 h-10 rounded focus:outline-none">
                <svg class="w-7 h-7 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        </div>