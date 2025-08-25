@extends('app')

@section('title', 'Edit Event')

@section('content')
<h1 class="text-3xl font-bold mb-6">Edit Event</h1>

<form action="{{ route('events.update',$event->id) }}" method="POST" enctype="multipart/form-data"
      class="space-y-4 bg-white shadow p-6 rounded-xl">
    @csrf
    @method('PUT')
    <div>
        <label class="block font-medium">Judul Event</label>
        <input type="text" name="title" value="{{ $event->title }}" class="w-full border rounded-lg p-2" required>
    </div>
    <div>
        <label class="block font-medium">Tanggal</label>
        <input type="date" name="date" value="{{ $event->date }}" class="w-full border rounded-lg p-2" required>
    </div>
    <div>
        <label class="block font-medium">Lokasi</label>
        <input type="text" name="location" value="{{ $event->location }}" class="w-full border rounded-lg p-2" required>
    </div>
    <div>
        <label class="block font-medium">Deskripsi</label>
        <textarea name="description" rows="4" class="w-full border rounded-lg p-2" required>{{ $event->description }}</textarea>
    </div>
    <div>
        <label class="block font-medium">Cover Image</label>
        <input type="file" name="cover_image" class="w-full border rounded-lg p-2">
        @if($event->cover_image)
            <img src="{{ asset('storage/'.$event->cover_image) }}" class="h-32 mt-2 rounded-lg">
        @endif
    </div>
    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg">Update</button>
</form>
@endsection
