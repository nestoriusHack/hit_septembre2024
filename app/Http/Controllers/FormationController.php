<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Categorie;

class FormationController extends Controller
{
    public function index()
    {
        $formations = Formation::all();
        return view('components.admin.formations.listef', compact('formations'));

    }

    public function create()
    {
        $categories = Categorie::all();
        return view('components.admin.formations.createf', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'date' => 'required|string',
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

        Formation::create([
            'nom' => $request->nom,
            'desc' => $request->desc,
            'date' => $request->date,
            'photo' => $photoPath,
            'prix' => $request->prix,
            'categorie_id' => $request->categorie_id,
        ]);

        return redirect()->back()->with('success', 'Formation ajoutée avec succès!');
    }

    public function edit(string $id)
    {
        $formation = Formation::findOrFail($id);
        $categories = Categorie::all();
        return view('components.admin.formations.editf', compact('formation', 'categories'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'desc' => 'required|string',
            'date' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'prix' => 'required|numeric|between:0,99999999.99',
            'categorie_id' => 'required|exists:categories,id',
        ]);

        $formation = Formation::findOrFail($id);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('images', 'public');
            $formation->photo = $photoPath;
        }

        $formation->update($request->except(['photo']));
        $formation->categorie_id = $request->categorie_id;
        $formation->save();

        return redirect()->back()->with('success', 'Formation mise à jour avec succès!');
    }

    public function destroy(string $id)
    {
        $formation = Formation::findOrFail($id);
        $formation->delete();
        return redirect()->back()->with('success', 'Formation supprimée avec succès!');
    }

    public function show($id)
    {
        $formation = Formation::findOrFail($id);
        return view('partials.layouts.backend.formations.show', compact('formation'));

    }

    public function listCategories()
    {
        $categories = Categorie::all();
        return view('components.admin.categories.index', compact('categories'));
    }

    public function showCategory($id)
    {
        $category = Categorie::findOrFail($id);
        $formations = Formation::where('categorie_id', $id)->get();
        return view('partials.layouts.frontend.navebar', compact('category', 'formations'));
    }
}
