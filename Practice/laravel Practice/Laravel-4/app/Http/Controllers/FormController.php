<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function contact(){
        $data = "hello world";
        return view('contact', ["str"=>$data]);
    }

    public function receive(Request $req){
        $name    = $req->name;
        $email   = $req->email;
        $inquiry = $req->inquiry;
        $message = $req->message;
        
        print $name."<br>";
        print $email."<br>";
        print $inquiry."<br>";
        print $message."<br>";
    }

    public function index(){
        $rows  = DB::SELECT("select * from `img` order by `id` ASC");
        return view("index", ["img"=>$rows]); 
    }
}

