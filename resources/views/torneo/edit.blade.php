@extends('adminlte::page')

@section('title', 'Torneos')

@section('content_header')
    <h1>Torneos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Logo</th>
                        <th>Fecha de Inicio</th>
                        <th>Fecha de Finalización</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($torneos as $torneo)
                    <tr>
                        <td>{{$torneo->nombre}}</td>
                        <td>'logo'</td>
                        <td>{{$torneo->fecha_ini}}</td>
                        <td>{{$torneo->fecha_fin}}</td>
                        <td>EDITAR</td>
                        <td>ELIMINAR</td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop