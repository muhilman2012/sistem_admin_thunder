<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\indexController;
use App\Http\Controllers\UJController;
use App\Http\Controllers\crewController;

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

Route::get('/dashboard', [indexController::class, 'index'])->name('dashboard');

// UJ Routing
Route::get('/uj', [UJController::class, 'index'])->name('uj.data');
Route::get('/uj/create', [UJController::class, 'create'])->name('uj.create');
Route::post('/uj', [UJController::class, 'store'])->name('uj.store');
Route::get('/uj/{uj_id}', [UJController::class, 'show'])->name('uj.detail');
Route::get('/uj/{uj_id}/edit', [UJController::class, 'edit'])->name('uj.edit');
Route::put('/uj/{uj_id}', [UJController::class, 'update'])->name('uj.update');
Route::delete('/uj/{uj_id}', [UJController::class, 'destroy'])->name('uj.destroy');

// Crew Routing
Route::get('/data-crew', [crewController::class, 'index'])->name('crew.data');
Route::get('/form-crew', [crewController::class, 'create'])->name('crew.create');
Route::post('/form-crew', [crewController::class, 'store'])->name('crew.store');
Route::get('/crew/{crew_id}/edit', 'crewController@edit')->name('crew.edit');
Route::put('/crew/{crew_id}', 'crewController@update')->name('crew.update');
Route::delete('/crew/{crew_id}', 'crewController@destroy')->name('crew.destroy');