<?php
// database/migrations/[timestamp]_create_stagiaires_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagiairesTable extends Migration
{
    public function up()
    {
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id('id_stagiaire');
            $table->string('CEF');
            $table->string('nom');
            $table->string('prenom');
            $table->string('specialite');
            $table->unsignedBigInteger('id_groupe');
            $table->foreign('id_groupe')->references('id_groupe')->on('groupes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stagiaires');
    }
}
