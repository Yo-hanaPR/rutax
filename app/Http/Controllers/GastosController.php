<?php

namespace App\Http\Controllers;

use App\Models\Gastos;
use App\Models\Viaje;
use App\Models\servicios;
use DB;
use Illuminate\Http\Request;

class GastosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $viajes= Viaje::all();
        $servicios= Servicios::all();
        $gastos= Gastos::all();
        return view('gastos.nuevogasto',compact('viajes','servicios','gastos'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        for($i=1;$i<=count($request->gasto_por_concepto_servicio);$i++){

            if($gastosviaje1= gastos::where('id_viaje',$request->id_viaje_asociado)->where('id_servicio',$i)->first())
             {
                gastos::where('id_viaje',$request->id_viaje_asociado)->where('id_servicio',$i)->update(['costo'=>$request->gasto_por_concepto_servicio[$i]]);
             }else{
                

            gastos::create(["id_viaje"=>$request->id_viaje_asociado,"id_servicio"=>$i,"costo"=>$request->gasto_por_concepto_servicio[$i]]); 
             }
 
            
        }
         
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gastos  $gastos
     * @return \Illuminate\Http\Response
     */
    public function show(Gastos $gastos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gastos  $gastos
     * @return \Illuminate\Http\Response
     */
    public function edit(Gastos $gastos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gastos  $gastos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gastos $gastos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gastos  $gastos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gastos $gastos)
    {
        //
    }
}
