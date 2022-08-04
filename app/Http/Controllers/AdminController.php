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
    public function indexAdmin(){
        return view('admin.index');
    }
    public function home(){

        $cantpasajeros=pasajero::all()->count();
        $cantviajes=viaje::all()->count();
        $viajes=viaje::all();
        $reservas=viaje_pasajero::all()->count();
        $date = Carbon::now()->format('Y-m-d');
        $date= Carbon::parse($date);
        $viajesconcretados=0;
        $viajesporconcretar=0;
        $ganancias_totales_viajes=0;
        $hoy=$date;
        $gastos_totales=0;


        $fechas_salidas_todos_los_viajes=  DB::table('viaje')->selectRaw("fecha_salida")->selectRaw('id_viaje')->get();

        for($i=0;$i<count($fechas_salidas_todos_los_viajes);$i++){
            $fechasalidaviaje_formateada= Carbon::parse($fechas_salidas_todos_los_viajes[$i]->fecha_salida);

            if(($hoy)->gt($fechasalidaviaje_formateada)){
                
                $viaje= viaje::where('id_viaje',$fechas_salidas_todos_los_viajes[$i]->id_viaje)->first();

                if($viaje->PasajerosqueViajan->count()>0){

                    for($j=0;$j<$viaje->PasajerosqueViajan->count();$j++){
                        $ganancias_totales_viajes= $ganancias_totales_viajes+$viaje->PasajerosqueViajan[$j]->pago;
                    }
                     
                }

                if($viaje->GastosdelViaje->count()>0){
                    for($k=0;$k<$viaje->GastosdelViaje->count();$k++){
                        $gastos_totales= $gastos_totales+$viaje->GastosdelViaje[$k]->costo;
                    }
                }
                $viajesconcretados= $viajesconcretados+1;
            }else{
                $viajesporconcretar=$viajesporconcretar+1;
            }
        }
        $ganancia_real= $ganancias_totales_viajes-$gastos_totales;
    return view('summary',compact('cantpasajeros','viajesporconcretar','viajes','reservas','date','viajesconcretados','ganancias_totales_viajes','gastos_totales','ganancia_real'));
    }
}
?>
