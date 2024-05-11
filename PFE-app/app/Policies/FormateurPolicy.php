<?php

namespace App\Policies;
use App\Models\Formateur;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\User;

class FormateurPolicy
{
    /**
     * Create a new policy instance.
     */
    use HandlesAuthorization;

    public function verifierStage(Formateur $formateur)
    {
        // Vérifier si l'utilisateur est un formateur
        if ($formateur->role !== 'formateur') {
            return false; // Si l'utilisateur n'est pas un formateur, il n'est pas autorisé
        }

        // Ajoutez votre logique d'autorisation spécifique ici
        // Par exemple, vous pouvez vérifier si le formateur appartient à une certaine filière, etc.

        // Autoriser tous les formateurs par défaut
        return true;
    
    }
    public function __construct()
    {
        //
    }
}
