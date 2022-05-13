@extends('adminlte::page')

@section('title', 'Jugador | Editar')

@section('content_header')
    <h1>Editar un jugador</h1>
@stop

@section('content')
<form action="/jugadores/{{$jugador->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label"> Nombre del jugador </label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Apellido del jugador </label>
            <input id="apellido" name="apellido" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> DNI del jugador </label>
            <input id="dni" name="dni" type="numeric" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Fecha de nacimiento del jugador </label>
            <input id="fecha_nac" name="fecha_nac" type="date" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Sexo del jugador </label>
            <input id="sexo" name="sexo" type="text" class="form-control" tabindex="4" placeholder="M/F">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Puesto del jugador </label>
            <input id="puesto" name="puesto" type="text" class="form-control" tabindex="5">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Equipo del jugador </label>
            <input id="id" name="id" type="text" class="form-control" tabindex="6">
        </div>
        <a href="/jugadores" class="btn btn-secondary" tabindex="5"> VOLVER</a>
        <button type="submit" class="btn btn-danger" tabindex="4"> REGISTRAR </button>
    </form>
@stop