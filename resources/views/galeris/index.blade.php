@extends('app')

@section('title', 'Galeri Dokumentasi')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">Galeri Dokumentasi</h1>
    <a href="{{ route('galeris.create') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg shadow">
        + Tambah Foto
    </a>
</div>

@if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
    </div>
@endif

<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    @foreach($galeris as $galeri)
        <div class="relative group bg-white rounded-xl shadow overflow-hidden">
            <img src="{{ asset('storage/'.$galeri->image_dokumentasi) }}" 
                 class="w-full h-40 object-cover group-hover:scale-105 transition">
            <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center text-white text-center p-2">
                <div>
                    <p class="font-semibold">{{ $galeri->title }}</p>
                    <div class="flex gap-2 justify-center mt-2">
                        <a href="{{ route('galeris.show',$galeri->id) }}" class="px-2 py-1 bg-blue-500 rounded text-sm">Detail</a>
                        <a href="{{ route('galeris.edit',$galeri->id) }}" class="px-2 py-1 bg-yellow-500 rounded text-sm">Edit</a>
                        <form action="{{ route('galeris.destroy',$galeri->id) }}" method="POST" onsubmit="return confirm('Yakin hapus foto ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="px-2 py-1 bg-red-500 rounded text-sm">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
