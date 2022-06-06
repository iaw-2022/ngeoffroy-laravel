@extends('adminlte::page')

@section('title', 'Jugador | Registro')

@section('content_header')
<h1>Registro de un nuevo jugador</h1>
@stop

@section('content')
<form action="/jugadores" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label"> Nombre del jugador </label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Apellido del jugador </label>
        <input id="apellido" name="apellido" type="text" class="form-control" tabindex="1" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> DNI del jugador </label>
        <input id="dni" name="dni" type="numeric" class="form-control" tabindex="1" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Fecha de nacimiento del jugador </label>
        <input id="fecha_nac" name="fecha_nac" type="date" class="form-control" tabindex="3" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Sexo del jugador </label>
        <select name="inputSexo" id="inputSexo" class="form-control">
            <option value="masculino">masculino</option>
            <option value="femenino">femenino</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Puesto del jugador </label>
        <input id="puesto" name="puesto" type="text" class="form-control" tabindex="5" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Equipo del jugador </label>

        <select name="inputEquipo" id="inputEquipo" class="form-control">
            @foreach ($equipos as $equipo)
            <option value="{{ $equipo['nombre']}}">{{ $equipo['nombre']}}
            </option>
            @endforeach
        </select>
    </div>
    <a href="/jugadores" class="btn btn-secondary" tabindex="5"> VOLVER</a>
    <button type="submit" class="btn btn-danger" tabindex="4"> REGISTRAR </button>
</form>
@stop