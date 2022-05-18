@extends('adminlte::page')

@section('title', 'Partido | Editar')

@section('content_header')
<h1>Partidos</h1>
@stop

@section('content')
<form action="/partidos/{{$partido->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label"> Equipo Local </label>

        <select name="inputELocal" id="inputELocal" class="form-control">
            @foreach ($equipos as $equipo)
            <option value="{{ $equipo['nombre']}}">{{ $equipo['nombre']}}
            </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Equipo Visitante </label>

        <select name="inputEVisitante" id="inputEVisitante" class="form-control">
            @foreach ($equipos as $equipo)
            <option value="{{ $equipo['nombre']}}">{{ $equipo['nombre']}}
            </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Resultado Local </label>
        <input id="rlocal" name="rlocal" type="numeric" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Resultado Visitante </label>
        <input id="rvisitante" name="rvisitante" type="numeric" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Localidad del partido </label>

        <select name="inputLocalidad" id="inputLocalidad" class="form-control">
            @foreach ($localidades as $localidad)
            <option value="{{ $localidad['nombre']}}">{{ $localidad['nombre']}}
            </option>
            @endforeach
        </select>

    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Torneo del partido </label>

        <select name="inputTorneo" id="inputTorneo" class="form-control">
            @foreach ($torneos as $torneo)
            <option value="{{ $torneo['nombre']}}">{{ $torneo['nombre']}}
            </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Estado de Partido </label>
        <select name="inputEstado" id="inputEstado" class="form-control">
            <option value="FINALIZADO">FINALIZADO</option>
            <option value="POR JUGAR">POR JUGAR</option>
            <option value="SUSPENDIDO">SUSPENDIDO</option>
        </select>
    </div>
    <a href="/partidos" class="btn btn-secondary" tabindex="5"> VOLVER</a>
    <button type="submit" class="btn btn-danger" tabindex="4"> REGISTRAR </button>
</form>
@stop