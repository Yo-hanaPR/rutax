<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\metodo_pago;
use DB;

class Metodo_pagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('metodo_pago')->insert(["metodo"=>'Paypal','direccion'=>'yohanazareth@gmail.com',"observaciones"=>'Correo propio y la cuenta verificada']);
    }
}
