<?php

namespace App\Http\Controllers;

use App\Suspeito;
use Illuminate\Http\Request;

class SuspeitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suspeito = Suspeito::all();
        return view('lista_suspeito', compact('suspeito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastrar_suspeito');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sus = new Suspeito();
        $sus->nome = $request->input('nome');
        $sus->vulgo = $request->input('vulgo');
        $sus->cpf = $request->input('cpf');
        $sus->rg = $request->input('rg');
        $sus->sexo = $request->input('sexo');
        $sus->estado = $request->input('estado');
        $sus->cidade = $request->input('cidade');
        $sus->localAtuacao = $request->input('localAtuacao');
        $sus->dataNascimento = $request->input('dataNascimento');
        $sus->foto = $request->input('foto');
        $sus->nomePai = $request->input('nomePai');
        $sus->nomeMae = $request->input('nomeMae');
        $sus->save();
        return redirect()->route('suspeitos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Suspeito  $suspeito
     * @return \Illuminate\Http\Response
     */
    public function show(Suspeito $suspeito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Suspeito  $suspeito
     * @return \Illuminate\Http\Response
     */
    public function edit(Suspeito $suspeito)
    {
        return view('suspeitoeditar', compact('suspeito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Suspeito  $suspeito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suspeito $suspeito)
    {
        $suspeito->nome = $request->input('nome');
        $suspeito->vulgo = $request->input('vulgo');
        $suspeito->cpf = $request->input('cpf');
        $suspeito->rg = $request->input('rg');
        $suspeito->sexo = $request->input('sexo');
        $suspeito->estado = $request->input('estado');
        $suspeito->cidade = $request->input('cidade');
        $suspeito->localAtuacao = $request->input('localAtuacao');
        $suspeito->dataNascimento = $request->input('dataNascimento');
        $suspeito->foto = $request->input('foto');
        $suspeito->nomePai = $request->input('nomePai');
        $suspeito->nomeMae = $request->input('nomeMae');
        $suspeito->save();
        return redirect()->route('suspeitos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suspeito  $suspeito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suspeito $suspeito)
    {
        $suspeito->delete();
        return redirect()->route('suspeitos.index');
    }
}
