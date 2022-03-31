<?php

use App\Http\Controllers\RootController;
use App\Http\Controllers\WeddingDateController;
use App\Http\Controllers\WeddingHallController;
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

Route::resource('/date',WeddingDateController::class);
Route::resource('/hall',WeddingHallController::class);
Route::resource('/ocation',WeddingHallController::class);
Route::resource('/',RootController::class);