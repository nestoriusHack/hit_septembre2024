<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // Redirection après la connexion
    protected function redirectTo()
    {
        if (Auth::user()->role === 'admin') {
            return '/admin/dashboard'; // Redirige l'administrateur
        } else {
            return '/user/dashboard'; // Redirige l'utilisateur normal
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
