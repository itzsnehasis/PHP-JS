<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SessionController;

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

Route::get('/contactform', [FormController::class, 'contact']);

Route::post('/receive', [FormController::class, 'receive']);

Route::get('/', [FormController::class, 'index']);

Route::get('/session/set', [SessionController::class, 'storeSessionData']);

Route::get('/session/get', [SessionController::class, 'accessSessionData']);

Route::get('/session/remove', [SessionController::class, 'deleteSessionData']);

Route::get('/details', function(){
    return view('details');
});