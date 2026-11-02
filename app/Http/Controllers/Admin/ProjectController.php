<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('order')->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'description' => 'required|string',
            'client' => 'nullable|string|max:255',
            'url' => 'required|url|max:255',
            'tags' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'order' => 'required|integer',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('projects', 'public');
        }

        $tagsArray = null;
        if (!empty($validated['tags'])) {
            $tagsArray = array_values(array_filter(array_map('trim', preg_split('/[\r\n,]+/', $validated['tags']))));
        }

        Project::create([
            'title' => $validated['title'],
            'category' => $validated['category'],
            'description' => $validated['description'],
            'client' => $validated['client'] ?? null,
            'url' => $validated['url'],
            'tags' => $tagsArray,
            'image' => $imagePath,
            'order' => $validated['order'],
            'is_featured' => $request->boolean('is_featured'),
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('admin.projects.index')->with('success', 'Proyek berhasil ditambahkan!');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'description' => 'required|string',
            'client' => 'nullable|string|max:255',
            'url' => 'required|url|max:255',
            'tags' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'order' => 'required|integer',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
        ]);

        $imagePath = $project->image;
        if ($request->hasFile('image')) {
            if ($project->image && Storage::disk('public')->exists($project->image)) {
                Storage::disk('public')->delete($project->image);
            }
            $imagePath = $request->file('image')->store('projects', 'public');
        }

        $tagsArray = null;
        if (!empty($validated['tags'])) {
            $tagsArray = array_values(array_filter(array_map('trim', preg_split('/[\r\n,]+/', $validated['tags']))));
        }

        $project->update([
            'title' => $validated['title'],
            'category' => $validated['category'],
            'description' => $validated['description'],
            'client' => $validated['client'] ?? null,
            'url' => $validated['url'],
            'tags' => $tagsArray,
            'image' => $imagePath,
            'order' => $validated['order'],
            'is_featured' => $request->boolean('is_featured'),
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.projects.index')->with('success', 'Proyek berhasil diperbarui!');
    }

    public function destroy(Project $project)
    {
        if ($project->image && Storage::disk('public')->exists($project->image)) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Proyek berhasil dihapus!');
    }
}

