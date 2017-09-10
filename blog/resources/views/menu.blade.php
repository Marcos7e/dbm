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
        <a href="#" class="card-link">&raquo;Card link</a>
      </div>
    </div>
  </div>

  <div class="col-xl-4 col-sm-12 col-12">
    <div class="card" style="width: 20rem;">
      <div class="card-body">
        <h4 class="card-title">Registro de Matriculas</h4>
        <h6 class="card-subtitle mb-2 text-muted">Registro masivo de Estudiates x Materias</h6>
        <p class="card-text">Matricula masiva para estudiantes sobre la base de datos SISCADE.</p>
        <a href="#" class="card-link">&raquo;Card link</a>
      </div>
    </div>
  </div>

  <div class="col-xl-4 col-sm-12 col-12">
    <div class="card" style="width: 20rem;">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">&raquo;Card link</a>
      </div>
    </div>
  </div>

</div>

</div>
@endsection
