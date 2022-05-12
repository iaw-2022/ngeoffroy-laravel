<?php

namespace App\Http\Controllers;

use App\Models\equipo;
use App\Http\Requests\StoreequipoRequest;
use App\Http\Requests\UpdateequipoRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = DB::table('equipos')->get();
        return view ('equipo.index',['equipos' => $equipos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($request)
    {
        Equipo::create($request->all());

        return back(); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreequipoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreequipoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show(equipo $equipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function edit(equipo $equipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateequipoRequest  $request
     * @param  \App\Models\equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateequipoRequest $request, equipo $equipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(equipo $equipo)
    {
        //
    }
}
