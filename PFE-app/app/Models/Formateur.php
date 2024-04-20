<?php

// Dans le fichier Formateur.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Formateur extends Authenticatable
{
    protected $guard = 'formateur'; // Nom du gardien
    protected $primaryKey = 'formateur_id'; 
    protected $fillable = ['nom', 'prenom', 'email', 'password'];
    public function directeur()
    {
        return $this->belongsTo(Directeur::class);
    }
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}

