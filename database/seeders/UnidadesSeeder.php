<?php

namespace Database\Seeders;

use App\Models\Unidades;
use DB;
use Illuminate\Database\Seeder;

class UnidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('unidades')->insert(['tipo'=>'Encava','placa'=>'xs324v','color'=>'negro','cant_puestos'=>'31']);
    }
}
