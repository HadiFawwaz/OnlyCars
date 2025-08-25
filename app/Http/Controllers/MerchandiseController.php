<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MerchandiseController extends Controller
{
    public function index()
    {
        $merchandises = Merchandise::latest()->get();
        return view('merchandises.index', compact('merchandises'));
    }

    public function create()
    {
        return view('merchandises.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'image_merch' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image_merch')) {
            $validated['image_merch'] = $request->file('image_merch')->store('merchandise', 'public');
        }

        Merchandise::create($validated);
        return redirect()->route('merchandises.index')->with('success', 'Merchandise berhasil ditambahkan.');
    }

    public function show(Merchandise $merchandise)
    {
        return view('merchandises.show', compact('merchandise'));
    }

    public function edit(Merchandise $merchandise)
    {
        return view('merchandises.edit', compact('merchandise'));
    }

    public function update(Request $request, Merchandise $merchandise)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'image_merch' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image_merch')) {
            if ($merchandise->image_merch) {
                Storage::disk('public')->delete($merchandise->image_merch);
            }
            $validated['image_merch'] = $request->file('image_merch')->store('merchandise', 'public');
        }

        $merchandise->update($validated);
        return redirect()->route('merchandises.index')->with('success', 'Merchandise berhasil diperbarui.');
    }

    public function destroy(Merchandise $merchandise)
    {
        if ($merchandise->image_merch) {
            Storage::disk('public')->delete($merchandise->image_merch);
        }
        $merchandise->delete();
        return redirect()->route('merchandises.index')->with('success', 'Merchandise berhasil dihapus.');
    }
}
