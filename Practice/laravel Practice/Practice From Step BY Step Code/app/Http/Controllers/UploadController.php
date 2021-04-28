<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function uploadcode(Request $req){
        $req->file('file')->store('myfiles');
        return redirect("upload");
    }
}
