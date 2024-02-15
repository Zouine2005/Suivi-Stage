<?php

// database/migrations/[timestamp]_create_stages_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagesTable extends Migration
{
    public function up()
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->id('id_stage');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->integer('duree');
            $table->unsignedBigInteger('id_groupe');
            $table->foreign('id_groupe')->references('id_groupe')->on('groupes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stages');
    }
}

