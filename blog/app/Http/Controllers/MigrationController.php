<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MigrationController extends Controller
{

  public function index()
  {
    $fileList;
    $directory = public_path('archivos_masivos');

    $files = \File::files($directory);
        foreach ($files as $file)
        {$fileList[] = pathinfo($file,PATHINFO_FILENAME);}

        if(sizeof($files)>0)
        {return view("migration",["files"=>$fileList]);}
        else
        {return view('main');}

  }

}
