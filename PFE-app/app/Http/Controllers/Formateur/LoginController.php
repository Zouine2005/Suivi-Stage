<?php // app/Http/Controllers/Formateur/LoginController.php

// app/Http/Controllers/Formateur/LoginController.php

namespace App\Http\Controllers\Formateur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('formateur.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('formateur')->attempt($credentials)) {
            return redirect('/formateur/home');
        }

        return back()->withErrors(['email' => 'Votre information incorrect']);
    }

    public function logout()
    {
        Auth::guard('formateur')->logout();
        return redirect('/');
    }
}
