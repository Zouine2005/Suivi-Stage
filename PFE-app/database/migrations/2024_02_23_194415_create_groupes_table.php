<?php

// database/migrations/[timestamp]_create_groupes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupesTable extends Migration
{
    public function up()
    {
        Schema::create('groupes', function (Blueprint $table) {
            $table->id('id_groupe');
            $table->string('nom');
            $table->unsignedBigInteger('id_filiere');
            $table->foreign('id_filiere')->references('id_filiere')->on('filieres');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('groupes');
    }
}
