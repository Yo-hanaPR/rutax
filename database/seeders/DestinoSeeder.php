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
                "nombre"=>$nombre,"direccion"=>$direccion,"url"=>$url,'detalles'=>$detalles,'distancia'=>'a 2 horas de caracas','phone'=>'04125478450','reference'=>'por el farmatodo de catia la mar','business_hours'=>'Abierto de 8 am a 9pm','history'=>'Es un pueblito pesquero donde ..... '
            ]);
            \DB::table('destinos')->insert([
                "nombre"=>"La guaira","direccion"=>"La guaira","url"=>"SU URL",'detalles'=>$detalles,'distancia'=>'a 2 horas de caracas','phone'=>'04125875544','reference'=>'por el farmatodo de catia la mar','business_hours'=>'Abierto de 8 am a 9pm','history'=>'Es un pueblito pesquero donde ..... '
            ]);

            
    }
}
