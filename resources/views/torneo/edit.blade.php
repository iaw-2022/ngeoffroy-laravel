@extends('adminlte::page')

@section('title', 'Torneos | Editar')

@section('content_header')
<h1>Editar un torneo</h1>
@stop

@section('content')
<form action="/torneos/{{$torneo->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label"> Nombre del torneo </label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Logo del torneo </label>
        <input id="logo" name="logo" type="file" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Fecha de inicio del torneo </label>
        <input id="fecha_ini" name="fecha_ini" type="date" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Fecha de finalización del torneo </label>
        <input id="fecha_fin" name="fecha_fin" type="date" class="form-control" tabindex="3">
    </div>
    <a href="/torneos" class="btn btn-secondary" tabindex="5"> VOLVER</a>
    <button type="submit" class="btn btn-danger" tabindex="4"> REGISTRAR </button>
</form>
@stop