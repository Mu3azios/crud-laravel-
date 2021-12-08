<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\elementController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/element', elementController::class);
