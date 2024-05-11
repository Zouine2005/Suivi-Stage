<?php

namespace App\Http\Controllers\Formateur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RemplirInfo extends Controller
{
    public function remplir(){
        return view('formateur.formulaire');
    }
}
