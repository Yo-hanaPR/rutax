<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasajeroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasajero', function (Blueprint $table) {
            //$table->id('id'); ASI PASA.
            $table->increments('id')->unsigned();
            /*$table->increments('id_pasajero');*/
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('cedula');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('correo');
            $table->string('edad');
            $table->integer('id_metodo_pago')->unsigned();
            $table->enum('status', ['Pagado','falta']);



            
            
            $table->foreign('id_metodo_pago')->references('id_mp')->on('metodo_pago');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasajero');
    }
}
