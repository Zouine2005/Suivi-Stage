<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use Illuminate\Http\Request;

class GroupeApiController extends Controller
{
    public function getGroupes($filiereId)
{
    $groupes = Groupe::where('id_filiere', $filiereId)->get();

    return response()->json($groupes);
}
}
