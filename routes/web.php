<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\xcontroller;
 
Route::get('/user/{id}', [UserController::class, 'show']);
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

Route::view('/', 'Home');
// Route::view('/Blog/{value}','Blog',['val'=>$value]);
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
Route::get('/Blog/{value}',[xcontroller::class, 'viewer']);



