<?php

namespace Database\Seeders;

use App\Models\viaje;
use DB;
use Illuminate\Database\Seeder;

class q_ViajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $id_destino='1';
        $precio='19'; 
        
        $input=["id_destino"=>$id_destino,"precio_fijo"=>$precio,"fecha_salida"=>'20/3/2',"hora_salida"=>'02:30 p. m.',"id_unidad"=>1,'ganancia_total'=>536];

        DB::table('viaje')->insert($input);

        DB::table('viaje')->insert(["id_destino"=>2,"precio_fijo"=>20,"fecha_salida"=>'10/3/2',"hora_salida"=>'05:30 a. m.','id_unidad'=>1,'ganancia_total'=>620]);
    }
}
