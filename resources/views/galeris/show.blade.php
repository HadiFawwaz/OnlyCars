@extends('app')

@section('title', $galeri->title)

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow-xl rounded-2xl overflow-hidden">
    {{-- Gambar galeri --}}
    <img src="{{ asset('storage/'.$galeri->image_dokumentasi) }}" 
         class="w-full h-96 object-cover">

    <div class="p-8">
        <h1 class="text-3xl font-extrabold text-gray-900 mb-4">{{ $galeri->title }}</h1>
        <p class="text-gray-700 leading-relaxed">{{ $galeri->description }}</p>

        {{-- Tombol Aksi --}}
        <div class="mt-8 flex gap-4">
            <a href="{{ route('home') }}" 
               class="px-5 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition">
                Kembali
            </a>
            <a href="{{ route('galeris.edit', $galeri->id) }}" 
               class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                Edit
            </a>
            <form action="{{ route('galeris.destroy', $galeri->id) }}" method="POST" 
                  onsubmit="return confirm('Yakin ingin menghapus foto ini?')">
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
