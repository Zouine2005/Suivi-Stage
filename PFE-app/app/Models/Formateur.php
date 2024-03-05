<?php

// Dans le fichier Formateur.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Formateur extends Authenticatable
{
    protected $guard = 'formateur'; // Nom du gardien
    protected $fillable = ['nom', 'prenom', 'email', 'password'];
}

