<?php

namespace App\Http\Controllers;

use App\Models\jugador;
use App\Http\Requests\StorejugadorRequest;
use App\Http\Requests\UpdatejugadorRequest;

class JugadorController extends Controller
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
     * @param  \App\Http\Requests\StorejugadorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorejugadorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function show(jugador $jugador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function edit(jugador $jugador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatejugadorRequest  $request
     * @param  \App\Models\jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatejugadorRequest $request, jugador $jugador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function destroy(jugador $jugador)
    {
        //
    }
}
