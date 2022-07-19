<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\viaje;
use App\Models\destinos;
use App\Models\unidades;

class ViajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $viajes= viaje::all();
        return view('viajes.listadoviajes',compact('viajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $viajes= viaje::all();
        $destinos= destinos::all();
        $unidades= unidades::all();


        foreach ($unidades as $unidad) {
            
        }
         return view('viajes.registroviaje',compact('viajes','destinos','unidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $puestosunidadViaje= unidades::where('id',$request->id_unidad)->first()->cant_puestos; //31

        $ganancia_total= $request->precio_fijo*$puestosunidadViaje;

        viaje::create(["id_destino"=>$request->destino,"precio_fijo"=>$request->precio_fijo,"fecha_salida"=>$request->fecha_salida,"hora_salida"=>$request->hora_salida,"id_unidad"=>$request->id_unidad,'ganancia_total'=>$ganancia_total]);


        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $viaje= viaje::where('id_viaje',$id)->get();
        return view('viajes.detalleviaje',compact('viaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $viaje = viaje::find($id);
        $viaje->update($request->all());
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $viaje = viaje::find($id)->delete();
        return redirect('/home');
    }
}
