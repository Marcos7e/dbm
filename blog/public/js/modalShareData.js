  $(document).on('click','.passfileforProcess',function(){
    var texto ='<p>Esta seguro que desea ejecutar el archivo <strong>';
    var fileName = $(this).data('id');
    texto+=fileName+'</strong>?</p>';
    $('.modal-body #content').html(texto);
  });

  $(document).on('click','.passfileforDelete',function(){
    var texto ='<p>Esta seguro que desea ejecutar el archivo <strong>';
    var fileName = $(this).data('id');
    texto+=fileName+'</strong>?</p>';
    $('.modal-body #content').html(texto);
  });
