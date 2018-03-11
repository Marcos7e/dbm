  @extends('layout.master')

  @section('title', 'Control de Inscripciones')

  @section('content')

  <?php $route = url('/'); ?>

  <!-- Modal de Procesamiento de archivo-->
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
                    <div id='content'></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Ejecutar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
  <!--fin de modal-->

  <!-- Modal de Eliminación de archivo-->
  <div class="modal fade" id="deleteMdl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Archivo Masivo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div id='content'></div>
        </div>
        <div class="modal-footer">
            <!-- <a href="{{ url('/deleteFile/') }}"><button type="button" class="btn btn-danger">Eliminar</button></a> -->
            <button type="button" class="btn btn-danger DeleteFile">Eliminar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
  <!--fin de modal-->
  <div class="container">
    <div class="row">
      <div class="jumbotron">
        <h1 class="display-3">Proceso Masivo de Inscripción</h1>
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
            <th><button type="button"class="passfileforProcess btn btn-success" data-toggle="modal" data-target="#processsMdl" data-id='{{$file}}' value='{{$file}}' id='btnProcesar'>Procesar</button>  <button type="button" class="passfileforDelete btn btn-danger" data-toggle="modal" data-target="#deleteMdl" data-id='{{$file}}' value='{{$file}}' id='btnEliminar'>Eliminar</button></th>
          </tr>
          @endforeach
        </tbody>
      </table>


   </div>
  </div>


  @endsection
