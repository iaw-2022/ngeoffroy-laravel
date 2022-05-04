@extends('adminlte::page')

@section('title', 'Equipos')

@section('content_header')
    <h1>Equipos Vigentes</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Logo</th>
                        <th>Estadio Local</th>
                        <th>Capitan</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($equipos as $equipo)
                    <tr>
                        <td>{{$equipo->nombre}}</td>
                        <td>'nulo'</td>
                        <td>{{$equipo->nombre_estadio}}</td>
                        <td>{{$equipo->capitan}}</td>
                        <td>EDITAR</td>
                        <td>ELIMINAR</td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop