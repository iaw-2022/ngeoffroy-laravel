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
        return view('equipo.index', ['equipos' => $equipos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreequipoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipo = new Equipo();
        $equipo->nombre = $request->get('nombre');
        $equipo->logo = $request->get('logo');
        $equipo->nombre_estadio = $request->get('nombre_estadio');
        $equipo->capitan = $request->get('capitan');

        $equipo->save();

        return redirect('/equipos');
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
    public function edit($id)
    {
        $equipo = Equipo::find($id);
        return view('equipo.edit')->with('equipo', $equipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateequipoRequest  $request
     * @param  \App\Models\equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $equipo = Equipo::find($id);
        $equipo->nombre = $request->get('nombre');
        $equipo->logo = $request->get('logo');
        $equipo->nombre_estadio = $request->get('nombre_estadio');
        $equipo->capitan = $request->get('capitan');

        $equipo->save();

        return redirect('/equipos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipo = Equipo::find($id);
        $equipo->delete();
        return redirect('/equipos');
    }
}
