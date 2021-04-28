<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class ContactController extends Controller
{
    public function create(){
        return view("contact");
    }

    
}
