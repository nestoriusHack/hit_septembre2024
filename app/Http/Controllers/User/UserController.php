<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Slide;


class UserController extends Controller
{
    public function index(){
        $formations = Formation::all();
        $slides = Slide::all();
        return view('welcome', compact('formations', 'slides'));
    }
}
