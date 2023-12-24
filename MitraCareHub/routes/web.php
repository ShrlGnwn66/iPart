<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarMitraController;
use App\Http\Controllers\DataKeluhanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//home
Route::get('/', [HomeController::class, 'index']);



//FORM
Route::POST('/welcome', [FormController::class, 'form']);


Route::get('/', [DaftarMitraController::class, 'mitra']);
Route::get('/', [DataKeluhanController::class, 'index']);
