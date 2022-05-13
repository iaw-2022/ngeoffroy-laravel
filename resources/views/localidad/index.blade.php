@extends('adminlte::page')

@section('title', 'Localidad | Dashboard')

@section('content_header')
<h1>Localidades</h1>
@stop

@section('content')
<div class="card">
    <a href="localidades/create" class="btn btn-danger"> Registrar nueva localidad </a>
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
                    <td>
                        <form action="{{ route('localidades.destroy', $localidad->id)}}" method="POST">
                            <a href="/localidades/{{$localidad->id}}/edit" class="btn btn-success">EDITAR</a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"> ELIMINAR</button>
                        </form>
                    </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
@stop