<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileManagementController extends Controller
{

    function deleteFile($file, Request $req){
          return view('main');
    }

}
