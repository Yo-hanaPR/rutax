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
        


        //$date = Carbon::parse('2021-03-25');
       // $date = $date->format('l jS \\of F Y h:i:s A');    Thursday 7th of May 2015 01:17:56 PM

        return view('summary',compact('cantpasajeros','cantviajes','viajes','reservas','date'));
    }
    
/*
    private $slpToday=0.0053;
    private $dollar= 4.6;

    public function inversiondinero(Request $request){

    
        if($request->moneda=='$'){
            $equivalente= $this->equivalenciaDollarToSLP($request->monto,$request->valorslp);
        }
        if($request->moneda=='SLP'){

            $equivalente= $this->equivalenciaSLPtoDollar($request->monto,$request->valorslp);
        }
    $nuevaInversion = inversiones::create(["monto"=>$request->monto,"equiv_dolares"=>$equivalente,"id_user"=>$request->id_user,"moneda"=>$request->moneda]);
    return redirect('balance');
    }
    
	public function registroganancia(Request $request){
      
        $moneda='$';
        switch ($request->moneda){
            case 'SLP':
                $dolares= $this->equivalenciaSLPtoDollar($request["monto"],$request->valorslp);
            break;
        }
        
        foreach(usuarios::all() as $usuario){
            if($usuario->id==1){
             $monto= $dolares*70/100;
             $montoSLP= $request["monto"]*70/100;
             
            }   
            if($usuario->id==2){
            $monto= $dolares*30/100;
            $montoSLP= $request["monto"]*30/100;

            }
            echo $monto." iteracion para ".$usuario->nombre."\n\n";

            ganancias::create(["monto"=>$montoSLP,"id_user"=>$usuario->id,"equiv_dolares"=>$monto,'moneda'=>$request->moneda]);
          

            
        }
        return redirect('balance');
    }

    public function equivalenciaSLPtoDollar($slp,$valorSLP){
        $equivalenteDollar= $slp*$valorSLP;
        return $equivalenteDollar;
    }

    public function equivalenciaDollarToSLP($montoDolares,$valorSLP){
        $equivalenteSLP= $montoDolares/$valorSLP;
        return $equivalenteSLP;
    }
    
    public function balance(){
        $inversiones=DB::table("inversiones")->get();

        $usuarios=DB::table("usuarios")->get();
        $ganancias=DB::table("table_ganancias")->get();
        $cuentas=DB::table("cuentas")->get();
        $monto=0;

        return view('admin',compact("inversiones",'usuarios','ganancias','cuentas','monto'));
    }
    public function retiros(){
    }
    public function investmentform(){
        $usuarios=DB::table("usuarios")->get();
        return view('investments',compact('usuarios'));
    }
    
    public function nuevaGanancia(){
        $usuarios=DB::table("usuarios")->get();
        return view('formganancia',compact('usuarios'));
    }*/
    
}
?>
