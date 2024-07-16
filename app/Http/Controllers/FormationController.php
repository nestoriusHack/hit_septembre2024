<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Formation::all();
        return view('components.admin.formations.listef', compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $formations = Formation::all();
        return view('components.admin.formations.createf', compact('formations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'requuired|string|max:255',
            'date' => 'required|string',
            'photo' => 'required|image|nimes:jpeg,png,jpg|max:2048',
            'desc' => 'required|string',
            'prix' => 'required|numeric|between:0,99999999.99', // Ajout de la validation pour le prix
        ]);

        // Gérer l'upload de l'image
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('images', 'public');
        }

        // Enregistrer le produit dans la base de données
        Formation::create([
            'nom' => $request->nom,
            'desc' => $request->desc,
            'date' => $request->date,
            'photo' => $photoPath,
            'prix' => $request->prix,
        ]);

        // Stocker le message de succès dans la session
        return redirect()->back()->with('success', 'Formation ajoutée avec succès!');

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
        $formation = Formation::findOrFail($id);
        return view('components.admin.formations.editf', compact('formation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'desc' => 'required|string',
            'date' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'prix' => 'required|numeric|between:0,99999999.99',
        ]);

        // Récupérer la Fomation
        $formation = Fomation::findOrFail($id);
        
        //photo
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('images', 'public');
            $formation->photoPath = $photoPath;
        }
        
        // Mettre à jour les autres champs
        $formation->update($request->except(['photo']));

        return redirect()->route('formation.update')->with('success', 'Formation mis à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $formation = Formation::findOrFail($id);
        $formation->delete();
        return redirect()->route('formation.destroy')->with('success', 'Formation supprimée avec succès!');
    }
}
