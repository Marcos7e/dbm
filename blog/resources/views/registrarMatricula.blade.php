@extends('layout.master')

@section('title', 'Control de Inscripciones')

@section('content')

<div class="container">
  <div class="row">
    <div class="jumbotron">
      <h1 class="display-3">Registro masivo de Matriculas</h1>
      <hr>
    </div>
  </div>

  <div class="row">
      <div class="col-lg-12 col-sm-12">
          <div class="jumbotron">
            <h4 class="display-4">1er Paso: Obtener la plantilla Excel:</h1>
              <p class="lead">El primer paso a seguir es <a href="{{url('/download/masivoMatricula.xlsx')}}">descargar</a> la planilla para el registro masivo
                de matriculas a SISCADE.</p>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="col-lg-12 col-sm-12">
          <div class="jumbotron">
            <h4 class="display-4">2er Paso: Sube la plantilla Excel:</h1>
                <form action="upload" id="upload" enctype="multipart/form-data"/>
                      <input type="file" name="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" > <br/>
                      <input type="submit">
                </form>
          </div>
      </div>
  </div>

</div>
@endsection
