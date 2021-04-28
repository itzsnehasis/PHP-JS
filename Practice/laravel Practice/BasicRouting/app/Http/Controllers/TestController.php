<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function tablefromcontroller(){
        /*for($i=1; $i<11; $i++){
            echo "$i * $number = ". $i*$number ."<br>";  
        }
        echo "<a href='/'>Go Back</a>";*/
        return view("test", ["data"=>$data=2]);
    }
}
