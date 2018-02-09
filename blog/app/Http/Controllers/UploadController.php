<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $req)
    {
            echo "<script>alert('There are no fields to generate a report');</script>";
              $excelName = time()."_".$req->file('file')->getClientOriginalExtension();
              $req->file->move( public_path('archivos_masivos'), $excelName);
              return redirect('/');
    }
}
