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
    public function preinscription(){
        return view('partials.layouts.backend.etudiant.index');
    }
    public function showEtudiant(){
        /* return view(''); */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'nom' => ['required', 'string', 'max:255'],
           'prenom' => ['required', 'string', 'max:255'],
           'datenaissance' => ['required', 'string', 'max:255'],
           'nationalite' => ['required', 'string', 'max:255'],
           'adresse' => ['required', 'string', 'max:255'],
           'email' => ['required', 'email', 'max:255', 'unique:preinscription'], // Assurez-vous que le nom de la table est correct ici
           'telephone' => ['required', 'string', 'max:255'],
           'domaine' => ['required', 'string', 'max:255'],
           'niveau' => ['required', 'string', 'max:255'],
           'photo' => ['required|image|mimes:jpeg,png,jpg,gif|max:2048'], // Ajoutez la validation pour les images
           'profile' => ['required|image|mimes:jpeg,png,jpg,gif|max:2048'], // Ajoutez la validation pour les images
       ]);

       // Créez l'objet Preinscriptions et attribuez les valeurs des champs
    //    $preinscription = new Preinscriptions();
    //    $preinscription->nom = $request->nom;
    //    $preinscription->prenom = $request->prenom;
    //    $preinscription->datenaissance = $request->datenaissance;
    //    $preinscription->nationalite = $request->nationalite;
    //    $preinscription->adresse = $request->adresse;
    //    $preinscription->email = $request->email;
    //    $preinscription->telephone = $request->telephone;
    //    $preinscription->domaine = $request->domaine;
    //    $preinscription->niveau = $request->niveau;

       // Traitement de l'upload de la photo
       $imagePath = $request->file('profile')->store('profile', 'public');

       $documentPath = $request->hasFile('photo') ? $request->file('photo')->store('photo', 'public') : null;

       // Enregistrer l'etudiant dans la base de données
       Preinsctiption::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'datedenaissance' => $request->$datenaissance,
            'nationalite' => $request->$nationalite,
            'adresse' => $request->$adresse,
            'email' => $request->$email,
            'telephone' => $request->$telephone,
            'domaine' => $request->$domaine,
            'niveau' => $request->$niveau,
            'photo' => $documentPath,
            'profile' => $imagePath,
        ]);

        // Stocker le message de succès dans la session
        return redirect()->back()->with('success', 'vous avez été ajouté avec succès!');
    }



    public function generatePDF($id)
    {
        // Récupérez les données de préinscription en fonction de l'ID
        $preinscription = Preinscriptions::find($id);

        // Générez le PDF avec DomPDF
        $pdf = FacadePdf::loadView('partials.layouts.backend.etudiant.pdf', compact('preinscription'));

        // Retournez le PDF en tant que réponse
        return $pdf->download('partials.layouts.backend.etudiant.pdf');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $preinscription = Preinscriptions::find($id);
        $preinscription->delete();
        return redirect()->back()->with('status','preinscription Deleted Successfully');
    }
}

