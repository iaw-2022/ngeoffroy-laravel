@extends('adminlte::page')

@section('title', 'Localidades')

@section('content_header')
    <h1>Localidades</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Código postal</th>
                        <th>Población</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($localidads as $localidad)
                    <tr>
                        <td>{{$localidad->nombre}}</td>
                        <td>{{$localidad->cod_postal}}</td>
                        <td>{{$localidad->cant_habitantes}}</td>
                        <td>EDITAR</td>
                        <td>ELIMINAR</td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop