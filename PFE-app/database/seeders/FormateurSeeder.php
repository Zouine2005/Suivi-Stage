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
        $directeur_id = 1; // Remplacez 1 par l'ID réel du directeur correspondant

        \App\Models\Formateur::create([
            'matricule' => 'CER12',
            'nom' => 'Gahi',
            'prenom' => 'Said', 
            'email' => 'formateur@example.com',
            'password' => bcrypt('dev201'),
            'directeur_id' => $directeur_id,
        ]);
        // Ajoutez directeur_id pour les autres formateurs également
        // Assurez-vous de remplacer 1 par l'ID du directeur correspondant pour chaque formateur

        \App\Models\Formateur::create([
            'matricule' => 'CER13',
            'nom' => 'Zouine',
            'prenom' => 'Mohamed', 
            'email' => 'formateur2@example.com',
            'password' => bcrypt('Zoro2005'),
            'directeur_id' => $directeur_id,
        ]);

        \App\Models\Formateur::create([
            'matricule' => 'CER14',
            'nom' => 'Boujenoui',
            'prenom' => 'Zakaria', 
            'email' => 'formateur3@example.com',
            'password' => bcrypt('motdepasse3'),
            'directeur_id' => $directeur_id,
        ]);

        \App\Models\Formateur::create([
            'matricule' => 'CER15',
            'nom' => 'Allali',
            'prenom' => 'Mohamed', 
            'email' => 'formateur4@example.com',
            'password' => bcrypt('motdepasse4'),
            'directeur_id' => $directeur_id,
        ]);
    }
}
