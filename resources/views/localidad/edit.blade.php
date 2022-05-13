@extends('adminlte::page')

@section('title', 'Localidades')

@section('content_header')
    <h1>Localidades</h1>
@stop

@section('content')
<form action="/localidades/{{$localidad->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label"> Nombre de la localidad </label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Codigo postal de la localidad </label>
            <input id="cod_postal" name="cod_postal" type="numeric" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Poblacion de la localidad </label>
            <input id="cant_habitantes" name="cant_habitantes" type="numeric" class="form-control" tabindex="1">
        </div>
        <a href="/localidades" class="btn btn-secondary" tabindex="5"> VOLVER</a>
        <button type="submit" class="btn btn-danger" tabindex="4"> REGISTRAR </button>
    </form>
@stop