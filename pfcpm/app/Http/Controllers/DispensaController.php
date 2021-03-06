<?php

namespace App\Http\Controllers;

use App\Dispensa;
use Illuminate\Http\Request;

class DispensaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispensa = Dispensa::all();
        return view ('listaDispensa', compact('dispensa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dispensa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dispensa = new Dispensa();
        $dispensa->escalado = $request->input("escalado");
        $dispensa->dia_do_servico = $request->input("dia");
        $dispensa->hora_inicial = $request->input("das");
        $dispensa->hora_final = $request->input("as");
        $dispensa->virtude = $request->input("virtude");
        $dispensa->save();
        return redirect()->route('dispensa.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dispensa  $dispensa
     * @return \Illuminate\Http\Response
     */
    public function show(Dispensa $dispensa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dispensa  $dispensa
     * @return \Illuminate\Http\Response
     */
    public function edit(Dispensa $dispensa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dispensa  $dispensa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dispensa $dispensa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dispensa  $dispensa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dispensa $dispensa)
    {
        //
    }
}
