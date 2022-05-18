<?php

namespace App\Http\Controllers;

use App\Models\torneo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TorneoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $torneos = DB::table('torneos')->get();
        return view ('torneo.index',['torneos' => $torneos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('torneo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretorneoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filepath = $_FILES['logo']['name'];
        $imagen = file_get_contents($request->file('logo'));
        Storage::disk('google')->put($filepath, $imagen);

        $torneo = new Torneo();
        $torneo->nombre = $request->get('nombre');
        $torneo->logo = Storage::disk('google')->url($filepath);
        $torneo->fecha_ini = $request->get('fecha_ini');
        $torneo->fecha_fin = $request->get('fecha_fin');

        $torneo->save();

        return redirect('/torneos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\torneo  $torneo
     * @return \Illuminate\Http\Response
     */
    public function show(torneo $torneo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\torneo  $torneo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $torneo = Torneo::find($id);
        return view('torneo.edit')->with('torneo', $torneo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetorneoRequest  $request
     * @param  \App\Models\torneo  $torneo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $filepath = $_FILES['logo']['name'];
        $imagen = file_get_contents($request->file('logo'));
        Storage::disk('google')->put($filepath, $imagen);

        $torneo = Torneo::find($id);
        $torneo->nombre = $request->get('nombre');
        $torneo->logo = Storage::disk('google')->url($filepath);
        $torneo->fecha_ini = $request->get('fecha_ini');
        $torneo->fecha_fin = $request->get('fecha_fin');

        $torneo->save();

        return redirect('/torneos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\torneo  $torneo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $torneo = Torneo::find($id);
        $torneo->delete();
        return redirect('/torneos');
    }
}
