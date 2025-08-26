@extends('app')

@section('title', 'Home')

@section('content')
<div class="space-y-24">

    {{-- HERO --}}
    <section class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white rounded-3xl overflow-hidden shadow-2xl" data-aos="fade-up">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a?auto=format&fit=crop&w=1950&q=80" 
                 alt="Cars" class="w-full h-full object-cover opacity-30">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
        <div class="relative px-8 py-32 text-center max-w-5xl mx-auto">
            <div class="inline-flex items-center gap-2 bg-amber-500/20 backdrop-blur-sm border border-amber-500/30 rounded-full px-4 py-2 mb-6">
                <div class="w-2 h-2 bg-amber-400 rounded-full animate-pulse"></div>
                <span class="text-amber-300 text-sm font-medium">Komunitas Otomotif Terdepan</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-black mb-6 leading-tight">
                Gabung Komunitas<br>
                <span class="bg-gradient-to-r from-amber-400 to-orange-500 bg-clip-text text-transparent">OnlyCars</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 mb-10 leading-relaxed max-w-3xl mx-auto">
                Event seru, dokumentasi keren, hingga merchandise eksklusif untuk kamu pecinta mobil.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#event" class="group px-8 py-4 bg-gradient-to-r from-amber-500 to-orange-500 text-black font-bold rounded-2xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300">
                    <span class="flex items-center justify-center gap-2">
                        Lihat Event
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </span>
                </a>
                <a href="#galeri" class="px-8 py-4 bg-white/10 backdrop-blur-sm border border-white/20 text-white font-semibold rounded-2xl hover:bg-white/20 transition-all duration-300">
                    Lihat Galeri
                </a>
            </div>
        </div>
    </section>

    {{-- EVENT --}}
    <section id="event" class="max-w-7xl mx-auto px-6" data-aos="fade-up">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12 gap-4">
            <div>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-2">Event Terbaru</h2>
                <p class="text-slate-600 text-lg">Jangan sampai terlewat event seru dari komunitas</p>
            </div>
            <a href="{{ route('events.index') }}" class="group px-6 py-3 bg-slate-900 text-white rounded-xl hover:bg-slate-800 transition-all duration-300 flex items-center gap-2">
                Lihat Semua Event
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($events as $event)
                <div class="bg-white border border-slate-200 rounded-3xl overflow-hidden group hover:shadow-2xl hover:-translate-y-2 transition-all duration-500" data-aos="zoom-in">
                    <a href="{{ route('events.show', $event->id) }}" class="block">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('storage/' . $event->cover_image) }}" class="h-56 w-full object-cover group-hover:scale-110 transition-transform duration-700" alt="">
                            <div class="absolute top-4 left-4">
                                <span class="bg-amber-500 text-black px-3 py-1 rounded-full text-sm font-bold">Event</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-3 text-slate-900 group-hover:text-amber-600 transition-colors">{{ $event->title }}</h3>
                            <div class="flex items-center gap-2 text-slate-600 mb-3">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="text-sm">{{ $event->location }}</span>
                                <span class="text-slate-400">•</span>
                                <span class="text-sm">{{ $event->date }}</span>
                            </div>
                            <p class="text-slate-700 leading-relaxed">{{ Str::limit($event->description, 100) }}</p>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-span-full text-center py-16">
                    <div class="w-16 h-16 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <p class="text-slate-500 text-lg">Belum ada event tersedia</p>
                </div>
            @endforelse
        </div>
    </section>

    {{-- GALERI --}}
    <section id="galeri" class="bg-gradient-to-br from-slate-50 to-slate-100 py-20 rounded-3xl" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12 gap-4">
                <div>
                    <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-2">Galeri Dokumentasi</h2>
                    <p class="text-slate-600 text-lg">Momen-momen terbaik dari setiap event komunitas</p>
                </div>
                <a href="{{ route('galeris.index') }}" class="group px-6 py-3 bg-slate-900 text-white rounded-xl hover:bg-slate-800 transition-all duration-300 flex items-center gap-2">
                    Lihat Semua Foto
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @forelse($galeris as $foto)
                    <a href="{{ route('galeris.show', $foto->id) }}" 
                       class="relative rounded-2xl overflow-hidden group shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-500 block aspect-square" data-aos="zoom-in">
                        <img src="{{ asset('storage/' . $foto->image_dokumentasi) }}" 
                             class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-700" alt="">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-4 left-4 right-4">
                                <h3 class="text-white font-semibold text-sm">{{ $foto->title }}</h3>
                            </div>
                        </div>
                        <div class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="w-8 h-8 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full text-center py-16">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <svg class="w-8 h-8 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <p class="text-slate-500 text-lg">Belum ada foto dokumentasi</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- MERCH --}}
    <section id="merch" class="max-w-7xl mx-auto px-6" data-aos="fade-up">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12 gap-4">
            <div>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-2">Merchandise Eksklusif</h2>
                <p class="text-slate-600 text-lg">Koleksi merchandise premium untuk anggota komunitas</p>
            </div>
            <a href="{{ route('merchandises.index') }}" class="group px-6 py-3 bg-slate-900 text-white rounded-xl hover:bg-slate-800 transition-all duration-300 flex items-center gap-2">
                Lihat Semua Produk
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($merchandises as $item)
                <div class="bg-white border border-slate-200 rounded-3xl overflow-hidden group hover:shadow-2xl hover:-translate-y-2 transition-all duration-500" data-aos="zoom-in">
                    <a href="{{ route('merchandises.show', $item->id) }}" class="block">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('storage/' . $item->image_merch) }}" 
                                 class="h-64 w-full object-cover group-hover:scale-110 transition-transform duration-700" alt="">
                            <div class="absolute top-4 left-4">
                                <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-bold">Merchandise</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-xl text-slate-900 mb-2 group-hover:text-amber-600 transition-colors">{{ $item->name }}</h3>
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-2xl font-black text-amber-600">Rp {{ number_format($item->price, 0, ',', '.') }}</span>
                            </div>
                            <p class="text-slate-700 leading-relaxed">{{ Str::limit($item->description, 90) }}</p>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-span-full text-center py-16">
                    <div class="w-16 h-16 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <p class="text-slate-500 text-lg">Belum ada merchandise tersedia</p>
                </div>
            @endforelse
        </div>
    </section>

    {{-- CTA AKHIR --}}
    <section class="relative bg-gradient-to-br from-amber-500 via-orange-500 to-red-500 text-black py-24 text-center rounded-3xl shadow-2xl overflow-hidden" data-aos="fade-up">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="4"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
        <div class="relative max-w-4xl mx-auto px-6">
            <div class="inline-flex items-center gap-2 bg-black/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>
                <span class="text-black/80 text-sm font-medium">Bergabunglah Sekarang</span>
            </div>
            <h2 class="text-4xl md:text-6xl font-black mb-6 leading-tight">
                Gabung dan Ramaikan<br>
                Komunitas OnlyCars
            </h2>
            <p class="text-xl mb-10 text-black/80 max-w-2xl mx-auto leading-relaxed">
                Ikuti event, abadikan momen, dan dapatkan merchandise eksklusif hanya di sini.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('events.index') }}" class="group px-8 py-4 bg-black text-white font-bold rounded-2xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300">
                    <span class="flex items-center justify-center gap-2">
                        Mulai Sekarang
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </span>
                </a>
                <a href="#galeri" class="px-8 py-4 bg-white/20 backdrop-blur-sm border border-white/30 text-black font-semibold rounded-2xl hover:bg-white/30 transition-all duration-300">
                    Lihat Galeri
                </a>
            </div>
        </div>
    </section>

</div>

{{-- Tambah AOS --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    easing: 'ease-out-cubic',
    once: true,
    offset: 100
  });
</script>
@endsection
