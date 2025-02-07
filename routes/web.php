<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ClientController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/login', [AuthController::class, 'create'])->name('login');

Route::post('/login', [AuthController::class, 'store']);

Route::get('/clients', [ClientController::class, 'create'])->middleware('auth')->name('clients.create');

Route::post('/clients', [ClientController::class, 'store'])->middleware('auth')->name('clients.store');

// Create additional Routes below
