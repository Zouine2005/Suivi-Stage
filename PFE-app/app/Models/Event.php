<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'start_date', 'end_date', 'formateur_id', 'filiere_id', 'id_groupe'];

    // Relationship with Formateur
    public function formateur()
    {
        return $this->belongsTo(Formateur::class);
    }

    // Relationship with Filiere
    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    // Relationship with Groupe
    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }
}
