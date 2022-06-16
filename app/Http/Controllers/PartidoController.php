<?php

namespace App\Http\Controllers;

use App\Models\partido;
use App\Models\equipo;
use App\Models\localidad;
use App\Models\torneo;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatepartidoRequest;
use Illuminate\Support\Facades\DB;

class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partidos = DB::table('partidos')->get();
        return view ('partido.index',['partidos' => $partidos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos = Equipo::all();
        $localidades = Localidad::all();
        $torneos = Torneo::all();
        return view('partido.create', compact('equipos', 'localidades', 'torneos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepartidoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partido = new Partido();
        $id_equipolocal = Equipo::first();
        $id_equipovisitante = Equipo::first();
        $partido->equipo_local = $request->get('inputELocal');
        $partido->equipo_visitante = $request->get('inputEVisitante');
        $partido->resultado_local = $request->get('rlocal');
        $partido->resultado_visita = $request->get('rvisitante');
        $partido->localidad_nombre = $request->get('inputLocalidad');
        $partido->torneo_nombre = $request->get('inputTorneo');
        $partido->estado = $request->get('inputEstado');

        $partido->save();

        return redirect('/partidos');
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
    public function edit($id)
    {
        $partido = Partido::find($id);
        $equipos = Equipo::all();
        $localidades = Localidad::all();
        $torneos= Torneo::all();
        return view('partido.edit', compact('equipos', 'localidades', 'torneos'))->with('partido', $partido);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepartidoRequest  $request
     * @param  \App\Models\partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $partido = Partido::find($id);
        $partido->equipo_local = $request->get('inputELocal');
        $partido->equipo_visitante = $request->get('inputEVisitante');
        $partido->resultado_local = $request->get('rlocal');
        $partido->resultado_visita = $request->get('rvisitante');
        $partido->localidad_nombre = $request->get('inputLocalidad');
        $partido->torneo_nombre = $request->get('inputTorneo');
        $partido->estado = $request->get('inputEstado');

        $partido->save();

        return redirect('/partidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partido = Partido::find($id);
        $partido->delete();
        return redirect('/partidos');
    }
}
