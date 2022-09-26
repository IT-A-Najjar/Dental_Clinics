<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SickController;
use \App\Http\Controllers\IllnessController;
use \App\Http\Controllers\PreviewController;
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
Route::resource('illnesses',IllnessController::class)->except('show')->middleware(['auth']);
Route::resource('sick',SickController::class)->except(['store','create'])->middleware(['auth']);
Route::resource('preview',PreviewController::class)->only(['create','store'])->middleware(['auth']);
Route::get('sick.create',[\App\Http\Controllers\general::class,'create'])->name('sick.create');
Route::get('sick.store',[\App\Http\Controllers\general::class,'store'])->name('sick.store');
Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
