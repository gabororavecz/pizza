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


Route::get('/pizza', [App\Http\Controllers\PizzaController::class, 'index'])->name('pizza.index'); //"get" so we get input from the database
Route::get('/pizza/create', [App\Http\Controllers\PizzaController::class, 'create'])->name('pizza.create'); 
Route::post('/pizza/store', [App\Http\Controllers\PizzaController::class, 'store'])->name('pizza.store');  //"post" so we input data to the database