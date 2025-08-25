@extends('app')

@section('title', 'Tambah Event')

@section('content')
<div class="max-w-2xl mx-auto mt-16">
    <div class="bg-white/10 backdrop-blur-xl border border-white/20 shadow-2xl rounded-2xl p-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-6">Tambah Event Baru</h2>

        <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data" class="space-y-5">
            @csrf

            {{-- Judul --}}
            <div>
                <label class="block text-sm font-semibold text-gray-800 mb-1">Judul</label>
                <input type="text" name="title" 
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm">
            </div>

            {{-- Tanggal --}}
            <div>
                <label class="block text-sm font-semibold text-gray-800 mb-1">Tanggal</label>
                <input type="date" name="date" 
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm">
            </div>

            {{-- Lokasi --}}
            <div>
                <label class="block text-sm font-semibold text-gray-800 mb-1">Lokasi</label>
                <input type="text" name="location" 
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm">
            </div>

            {{-- Deskripsi --}}
            <div>
                <label class="block text-sm font-semibold text-gray-800 mb-1">Deskripsi</label>
                <textarea name="description" rows="4"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm"></textarea>
            </div>

            {{-- Cover --}}
            <div>
                <label class="block text-sm font-semibold text-gray-800 mb-1">Cover</label>
                <input type="file" name="cover_image"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-yellow-500 file:text-white hover:file:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 shadow-sm">
            </div>

            {{-- Tombol --}}
            <div class="flex justify-end gap-3 pt-4">
                <a href="{{ route('events.index') }}" 
                   class="px-5 py-2 rounded-xl bg-gray-200 text-gray-800 hover:bg-gray-300 transition">
                   Batal
                </a>
                <button type="submit" 
                        class="px-6 py-2 rounded-xl bg-gradient-to-r from-yellow-500 to-orange-500 text-black font-semibold shadow-lg hover:scale-105 hover:shadow-yellow-400/50 transition">
                        Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
