<?php

namespace App\Http\Controllers;

use App\Models\Unidades;
use Illuminate\Http\Request;

class UnidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $unidades= unidades::all();
        return view('unidades.listadounidades',compact('unidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('unidades.nuevaunidad');
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
         unidades::create(["tipo"=>$request->tipo,"placa"=>$request->placa,"color"=>$request->color,"cant_puestos"=>$request->cant_puestos]);

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unidades  $unidades
     * @return \Illuminate\Http\Response
     */
    public function show(Unidades $unidades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unidades  $unidades
     * @return \Illuminate\Http\Response
     */
    public function edit(Unidades $unidades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unidades  $unidades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unidades $unidades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unidades  $unidades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unidades $unidades)
    {
        //
    }
}
