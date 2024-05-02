<?php

namespace App\Http\Controllers\Directeur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formateur;
use App\Models\Filiere;
use App\Models\Groupe; // Ajoutez l'importation du modèle Groupe
use App\Models\Event;

class GestionController extends Controller
{
    public function gestion(){
        $formateurs = Formateur::all();
        $filieres = Filiere::all();

        $ev = [];
        $events = Event::all();
        foreach ($events as $event) {
            $ev[] = [
                'id' => $event->id,
                'title' => $event->title,
                'start' => $event->start_date,
                'end' => $event->end_date,
            ];
        }
        return view('directeur.calender', [
            'events' => $ev,
            'formateurs' => $formateurs, // Ajoutez les formateurs ici si nécessaire
        ]);
    }

    public function showEventForm()
    {
        $formateurs = Formateur::all();
        $filieres = Filiere::all();
        $groupes = Groupe::all(); // Récupérer tous les groupes disponibles

        return view('events.create', compact('formateurs', 'filieres', 'groupes'));
    }

    public function storeEvent(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'formateur_id' => 'required',
            'filiere_id' => 'required',
            'id_groupe' => 'required', // Ajoutez la validation pour le groupe
        ]);

        Event::create($validatedData);

        return redirect()->route('directeur.callender')->with('success', 'Event created successfully!');
    }

    public function editEvent(Event $event)
    {
        $formateurs = Formateur::all();
        $filieres = Filiere::all();
        $groupes = Groupe::all(); // Récupérer tous les groupes disponibles
        return view('events.edit', compact('event', 'formateurs', 'filieres', 'groupes'));
    }

    public function updateEvent(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'formateur_id' => 'required',
            'filiere_id' => 'required',
            'id_groupe' => 'required', // Ajoutez la validation pour le groupe
        ]);

        $event->update($validatedData);

        return redirect()->route('directeur.callender')->with('success', 'Événement mis à jour avec succès');
    }

    
}


