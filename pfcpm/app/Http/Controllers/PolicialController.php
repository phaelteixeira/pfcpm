<?php

namespace App\Http\Controllers;

use App\Policial;
use Illuminate\Http\Request;

class PolicialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $policiais = Policial::all();
        return view('lista_policiais', compact('policiais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('policial_cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $policia = new Policial();
        $policia->num_mat = $request->input("num_mat");
        $policia->nome = $request->input("nome");
        $policia->sexo = $request->input('sexo');
        $policia->cidade = $request->input("cidade");
        $policia->estado = $request->input("estado");
        $policia->pelotao = $request->input("pelotao");
        $policia->rg = $request->input("rg");
        $policia->cpf = $request->input("cpf");
        $policia->senha = $request->input("senha");
        $policia->save();
        return redirect()->route('policiais.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Policial  $policial
     * @return \Illuminate\Http\Response
     */
    public function show(Policial $policial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Policial  $policial
     * @return \Illuminate\Http\Response
     */
    public function edit(Policial $policial)
    {
        $policia = new Policial();
        return view('policialeditar', compact('policial', 'policia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Policial  $policial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Policial $policial)
    {
        $policial->num_mat = $request->input("num_mat");
        $policial->nome = $request->input("nome");
        $policial->sexo = $request->input('sexo');
        $policial->cidade = $request->input("cidade");
        $policial->estado = $request->input("estado");
        $policial->pelotao = $request->input("pelotao");
        $policial->rg = $request->input("rg");
        $policial->cpf = $request->input("cpf");
        $policial->senha = $request->input("senha");
        $policial->save();
        return redirect()->route('policiais.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Policial  $policial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Policial $policial)
    {
        $policial->delete();
        return redirect()->route('policiais.index');
    }
}
