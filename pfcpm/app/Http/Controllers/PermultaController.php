<?php

namespace App\Http\Controllers;

use App\Permulta;
use Illuminate\Http\Request;

class PermultaController extends Controller
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
        return view('permulta');
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
     * @param  \App\Permulta  $permulta
     * @return \Illuminate\Http\Response
     */
    public function show(Permulta $permulta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permulta  $permulta
     * @return \Illuminate\Http\Response
     */
    public function edit(Permulta $permulta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permulta  $permulta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permulta $permulta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permulta  $permulta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permulta $permulta)
    {
        //
    }
}
