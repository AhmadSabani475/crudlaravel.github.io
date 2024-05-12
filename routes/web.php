<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


Route::resource('/ahmad_rizki_sabani', \App\Http\Controllers\AhmadRizkiSabaniController::class);
Route::get('/', function () {
    return view('home');
});