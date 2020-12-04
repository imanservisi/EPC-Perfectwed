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

Route::get('/app', function () {
    return Inertia\Inertia::render('App');
})->name('app');

Route::get('/step1', function () {
    return Inertia\Inertia::render('step1');
})->name('step1');

Route::get('/step2', function () {
    return Inertia\Inertia::render('step2');
})->name('step2');

Route::get('/step3', function () {
    return Inertia\Inertia::render('step3');
})->name('step3');

Route::get('/step4', function () {
    return Inertia\Inertia::render('step4');
})->name('step4');

Route::get('/step5', function () {
    return Inertia\Inertia::render('step5');
})->name('step5');

Route::get('/step6', function () {
    return Inertia\Inertia::render('step6');
})->name('step6');

Route::get('/step7', function () {
    return Inertia\Inertia::render('step7');
})->name('step7');

Route::get('/step8', function () {
    return Inertia\Inertia::render('step8');
})->name('step8');

Route::get('/step9', function () {
    return Inertia\Inertia::render('step9');
})->name('step9');
