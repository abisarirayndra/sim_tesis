<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\DosenPembimbingController;
use App\Http\Controllers\DosenPengujiController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
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

Route::get('/register',[AuthController::class, 'register'])->name('register');


//Admin
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/verif_yudisium', [AdminController::class, 'verifikasi_yudisium']);
Route::get('/admin/sk_yudisium', [AdminController::class, 'sk_yudisium']);
Route::get('/admin/verif_wisuda', [AdminController::class, 'verifikasi_wisuda']);
Route::get('/admin/sk_wisuda', [AdminController::class, 'sk_wisuda']);


//Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/revisi', [MahasiswaController::class, 'revisi']);
Route::get('/mahasiswa/yudisium', [MahasiswaController::class, 'yudisium']);
Route::get('/mahasiswa/wisuda', [MahasiswaController::class, 'wisuda']);


//Dosen
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/dosen/verifikasi', [DosenController::class, 'verifikasi']);
Route::get('/dosen/nilai', [DosenController::class, 'nilai']);


Route::get('/admin/verif_yudisium/kelengkapan_yudisium.pdf', [AdminController::class, 'pdf_yudisium']);
Route::get('/admin/verif_wisuda/kelengkapan_wisuda.pdf', [AdminController::class, 'pdf_wisuda']);
Route::get('/dosen/verifikasi/file_revisi.pdf', [DosenController::class, 'pdf_revisi']);

