<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::get('/menu', function(){
  return view('menu');
});

Route::get('/registrarEstudiantes',function(){
    return view('registrarEstudiantes');
});

Route::get('/registrarMaterias',function(){
    return view('registrarMaterias');
});

Route::get('/registrarMatricula',function(){
    return view('registrarMatricula');
});

Route::get('/download/{file}','DownloadController@download');

route::get('/upload', function(){
      return view('main');
});
Route::post('/upload','UploadController@upload');

Route::get('/migration', 'MigrationController@index');

/*Solo de TEST*/
Route::get('/welcome', function () {
    return view('welcome');
});
