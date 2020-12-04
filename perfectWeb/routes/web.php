<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CalculatorController;

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

Route::get('/admin', function(){
    return view('admin');
})->name('admin');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

//CRUD admin
Route::resource('/users', 'App\Http\Controllers\UserController');
Route::resource('/wedboards', 'App\Http\Controllers\ProjectController');

//Calculateur de frais
Route::get('/calculator', function () {
    return view('calculator');
});
Route::post('calculation', [App\Http\Controllers\CalculatorController::class, 'index']);
