<?php 
// app/Http/Controllers/Directeur/LoginController.php

// app/Http/Controllers/Directeur/LoginController.php

// app/Http/Controllers/Directeur/LoginController.php

namespace App\Http\Controllers\Directeur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('directeur.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('directeur')->attempt($credentials)) {
            return redirect('/directeur/home');
        }

        return back()->withErrors(['email' => 'Votre information incorrect']);
    }

    public function logout()
    {
        Auth::guard('directeur')->logout();
        return redirect('/');
    }
}

