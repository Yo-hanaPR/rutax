<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItinerariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itinerarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_viaje')->unsigned();
            $table->integer('id_parada')->unsigned();

            $table->string('actividades');
            $table->string('punto_salida');
            $table->string('punto_regreso');
            $table->string('ruta');
            $table->timestamps();

            $table->foreign('id_viaje')->references('id_viaje')->on('viaje');

            $table->foreign('id_parada')->references('id')->on('paradas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itinerarios');
    }
}
