<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});
Route::get('/home', [ProductController::class,'get_all_student']);
Route::get('/edit/{id}', [ProductController::class,'get_student_by_id']);
Route::post('/edit/{id}', [ProductController::class,'edit']);
Route::get('/add', [ProductController::class,'create']);
Route::post('/add', [ProductController::class,'store']);