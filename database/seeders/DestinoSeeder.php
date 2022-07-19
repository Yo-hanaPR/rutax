<?php
namespace Database\Seeders;

use App\Models\destinos;
use Illuminate\Database\Seeder;

class DestinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //
        $nombre='Merida';
        $direccion='Sur oeste de venezuela';
        $url='una url';
        $detalles='DESTALLES AHI ADICIONALES';
        
        	\DB::table('destinos')->insert([
                "nombre"=>$nombre,"direccion"=>$direccion,"url"=>$url,'detalles'=>$detalles
            ]);
            \DB::table('destinos')->insert([
                "nombre"=>"La guaira","direccion"=>"La guaira","url"=>"SU URL",'detalles'=>$detalles
            ]);

            
    }
}
