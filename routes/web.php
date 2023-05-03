<?php

use App\Http\Controllers\AddDataController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [StudentsController::class, ('index')])->name('index');
Route::get('/add', [StudentsController::class, ('create')])->name('create');
Route::post('/add', [StudentsController::class, ('add')])->name('add');
Route::get('/update/{id}', [StudentsController::class, ('edit')])->name('edit');
Route::post('/update/{id}', [StudentsController::class, ('update')])->name('update');
Route::get('/delete/{id}', [StudentsController::class, ('delete')])->name('delete');

