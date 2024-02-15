<?php

// database/migrations/[timestamp]_create_tuteurs_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTuteursTable extends Migration
{
    public function up()
    {
        Schema::create('tuteurs', function (Blueprint $table) {
            $table->id('id_tuteur');
            $table->string('nom_tuteur');
            $table->string('emargement');
            $table->string('cachet_entreprise');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tuteurs');
    }
}
