<nav class="bg-white/95 backdrop-blur-md shadow-lg border-b border-slate-200 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-gradient-to-r from-amber-500 to-orange-500 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                            <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1V8a1 1 0 00-1-1h-3z"/>
                        </svg>
                    </div>
                    <span class="text-2xl font-bold bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent">OnlyCars</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="{{ route('home') }}" class="text-slate-700 hover:text-amber-600 px-3 py-2 rounded-lg text-sm font-medium transition-colors duration-200 hover:bg-amber-50">
                        Home
                    </a>
                    <a href="{{ route('events.index') }}" class="text-slate-700 hover:text-amber-600 px-3 py-2 rounded-lg text-sm font-medium transition-colors duration-200 hover:bg-amber-50">
                        Events
                    </a>
                    <a href="{{ route('galeris.index') }}" class="text-slate-700 hover:text-amber-600 px-3 py-2 rounded-lg text-sm font-medium transition-colors duration-200 hover:bg-amber-50">
                        Gallery
                    </a>
                    <a href="{{ route('merchandises.index') }}" class="text-slate-700 hover:text-amber-600 px-3 py-2 rounded-lg text-sm font-medium transition-colors duration-200 hover:bg-amber-50">
                        Merchandise
                    </a>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="hidden md:block">
                <a href="{{ route('events.index') }}" class="bg-gradient-to-r from-amber-500 to-orange-500 text-white px-6 py-2 rounded-xl font-semibold hover:from-amber-600 hover:to-orange-600 transform hover:scale-105 transition-all duration-200 shadow-lg">
                    Join Community
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button" class="text-slate-700 hover:text-amber-600 focus:outline-none focus:text-amber-600 p-2" onclick="toggleMobileMenu()">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-slate-200">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ route('home') }}" class="text-slate-700 hover:text-amber-600 block px-3 py-2 rounded-lg text-base font-medium transition-colors duration-200">
                Home
            </a>
            <a href="{{ route('events.index') }}" class="text-slate-700 hover:text-amber-600 block px-3 py-2 rounded-lg text-base font-medium transition-colors duration-200">
                Events
            </a>
            <a href="{{ route('galeris.index') }}" class="text-slate-700 hover:text-amber-600 block px-3 py-2 rounded-lg text-base font-medium transition-colors duration-200">
                Gallery
            </a>
            <a href="{{ route('merchandises.index') }}" class="text-slate-700 hover:text-amber-600 block px-3 py-2 rounded-lg text-base font-medium transition-colors duration-200">
                Merchandise
            </a>
            <a href="{{ route('events.index') }}" class="bg-gradient-to-r from-amber-500 to-orange-500 text-white block px-3 py-2 rounded-lg text-base font-medium mt-4 text-center">
                Join Community
            </a>
        </div>
    </div>
</nav>

<script>
function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
}
</script>
