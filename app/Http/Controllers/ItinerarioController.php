<?php

namespace App\Http\Controllers;

use App\Models\Itinerario;
use App\Models\paradas;
use App\Models\viaje;
use Illuminate\Http\Request;

class ItinerarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $itinerarios= itinerario::all();
        $paradas= paradas::all();
        $viajes= viaje::all();
        return view('viajes.itinerario',compact('paradas','viajes','itinerarios'));
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
        itinerario::create([
            'actividades'=>$request->actividades,
            'id_viaje'=>$request->id_viaje_asociado,
            'punto_salida'=>$request->punto_salida,
            'punto_regreso'=>$request->punto_regreso,
            'id_parada'=>$request->id_parada,
            'ruta'=>$request->ruta
        ]);
        
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Itinerario  $itinerario
     * @return \Illuminate\Http\Response
     */
    public function show(Itinerario $itinerario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Itinerario  $itinerario
     * @return \Illuminate\Http\Response
     */
    public function edit(Itinerario $itinerario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Itinerario  $itinerario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Itinerario $itinerario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Itinerario  $itinerario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itinerario $itinerario)
    {
        //
    }
}
