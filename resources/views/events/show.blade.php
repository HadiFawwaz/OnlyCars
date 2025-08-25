@extends('app')

@section('title', $event->title)

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow-xl rounded-2xl overflow-hidden">
    {{-- Cover Event --}}
    <img src="{{ asset('storage/'.$event->cover_image) }}" 
         class="w-full h-96 object-cover">

    <div class="p-8">
        <h1 class="text-3xl font-extrabold text-gray-900 mb-4">{{ $event->title }}</h1>

        <div class="text-gray-600 mb-4">
            <p><span class="font-semibold">Tanggal:</span> {{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</p>
            <p><span class="font-semibold">Lokasi:</span> {{ $event->location }}</p>
        </div>

        <p class="text-gray-700 leading-relaxed">{{ $event->description }}</p>

        {{-- Tombol Aksi --}}
        <div class="mt-8 flex gap-4">
            <a href="{{ route('home') }}" 
               class="px-5 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition">
                Kembali
            </a>
            <a href="{{ route('events.edit', $event->id) }}" 
               class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                Edit
            </a>
            <form action="{{ route('events.destroy', $event->id) }}" method="POST" 
                  onsubmit="return confirm('Yakin ingin menghapus event ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="px-5 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                    Hapus
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
