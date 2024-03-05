<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Formateur::create([
            'matricule' => 'CER12',
            'nom' => 'Gahi',
            'prenom' => 'Said', 
            'email' => 'formateur@example.com',
            'password' => bcrypt('dev201'),
        ]);
    }
}
