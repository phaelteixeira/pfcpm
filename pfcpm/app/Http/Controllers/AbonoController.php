<?php

namespace App\Http\Controllers;

use App\Abono;
use Illuminate\Http\Request;

class AbonoController extends Controller
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
        return view('abono_servico');
    }
    public function store(Request $request)
    {
        $abono = new Abono();
        $abono->num_mat = $request->input("num_mat");
        $abono->nome = $request->input("nome");
        $abono->substituto = $request->input("substituto");
        $abono->servico = $request->input("servico");
        $abono->funcao = $request->input("funcao");
        $abono->data = $request->input("data");
        $abono->horario = $request->input("horario");
        $abono->dt_hoje = $request->input("dt_hoje");
        $abono->save();
        return redirect()->route('abono.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Abono  $abono
     * @return \Illuminate\Http\Response
     */
    public function show(Abono $abono)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Abono  $abono
     * @return \Illuminate\Http\Response
     */
    public function edit(Abono $abono)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Abono  $abono
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abono $abono)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Abono  $abono
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abono $abono)
    {
        //
    }
}
