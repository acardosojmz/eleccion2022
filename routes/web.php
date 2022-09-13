<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasillaController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('casilla', CasillaController::class);
