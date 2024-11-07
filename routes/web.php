<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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
Route::view('/bienvenida', 'bienvenida');

Route::get('/', HomeController::class );

Route::controller(CursoController::class)->group(function () {
    Route::get('/cursos', 'index')->name('cursos.index');
    Route::get('/cursos/create', 'create')->name('cursos.create');
    Route::get('/cursos/{curso}', 'show')->name('cursos.show');
});






