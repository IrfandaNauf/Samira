<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\VideoController;

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
//     return view('landingpage');
// });

Route::get('/', [LandingPageController::class, 'index']);

Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('prestasi', PrestasiController::class);
Route::resource('galeri', GaleriController::class);
Route::resource('paket', PaketController::class);
Route::resource('konten', VideoController::class);
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
