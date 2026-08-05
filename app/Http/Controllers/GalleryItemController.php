<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryItemController extends Controller
{
    public function index()
    {
        $galleryItems = GalleryItem::latest()->get();

        return view('admin.gallery-items.index', compact('galleryItems'));
    }

    public function create()
    {
        return view('admin.gallery-items.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'label' => 'required|string|max:255',
            'tag' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        $validated['is_active'] = $request->has('is_active');

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('gallery', 'public');
        }

        GalleryItem::create($validated);

        return redirect()->route('gallery-items.index')->with('success', 'Item galeri berhasil ditambahkan.');
    }

    public function edit(GalleryItem $galleryItem)
    {
        return view('admin.gallery-items.edit', compact('galleryItem'));
    }

    public function update(Request $request, GalleryItem $galleryItem)
    {
        $validated = $request->validate([
            'label' => 'required|string|max:255',
            'tag' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        $validated['is_active'] = $request->has('is_active');

        if ($request->hasFile('image')) {
            if ($galleryItem->image) {
                Storage::disk('public')->delete($galleryItem->image);
            }
            $validated['image'] = $request->file('image')->store('gallery', 'public');
        }

        $galleryItem->update($validated);

        return redirect()->route('gallery-items.index')->with('success', 'Item galeri berhasil diperbarui.');
    }

    public function destroy(GalleryItem $galleryItem)
    {
        if ($galleryItem->image) {
            Storage::disk('public')->delete($galleryItem->image);
        }

        $galleryItem->delete();

        return redirect()->route('gallery-items.index')->with('success', 'Item galeri berhasil dihapus.');
    }
}