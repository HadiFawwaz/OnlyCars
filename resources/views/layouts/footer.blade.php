<footer class="backdrop-blur-lg bg-gray-900/90 text-gray-300 mt-16 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-10">

        {{-- Brand --}}
        <div>
            <h2 class="text-2xl font-bold bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                OnlyCars
            </h2>
            <p class="text-gray-400 mt-3 leading-relaxed">
                Komunitas otomotif untuk berbagi pengalaman, mengikuti kegiatan, dan mempererat silaturahmi antar pecinta mobil.
            </p>
        </div>

        {{-- Menu --}}
        <div>
            <h2 class="text-xl font-semibold text-white mb-4">Menu</h2>
            <ul class="space-y-3 font-medium">
                <li>
                    <a href="{{ route('events.index') }}" 
                       class="relative hover:text-yellow-400 transition 
                       {{ request()->routeIs('events.*') ? 'text-yellow-400 font-semibold' : '' }}">
                       Events
                    </a>
                </li>
                <li>
                    <a href="{{ route('galeris.index') }}" 
                       class="relative hover:text-yellow-400 transition 
                       {{ request()->routeIs('galeris.*') ? 'text-yellow-400 font-semibold' : '' }}">
                       Galeri
                    </a>
                </li>
                <li>
                    <a href="{{ route('merchandises.index') }}" 
                       class="relative hover:text-yellow-400 transition 
                       {{ request()->routeIs('merchandises.*') ? 'text-yellow-400 font-semibold' : '' }}">
                       Merchandise
                    </a>
                </li>
            </ul>
        </div>

        {{-- Social --}}
        {{-- Social (tanpa logo) --}}
<div>
    <h2 class="text-xl font-semibold text-white mb-4">Ikuti Kami</h2>
    <ul class="space-y-2 text-gray-300">
        <li>
            <a href="https://facebook.com/OnlyCarsID" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-gray-800/60 hover:bg-gray-700 transition">
               Facebook — <span class="font-semibold">@OnlyCarsID</span>
            </a>
        </li>
        <li>
            <a href="https://instagram.com/OnlyCarsID" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-gray-800/60 hover:bg-gray-700 transition">
               Instagram — <span class="font-semibold">@OnlyCarsID</span>
            </a>
        </li>
        <li>
            <a href="https://x.com/OnlyCarsID" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-gray-800/60 hover:bg-gray-700 transition">
               X (Twitter) — <span class="font-semibold">@OnlyCarsID</span>
            </a>
        </li>
        <li>
            <a href="https://youtube.com/@OnlyCarsID" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-gray-800/60 hover:bg-gray-700 transition">
               YouTube — <span class="font-semibold">@OnlyCarsID</span>
            </a>
        </li>
    </ul>
</div>


    <div class="border-t border-gray-800 text-center py-5 text-gray-500 text-sm">
        © {{ date('Y') }} <span class="text-yellow-400 font-semibold">OnlyCars</span>. All rights reserved.
    </div>
</footer>

{{-- Tambahin di layout utama (app.blade.php) untuk ikon --}}
<script src="https://kit.fontawesome.com/your-awesome-kit.js" crossorigin="anonymous"></script>
