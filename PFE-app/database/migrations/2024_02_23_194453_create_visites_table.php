<?php

// database/migrations/[timestamp]_create_visites_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitesTable extends Migration
{
    public function up()
    {
        Schema::create('visites', function (Blueprint $table) {
            $table->id('id_visite');
            $table->unsignedBigInteger('id_tuteur');
            $table->unsignedBigInteger('id_stagiaire');
            $table->unsignedBigInteger('id_formateur');
            $table->date('date_visite');
            $table->foreign('id_tuteur')->references('id_tuteur')->on('tuteurs');
            $table->foreign('id_stagiaire')->references('id_stagiaire')->on('stagiaires');
            $table->foreign('id_formateur')->references('id_formateur')->on('formateurs');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('visites');
    }
}
