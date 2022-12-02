<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'visitIndex'])->name('index');
Route::get('/dashboard', [IndexController::class, 'visitDashboard'])->name('dashboard');
Route::get('/metode', [IndexController::class, 'visitMetode'])->name('metode');
Route::get('/kalkulasi', [IndexController::class, 'kalkulasi'])->name('perhitungan');
