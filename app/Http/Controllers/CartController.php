<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Cart;
use App\Http\Controllers\ProduitController;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::all();
        return view('welcome');
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

        return redirect()->route('cart.add')->with('success', 'Product ajouté au panier avec succès!');
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
        //
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
        //
    }
}
