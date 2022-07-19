<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasajero;
use App\Models\metodo_pago;

class PasajerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $pasajeros= pasajero::all();
        return view('pasajeros.pasajeros',compact('pasajeros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $metodos_pago=metodo_pago::all();
       $pasajeros= pasajero::all();
        return view('pasajeros.registropasajero',compact('pasajeros','metodos_pago'));
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
        pasajero::create(["nombre"=>$request->nombre,"apellido"=>$request->apellido,"cedula"=>$request->cedula,"direccion"=>$request->direccion,"telefono"=>$request->telefono,"correo"=>$request->correo,"edad"=>$request->edad,"id_metodo_pago"=>$request->id_metodo_pago]);

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

        $pasajero= pasajero::where('id',$id)->get();
        return view('pasajeros.detallepasajero',compact('pasajero'));
        //Aunque creo que no es necesaria esta pagina si los tengo todos listados.. Cualquier cosa hago un filtro en el index y ya.. Asi que no haré la pagina detallepasajero.
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
        $pasajero = pasajero::find($id);
        $pasajero->update($request->all());
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
        $pasajero = pasajero::find($id)->delete();
        return redirect('/home');
    }
}
