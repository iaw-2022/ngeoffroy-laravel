<?php

namespace App\Http\Controllers;

use App\Models\localidad;
use Illuminate\Http\Request;
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
        return view('localidad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorelocalidadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $localidad = new Localidad();
        $localidad->nombre = $request->get('nombre');
        $localidad->cod_postal = $request->get('cod_postal');
        $localidad->cant_habitantes = $request->get('cant_habitantes');

        $localidad->save();

        return redirect('/localidades');
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
    public function edit($id)
    {
        $localidad = Localidad::find($id);
        return view('localidad.edit')->with('localidad', $localidad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelocalidadRequest  $request
     * @param  \App\Models\localidad  $localidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $localidad = Localidad::find($id);
        $localidad->nombre = $request->get('nombre');
        $localidad->cod_postal = $request->get('cod_postal');
        $localidad->cant_habitantes = $request->get('cant_habitantes');

        $localidad->save();

        return redirect('/localidades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\localidad  $localidad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $localidad = Localidad::find($id);
        $localidad->delete();
        return redirect('/localidades');
    }
}
