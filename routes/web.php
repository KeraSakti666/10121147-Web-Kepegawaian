<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\TambahController;
use App\Http\Controllers\EditController;
//login
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

//register
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

//Didalam Login
Route::get('home', [HomeController::class, 'home'])->name('home');
Route::get('data', [DataController::class, 'data'])->name('data');
Route::get('tambah', [TambahController::class, 'tambah'])->name('tambah');
Route::get('kehadiran', [KehadiranController::class, 'kehadiran'])->name('kehadiran');

//action kehadiran
Route::post('/kehadiran/absen/{id}', [KehadiranController::class, 'absen'])->name('kehadiran.absen');
Route::post('/kehadiran/ambil-gaji/{id}', [KehadiranController::class, 'ambilGaji'])->name('kehadiran.ambil-gaji');

//tambahpegawai
Route::post('actiontambah', [TambahController::class, 'actiontambah'])->name('actiontambah');

//action data
Route::delete('/data/hapus-pegawai/{id}', [DataController::class, 'hapus'])->name('hapus-pegawai');
Route::get('/edit-pegawai/{id}', [EditController::class, 'edit'])->name('edit');
Route::post('/actionedit', [EditController::class, 'actionEdit'])->name('actionedit');
Route::get('/search-id', [DataController::class, 'searchById'])->name('search-id');


