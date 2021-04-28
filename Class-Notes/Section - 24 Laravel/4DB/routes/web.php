<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

use App\Http\Controllers\DemoController;

Route::get('/', 				[DemoController::class, 'index']);
Route::get('/about', 			[DemoController::class, 'about']);
Route::get('/testimonial', 		[DemoController::class, 'testimonial']);
Route::get('/product', 		    [DemoController::class, 'product']);
Route::get('/contact',			[DemoController::class, 'contact']);
Route::get('/details/{id}',		[DemoController::class, 'details']);

use App\Http\Controllers\CartController;

Route::post('/add',		        [CartController::class, 'add']);
Route::get('/cart',		        [CartController::class, 'add']);
Route::get('/remove/{pid}',     [CartController::class, 'remove']);
