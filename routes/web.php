<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('main-form');
});

//Thapa Sanjay
Route::get('database-page',[PostController::class,'db']);
Route::get('main-form',[PostController::class,'index']);
Route::post('store-form', [PostController::class, 'store']);
//Thapa Sanjay