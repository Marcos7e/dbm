<?php $__env->startSection('title', 'Control de Inscripciones'); ?>

<?php $__env->startSection('content'); ?>

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
        <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <th><?php echo e($file); ?></th>
          <th><button type="button"class="btn btn-success" onclick="url('/welcome')">Procesar</button>  <button type="button" class="btn btn-danger">Eliminar</button></th>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>


 </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>