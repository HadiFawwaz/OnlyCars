@extends('app')

@section('title', $merchandise->name)

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow-xl rounded-2xl overflow-hidden">
    {{-- Gambar Produk --}}
    <img src="{{ asset('storage/'.$merchandise->image_merch) }}" 
         class="w-full h-96 object-cover">

    {{-- Detail Produk --}}
    <div class="p-8">
        <h1 class="text-3xl font-extrabold text-gray-900 mb-4">{{ $merchandise->name }}</h1>
        <p class="text-2xl font-bold text-yellow-600 mb-3">
            Rp {{ number_format($merchandise->price,0,',','.') }}
        </p>
        <p class="text-gray-700 leading-relaxed">{{ $merchandise->description }}</p>

        {{-- Tombol Aksi --}}
        <div class="mt-8 flex gap-4">
            <a href="{{ route('home') }}" 
               class="px-5 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition">
                Kembali
            </a>
            <a href="{{ route('merchandises.edit', $merchandise->id) }}" 
               class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                Edit
            </a>
            <form action="{{ route('merchandises.destroy', $merchandise->id) }}" 
                  method="POST" 
                  onsubmit="return confirm('Yakin ingin menghapus merchandise ini?')">
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
