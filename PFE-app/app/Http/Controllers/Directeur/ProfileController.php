<?php 
// app/Http/Controllers/DirecteurProfileController.php

namespace App\Http\Controllers\Directeur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Directeur; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function showProfile()
    {
        
        $directeurs = Directeur::all();

        // Passer l'utilisateur à la vue
        return view('directeur.profile', compact('directeurs'));
    }
    public function updatePassword(Request $request)
{
    // Valider les données de la requête
    $request->validate([
        'directeur_id' => 'required|exists:directeurs,id',
        'old_password' => 'required',
        'new_password' => 'required|min:6|confirmed',
    ]);

    // Récupérer le directeur en fonction de l'identifiant fourni
    $directeur = Directeur::findOrFail($request->directeur_id);

    // Vérifier si l'ancien mot de passe correspond
    if (!Hash::check($request->old_password, $directeur->password)) {
        return back()->with('error', 'Ancien mot de passe incorrect');
    }

    // Mettre à jour le mot de passe
    $directeur->update([
        'password' => Hash::make($request->new_password),
    ]);

    // Rediriger avec un message de succès
    return redirect()->route('directeur.profile')->with('success', 'Mot de passe mis à jour avec succès');
}
public function update(Request $request)
{
    // Valider les données de la requête
    $request->validate([
        'directeur_id' => 'required|exists:directeurs,id',
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:directeurs,email,' . $request->directeur_id,
    ]);

    // Récupérer le directeur en fonction de l'identifiant fourni
    $directeur = Directeur::findOrFail($request->directeur_id);

    // Mettre à jour les informations du directeur
    $directeur->update([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'email' => $request->email,
    ]);

    // Rediriger avec un message de succès
    return redirect()->route('directeur.profile')->with('ruessite', 'Profil mis à jour avec succès');
}


}
