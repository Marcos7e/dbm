var form = document.getElementById('upload');
var request = new XMLHttpRequest();

form.addEventListener('submit',function(e){
  e.preventDefault();
  var formdata =new FormData(form);

  alert('getting data..');
  request.open('get','/upload');
  //request.addEventListener('load', transferComplete);
  request.send(formdata);
});

function transferComplete(data){
console.log(data.currentTarget.response);
}
