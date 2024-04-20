<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    protected $fillable = ['nom'];
    protected $primaryKey = 'id_filiere';
    public $timestamps = false;

    public function events()
    {
        return $this->hasMany(Event::class, 'filiere_id');
    }

    public function groupes()
    {
        return $this->hasMany(Groupe::class, 'id_filiere');
    }
}
