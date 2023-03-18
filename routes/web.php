<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriaController;

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

Route::get('/materias/edit',[MateriaController::class,'edit']);
//Route::get('/materias/create',[MateriaController::class,'create']);
//Route::get('/materias',[MateriaController::class,'index']);

Route::resource('materias',MateriaController::class);
