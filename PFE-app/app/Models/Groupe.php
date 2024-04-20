<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    protected $table = 'groupes';
    protected $primaryKey = 'id_groupe';
    public $timestamps = true;

    // Relationship with Filiere
    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'id_filiere');
    }

    // Relationship with Event
    public function events()
    {
        return $this->hasMany(Event::class, 'id_groupe');
    }
}
