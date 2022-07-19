<?php

namespace Database\Seeders;

use App\Models\pasajero;
use DB;
use Illuminate\Database\Seeder;

class PasajeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pasajero')->insert(['nombre'=>'YOHANNA','apellido'=>'Padrino','cedula'=>'231323','direccion'=>'calle vista gerns','telefono'=>32049,'correo'=>'ynpr@gmail.com',
            'edad'=>26,'id_metodo_pago'=>1]);
    }
}
