<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// route::get('/','App\Http\Controllers\HomeController@home');

Route::get('/',[HomeController::class, 'home']);
Route::get('about',[HomeController::class, 'about']);
Route::get('service',[HomeController::class, 'service']);
Route::get('contact',[HomeController::class, 'contact']);
Route::get('login',[HomeController::class, 'login']);
