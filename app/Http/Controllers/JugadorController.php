<?php

namespace App\Http\Controllers;

use App\Models\jugador;
use App\Models\equipo;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatejugadorRequest;
use Illuminate\Support\Facades\DB;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores = DB::table('jugadors')->get();
        return view ('jugador.index',['jugadors' => $jugadores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos = Equipo::all();
        return view('jugador.create', compact('equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorejugadorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jugador = new Jugador();
        $jugador->nombre = $request->get('nombre');
        $jugador->apellido = $request->get('apellido');
        $jugador->dni = $request->get('dni');
        $jugador->fecha_nac = $request->get('fecha_nac');
        $jugador->sexo = $request->get('inputSexo');
        $jugador->puesto = $request->get('puesto');
        $jugador->equipo_nombre= $request->get('inputEquipo');

        $jugador->save();

        return redirect('/jugadores');
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
    public function edit($id)
    {
        $jugador = Jugador::find($id);
        $equipos = Equipo::all();
        return view('jugador.edit', compact('equipos'))->with('jugador', $jugador);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatejugadorRequest  $request
     * @param  \App\Models\jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $jugador = Jugador::find($id);
        $jugador->nombre = $request->get('nombre');
        $jugador->apellido = $request->get('apellido');
        $jugador->dni = $request->get('dni');
        $jugador->fecha_nac = $request->get('fecha_nac');
        $jugador->sexo = $request->get('inputSexo');
        $jugador->puesto = $request->get('puesto');
        $jugador->equipo_nombre= $request->get('inputEquipo');

        $jugador->save();

        return redirect('/jugadores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jugador = Jugador::find($id);
        $jugador->delete();
        return redirect('/jugadores');
    }
}
