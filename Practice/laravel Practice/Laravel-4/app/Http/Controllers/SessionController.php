<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class SessionController extends Controller
{
    public function accessSessionData (Request $request){
        if($request->session()->has('my_name'))
            print $request->session()->get('my_name');
        else 
        print 'no data in session';
    }

    public function storeSessionData (Request $request){
        $request->session()->put('my_name', 'LARAVEL');
            print 'data in session';
    }

    public function deleteSessionData (Request $request){
        $request->session()->forget('my_name');
            print 'data removed';
    }
    
}
