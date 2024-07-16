<?php
use App\Models\Produit;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
        {
            $query = $request->input('q');
            $produits = Produit::where('nomproduit', 'like', '%' . $query . '%')->get();

            return view('search_results', compact('produits'));
        }
}
