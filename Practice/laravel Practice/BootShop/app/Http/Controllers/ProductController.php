<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        $rows = DB::select("SELECT * FROM `product`");
        return view("index", ["rows"=>$rows]);
    }

    public function details(Request $req, $id){
        $rows = DB::select("SELECT * FROM `product` where `id` = ?",[$id]);
      return view ("product_details", ["rows"=>$rows]);
    }

    public function summary(){
        return view("product_summary");
    }

    public function add(Request $req2, $cid){
        print $cid;
    }
}
