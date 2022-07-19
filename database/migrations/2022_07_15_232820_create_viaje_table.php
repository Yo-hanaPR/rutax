<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaje', function (Blueprint $table) {

            $table->increments('id_viaje')->unsigned();
            $table->integer('id_destino')->unsigned();
            $table->integer('id_unidad')->unsigned();
            $table->date('fecha_salida');
            $table->string('hora_salida');
            $table->integer('precio_fijo');

            $table->integer('ganancia_total');
            $table->timestamps();
            
            $table->foreign('id_destino')->references('id')->on('destinos');
            $table->foreign('id_unidad')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viaje');
    }
}
