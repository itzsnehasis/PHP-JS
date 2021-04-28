<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolloController extends Controller
{
    public function collection(){
        $data = "Hello";
        return view("collection", ["data"=>$data]);
    }
}
