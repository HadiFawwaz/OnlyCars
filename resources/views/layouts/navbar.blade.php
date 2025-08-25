<nav id="navbar" 
     class="fixed top-4 left-1/2 -translate-x-1/2 z-50 
            backdrop-blur-lg bg-gray-900/70 text-white shadow-lg 
            border border-gray-700 rounded-2xl px-6 py-3 
            w-[90%] max-w-6xl transition-all duration-300">
    <div class="flex justify-between items-center">
        
        {{-- Logo --}}
        <a href="{{ url('/') }}" class="flex items-center gap-2">
            <span class="font-bold text-xl tracking-wide bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                OnlyCars
            </span>
        </a>
        
        {{-- Desktop Menu --}}
        <div class="hidden md:flex space-x-6 font-medium">
            <a href="{{ url('/') }}" 
               class="relative px-2 py-1 transition 
               {{ request()->is('/') ? 'text-yellow-400 after:absolute after:left-0 after:bottom-0 after:w-full after:h-[2px] after:bg-yellow-400 after:rounded-full' : 'hover:text-yellow-400' }}">
               Home
            </a>
            <a href="{{ route('events.index') }}" 
               class="relative px-2 py-1 transition 
               {{ request()->routeIs('events.*') ? 'text-yellow-400 after:absolute after:left-0 after:bottom-0 after:w-full after:h-[2px] after:bg-yellow-400 after:rounded-full' : 'hover:text-yellow-400' }}">
               Events
            </a>
            <a href="{{ route('galeris.index') }}" 
               class="relative px-2 py-1 transition 
               {{ request()->routeIs('galeris.*') ? 'text-yellow-400 after:absolute after:left-0 after:bottom-0 after:w-full after:h-[2px] after:bg-yellow-400 after:rounded-full' : 'hover:text-yellow-400' }}">
               Galeri
            </a>
            <a href="{{ route('merchandises.index') }}" 
               class="relative px-2 py-1 transition 
               {{ request()->routeIs('merchandises.*') ? 'text-yellow-400 after:absolute after:left-0 after:bottom-0 after:w-full after:h-[2px] after:bg-yellow-400 after:rounded-full' : 'hover:text-yellow-400' }}">
               Merchandise
            </a>
        </div>

        {{-- Mobile Button --}}
        <button id="menu-btn" class="md:hidden text-2xl focus:outline-none">
            ☰
        </button>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" 
         class="hidden md:hidden mt-3 bg-gray-900/95 backdrop-blur-lg rounded-xl px-6 pb-4 space-y-2 shadow-lg">
        <a href="{{ url('/') }}" class="block py-2 rounded-md px-3 transition {{ request()->is('/') ? 'bg-yellow-500 text-black font-semibold' : 'hover:bg-gray-700' }}">Home</a>
        <a href="{{ route('events.index') }}" class="block py-2 rounded-md px-3 transition {{ request()->routeIs('events.*') ? 'bg-yellow-500 text-black font-semibold' : 'hover:bg-gray-700' }}">Events</a>
        <a href="{{ route('galeris.index') }}" class="block py-2 rounded-md px-3 transition {{ request()->routeIs('galeris.*') ? 'bg-yellow-500 text-black font-semibold' : 'hover:bg-gray-700' }}">Galeri</a>
        <a href="{{ route('merchandises.index') }}" class="block py-2 rounded-md px-3 transition {{ request()->routeIs('merchandises.*') ? 'bg-yellow-500 text-black font-semibold' : 'hover:bg-gray-700' }}">Merchandise</a>
    </div>
</nav>

<script>
    document.getElementById("menu-btn").addEventListener("click", function() {
        document.getElementById("mobile-menu").classList.toggle("hidden");
    });
</script>
