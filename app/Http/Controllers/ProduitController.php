<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::all();
        return view('components.admin.produits.listes', compact('produits'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produits = Produit::all();
        return view('components.admin.produits.create', compact('produits'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'nomproduit' => 'required|string|max:255',
            'descriptionproduit' => 'required|string',
            'imageproduit' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'documentproduit' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'prixproduit' => 'required|numeric|between:0,99999999.99',
        ]);

        // Gérer l'upload de l'image
        if ($request->hasFile('imageproduit')){
            $imagePath = $request->file('imageproduit')->store('images', 'public');
        }


        // Gérer l'upload du document
        if ($request->hasFile('imageproduit')){
            $documentPath = $request->hasFile('documentproduit') ? $request->file('documentproduit')->store('documents', 'public') : null;

        }
        else {
            $documentPath = null;
        }

        // Enregistrer le produit dans la base de données
        Produit::create([
            'nomproduit' => $request->nomproduit,
            'descriptionproduit' => $request->descriptionproduit,
            'imageproduit' => $imagePath,
            'documentproduit' => $documentPath,
            'prixproduit' => $request->prixproduit,
        ]);

        // Stocker le message de succès dans la session
        return redirect()->back()->with('success', 'Produit ajouté avec succès!');
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
        $produit = Produit::findOrFail($id);
        return view('components.admin.produits.edit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Valider les données du formulaire
        $request->validate([
            'nomproduit' => 'required|string|max:255',
            'descriptionproduit' => 'required|string',
            'imageproduit' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'documentproduit' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'prixproduit' => 'required|numeric|between:0,99999999.99',
        ]);

        // Récupérer le produit
        $produit = Produit::findOrFail($id);

        // Gérer l'upload de la nouvelle image si présente
        if ($request->hasFile('imageproduit')) {
            $imagePath = $request->file('imageproduit')->store('images', 'public');
            $produit->imageproduit = $imagePath;
        }

        // Gérer l'upload du nouveau document si présent
        if ($request->hasFile('documentproduit')) {
            $documentPath = $request->file('documentproduit')->store('documents', 'public');
            $produit->documentproduit = $documentPath;
        }

        // Mettre à jour les autres champs
        $produit->update($request->except(['imageproduit', 'documentproduit']));

        return redirect()->route('products.update')->with('success', 'Produit mis à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();
        return redirect()->route('products.destroy')->with('success', 'Produit supprimé avec succès!');
    }

    //addtocart
    public function addToCart($id)
    {

        $produit = Produit::find($id);

        if (!$produit) {
            return redirect()->route('home')->with('error', 'Produit non trouvé!');
        }

        // Add product to cart
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }else{
            $cart[$id] = [
            'nomproduit' => $produit->nomproduit,
            'quantity' => 1,
            'imageproduit' => $produit->imageproduit,
            'prixproduit' => $produit->prixproduit,
        ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product ajouté au panier avec succès!');
    }
    public function checkout(){
        return view('partials.layouts.backend.cart.checkout');
    }
    public function Cart(){
        return view('partials.layouts.backend.cart.index');
    }
    public function removeFromCart($id){
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart',$cart);
            # code...
        }
        return redirect()->route('home')->with('success','Produit retiré du panier avec succès');
    }
    // public function home(){
    //     $produits = Produit::all();
    //     return view('welcome', compact('produits'));
    // }

}
