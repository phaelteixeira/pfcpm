<?php

namespace App\Http\Controllers;

use App\Permutar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PermutarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permutas = Permutar::all();
        return view ('listaEspera', compact('permutas'));
    }

    public function indexer()
    {
        $permutas = Permutar::all();
        return view ('listaAceita', compact('permutas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('telapermuta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validacao = $this->validator($request->all());
        if($validacao->fails()){
            return redirect()->back()
            ->witherrors($validacao->errors())
            ->withInput($request->all());
        }else{
            $permutas = new Permutar();
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
            $permutas->virtude = $request->input('virtude');
            $permutas->status = "Espera";
            $permutas->save();
            return redirect()->route('permutas.index');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permutar  $permutar
     * @return \Illuminate\Http\Response
     */
    public function show(Permutar $permuta)
    {
        if($permuta->status == "Espera")
        {
            return view('permutaespera', compact('permuta'));
        }
        if($permuta->status == "Aceita")
        {
            return view('permutaAceita', compact('permuta'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permutar  $permutar
     * @return \Illuminate\Http\Response
     */
    public function edit(Permutar $permuta)
    {
        return view('permutasubistituto', compact('permuta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permutar  $permutar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permutar $permuta)
    {
        $validacao = $this->validator($request->all());
        if($validacao->fails()){
            return redirect()->back()
            ->witherrors($validacao->errors())
            ->withInput($request->all());
        }else{
            $permuta->nome = $request->input('nome');
            $permuta->matricula = $request->input('matricula');
            $permuta->local = $request->input('local');
            $permuta->dia_do_servico = $request->input('dia');
            $permuta->hora_inicial = $request->input('das');
            $permuta->hora_final = $request->input('as');
            $permuta->escalado = $request->input('nomesub');
            $permuta->escaladoMatricula = $request->input('matriculasub');
            $permuta->escaladoLocal = $request->input('localsub');
            $permuta->escaladoDia_do_servico = $request->input('diasub');
            $permuta->escaladoHora_inicial = $request->input('dassub');
            $permuta->escaladoHora_final = $request->input('assub');
            $permuta->virtude = $request->input('virtude');
            $permuta->status = "Aceita";
            $permuta->save();
            return redirect()->route('permutas.index');
        }
    }

    public function enviarSPO()
    {
        return view('permutaSPO');
    }

    public function confirmacaoSPO()
    {
        return redirect()->route('enviarCMD');
    }
    public function confirmacaoCMD()
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permutar  $permutar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permutar $permuta)
    {
        $permuta->delete();
        return redirect()->route('permutas.index');
    }

    public function validator($date)
    {
        $regras = [
            'nome'                  => 'required',
            'matricula'             => 'required',
            'local'                 => 'required',
            'dia'                   => 'required',
            'das'                   => 'required',
            'as'                    => 'required',
            'nomesub'               => 'required',
            'matriculasub'          => 'required',
            'localsub'              => 'required',
            'diasub'                => 'required',
            'dassub'                => 'required',
            'assub'                 => 'required',
            'virtude'               => 'required',
        ];

        $mensagens = [
            'required'              => 'Campo Obrigatório',      
        ];

        return Validator::make($date, $regras, $mensagens);
    }
}
