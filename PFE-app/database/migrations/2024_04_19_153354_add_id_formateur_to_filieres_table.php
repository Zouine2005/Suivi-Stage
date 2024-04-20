<?php
// database/migrations/[timestamp]_add_id_formateur_to_filieres_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdFormateurToFilieresTable extends Migration
{
    public function up()
    {
        Schema::table('filieres', function (Blueprint $table) {
            $table->unsignedBigInteger('id_formateur')->nullable();
            $table->foreign('id_formateur')->references('id_formateur')->on('formateurs')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('filieres', function (Blueprint $table) {
            $table->dropForeign(['id_formateur']);
            $table->dropColumn('id_formateur');
        });
    }
}
