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



Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/reg', [AuthController::class, 'reg'])->name('reg');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/log', [AuthController::class, 'log'])->name('log');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



//Admin
Route::group(['middleware' => ['auth', 'admin-role']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/verif_yudisium', [AdminController::class, 'verifikasi_yudisium'])->name('admin.verif_yudisium');
    Route::get('/admin/sk_yudisium', [AdminController::class, 'sk_yudisium'])->name('admin.sk_yudisium');
    Route::get('/admin/verif_wisuda', [AdminController::class, 'verifikasi_wisuda'])->name('admin.verif_wisuda');
    Route::get('/admin/sk_wisuda', [AdminController::class, 'sk_wisuda'])->name('admin.sk_wisuda');

    Route::get('/admin/verif_yudisium/kelengkapan_yudisium.pdf', [AdminController::class, 'pdf_yudisium']);
    Route::get('/admin/verif_wisuda/kelengkapan_wisuda.pdf', [AdminController::class, 'pdf_wisuda']);
});

//Mahasiswa
Route::group(['middleware' => ['auth', 'mahasiswa-role']], function () {
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
    Route::get('/mahasiswa/bimbinganinput', [MahasiswaController::class, 'bimbinganinput'])->name('mahasiswa.bimbinganinput');
    Route::get('/mahasiswa/bimbingan', [MahasiswaController::class, 'bimbingan'])->name('mahasiswa.bimbingan');
    Route::get('/mahasiswa/sidang', [MahasiswaController::class, 'sidang'])->name('mahasiswa.sidang');
    Route::get('/mahasiswa/kehadiran', [MahasiswaController::class, 'kehadiran'])->name('mahasiswa.kehadiran');
    Route::get('/mahasiswa/revisi', [MahasiswaController::class, 'revisi'])->name('mahasiswa.revisi');
    Route::get('/mahasiswa/yudisium', [MahasiswaController::class, 'yudisium'])->name('mahasiswa.yudisium');
    Route::get('/mahasiswa/wisuda', [MahasiswaController::class, 'wisuda'])->name('mahasiswa.wisuda');
});

//Dosen
Route::group(['middleware' => ['auth', 'dosen-role']], function () {
    Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');
    Route::get('/dosen/verifikasi', [DosenController::class, 'verifikasi'])->name('dosen.verifikasi');
    Route::get('/dosen/nilai', [DosenController::class, 'nilai'])->name('dosen.nilai');
    Route::post('/dosen/upnilai', [DosenController::class, 'upNilaiSidang'])->name('dosen.upnilai');
    Route::get('/dosen/verifikasi/file_revisi.pdf', [DosenController::class, 'pdf_revisi']);
});

// Kalab
Route::group(['middleware' => ['auth', 'kalab-role']], function () {
});
