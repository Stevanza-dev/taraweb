<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('order')->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string|max:100',
            'icon_bg_color' => 'required|string|in:blue,white',
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

        Service::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'icon' => $validated['icon'],
            'icon_bg_color' => $validated['icon_bg_color'],
            'features' => $featuresArray,
            'button_text' => $validated['button_text'],
            'button_url' => $validated['button_url'],
            'order' => $validated['order'],
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Layanan berhasil ditambahkan!');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string|max:100',
            'icon_bg_color' => 'required|string|in:blue,white',
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

        $service->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'icon' => $validated['icon'],
            'icon_bg_color' => $validated['icon_bg_color'],
            'features' => $featuresArray,
            'button_text' => $validated['button_text'],
            'button_url' => $validated['button_url'],
            'order' => $validated['order'],
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Layanan berhasil diperbarui!');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Layanan berhasil dihapus!');
    }
}

