<?php

// database/migrations/[timestamp]_create_etablissements_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtablissementsTable extends Migration
{
    public function up()
    {
        Schema::create('etablissements', function (Blueprint $table) {
            $table->id('id_etablissement');
            $table->string('nom');
            $table->unsignedBigInteger('id_direction');
            $table->foreign('id_direction')->references('id_direction')->on('direction_regionale');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('etablissements');
    }
}

