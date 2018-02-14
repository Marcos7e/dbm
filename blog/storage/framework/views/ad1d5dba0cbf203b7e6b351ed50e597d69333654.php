<?php $__env->startSection('title', 'Control de Inscripciones'); ?>

<?php $__env->startSection('content'); ?>

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
              <p class="lead">El primer paso a seguir es <a href="<?php echo e(url('/download/masivoMaterias.xlsx')); ?>">descargar</a> la planilla para el registro masivo
                de materias a SISCADE.</p>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="col-lg-12 col-sm-12">
          <div class="jumbotron">
            <h4 class="display-4">2do Paso: Sube la plantilla Excel: </h4>
                <form class="form-horizontal" method="post" action="<?php echo e(url('/upload')); ?>" enctype="multipart/form-data">
                      <input type="file" name="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"> <br/>
                      <input type="submit">
                </form>
          </div>
      </div>
  </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>