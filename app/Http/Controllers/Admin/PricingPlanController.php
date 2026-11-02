<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingPlan;
use Illuminate\Http\Request;

class PricingPlanController extends Controller
{
    public function index()
    {
        $plans = PricingPlan::orderBy('order')->get();
        return view('admin.pricing.index', compact('plans'));
    }

    public function create()
    {
        return view('admin.pricing.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'badge' => 'nullable|string|max:100',
            'subtitle' => 'nullable|string|max:255',
            'price' => 'required|string|max:50',
            'price_unit' => 'required|string|max:50',
            'icon' => 'required|string|max:100',
            'is_popular' => 'boolean',
            'popular_badge_text' => 'nullable|string|max:100',
            'features' => 'nullable|string', // newline-separated
            'button_text' => 'required|string|max:100',
            'button_url' => 'required|string|max:255',
            'order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        $featuresArray = [];
        if (!empty($validated['features'])) {
            $featuresArray = array_values(array_filter(array_map('trim', explode("\n", $validated['features']))));
        }

        PricingPlan::create([
            'name' => $validated['name'],
            'badge' => $validated['badge'],
            'subtitle' => $validated['subtitle'],
            'price' => $validated['price'],
            'price_unit' => $validated['price_unit'],
            'icon' => $validated['icon'],
            'is_popular' => $request->boolean('is_popular'),
            'popular_badge_text' => $validated['popular_badge_text'],
            'features' => $featuresArray,
            'button_text' => $validated['button_text'],
            'button_url' => $validated['button_url'],
            'order' => $validated['order'],
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('admin.pricing.index')->with('success', 'Paket harga berhasil ditambahkan!');
    }

    public function edit(PricingPlan $pricing)
    {
        return view('admin.pricing.edit', compact('pricing'));
    }

    public function update(Request $request, PricingPlan $pricing)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'badge' => 'nullable|string|max:100',
            'subtitle' => 'nullable|string|max:255',
            'price' => 'required|string|max:50',
            'price_unit' => 'required|string|max:50',
            'icon' => 'required|string|max:100',
            'is_popular' => 'boolean',
            'popular_badge_text' => 'nullable|string|max:100',
            'features' => 'nullable|string',
            'button_text' => 'required|string|max:100',
            'button_url' => 'required|string|max:255',
            'order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        $featuresArray = [];
        if (!empty($validated['features'])) {
            $featuresArray = array_values(array_filter(array_map('trim', explode("\n", $validated['features']))));
        }

        $pricing->update([
            'name' => $validated['name'],
            'badge' => $validated['badge'],
            'subtitle' => $validated['subtitle'],
            'price' => $validated['price'],
            'price_unit' => $validated['price_unit'],
            'icon' => $validated['icon'],
            'is_popular' => $request->boolean('is_popular'),
            'popular_badge_text' => $validated['popular_badge_text'],
            'features' => $featuresArray,
            'button_text' => $validated['button_text'],
            'button_url' => $validated['button_url'],
            'order' => $validated['order'],
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.pricing.index')->with('success', 'Paket harga berhasil diperbarui!');
    }

    public function destroy(PricingPlan $pricing)
    {
        $pricing->delete();
        return redirect()->route('admin.pricing.index')->with('success', 'Paket harga berhasil dihapus!');
    }
}

