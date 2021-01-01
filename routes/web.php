<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TindakanController;
use App\Http\Controllers\JadwalController;

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

Route::get('/', function () {
    return view('user.home');
});

Route::get('/masuk', function () {
    return view('user.login');
});

Route::get('/obat', function () {
    return view('admin.main.obat.index');
});

Route::get('/tindakan', [TindakanController::class, 'index']);
Route::get('/jadwal', [JadwalController::class, 'index']);

Route::get('/profile', function () {
    return view('user.main.profile');
});

// ROUTE : ADMIN

Route::prefix('admin')->group(function() {
    Route::get('login', [AuthController::class, 'index'])->name('get-admin-login');
    Route::post('login', [AuthController::class, 'adminLogin'])->name('admin-login');
    Route::post('logout', [AuthController::class, 'logoutAll'])->name('admin-logout');
    Route::get('dashboard', function() {
        return view('admin.main.dashboard');
    });
});

// EOF ROUTE : ADMIN