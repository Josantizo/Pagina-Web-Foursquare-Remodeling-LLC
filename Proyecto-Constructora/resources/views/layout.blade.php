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
            <!-- Mobile Hamburger -->
            <button id="mobile-menu-button" class="md:hidden flex flex-col gap-1.5 p-2 rounded-lg border border-orange-100 text-slate-700 focus:outline-none focus:ring-2 focus:ring-orange-200 ml-auto" aria-label="Toggle menu">
                <span class="block h-0.5 w-6 bg-current"></span>
                <span class="block h-0.5 w-6 bg-current"></span>
                <span class="block h-0.5 w-6 bg-current"></span>
            </button>
        </div>
        <!-- Mobile Menu -->
        <nav id="mobile-menu" class="md:hidden hidden flex-col gap-2 px-4 pb-4 text-sm font-semibold text-teal-700 bg-white border-t border-orange-100">
            @foreach (['Home' => '/', 'About' => '/about', 'Services' => '/services', 'Gallery' => '/gallery', 'Handyman' => '/handyman'] as $label => $url)
                <a href="{{ $url }}" class="py-1 hover:text-orange-500 transition">{{ $label }}</a>
            @endforeach
        </nav>
    </header>

    <!-- Main Content -->
    <main class="flex-1 container mx-auto px-4 py-12">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-100 py-8">
        <div class="container mx-auto text-center text-sm space-y-1">
            <p>&copy; {{ date('Y') }} Foursquare Remodeling LLC. All rights reserved.</p>
            <p class="text-slate-400">Fully licensed & insured • Serving the greater DMV area</p>
        </div>
    </footer>

    <script>
        // Hamburger menu toggle
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        btn && btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html> 