<?php

use App\Http\Controllers\IllnessController as IllnessController;
use App\Http\Controllers\PreviewController;
use App\Http\Controllers\SickController;
use App\Models\Sick;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\general;
use \App\Http\Controllers\UserController;

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
Route::post('sick.store',[general::class,'store'])->name('sick.store');

Route::get('/', function () {
    return view('welcome',[
        'preview'=>\App\Models\preview::all(),
        'doctor'=>\App\Models\User::all(),
        'sick'=>Sick::all(),
    ]);
});
Route::get('about',function (){
    return view('about');
});

Route::middleware(['auth'])->group(function(){
    Route::resource('illnesses',IllnessController::class)->except('show');
    Route::resource('sick',SickController::class)->except(['store','create']);
    Route::resource('preview',PreviewController::class);
    Route::resource('users',UserController::class);
});
Route::get('preview.edit/{id}',[PreviewController::class,'edit']);
Route::post('users.update/{id}',[UserController::class,'update']);
Route::post('add_user',[\App\Http\Controllers\UserController::class,'add_user']);

Route::get('/layout',function(){
    return view('layout');
})->middleware(['auth'])->name('layout');

Route::get('/users',function(){
    return view('users',['users'=>\App\Models\User::orderBy('id','DESC')->get()]);
})->middleware(['auth','admin'])->name('users');

 Route::get('/createuser',function(){
     return view('createuser');
 })->middleware(['auth','admin'])->name('createuser');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
