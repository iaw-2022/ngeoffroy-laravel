@extends('adminlte::page')

@section('title', 'Jugador | Dashboard')

@section('content_header')
<h1>Jugadores Vigentes</h1>
@stop

@section('content')
<div class="card">
    <a href="jugadores/create" class="btn btn-danger"> Registrar nuevo jugador </a>
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
                    <th>Equipo</th>
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
                    <td>{{$jugador->equipo_nombre}}</td>
                    <td>
                        <form action="{{ route('jugadores.destroy', $jugador->id)}}" method="POST">
                            <a href="/jugadores/{{$jugador->id}}/edit" class="btn btn-success">EDITAR</a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Seguro que deseas eliminar este registro?');"> ELIMINAR</button>
                        </form>
                    </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
@stop