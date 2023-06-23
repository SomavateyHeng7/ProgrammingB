<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;


Route::get('/', function () {
  return view('Home');
 });

Route::resource('/packages', TourController::class);