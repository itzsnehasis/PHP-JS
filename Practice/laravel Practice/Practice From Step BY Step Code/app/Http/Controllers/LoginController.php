<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    protected $table = 'profile';
    public function getData(Request $req){
        $req->validate(
            [
                'username'=> ['required'],
                'password'=> [
                                'required' ,                //password cant be empty
                                'min:8',                   //password should be atleast 8 charecter
                                'regex: /[A-Z]/',         //atleast one uppercase
                                'regex: /[a-z]/',        //atleast one lowercase
                                'regex: /[0-9]/'        //atleast one
                            ]
            ],
            [
                'username.required' =>   '* User name cant be empty',
                'password.required' =>   '*Password cant be empty'
            ]
    );
       $data   = $req->input();
       $rows   = DB::select("select * from `profile` where `username`= '$data[username]' && `password`='$data[password]'");
       if($rows == array())
            return redirect("login");
            
        else{
            $req->session()->put('user', $data['username']);
            return redirect('profile');
        }  
    }
    public function profile(){
        if(session()->has('user')){
            $username = session()->get('user');
            $rows   = DB::select("select * from `profile` where `username`= '$username'");
            return view("profile",["rows"=>$rows]);
        }
        return redirect("login");
    }
    
}
