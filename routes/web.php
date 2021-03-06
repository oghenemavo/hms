<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EcosystemController;
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

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

Route::get('/dashboard', [EcosystemController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');