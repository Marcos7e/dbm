@extends('layout.master')

@section('title', 'Control de Inscripciones')

@section('content')

<div class="container">
  <div class="row">
    <div class="jumbotron">
      <h1 class="display-3">Registro masivo de Materias</h1>
      <hr>
    </div>
  </div>

  <div class="row">
      <div class="col-lg-12 col-sm-12">
          <div class="jumbotron">
            <h4 class="display-4">1er Paso: Obtener la plantilla Excel:</h1>
              <p class="lead">El primer paso a seguir es <a href="{{url('/download/masivoMaterias.xlsx')}}">descargar</a> la planilla para el registro masivo
                de materias a SISCADE.</p>
          </div>
      </div>
  </div>

</div>
@endsection
