<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Formation;
use App\Models\Service;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $services = Service::all();
        return view('components.admin.services.listeS', compact('services'));
    }

    public function create()
    {
        $categories = Categorie::all();
        return view('components.admin.services.createS', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'date' => 'required|date',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'desc' => 'required|string',
            'prix' => 'required|numeric|between:0,99999999.99',
            'categorie_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('images', 'public');
        } else {
            $photoPath = null;
        }

        Service::create([
            'nom' => $request->nom,
            'desc' => $request->desc,
            'date' => $request->date,
            'photo' => $photoPath,

            'categorie_id' => $request->categorie_id,
        ]);

        return redirect()->back()->with('success', 'Services ajouté avec succès!');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      $services = Service::all();
      return view('partials.layouts.frontend.welcome', compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $services = Service::findOrFail($id);
        $categories = Categorie::all();
        return view('components.admin.services.editS', compact('services', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $services = Service::findOrFail($id);
        $services->update($request->all());
        return redirect()->route('listes.services')->with('success', 'Service mis à jour avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $services = Service::findOrFail($id);
        if ($services->photo) {
            Storage::disk('public')->delete($services->photo);
        }
        $services->delete();
        return redirect()->back()->with('success', 'service supprimé avec succès!');
    }
}
