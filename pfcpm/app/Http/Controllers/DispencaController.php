<?php

namespace App\Http\Controllers;

use App\Dispenca;
use Illuminate\Http\Request;

class DispencaController extends Controller
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
        return view('dispenca');
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
     * @param  \App\Dispenca  $dispenca
     * @return \Illuminate\Http\Response
     */
    public function show(Dispenca $dispenca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dispenca  $dispenca
     * @return \Illuminate\Http\Response
     */
    public function edit(Dispenca $dispenca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dispenca  $dispenca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dispenca $dispenca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dispenca  $dispenca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dispenca $dispenca)
    {
        //
    }
}
