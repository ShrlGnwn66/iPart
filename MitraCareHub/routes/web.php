<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MitraDataController;

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


// Mitra dan Data Keluhan
Route::get('/', [MitraDataController::class, 'mitradata']);
Route::get('/search', [MitraDataController::class, 'search'])->name('search');
