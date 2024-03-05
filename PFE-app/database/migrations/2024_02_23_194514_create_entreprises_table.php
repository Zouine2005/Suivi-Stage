<?php

// database/migrations/[timestamp]_create_entreprises_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id('id_entreprise');
            $table->string('nom_entreprise');
            $table->string('ville');
            $table->unsignedBigInteger('id_tuteur');
            $table->foreign('id_tuteur')->references('id_tuteur')->on('tuteurs');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('entreprises');
    }
}
