<?php

namespace App\Http\Controllers;

use App\Policial;
use App\Login;
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
        return view('policiais_listar', compact('policiais'));
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
        $policials = new Policial();
        $policials->num_mat = $request->input("num_mat");
        $policials->nome = $request->input("nome");
        $policials->cidade = $request->input("cidade");
        $policials->estado = $request->input("estado");
        $policials->pelotao = $request->input("pelotao");
        $policials->rg = $request->input("rg");
        $policials->cpf = $request->input("cpf");
        $policials->senha = $request->input("senha");
        $policials->save();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Policial  $policial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Policial $policial)
    {
        //
    }
}
