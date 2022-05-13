@extends('adminlte::page')

@section('title', 'Torneo | Dashboard')

@section('content_header')
<h1>Torneos</h1>
@stop

@section('content')
<div class="card">
    <a href="torneos/create" class="btn btn-danger"> Registrar nuevo torneo </a>
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
                    <td id="preview">
                        <img class="myImages" id="myImg" src="{{$torneo->logo}}" alt="" width="140px;" height="90px;" />
                    </td>
                    <td>{{$torneo->fecha_ini}}</td>
                    <td>{{$torneo->fecha_fin}}</td>
                    <td>
                        <form action="{{ route('torneos.destroy', $torneo->id)}}" method="POST">
                            <a href="/torneos/{{$torneo->id}}/edit" class="btn btn-success">EDITAR</a>
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