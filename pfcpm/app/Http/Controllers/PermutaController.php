<?php

namespace App\Http\Controllers;

use App\Permuta;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permuta');
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
     * @param  \App\Permuta  $permuta
     * @return \Illuminate\Http\Response
     */
    public function show(Permuta $permuta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permuta  $permuta
     * @return \Illuminate\Http\Response
     */
    public function edit(Permuta $permuta)
    {
        //
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
        //
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
