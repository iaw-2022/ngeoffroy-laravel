<?php

namespace App\Http\Controllers;

use App\Models\localidad;
use App\Http\Requests\StorelocalidadRequest;
use App\Http\Requests\UpdatelocalidadRequest;
use Illuminate\Support\Facades\DB;

class LocalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $localidades = DB::table('localidads')->get();
        return view ('localidad.index',['localidads' => $localidades]);
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
     * @param  \App\Http\Requests\StorelocalidadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelocalidadRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\localidad  $localidad
     * @return \Illuminate\Http\Response
     */
    public function show(localidad $localidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\localidad  $localidad
     * @return \Illuminate\Http\Response
     */
    public function edit(localidad $localidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelocalidadRequest  $request
     * @param  \App\Models\localidad  $localidad
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelocalidadRequest $request, localidad $localidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\localidad  $localidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(localidad $localidad)
    {
        //
    }
}
