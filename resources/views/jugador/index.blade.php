@extends('adminlte::page')

@section('title', 'Jugadores')

@section('content_header')
    <h1>Jugadores Vigentes</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Dni</th>
                        <th>Fecha Nacimiento</th>
                        <th>Sexo</th>
                        <th>Puesto</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jugadors as $jugador)
                    <tr>
                        <td>{{$jugador->nombre}}</td>
                        <td>{{$jugador->apellido}}</td>
                        <td>{{$jugador->dni}}</td>
                        <td>{{$jugador->fecha_nac}}</td>
                        <td>{{$jugador->sexo}}</td>
                        <td>{{$jugador->puesto}}</td>
                        <td>EDITAR</td>
                        <td>ELIMINAR</td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop