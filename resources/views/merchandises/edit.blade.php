@extends('app')

@section('title', 'Edit Merchandise')

@section('content')
<h1 class="text-3xl font-bold mb-6">Edit Merchandise</h1>

<form action="{{ route('merchandises.update',$merchandise->id) }}" method="POST" enctype="multipart/form-data" 
      class="space-y-4 bg-white shadow p-6 rounded-xl">
    @csrf
    @method('PUT')
    <div>
        <label class="block font-medium">Nama Produk</label>
        <input type="text" name="name" value="{{ $merchandise->name }}" class="w-full border rounded-lg p-2" required>
    </div>
    <div>
        <label class="block font-medium">Harga</label>
        <input type="number" name="price" value="{{ $merchandise->price }}" class="w-full border rounded-lg p-2" required>
    </div>
    <div>
        <label class="block font-medium">Deskripsi</label>
        <textarea name="description" rows="3" class="w-full border rounded-lg p-2" required>{{ $merchandise->description }}</textarea>
    </div>
    <div>
        <label class="block font-medium">Ganti Gambar</label>
        <input type="file" name="image_merch" class="w-full border rounded-lg p-2">
        <img src="{{ asset('storage/'.$merchandise->image_merch) }}" class="h-32 mt-2 rounded-lg">
    </div>
    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg">Update</button>
</form>
@endsection
