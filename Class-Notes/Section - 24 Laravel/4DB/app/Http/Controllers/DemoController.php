<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DemoController extends Controller
{
    public function index() {
    	return view('welcome');
    }
     public function about() {
    	return view('about');
    }
    public function testimonial() {
    	return view('testimonial');
    }
    public function product() {
        
       $rows = DB::select("SELECT * FROM `products` ORDER BY `id` ASC LIMIT 0,3");
      // $user = "Apple";
        return view("product", ["rows"=>$rows] );
    }
    public function contact() {
    	return view('contact');
    }
     public function details(Request $req , $id) {
        //print $id;

       // print "hello";
        $rows = DB::select("SELECT * FROM `products` WHERE `id` = ?",[$id]);
        return view('details',['rows'=>$rows]);
    }
    
}
