<?php

namespace App\Http\Controllers;

use App\User;
use App\Patente;
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
        $policial = User::all();
        return view('lista_policiais', compact('policial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patente = new Patente();
        return view('policial_cadastrar', compact('patente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \DB::table('users')->insert([
            'nome'              => $request->nome,
            'matricula'         => $request->matricula,
            'foto'              => $request->foto,
            'patente'           => $request->patente,
            'dataNascimento'    => $request->dataNascimento,
            'sexo'              => $request->sexo,
            'cidade'            => $request->cidade,
            'estado'            => $request->estado,
            'pelotao'           => $request->pelotao,
            'rg'                => $request->rg,
            'cpf'               => $request->cpf,
            'senha'             => $request->senha,
        ]);
        return redirect()->route('policial.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Policial  $policial
     * @return \Illuminate\Http\Response
     */
    public function show(User $policial)
    {
        return view('registroPolicial', compact('policial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Policial  $policial
     * @return \Illuminate\Http\Response
     */
    public function edit(User $policial)
    {
        return view('policialeditar', compact('policial'));
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
        $policial->patente = $requeste->inpput('patente');
        $path=$request->file("foto")->store('imagens', 'public');
        $policial->foto = $path;
        $policial->sexo = $request->input('sexo');
        $policial->cidade = $request->input("cidade");
        $policial->dataNascimento = $request->input('dataNascimento');
        $policial->estado = $request->input("estado");
        $policial->pelotao = $request->input("pelotao");
        $policial->rg = $request->input("rg");
        $policial->cpf = $request->input("cpf");
        $policial->senha = $request->input("senha");
        $policial->save();
        return redirect()->route('policial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Policial  $policial
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $policial)
    {
        $policial->delete();
        return redirect()->route('policial.index');
    }
}
