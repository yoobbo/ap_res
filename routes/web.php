<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\OrderController::class, 'index'])->name('home');
Route::get('/dish', [App\Http\Controllers\DishController::class, 'index'])->name('dish');
// Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('order');

// Auth::routes();

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
    'confirm' => false,
]);
