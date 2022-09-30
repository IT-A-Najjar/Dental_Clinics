<?php

use App\Http\Controllers\IllnessController as IllnessController;
use App\Http\Controllers\PreviewController;
use App\Http\Controllers\SickController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\general;

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
Route::get('sick.create',[general::class,'create'])->name('sick.create');
Route::get('sick.store',[general::class,'store'])->name('sick.store');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function(){
    Route::resource('illnesses',IllnessController::class)->except('show');
    Route::resource('sick',SickController::class)->except(['store','create']);
    Route::resource('preview',PreviewController::class)->only(['create','store']);
});
Route::post('add_user',[\App\Http\Controllers\UserController::class,'add_user']);
Route::get('/layout',function(){
    return view('layout');
})->middleware(['auth'])->name('layout');

Route::get('/users',function(){
    return view('users',['users'=>\App\Models\User::all()]);
})->middleware(['auth','admin'])->name('users');

 Route::get('/createuser',function(){
     return view('createuser');
 })->middleware(['auth','admin'])->name('createuser');

Route::get('/dashboard', function () {
    return view('layout');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
