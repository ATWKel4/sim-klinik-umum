<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\TindakanController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routess
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ROUTE USER (Tidak ada sistem middleware)
Route::get('/', function () { return view('user.home'); });

Route::get('/masuk', function () { return view('user.login'); });
Route::post('/masuk', [AuthController::class, 'userLogin']);

Route::get('/beranda', [BerandaController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/antrian/cetak', [BerandaController::class, 'printPDF']);
Route::get('/keluar', [AuthController::class, 'logoutAll']);
// EOF ROUTE : USER

// ROUTE : ADMIN (Tidak ada sistem middleware)
Route::prefix('admin')->group(function() {
    Route::get('login', [AuthController::class, 'index'])->name('get-admin-login');
    Route::post('login', [AuthController::class, 'adminLogin'])->name('admin-login');
    Route::post('logout', [AuthController::class, 'logoutAll'])->name('admin-logout');
    Route::get('dashboard', [DashboardController::class, 'index']);
    // Route::resource('obat', ObatController::class);
    Route::resource('antrian', AntrianController::class);
    Route::resource('penyakit', PenyakitController::class);
    Route::resource('tindakan', TindakanController::class);
    Route::resource('jadwal', JadwalController::class);
});
// EOF ROUTE : ADMIN