<?php
use App\Models\Produit;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
        {
            $query = $request->input('query');
        // Logique de recherche ici
        return view('search.results', compact('query'));
    }
}
