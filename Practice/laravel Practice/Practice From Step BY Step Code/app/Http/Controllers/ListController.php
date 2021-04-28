<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    function makeList(){
        //return Student::all();
        $records =  DB::select("SELECT * FROM `student` WHERE `roll`='1' OR `name`='swarna'");
        return view("list", ["records"=>$records]);
    }
}
