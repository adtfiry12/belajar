<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::get();
        return view('backend.abouts.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'no_telp'   => 'required|string|max:20',
            'email'     => 'required|email|max:255',
            'study'     => 'required|string|max:255',
            'role'      => 'required|string|max:255',
            'title'     => 'required|string|max:255',
            'desc'      => 'required|string',
            'alamat'    => 'required|string',
            'photo'     => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'linkedin'  => 'nullable|url',
            'github'    => 'nullable|url',
            'instagram' => 'nullable|url',
            'facebook'  => 'nullable|url',
        ]);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('abouts', 'public');
            $validated['photo'] = $path;
        }

        About::create($validated);

        return redirect()->route('admin.about.index')->with('success', 'Registry Initialized Successfully!');
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
        $about = About::find($id);
        return view('backend.abouts.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $about = About::find($id);

        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'no_telp'   => 'required|string|max:20',
            'email'     => 'required|email|max:255',
            'study'     => 'required|string|max:255',
            'role'      => 'required|string|max:255',
            'title'     => 'required|string|max:255',
            'desc'      => 'required|string',
            'alamat'    => 'required|string',
            'photo'     => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'linkedin'  => 'nullable|url',
            'github'    => 'nullable|url',
            'instagram' => 'nullable|url',
            'facebook'  => 'nullable|url',
        ]);

        if ($request->hasFile('photo')) {
            if ($about->photo) {
                Storage::disk('public')->delete($about->photo);
            }
            $validated['photo'] = $request->file('photo')->store('abouts', 'public');
        }

        $about->update($validated);
        return redirect()->route('admin.about.index')->with('success', 'Registry Re-calibrated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = About::find($id);
        if ($about->photo) {
            Storage::disk('public')->delete($about->photo);
        }
        $about->delete();
        return redirect()->route('admin.about.index')->with('success', 'Registry Terminated!');
    }
}
