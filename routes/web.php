<?php

use App\Http\Controllers\BookController;
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

Route::get('/', [BookController::class,'showHome'])->name('home');
Route::get('create_book',[BookController::class,'create']);
Route::post('create_book',[BookController::class,'store'])->name('create_book');
Route::get('show_update/{id}',[BookController::class,'showFormUpdate']);
Route::post('update/{id}',[BookController::class,'update'])->name('update');
Route::get('delete/{id}',[BookController::class,'delete']);

