<?php

namespace App\Http\Controllers;

use App\Models\Preinscription;
use PDF;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class PreinscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('partials.layouts.backend.etudiant.preinscription');
    }

    public function preinscription()
    {
        return view('partials.layouts.backend.etudiant.index');
    }

    public function showEtudiant()
    {
        // À compléter si nécessaire
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // À compléter si nécessaire
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'datenaissance' => ['required', 'date'],
            'nationalite' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:preinscriptions,email'], // Validation de l'unicité de l'email
            'telephone' => ['required', 'string', 'max:255'],
            'domaine' => ['required', 'string', 'max:255'],
            'niveau' => ['required', 'string', 'max:255'],
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'profile' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Traitement de l'upload de la photo
        $imagePath = $request->file('profile')->store('profile', 'public');
        $documentPath = $request->hasFile('photo') ? $request->file('photo')->store('photo', 'public') : null;

        // Enregistrer l'étudiant dans la base de données et récupérer l'instance créée
        $preinscription = Preinscription::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'datenaissance' => $request->datenaissance,
            'nationalite' => $request->nationalite,
            'adresse' => $request->adresse,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'domaine' => $request->domaine,
            'niveau' => $request->niveau,
            'photo' => $documentPath,
            'profile' => $imagePath,
        ]);

        // Stocker le message de succès dans la session et rediriger
        return redirect()->route('preinscription.edit', ['id' => $preinscription->id])
            ->with('success', 'Vous avez été inscrit avec succès!');
    }

    public function generatePDF($id)
    {
        // Récupérez les données de préinscription en fonction de l'ID
        $preinscription = Preinscription::find($id);

        // Générez le PDF avec DomPDF
        $pdf = FacadePdf::loadView('partials.layouts.backend.etudiant.pdf', compact('preinscription'));

        // Retournez le PDF en tant que réponse
        return $pdf->download('preinscription.pdf');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // Récupérez l'étudiant en fonction de l'ID fourni

        $preinscriptions = Preinscription::all();

        // Vérifiez si l'étudiant existe
        if (!$preinscriptions) {
            return redirect()->route('preinscription.index')->with('error', 'Étudiant non trouvé.');
        }

        // Retournez la vue avec les données de l'étudiant
        return view('components.admin.apprenants.index', compact('preinscriptions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Récupérez les données de préinscription en fonction de l'ID
        $preinscription = Preinscription::find($id);

        // Retournez une vue d'édition avec les données de préinscription
        return view('partials.layouts.backend.etudiant.edit', compact('preinscription'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'datenaissance' => ['required', 'date'],
            'nationalite' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:preinscriptions,email,' . $id],
            'telephone' => ['required', 'string', 'max:255'],
            'domaine' => ['required', 'string', 'max:255'],
            'niveau' => ['required', 'string', 'max:255'],
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Récupérez les données de préinscription en fonction de l'ID
        $preinscription = Preinscription::find($id);

        // Mettre à jour les informations
        $preinscription->update($request->all());

        // Mettre à jour les images si des fichiers sont fournis
        if ($request->hasFile('profile')) {
            $imagePath = $request->file('profile')->store('profile', 'public');
            $preinscription->profile = $imagePath;
        }

        if ($request->hasFile('photo')) {
            $documentPath = $request->file('photo')->store('photo', 'public');
            $preinscription->photo = $documentPath;
        }

        $preinscription->save();

        // Rediriger avec un message de succès
        return redirect()->route('etudiant')->with('success', 'Vos informations ont été mises à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $preinscription = Preinscription::find($id);
        $preinscription->delete();
        return redirect()->back()->with('status', 'Preinscription deleted successfully.');
    }
}
