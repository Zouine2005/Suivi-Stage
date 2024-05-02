<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Groupe;
use Illuminate\Http\Request;

class FiliereApiController extends Controller
{
    public function getFilieres($formateurId)
    {
        $filieres = Filiere::where('id_formateur', $formateurId)->get();
        return response()->json($filieres);
    }

    public function getGroupesByFiliere($filiereId)
    {
        // Récupérer les groupes associés à la filière
        $groupes = Groupe::where('filiere_id', $filiereId)->get();

        return response()->json($groupes);
    }

   
}
