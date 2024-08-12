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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/****----------  homework routes */

Route::get('/tareas', [App\Http\Controllers\HomeworkController::class, 'index']);

Route::get('/tareas/create', [App\Http\Controllers\HomeworkController::class, 'create']);
Route::get('/tareas/{homework}/edit', [App\Http\Controllers\HomeworkController::class, 'edit']);
Route::post('/tareas', [App\Http\Controllers\HomeworkController::class, 'sendData']);