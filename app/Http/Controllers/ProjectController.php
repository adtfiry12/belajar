<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::get();
        return view('backend.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('projects', 'public');
        }

        Project::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'image' => $imagePath
        ]);

        return redirect()->route('admin.project.index')->with('success', 'Project Berhasih Di upload!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::find($id);
        return view('backend.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::find($id);

        $request->validate([
        'title' => 'required',
        'desc'  => 'required',
        'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($project->image) {
            Storage::disk('public')->delete($project->image);
            }
            $data['image'] = $request->file('image')->store('slides', 'public');

            $project->update($data);
        }

        return redirect()->route('admin.project.index')->with('success', 'Project Berhasih Di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::find($id);

        if($project->image){
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->route('admin.project.index')->with('success', 'DATA BERHASIL DI HAPUS');
    }
}
