@extends('adminlte::page')

@section('title', 'Equipo | Registro')

@section('content_header')
    <h1>Registro de un nuevo equipo</h1>
@stop

@section('content')
    <form action="/equipos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label"> Nombre del equipo </label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Logo del equipo </label>
            <input id="logo" name="logo" type="file" tabindex="2" accept=".jpg, .jpeg, .png, .svg, .gif" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Nombre del estadio del equipo </label>
            <input id="nombre_estadio" name="nombre_estadio" type="numeric" class="form-control" tabindex="3" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Nombre del capitán del equipo </label>
            <input id="capitan" name="capitan" type="text" class="form-control" tabindex="4" required>
        </div>
        <a href="/equipos" class="btn btn-secondary" tabindex="5"> VOLVER</a>
        <button type="submit" class="btn btn-danger" tabindex="4"> REGISTRAR </button>
    </form>
@stop
