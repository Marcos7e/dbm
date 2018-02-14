@extends('layout.master')

@section('title', 'Control de Inscripciones')

@section('content')

<div class="container">
  <div class="row">
    <div class="jumbotron">
      <h1 class="display-3" >Proceso Masivo de Inscripción</h1>
      <hr>
    </div>
  </div>

<div class="row">
  <p>Seleccione un archivo del listado siguiente:</p>
</div>

<div class="row">
   <div class="jumbotron">
  <table class="table">
      <thead>
        <tr>
          <th>Archivo</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($files as $file)
        <tr>
          <th>{{$file}}</th>
          <th><button type="button"class="btn btn-success" onclick="url('/welcome')">Procesar</button>  <button type="button" class="btn btn-danger">Eliminar</button></th>
        </tr>
        @endforeach
      </tbody>
    </table>


 </div>
</div>


@endsection
