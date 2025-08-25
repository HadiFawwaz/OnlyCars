@extends('app')

@section('title', 'Merchandise')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">Merchandise</h1>
    <a href="{{ route('merchandises.create') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg shadow">
        + Tambah Merchandise
    </a>
</div>

@if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
    </div>
@endif

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($merchandises as $merch)
        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
            <img src="{{ asset('storage/'.$merch->image_merch) }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold">{{ $merch->name }}</h2>
                <p class="text-gray-600 mb-2">Rp {{ number_format($merch->price,0,',','.') }}</p>
                <p class="text-sm text-gray-500 mb-4">{{ Str::limit($merch->description,60) }}</p>

                <div class="flex gap-2">
                    <a href="{{ route('merchandises.show',$merch->id) }}" class="px-3 py-1 bg-blue-500 text-white rounded-lg text-sm">Detail</a>
                    <a href="{{ route('merchandises.edit',$merch->id) }}" class="px-3 py-1 bg-yellow-500 text-white rounded-lg text-sm">Edit</a>
                    <form action="{{ route('merchandises.destroy',$merch->id) }}" method="POST" onsubmit="return confirm('Yakin hapus produk ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="px-3 py-1 bg-red-500 text-white rounded-lg text-sm">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
