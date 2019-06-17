<?php

namespace App\Http\Controllers;

use App\Permuta;
use App\Policial;
use Illuminate\Http\Request;

class PermutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $policia = Policial::all();
        $permutas = Permuta::all();
        return view('listapermuta', compact('policia', 'permutas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $policia = Policial::all();
        return view('telapermuta', compact('policia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permutas = new Permuta();
        $permutas->nome = $request->input('nome');
        $permutas->matricula = $request->input('matricula');
        $permutas->local = $request->input('local');
        $permutas->dia_do_servico = $request->input('dia');
        $permutas->hora_inicial = $request->input('das');
        $permutas->hora_final = $request->input('as');
        $permutas->escalado = "";
        $permutas->escaladoMatricula = "";
        $permutas->escaladoLocal = "";
        $permutas->escaladoDia_do_servico = "";
        $permutas->escaladoHora_inicial = "";
        $permutas->escaladoHora_final = "";
        $permutas->virtude = "";
        $permutas->save();
        return redirect()->route('permuta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permuta  $permuta
     * @return \Illuminate\Http\Response
     */
    public function show(Permuta $permuta)
    {
        $permutas = Permuta::all();
        return view('permutaespera', compact('permutas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permuta  $permuta
     * @return \Illuminate\Http\Response
     */
    public function edit(Permuta $permuta)
    {
        return view ('permutasubistituto', compact('permuta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permuta  $permuta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permuta $permuta)
    {
        $permuta->escalado = $request->input('nome');
        $permuta->escaladoMatricula = $request->input('matricula');
        $permuta->escaladoLocal = $request->input('local');
        $permuta->escaladoDia_do_servico = $request->input('dia');
        $permuta->escaladoHora_inicial = $request->input('das');
        $permuta->escaladoHora_final = $request->input('as');
        $permuta->save();
        return redirect()->route('permuta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permuta  $permuta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permuta $permuta)
    {
        //
    }
}
