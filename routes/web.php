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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/client/{any}', [App\Http\Controllers\IndexController::class, 'index'])->where('any', '[\/\w\.-]*');
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/client/produits', [App\Http\Controllers\produitController::class, 'index'])->name('produit');
Route::get('/client/Profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('Profile');





