<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViajePasajeroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaje_pasajero', function (Blueprint $table) {
            $table->id();

             $table->integer('id_pasajero')->unsigned();
              $table->integer('id_viaje')->unsigned();
              
            $table->foreign('id_pasajero')->references('id')->on('pasajero');

            $table->foreign('id_viaje')->references('id_viaje')->on('viaje');

            $table->boolean('promo');
            $table->integer('pago');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viaje_pasajero');
    }
}
