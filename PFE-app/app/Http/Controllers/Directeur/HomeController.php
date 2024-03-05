<?php // app/Http/Controllers/Directeur/HomeController.php

namespace App\Http\Controllers\Directeur;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('directeur.home');
    }

    // ... autres méthodes du directeur
}
