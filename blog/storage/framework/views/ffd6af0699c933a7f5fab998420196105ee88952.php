<?php $__env->startSection('title', 'Control de Inscripciones'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row">
    <div class="jumbotron">
      <h1 class="display-3">Control de Registros Masivos</h1>
      <p class="lead">Realize inserciones masivas a los registros de la base de datos que alimenta SISCADE.</p>
      <hr class="my-4">
      <p class="lead">Puede comenzar el proceso desde el siguiente botón, o desde la barra de inicio -> <i>Menú</i></p>
      <button class="btn btn-primary" type="button" onclick="<?php echo e(url('/welcome')); ?>">Registros Masivos</button>
    </div>
  </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>