<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->get();
        return view('galeris.index', compact('galeris'));
    }

    public function create()
    {
        return view('galeris.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image_dokumentasi' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image_dokumentasi')) {
            $validated['image_dokumentasi'] = $request->file('image_dokumentasi')->store('galeri', 'public');
        }

        Galeri::create($validated);
        return redirect()->route('galeris.index')->with('success', 'Foto berhasil ditambahkan.');
    }

    public function show(Galeri $galeri)
    {
        return view('galeris.show', compact('galeri'));
    }

    public function edit(Galeri $galeri)
    {
        return view('galeris.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image_dokumentasi' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image_dokumentasi')) {
            if ($galeri->image_dokumentasi) {
                Storage::disk('public')->delete($galeri->image_dokumentasi);
            }
            $validated['image_dokumentasi'] = $request->file('image_dokumentasi')->store('galeri', 'public');
        }

        $galeri->update($validated);
        return redirect()->route('galeris.index')->with('success', 'Foto berhasil diperbarui.');
    }

    public function destroy(Galeri $galeri)
    {
        if ($galeri->image_dokumentasi) {
            Storage::disk('public')->delete($galeri->image_dokumentasi);
        }
        $galeri->delete();
        return redirect()->route('galeris.index')->with('success', 'Foto berhasil dihapus.');
    }
}
