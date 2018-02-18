'use strict'
var lastFileSelected = '';

  $(document).on('click','.passfileforProcess',function(){
    var texto ='<p>Esta seguro que desea ejecutar el archivo <strong>';
    var fileName = $(this).data('id');
    texto+=fileName+'</strong>?</p>';
    lastFileSelected = fileName;
    $('.modal-body #content').html(texto);
  });

  $(document).on('click','.passfileforDelete',function(){
    var texto ='<p>Esta seguro que desea ejecutar el archivo <strong>';
    var fileName = $(this).data('id');
    texto+=fileName+'</strong>?</p>';
    lastFileSelected = fileName;
    $('.modal-body #content').html(texto);
  });

   function deleteFile(){
    $.ajax({
      type: 'GET',
      url: "/deleteFile/"+lastFileSelected,
      success: function(result){
      console.log('hola Alex!');
   }});
   };
