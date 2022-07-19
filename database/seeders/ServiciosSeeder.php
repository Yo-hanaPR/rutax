<?php

namespace Database\Seeders;

use App\Models\servicios;
use Illuminate\Database\Seeder;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('servicios')->insert([
                "servicio"=>'Karaoke']);
    }
}
