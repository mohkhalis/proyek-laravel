<?php

use App\Http\Controllers\KholisController;
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



Route::get('/',[KholisController::class,'index']);
Route::get('/create',[KholisController::class,'create']);
Route::post('/store',[KholisController::class,'store']);
Route::get('/show/{id}',[KholisController::class,'show']);
Route::post('/update/{id}',[KholisController::class,'update']);
Route::get('/destroy/{id}',[KholisController::class,'destroy']);