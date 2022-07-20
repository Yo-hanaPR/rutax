<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\viaje;
use App\Models\servicios;
use App\Models\viaje_pasajero;
use App\Models\unidades;
use App\Models\pasajero;
use App\Models\gastos;
use App\Models\destinos;
use App\Models\metodo_pago;
use Carbon\Carbon;
use DB;

class AdminController extends Controller
{
    //

    public function home(){

        $cantpasajeros=pasajero::all()->count();
        $cantviajes=viaje::all()->count();
        $viajes=viaje::all();
        $reservas=viaje_pasajero::all()->count();
        $date = Carbon::now()->format('Y-m-d');
        $date= Carbon::parse($date);
        $viajesconcretados=0;
        $hoy=$date;


        $fechas_salidas_todos_los_viajes=  DB::table('viaje')->selectRaw("fecha_salida")->selectRaw('id_viaje')->get();

        for($i=0;$i<count($fechas_salidas_todos_los_viajes);$i++){
            $fechasalidaviaje_formateada= Carbon::parse($fechas_salidas_todos_los_viajes[$i]->fecha_salida);

        if(($hoy)->gt($fechasalidaviaje_formateada)){
                    $viajesconcretados= $viajesconcretados+1;
    }


}

return view('summary',compact('cantpasajeros','cantviajes','viajes','reservas','date','viajesconcretados'));
    }
}
?>
