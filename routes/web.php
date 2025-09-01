<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SimulasiController;
use App\Http\Controllers\MateriController;
use App\Models\Materi;
use App\Models\Simulasi;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('users', UserController::class)->except(['show']);
Route::resource('simulasis', SimulasiController::class)->except(['show']);
Route::resource('materis', MateriController::class)->except(['show']);
