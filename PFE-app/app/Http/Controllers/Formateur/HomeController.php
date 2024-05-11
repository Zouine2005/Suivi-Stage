<?php

namespace App\Http\Controllers\Formateur;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Formateur;

class HomeController extends Controller
{
    public function index()
    {
        // Votre logique actuelle
        return view('formateur.home');
    }

    /*public function verifierStage()
    {
        $formateurs=Formateur::all();
        foreach ($formateurs as $formateur) {
            // Vérifier si l'événement pour la filière du formateur existe
            $event = Event::where('formateur_id', $formateur->id)->first();
            // Si un événement existe, afficher le message modal
            if ($event) {
                return view('formateur.message', ['message' => 'Le directeur a planifié le stage pour la filière de ce formateur.','formateurs'=>$formateurs]);
            }
        }

            // Si aucun événement n'existe, afficher un message indiquant que le stage n'a pas été planifié
            return view('formateur.message', ['message' => 'Aucun stage n\'a été planifié pour votre filière pour le moment.','formateurs'=>$formateurs]);
        } */
    }

    // Autres méthodes du contrôleur HomeController