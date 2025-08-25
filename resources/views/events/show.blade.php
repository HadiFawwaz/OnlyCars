@extends('app')

@section('title', 'Daftar Event')

@section('content')
<div class="max-w-7xl mx-auto">
    <h1 class="text-4xl font-extrabold text-gray-900 mb-10 text-center">
        Daftar Event Komunitas
    </h1>

    {{-- Jika ada event --}}
    @if($events->count())
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($events as $event)
                <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-1">
                    
                    {{-- Cover --}}
                    <a href="{{ route('events.show', $event->id) }}">
                        <img src="{{ asset('storage/'.$event->cover_image) }}" 
                             alt="{{ $event->title }}" 
                             class="w-full h-56 object-cover">
                    </a>

                    <div class="p-6 flex flex-col h-full">
                        {{-- Judul --}}
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">
                            <a href="{{ route('events.show', $event->id) }}" 
                               class="hover:text-yellow-600">
                                {{ $event->title }}
                            </a>
                        </h2>

                        {{-- Detail Singkat --}}
                        <p class="text-gray-600 text-sm mb-3">
                            <span class="font-semibold">📅</span> 
                            {{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}
                            <br>
                            <span class="font-semibold">📍</span> {{ $event->location }}
                        </p>

                        {{-- Deskripsi singkat --}}
                        <p class="text-gray-700 line-clamp-3 mb-4">
                            {{ $event->description }}
                        </p>

                        {{-- Aksi --}}
                        <div class="mt-auto flex justify-between items-center">
                            <a href="{{ route('events.show', $event->id) }}" 
                               class="text-yellow-600 font-semibold hover:underline">
                                Lihat Detail →
                            </a>
                            <a href="{{ route('events.edit', $event->id) }}" 
                               class="px-3 py-1 text-sm bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="mt-10">
            {{ $events->links() }}
        </div>
    @else
        <div class="text-center text-gray-600 py-20">
            <p class="text-lg">Belum ada event yang tersedia.</p>
            <a href="{{ route('events.create') }}" 
               class="mt-4 inline-block px-5 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition">
                + Tambah Event
            </a>
        </div>
    @endif
</div>
@endsection
    