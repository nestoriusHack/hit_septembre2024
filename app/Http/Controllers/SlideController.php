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
        $slides = Slide::all();
        return view('components.admin.slides.index', compact('slides'));
        return view('components.admin.slides.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.admin.slides.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('images', 'public');
        } else {
            $photoPath = null;
        }

        // Enregistrement des informations dans la base de données
        Slide::create([
            'photo' => $photoPath,
        ]);

        return redirect()->back()->with('success', 'Image ajoutée avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $slides = Slide::findOrFail($id);
        return view('components.admin.slides.show', compact('slide'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slides = Slide::findOrFail($id);
        return view('components.admin.slides.edit', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $slides = Slide::findOrFail($id);

        $request->validate([
            'photo' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            // Supprimer l'ancienne photo si elle existe
            if ($slides->photo) {
                Storage::disk('public')->delete($slide->photo);
            }

            // Enregistrer la nouvelle photo
            $photoPath = $request->file('photo')->store('images', 'public');
            $slides->update(['photo' => $photoPath]);
        }

        return redirect()->back()->with('success', 'Image mise à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slides = Slide::findOrFail($id);

        // Supprimer l'image associée si elle existe
        if ($slides->photo) {
            Storage::disk('public')->delete($slide->photo);
        }

        $slides->delete();

        return redirect()->back()->with('success', 'Image supprimée avec succès!');
    }
    public function showSlider()
    {
        $slides = Slide::all();
        return view('welcome', compact('slides'));
    }
}
