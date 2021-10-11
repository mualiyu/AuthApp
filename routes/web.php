<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/verification', [\App\Http\Controllers\VerificationController::class, 'index'])->name('verification');
Route::get('/verification', [\App\Http\Controllers\VerificationController::class, 'show'])->name('show_verification');
Route::post('/verify', [\App\Http\Controllers\VerificationController::class, 'verify_phone'])->name('verify_phone');
