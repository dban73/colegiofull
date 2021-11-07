<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('materia',[\App\Http\Controllers\MateriaController::class,'index']); 
Route::post('materia',[\App\Http\Controllers\MateriaController::class,'store']); 
Route::get('materia/{materia}',[\App\Http\Controllers\MateriaController::class,'show']); 
Route::put('materia/{materia}',[\App\Http\Controllers\MateriaController::class,'update']); 
Route::delete('materia/{materia}',[\App\Http\Controllers\MateriaController::class,'destroy']); 