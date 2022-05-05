@extends('adminlte::page')

@section('title', 'Partidos')

@section('content_header')
    <h1>Partidos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Equipo Local</th>
                        <th>Equipo Visitante</th>
                        <th>Resultado Local</th>
                        <th>Resultado Visitante</th>
                        <th>Estado</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($partidos as $partido)
                    <tr>
                        <td>{{$partido->equipo_local}}</td>
                        <td>{{$partido->equipo_visitante}}</td>
                        <td>{{$partido->resultado_local}}</td>
                        <td>{{$partido->resultado_visita}}</td>
                        <td>{{$partido->estado}}</td>
                        <td>EDITAR</td>
                        <td>ELIMINAR</td>
                    @endforeach
                    </tr>
                </tbody>
                
            </table>
        </div>
    </div>
@stop