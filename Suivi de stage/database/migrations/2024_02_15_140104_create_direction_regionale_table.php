<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectionRegionaleTable extends Migration
{
    public function up()
    {
        Schema::create('direction_regionale', function (Blueprint $table) {
            $table->id('id_direction');
            $table->string('Direction régionale de Drâa-Tafilalet');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('direction_regionale');
    }
}