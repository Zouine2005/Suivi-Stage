<?php 
// database/seeders/FiliereSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FiliereSeeder extends Seeder
{
    public function run()
    {
        
        DB::table('filieres')->insert([
            'nom' => 'Informatique',
        ]);

        DB::table('filieres')->insert([
            'nom' => 'Gestion ',
        ]);

        DB::table('filieres')->insert([
            'nom' => 'Électronique',
        ]);

    }
}
