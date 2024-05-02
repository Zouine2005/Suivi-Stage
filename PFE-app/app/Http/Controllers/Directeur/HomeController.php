<?php

namespace App\Http\Controllers\Directeur;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Filiere;
use App\Models\Groupe;

class HomeController extends Controller
{
    public function index()
    {
        // Récupérer tous les événements avec les détails de la filière et du groupe
        $events = Event::with('filiere', 'groupe')->get();
    
        // Organiser les événements par filière et groupe
        $data = [];
    
        // Parcourir tous les événements
        foreach ($events as $event) {
            // Accéder aux propriétés de la filière et du groupe
            $filiere_id = $event->filiere_id;
            $filiere_nom = Filiere::find($filiere_id)->nom ?? 'Filière inconnue';
            
            $groupe_id = $event->id_groupe;
            $groupe_nom = Groupe::find($groupe_id)->nom ?? 'Groupe inconnu';

            // Calculer la durée en jours
            $duree = $this->calculateDuration($event->start_date, $event->end_date);
            
            // Ajouter la durée au groupe correspondant dans les données de la filière
            if (!isset($data[$filiere_nom])) {
                $data[$filiere_nom] = [];
            }
            $data[$filiere_nom][$groupe_nom] = $duree;
        }
    
        // Passer les données à la vue
        return view('directeur.home', ['data' => $data]);
    }
    
    // Fonction pour calculer la durée en jours entre deux dates
    private function calculateDuration($start_date, $end_date)
    {
        $start = strtotime($start_date);
        $end = strtotime($end_date);
        $diff = $end - $start;
        return round($diff / (60 * 60 * 24)); // Convertir la différence en jours
    }
}
