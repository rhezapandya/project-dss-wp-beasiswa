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

# Syntax untuk akses page landing dengan memanggil class visitIndex dari Controller
Route::get('/', [IndexController::class, 'visitIndex'])->name('index');

# Syntax untuk akses page dashboard dengan memanggil class visitDashboard dari Controller
Route::get('/dashboard', [IndexController::class, 'visitDashboard'])->name('dashboard');

# Syntax untuk akses page metode dengan memanggil class visitMetode dari Controller
Route::get('/metode', [IndexController::class, 'visitMetode'])->name('metode');

# Syntax untuk akses page perhitungan dengan memanggil class kalkulasi dari Controller
Route::get('/kalkulasi', [IndexController::class, 'kalkulasi'])->name('perhitungan');
