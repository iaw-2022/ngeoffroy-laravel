@extends('adminlte::page')

@section('title', 'Equipos | Dashboard')

@section('content_header')
<h1>Equipos Vigentes</h1>
@stop

@section('content')
<div class="card">
    <a href="equipos/create" class="btn btn-danger"> Registrar nuevo equipo </a>
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
                    <td id="preview">
                        <img class="myImages" id="myImg" src="{{$equipo->logo}}" alt="" width="140px;" height="90px;" />
                    </td>
                    <td>{{$equipo->nombre_estadio}}</td>
                    <td>{{$equipo->capitan}}</td>
                    <td>
                        <form action="{{ route('equipos.destroy', $equipo->id)}}" method="POST">
                            <a href="/equipos/{{$equipo->id}}/edit" class="btn btn-success">EDITAR</a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"> ELIMINAR</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop