<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\viaje;
use App\Models\pasajero;
use App\Models\viaje_pasajero;

class ReservaController extends Controller
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
        $reservas= viaje_pasajero::all();
        return view('reservas.listareservas',compact('reservas','viajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pasajeros= pasajero::all();
        $viajes= viaje::all();
        return view('reservas.nuevareserva',compact('pasajeros','viajes'));
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
        if($request->promocion== 'on'){
            $promocion= 1;
        }else{
            $promocion=0;
        }
         viaje_pasajero::create(["id_viaje"=>$request->viaje,"id_pasajero"=>$request->pasajero,"promo"=>$promocion,"pago"=>$request->pago]);
        

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
        $reserva = viaje_pasajero::find($id);
        $reserva->update($request->all());
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
        $reserva = viaje_pasajero::find($id)->delete();
        return redirect('/home');
    }

    public function eliminareservas($id){

        viaje_pasajero::where('id_viaje', $id)->delete();
        return redirect('/home');
    }
}
