<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DirecteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Directeur::create([
            'nom' => 'Azri',
            'prenom' => 'Ichrak', 
            'email' => 'directeur@example.com',
            'password' => bcrypt('ista2024'),
        ]);
    }
}
