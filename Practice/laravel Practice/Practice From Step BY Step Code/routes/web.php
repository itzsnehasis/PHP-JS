<?php

use App\Http\Controllers\ListController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UploadController;
use Illuminate\Suppoort\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::view("about", 'about');
Route::view("contact", 'contact');
Route::get("login", function(){
    if(session()->has('user'))
        return redirect("profile");
    else
        return view("login");
});

Route::post("getdata", [LoginController::class, "getData"]);

Route::get('profile', [LoginController::class, "profile"]);

Route::get("logout", function(){
    session()->forget('user');
    return redirect("/");
});

Route::get('upload', function(){
    return view('upload');
});

Route::post('upload', [UploadController::class, 'uploadcode']);

Route::get('list', [ListController::class, 'makeList']);
