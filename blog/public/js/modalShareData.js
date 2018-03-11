'use strict';
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

  $(document).on('click','.DeleteFile',function(){
    var fileName = $(this).data('id');
      $.ajax({
        url:"/dbm/blog/public/deleteFile",
        type: "post",
        data:{"file" : lastFileSelected},
        success: function(res)
        {
          // window.location = "/dbm/blog/public/migration"
         console.log("deleted: "+lastFileSelected)}
      });

    });


   // function deleteFile(){
   //  $.ajax({
   //    type: 'GET',
   //    url: "/deleteFile/"+lastFileSelected,
   //    success: function(result){
   //    console.log('hola Alex!');
   // }});
