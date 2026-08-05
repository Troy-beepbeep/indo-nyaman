<?php

namespace App\Http\Controllers;

use App\Models\PricingPackage;
use Illuminate\Http\Request;

class PricingPackageController extends Controller
{
    public function index()
    {
        $packages = PricingPackage::orderBy('sort_order')->get();

        return view('admin.pricing-packages.index', compact('packages'));
    }

    public function create()
    {
        return view('admin.pricing-packages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price_text' => 'required|string|max:50',
            'price_suffix' => 'nullable|string|max:20',
            'features' => 'nullable|string',
            'sort_order' => 'required|integer|min:0|max:255',
        ]);

        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_active'] = $request->has('is_active');

        PricingPackage::create($validated);

        return redirect()->route('pricing-packages.index')->with('success', 'Paket berhasil ditambahkan.');
    }

    public function edit(PricingPackage $pricingPackage)
    {
        return view('admin.pricing-packages.edit', compact('pricingPackage'));
    }

    public function update(Request $request, PricingPackage $pricingPackage)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price_text' => 'required|string|max:50',
            'price_suffix' => 'nullable|string|max:20',
            'features' => 'nullable|string',
            'sort_order' => 'required|integer|min:0|max:255',
        ]);

        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_active'] = $request->has('is_active');

        $pricingPackage->update($validated);

        return redirect()->route('pricing-packages.index')->with('success', 'Paket berhasil diperbarui.');
    }

    public function destroy(PricingPackage $pricingPackage)
    {
        $pricingPackage->delete();

        return redirect()->route('pricing-packages.index')->with('success', 'Paket berhasil dihapus.');
    }
}