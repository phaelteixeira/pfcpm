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
        //
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suspeito  $suspeito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suspeito $suspeito)
    {
        //
    }
}
