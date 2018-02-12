<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $req)
    {
      $this->validate($req,[
        'file' => 'required|file'
      ]);

              $fileExt = ".".$req->file('file')->getClientOriginalExtension();
              $excelName = basename($req->file('file')->getClientOriginalName(), $fileExt)."_".time().$fileExt;
              $req->file->move( public_path('archivos_masivos'), $excelName);
              return redirect('/migration');
    }
}
