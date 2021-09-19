<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengaduController;

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

Route::get('/registrasi', function () {
    return view('registrasi');
})->name('registrasi');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('admin/', [AdminController::class, 'index'])->name('petugas');
Route::get('pengadu/', [PengaduController::class, 'index'])->name('user');
Route::post('login', [LoginController::class, 'aksiLogin'])->name('aksiLogin');
Route::get('welcome', [LoginController::class, 'aksiLogout'])->name('logout');
