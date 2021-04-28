<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{

    public function add(Request $req) {
        $pid      = $req->pid;
        $quantity = $req->quantity;

       if($req->session()->has('mycart'))
             $cart = $req->session()->get('mycart');
          else
             $cart = [];

        if($quantity>0) {
            $cart[$pid] = $quantity;
        }
        $req->session()->put('mycart', $cart);
        // End Add 2 Cart


        //Fetch the Cart Items
        $product_details = [];
        foreach ($cart as $pid => $quantity) {
            $rows = DB::select("SELECT * FROM `products` WHERE `id` = ?",[$pid]);
            $product_details[$pid] = $rows[0];
        }
        
        //Show Cart
        return view("cart", ["cart"=>$cart, "product_details"=>$product_details] );
        
    }

    public function remove(Request $request) {
        $pid = $request->pid;
       
        $request->session()->forget('mycart.'.$pid);
      
       /* $session =  $request->session()->all();
        print_r($session);
*/      //dd(session()->all());
        return redirect('cart');
    }
   
}
