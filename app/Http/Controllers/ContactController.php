<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::get();
        return view('backend.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'maps_link' => 'nullable'
        ]);

        Contact::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'maps_link' => $request->maps_link
        ]);

        return redirect()->route('admin.contact.index')->with('success', 'Berhasil Menambah Data Contact');
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
        $contact = Contact::find($id);
        return view('backend.contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contact = Contact::find($id);

        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'maps_link' => 'nullable'
        ]);

        $contact->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'maps_link' => $request->maps_link
        ]);

        return redirect()->route('admin.contact.index')->with('success', 'Berhasil Menambah Data Contact');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('admin.contact.index')->with('success', 'berhasil Menghapus data');
    }
}
