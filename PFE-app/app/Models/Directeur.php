<?php

// Dans le fichier Directeur.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Directeur extends Authenticatable
{
    protected $guard = 'directeur'; // Nom du gardien
    protected $fillable = ['nom', 'prenom', 'email', 'password'];
    public function formateurs()
    {
        return $this->hasMany(Formateur::class);
    }
}

