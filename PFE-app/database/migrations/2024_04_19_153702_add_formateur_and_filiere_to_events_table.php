<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFormateurAndFiliereToEventsTable extends Migration
{
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->unsignedBigInteger('formateur_id')->nullable();
            $table->foreign('formateur_id')->references('id')->on('formateurs');

            $table->unsignedBigInteger('filiere_id')->nullable();
            $table->foreign('filiere_id')->references('id')->on('filieres');
        });
    }

    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropForeign(['formateur_id']);
            $table->dropColumn('formateur_id');

            $table->dropForeign(['filiere_id']);
            $table->dropColumn('filiere_id');
        });
    }
}
