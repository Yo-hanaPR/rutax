<?php

namespace Database\Seeders;


use DB;
use App\viaje_pasajero;
use Illuminate\Database\Seeder;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $id_viaje='1';
        $id_pasajero='1'; 
        $promo=FALSE;
        $pago=13;
        
        $input=["id_viaje"=>$id_viaje,"id_pasajero"=>$id_pasajero,"promo"=>$promo,"pago"=>$pago];

        DB::table('viaje_pasajero')->insert($input);
    }
}
