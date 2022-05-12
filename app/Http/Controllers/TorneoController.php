<?php

namespace App\Http\Controllers;

use App\Models\torneo;
use App\Http\Requests\StoretorneoRequest;
use App\Http\Requests\UpdatetorneoRequest;
use Illuminate\Support\Facades\DB;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretorneoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretorneoRequest $request)
    {
        //
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
    public function edit(torneo $torneo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetorneoRequest  $request
     * @param  \App\Models\torneo  $torneo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetorneoRequest $request, torneo $torneo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\torneo  $torneo
     * @return \Illuminate\Http\Response
     */
    public function destroy(torneo $torneo)
    {
        //
    }
}
