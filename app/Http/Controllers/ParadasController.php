<?php

namespace App\Http\Controllers;

use App\Models\Paradas;
use Illuminate\Http\Request;

class ParadasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $paradas= paradas::all();
        return view('paradas.registroparadas',compact('paradas'));
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
        //
        paradas::create(["lugar"=>$request->lugar,"pto_referencia"=>$request->pto_referencia,'horario'=>$request->horario,'servicio'=>$request->servicio,'metodo_pago'=>$request->metodo_pago]);

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paradas  $paradas
     * @return \Illuminate\Http\Response
     */
    public function show(Paradas $paradas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paradas  $paradas
     * @return \Illuminate\Http\Response
     */
    public function edit(Paradas $paradas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paradas  $paradas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paradas $paradas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paradas  $paradas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $parada = paradas::find($id)->delete();
        return redirect('/home');
    }
}
