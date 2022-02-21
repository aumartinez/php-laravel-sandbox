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

Route::get('/', [App\Http\Controllers\HomeController::class,'index']);
Route::post('/Person/store', [App\Http\Controllers\PersonController::class, 'store']);
Route::post('/Person/update/{id}', [App\Http\Controllers\PersonController::class, 'update']);

Route::get('/Person/edit/{id}', [App\Http\Controllers\PersonController::class, 'edit']);
Route::get('/Person/delete/{id}', [App\Http\Controllers\PersonController::class, 'delete']);