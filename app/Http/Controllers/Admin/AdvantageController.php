<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use Illuminate\Http\Request;

class AdvantageController extends Controller
{
    public function index()
    {
        $advantages = Advantage::orderBy('order')->get();
        return view('admin.advantages.index', compact('advantages'));
    }

    public function create()
    {
        return view('admin.advantages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'badge_text' => 'nullable|string|max:255',
            'icon' => 'required|string|max:100',
            'icon_bg_color' => 'required|string|in:yellow,blue,white',
            'order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        Advantage::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'badge_text' => $validated['badge_text'],
            'icon' => $validated['icon'],
            'icon_bg_color' => $validated['icon_bg_color'],
            'order' => $validated['order'],
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('admin.advantages.index')->with('success', 'Keunggulan berhasil ditambahkan!');
    }

    public function edit(Advantage $advantage)
    {
        return view('admin.advantages.edit', compact('advantage'));
    }

    public function update(Request $request, Advantage $advantage)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'badge_text' => 'nullable|string|max:255',
            'icon' => 'required|string|max:100',
            'icon_bg_color' => 'required|string|in:yellow,blue,white',
            'order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        $advantage->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'badge_text' => $validated['badge_text'],
            'icon' => $validated['icon'],
            'icon_bg_color' => $validated['icon_bg_color'],
            'order' => $validated['order'],
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.advantages.index')->with('success', 'Keunggulan berhasil diperbarui!');
    }

    public function destroy(Advantage $advantage)
    {
        $advantage->delete();
        return redirect()->route('admin.advantages.index')->with('success', 'Keunggulan berhasil dihapus!');
    }
}

