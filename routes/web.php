<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apolloController;
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
 
Route::get('/',[apolloController::class,'index']);
Route::get('/uploadd',[apolloController::class,'uploadd']);
Route::post('/prescription',[apolloController::class,'prescription']);
Route::get('/signin',[apolloController::class,'signin']);
Route::POST('/signing',[apolloController::class,'signing']);
Route::get('/register',[apolloController::class,'register']);
Route::POST('/registerr',[apolloController::class,'registerr']);
Route::get('/user_profile',[apolloController::class,'user_profile']);
Route::get('/admin_profile',[apolloController::class,'admin_profile']);
Route::get('/addpro',[apolloController::class,'addpro']);
Route::get('/managepro',[apolloController::class,'managepro']);
Route::POST('/addprod',[apolloController::class,'addprod']);
Route::get('/dashboard',[apolloController::class,'dashboard']);


