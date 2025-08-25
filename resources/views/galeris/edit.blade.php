@extends('app')

@section('title', 'Edit Foto')

@section('content')
<h1 class="text-3xl font-bold mb-6">Edit Foto Dokumentasi</h1>

<form action="{{ route('galeris.update',$galeri->id) }}" method="POST" enctype="multipart/form-data" 
      class="space-y-4 bg-white shadow p-6 rounded-xl">
    @csrf
    @method('PUT')
    <div>
        <label class="block font-medium">Judul Foto</label>
        <input type="text" name="title" value="{{ $galeri->title }}" class="w-full border rounded-lg p-2" required>
    </div>
    <div>
        <label class="block font-medium">Ganti Foto</label>
        <input type="file" name="image_dokumentasi" class="w-full border rounded-lg p-2">
        <img src="{{ asset('storage/'.$galeri->image_dokumentasi) }}" class="h-32 mt-2 rounded-lg">
    </div>
    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg">Update</button>
</form>
@endsection
