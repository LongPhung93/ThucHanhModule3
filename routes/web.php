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
Route::get('index',[\App\Http\Controllers\AgencyController::class,'index'])->name('index');
Route::get('create',[\App\Http\Controllers\AgencyController::class,'create'])->name('create');
Route::post('create',[\App\Http\Controllers\AgencyController::class,'store'])->name('store');
Route::get('{id}/edit',[\App\Http\Controllers\AgencyController::class,'edit'])->name('edit');
Route::post('{id}/edit',[\App\Http\Controllers\AgencyController::class,'update'])->name('update');
Route::get('{id}/delete',[\App\Http\Controllers\AgencyController::class,'destroy'])->name('destroy');
Route::get('search',[\App\Http\Controllers\AgencyController::class,'search'])->name('search');
