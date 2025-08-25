@extends('app')

@section('title', 'Home')

@section('content')
<div class="space-y-32">

    {{-- HERO --}}
    <section class="relative bg-gradient-to-r from-gray-900 via-black to-gray-900 text-white rounded-3xl overflow-hidden shadow-2xl" data-aos="fade-up">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a?auto=format&fit=crop&w=1950&q=80" 
                 alt="Cars" class="w-full h-full object-cover opacity-20">
        </div>
        <div class="relative px-8 py-28 text-center max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6">
                Gabung Komunitas Otomotif <span class="text-yellow-400">OnlyCars</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-300 mb-8 leading-relaxed">
                Event seru, dokumentasi keren, hingga merchandise eksklusif untuk kamu pecinta mobil.
            </p>
            <div class="flex justify-center gap-4">
                <a href="#event" class="px-8 py-3 bg-yellow-500 text-black font-bold rounded-xl shadow-lg hover:bg-yellow-400 hover:scale-105 transition">
                    Lihat Event
                </a>
            </div>
        </div>
    </section>

    {{-- EVENT --}}
    <section id="event" class="max-w-7xl mx-auto px-6" data-aos="fade-up">
        <div class="flex justify-between items-center mb-10">
            <h2 class="text-4xl font-bold text-gray-900">Event Terbaru</h2>
            <a href="{{ route('events.index') }}" class="px-5 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition">
                Lihat Semua Event
            </a>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            @forelse($events as $event)
                <div class="bg-white shadow-lg rounded-2xl overflow-hidden group hover:scale-[1.02] hover:shadow-2xl transition" data-aos="zoom-in">
                    <a href="{{ route('events.show', $event->id) }}">
                        <img src="{{ asset('storage/' . $event->cover_image) }}" class="h-48 w-full object-cover group-hover:opacity-90 transition" alt="">
                        <div class="p-5 text-gray-900">
                            <h3 class="font-semibold text-xl mb-1">{{ $event->title }}</h3>
                            <p class="text-sm text-gray-600 mb-2">{{ $event->location }} | {{ $event->date }}</p>
                            <p class="text-sm text-gray-700">{{ Str::limit($event->description, 100) }}</p>
                        </div>
                    </a>
                </div>
            @empty
                <p class="text-gray-500">Belum ada event</p>
            @endforelse
        </div>
    </section>

    {{-- GALERI --}}
    <section id="galeri" class="bg-gray-100 py-16" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-4xl font-bold text-gray-900">Galeri Dokumentasi</h2>
                <a href="{{ route('galeris.index') }}" class="px-5 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition">
                    Lihat Semua Foto
                </a>
            </div>
            <div class="grid md:grid-cols-4 gap-6">
                @forelse($galeris as $foto)
                    <a href="{{ route('galeris.show', $foto->id) }}" 
                       class="relative rounded-2xl overflow-hidden group shadow-md hover:scale-105 transition block" data-aos="zoom-in">
                        <img src="{{ asset('storage/' . $foto->image_dokumentasi) }}" 
                             class="h-80 w-full object-cover group-hover:opacity-80 transition" alt="">
                        <div class="absolute inset-0 bg-black/60 flex items-center justify-center text-white text-lg opacity-0 group-hover:opacity-100 transition">
                            {{ $foto->title }}
                        </div>
                    </a>
                @empty
                    <p class="text-gray-500">Belum ada foto dokumentasi</p>
                @endforelse
            </div>
        </div>
    </section>

    {{-- MERCH --}}
    <section id="merch" class="max-w-7xl mx-auto px-6" data-aos="fade-up">
        <div class="flex justify-between items-center mb-10">
            <h2 class="text-4xl font-bold text-gray-900">Merchandise Eksklusif</h2>
            <a href="{{ route('merchandises.index') }}" class="px-5 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition">
                Lihat Semua Produk
            </a>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            @forelse($merchandises as $item)
                <div class="bg-white shadow-xl rounded-2xl p-6 text-center group hover:scale-[1.02] hover:shadow-2xl transition" data-aos="zoom-in">
                    <a href="{{ route('merchandises.show', $item->id) }}">
                        <img src="{{ asset('storage/' . $item->image_merch) }}" 
                             class="rounded-xl mb-4 h-44 w-full object-cover group-hover:opacity-90 transition" alt="">
                        <h3 class="font-bold text-xl text-gray-900">{{ $item->name }}</h3>
                        <p class="text-yellow-600 font-bold text-lg">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                        <p class="text-sm text-gray-600 mt-2">{{ Str::limit($item->description, 90) }}</p>
                    </a>
                </div>
            @empty
                <p class="text-gray-500">Belum ada merchandise</p>
            @endforelse
        </div>
    </section>

    {{-- CTA AKHIR --}}
    <section class="bg-gradient-to-r from-yellow-500 to-orange-500 text-black py-20 text-center rounded-3xl shadow-xl" data-aos="fade-up">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-6">Gabung dan Ramaikan Komunitas OnlyCars</h2>
        <p class="text-lg mb-8 text-gray-800">Ikuti event, abadikan momen, dan dapatkan merchandise eksklusif hanya di sini.</p>
        <a href="{{ route('events.index') }}" class="px-8 py-3 bg-black text-white font-bold rounded-xl shadow-lg hover:scale-110 transition">
            Mulai Sekarang
        </a>
    </section>

</div>

{{-- Tambah AOS --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 900,
    easing: 'ease-in-out',
    once: true
  });
</script>
@endsection
