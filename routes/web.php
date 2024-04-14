<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\CategoriController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => true,
]);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::group(['middleware' => ['role:Admin']], function () {
        Route::resource('/bukus', BukuController::class);
        Route::resource('/anggotas', AnggotaController::class);
        Route::resource('/penerbits', PenerbitController::class);
        Route::resource('/categoris', CategoriController::class);
    });
    Route::group(['middleware' => ['role:Petugas|Admin']], function () {});

    Route::group(['middleware' => ['role:User|register']], function () {});
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
