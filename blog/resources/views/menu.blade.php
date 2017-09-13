@extends('layout.master')

@section('title', 'Control de Inscripciones')

@section('content')

<div class="container">
<div class="row">
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-3">Menu de registros Masivos</h1>
      <p class="lead">Elija una de las opciones de registro masivos que detallamos:</p>
      <hr class="my-4">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-4 col-sm-12 col-12">
    <div class="card" style="width: 20rem;">
      <div class="card-body">
        <h4 class="card-title">Registro de Estudiantes</h4>
        <h6 class="card-subtitle mb-2 text-muted">Registro masivo de estudiantes</h6>
        <p class="card-text">Funcion para ingresar a la base de datos SISCADE de forma masiva, los estudiantes a la plataforma.</p>
        <a href="{{url('/registrarEstudiantes')}}" class="card-link">&raquo;Ir a Registro de Estudiantes.</a>
      </div>
    </div>
  </div>

  <div class="col-xl-4 col-sm-12 col-12">
    <div class="card" style="width: 20rem;">
      <div class="card-body">
        <h4 class="card-title">Registro de Matriculas</h4>
        <h6 class="card-subtitle mb-2 text-muted">Registro masivo de Estudiates x Materias</h6>
        <p class="card-text">Matricula masiva para estudiantes sobre la base de datos SISCADE.</p>
        <a href="#" class="card-link">&raquo;Ir a Registro de Matriculas.</a>
      </div>
    </div>
  </div>

  <div class="col-xl-4 col-sm-12 col-12">
    <div class="card" style="width: 20rem;">
      <div class="card-body">
        <h4 class="card-title">Registro de Materias</h4>
        <h6 class="card-subtitle mb-2 text-muted">Registro masivo de Materias .</h6>
        <br>
        <p class="card-text">Registro masivo de materias sobre la base de datos SISCADE.</p>
        <a href="#" class="card-link">&raquo;Ir a Registro masivo de Materias.</a>
      </div>
    </div>
  </div>

</div>

</div>
@endsection
