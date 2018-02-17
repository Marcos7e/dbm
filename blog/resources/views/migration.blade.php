@extends('layout.master')

@section('title', 'Control de Inscripciones')

@section('content')

<!-- Modal -->
<div class="modal fade" id="processsMdl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Procesar Archivo Masivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Esta seguro de ejecutar el archivo seleccionado?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Ejecutar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!--fin de modal-->

<!-- Modal -->
<div class="modal fade" id="deleteMdl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Procesar Archivo Masivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Esta seguro de ejecutar el archivo seleccionado?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger">Eliminar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!--fin de modal-->

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
          <th><button type="button"class="btn btn-success"  data-toggle="modal" data-target="#processsMdl">Procesar</button>  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteMdl">Eliminar</button></th>
        </tr>
        @endforeach
      </tbody>
    </table>


 </div>
</div>


@endsection
