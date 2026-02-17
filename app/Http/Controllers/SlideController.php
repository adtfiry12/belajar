<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slides = Slide::get();
        return view('backend.slides.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.slides.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc'  => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('slides', 'public');
        }

        Slide::create([
        'title' => $request->title,
        'desc'  => $request->desc,
        'image' => $imagePath,
        ]);

        return redirect()->route('admin.slide.index')->with('success', 'Slide Berhasil Di-deploy!');
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
        $slide = Slide::find($id);
        return view('backend.slides.edit', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $slide = Slide::find($id);

        $request->validate([
        'title' => 'required',
        'desc'  => 'required',
        'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($slide->image) {
            Storage::disk('public')->delete($slide->image);
            }
            $data['image'] = $request->file('image')->store('slides', 'public');

            $slide->update($data);
        }
        return redirect()->route('admin.slide.index')->with('success', 'Sync Complete!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slide = Slide::find($id);

        if($slide->image){
            Storage::disk('public')->delete($slide->image);
        }

        $slide->delete();

        return redirect()->route('admin.slide.index')->with('success', 'DATA BERHASIL DI HAPUS');
    }
}
