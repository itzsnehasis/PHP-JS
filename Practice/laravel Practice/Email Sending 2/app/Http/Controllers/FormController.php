<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function create(){
        return view("contact");
    }

    public function store(Request $request){
        $this->validate($request,

        [
            'name'=>'required',
            'email'=>'required | email',
            'message'=>'required',
        ]

        );

        //send Email

        Mail::to('snehasisnandi.12@gmail.com')->send(new ContactFormMail());


    }
}
