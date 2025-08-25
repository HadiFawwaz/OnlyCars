@extends('app')

@section('title', 'Daftar Event')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">Daftar Event</h1>
    <a href="{{ route('events.create') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg shadow">
        + Tambah Event
    </a>
</div>

@if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
    </div>
@endif

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($events as $event)
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4 flex flex-col">
            @if($event->cover_image)
                <img src="{{ asset('storage/'.$event->cover_image) }}" 
                     class="w-full h-48 object-cover rounded-xl mb-3">
            @endif
            <h2 class="text-xl font-semibold">{{ $event->title }}</h2>
            <p class="text-gray-500 text-sm">{{ $event->date }} | {{ $event->location }}</p>
            
            <div class="mt-4 flex gap-2">
                <a href="{{ route('events.show',$event->id) }}" 
                   class="px-3 py-1 bg-blue-500 text-white rounded-lg text-sm">Detail</a>
                <a href="{{ route('events.edit',$event->id) }}" 
                   class="px-3 py-1 bg-yellow-500 text-white rounded-lg text-sm">Edit</a>
                <form action="{{ route('events.destroy',$event->id) }}" method="POST" 
                      onsubmit="return confirm('Yakin hapus event ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="px-3 py-1 bg-red-500 text-white rounded-lg text-sm">Hapus</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
