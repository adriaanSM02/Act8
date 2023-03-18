<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperherosController;

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/heros', [SuperherosController::class, 'index'])->name('heros');

Route::get('/herosmale', [SuperherosController::class, 'spmale'])->name('herosmale');

Route::get('/herosfemale', [SuperherosController::class, 'spfemale'])->name('herosfemale');

/*Route::get('/herosmale', function () {
    return view('herosmale');
})->name('herosmale');*/

/*Route::get('/herosfemale', function () {
    return view('herosfemale');
})->name('herosfemale');*/