<?php
// app/Http/Controllers/Formateur/HomeController.php

namespace App\Http\Controllers\Formateur;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('formateur.home');
    }

    // ... autres méthodes du formateur
}
