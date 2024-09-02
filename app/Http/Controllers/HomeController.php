<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Categorie;
use App\Models\Formation;
use App\Models\Slide;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
{


    $user = Auth::user();
    if (Auth::check()) {
        $usertype = $user->usertype;

        if ($usertype == 'user') {
            $formations = Formation::all();
            $slides = Slide::all();
            return view('welcome', compact('formations', 'slides'));

        } elseif ($usertype == 'admin') {
            return view('components.admin.adminDash');
        }
    }

    // Si l'utilisateur n'est pas authentifié, vous pouvez rediriger vers une page de connexion ou une autre page
    return redirect()->route('home');
    }

    public function home()
    {
            $formations = Formation::all();
            $slides = Slide::all();
            return view('welcome', compact('formations', 'slides'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

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
