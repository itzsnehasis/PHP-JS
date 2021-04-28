<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Requests;

class SessionController extends Controller
{
    public function store(Request $request){
        $request->session()->put('variable', 'snehasis');
        print "Data has been Added";
    }

    public function access(Request $request){
        if($request->session()->has('variable'))
            print $request->session()->get('variable'); 
        else
            print 'no data added';
    }

    public function remove(Request $request){
        if($request->session()->has('variable')){
            $request->session()->forget('variable');
            print 'data destryoed successfully';
        }
             
        else
            print 'no data added';
    }
}
