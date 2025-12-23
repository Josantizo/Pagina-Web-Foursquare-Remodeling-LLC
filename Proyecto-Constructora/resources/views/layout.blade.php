<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f97316">
    <title>Foursquare Remodeling LLC</title>
    <link rel="icon" type="image/jpeg" sizes="32x32" href="{{ asset('images/logo-foursquare.jpg') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo-foursquare.jpg') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-gradient-to-b from-orange-50 via-white to-teal-50 text-teal-800 font-sans">
    <!-- Header & Navigation -->
    <header class="sticky top-0 z-40 border-b border-orange-100/80 bg-white/95 backdrop-blur">
        <div class="container mx-auto flex items-center px-4 py-3 relative">
            <a href="/" class="flex items-center gap-3 flex-shrink-0">
                <img src="{{ asset('images/logo-foursquare.jpg') }}" alt="Foursquare Remodeling LLC logo" class="h-9 w-auto rounded border border-orange-100 shadow-sm object-contain">
                <div class="leading-tight">
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-orange-500">Foursquare</p>
                    <p class="text-base font-bold text-teal-600">Remodeling LLC</p>
                </div>
            </a>
            <!-- Desktop Nav - Centered -->
            <nav class="hidden md:flex items-center gap-6 text-sm font-semibold text-teal-700 absolute left-1/2 transform -translate-x-1/2">
                @foreach (['Home' => '/', 'About' => '/about', 'Services' => '/services', 'Gallery' => '/gallery', 'Handyman' => '/handyman'] as $label => $url)
                    <a href="{{ $url }}" class="hover:text-orange-500 transition">{{ $label }}</a>
                @endforeach
            </nav>
            <!-- Social Media Icons - Desktop & Mobile (Always Visible) -->
            <div class="flex items-center gap-2 ml-auto">
                @if(config('social.enabled.facebook'))
                <a href="{{ config('social.facebook') }}" target="_blank" rel="noopener noreferrer" 
                   class="flex items-center justify-center w-9 h-9 rounded-full bg-blue-600 hover:bg-blue-700 transition-all duration-300 hover:scale-110 shadow-md hover:shadow-lg" 
                   aria-label="Send us a message on Facebook">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
                @endif
                @if(config('social.enabled.instagram'))
                <a href="{{ config('social.instagram') }}" target="_blank" rel="noopener noreferrer" 
                   class="flex items-center justify-center w-9 h-9 rounded-full bg-gradient-to-r from-purple-500 via-pink-500 to-orange-500 hover:from-purple-600 hover:via-pink-600 hover:to-orange-600 transition-all duration-300 hover:scale-110 shadow-md hover:shadow-lg" 
                   aria-label="Send us a message on Instagram">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
                @endif
            </div>
            <!-- Mobile Hamburger -->
            <button id="mobile-menu-button" class="md:hidden flex flex-col justify-center items-center gap-1.5 p-2 rounded-lg border border-orange-100 text-slate-700 focus:outline-none focus:ring-2 focus:ring-orange-200 ml-2 w-10 h-10 relative" aria-label="Toggle menu">
                <span id="hamburger-line-1" class="block h-0.5 w-6 bg-current transition-all duration-300 origin-center"></span>
                <span id="hamburger-line-2" class="block h-0.5 w-6 bg-current transition-all duration-300 origin-center"></span>
                <span id="hamburger-line-3" class="block h-0.5 w-6 bg-current transition-all duration-300 origin-center"></span>
            </button>
        </div>
        <!-- Mobile Menu -->
        <nav id="mobile-menu" class="md:hidden hidden flex-col px-4 py-6 bg-white border-t border-orange-100 shadow-lg animate-slide-down">
            <div class="space-y-1">
                @foreach (['Home' => '/', 'About' => '/about', 'Services' => '/services', 'Gallery' => '/gallery', 'Handyman' => '/handyman'] as $label => $url)
                    <a href="{{ $url }}" class="block py-3 px-4 rounded-lg text-base font-semibold text-teal-700 hover:bg-orange-50 hover:text-orange-600 transition-all duration-200 transform hover:translate-x-1">
                        {{ $label }}
                    </a>
                @endforeach
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="flex-1 container mx-auto px-4 py-12">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-100 py-8">
        <div class="container mx-auto px-4">
            <div class="text-center text-sm space-y-1">
                <p>&copy; {{ date('Y') }} Foursquare Remodeling LLC. All rights reserved.</p>
                <p class="text-slate-400">Fully licensed & insured • Serving the greater DMV area</p>
            </div>
        </div>
    </footer>

    <style>
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-slide-down {
            animation: slideDown 0.3s ease-out;
        }
    </style>
    <script>
        // Hamburger menu toggle with animation
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        const line1 = document.getElementById('hamburger-line-1');
        const line2 = document.getElementById('hamburger-line-2');
        const line3 = document.getElementById('hamburger-line-3');
        
        function resetHamburger() {
            if (line1 && line2 && line3) {
                line1.style.transform = '';
                line1.style.position = '';
                line1.style.top = '';
                line1.style.left = '';
                line2.style.opacity = '1';
                line3.style.transform = '';
                line3.style.position = '';
                line3.style.top = '';
                line3.style.left = '';
            }
        }
        
        function transformToX() {
            if (line1 && line2 && line3) {
                // Position both lines at the exact center of the button using 50% positioning
                line1.style.position = 'absolute';
                line1.style.top = '50%';
                line1.style.left = '50%';
                line1.style.transform = 'translate(-50%, -50%) rotate(45deg)';
                
                // Hide middle line
                line2.style.opacity = '0';
                
                // Position line 3 at the same center point
                line3.style.position = 'absolute';
                line3.style.top = '50%';
                line3.style.left = '50%';
                line3.style.transform = 'translate(-50%, -50%) rotate(-45deg)';
            }
        }
        
        btn && btn.addEventListener('click', () => {
            const isHidden = menu.classList.contains('hidden');
            
            if (isHidden) {
                menu.classList.remove('hidden');
                transformToX();
            } else {
                menu.classList.add('hidden');
                resetHamburger();
            }
        });
        
        // Close menu when clicking on a link
        const menuLinks = menu?.querySelectorAll('a');
        menuLinks?.forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
                resetHamburger();
            });
        });
    </script>
</body>
</html> 