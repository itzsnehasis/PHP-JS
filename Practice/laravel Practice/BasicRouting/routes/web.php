<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

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
    return view('index');
});

Route::get('/table/{number?}', function($number = 2){
    for($i=1; $i<11; $i++){
        echo "$i * $number = ". $i*$number ."<br>";  
    }
    echo "<a href='/'>Go Back</a>";
});

Route::get('/tablefromcontroller/{number}', [TestController::class, 'tablefromcontroller']);

