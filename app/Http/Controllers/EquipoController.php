<?php

namespace App\Http\Controllers;

use App\Models\equipo;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $filepath = $_FILES['logo']['name'];
        $imagen = file_get_contents($request->file('logo'));
        Storage::disk('google')->put($filepath, $imagen);

        $equipo = new Equipo();
        $equipo->nombre = $request->get('nombre');
        //$equipo->logo = Storage::disk('google')->url($filepath);
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
        $filepath = $_FILES['logo']['name'];
        $imagen = file_get_contents($request->file('logo'));
        Storage::disk('google')->put($filepath, $imagen);

        $equipo = Equipo::find($id);
        $equipo->nombre = $request->get('nombre');
        //$equipo->logo = Storage::disk('google')->url($filepath);
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
