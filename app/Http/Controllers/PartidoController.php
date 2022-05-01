<?php

namespace App\Http\Controllers;

use App\Models\partido;
use App\Http\Requests\StorepartidoRequest;
use App\Http\Requests\UpdatepartidoRequest;

class PartidoController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepartidoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepartidoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function show(partido $partido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function edit(partido $partido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepartidoRequest  $request
     * @param  \App\Models\partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepartidoRequest $request, partido $partido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function destroy(partido $partido)
    {
        //
    }
}
