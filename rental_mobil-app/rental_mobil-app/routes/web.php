<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\JenisKendaraanController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PembayaranController;

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Menggunakan middleware 'admin' untuk membatasi akses hanya untuk admin
Route::middleware(['auth', 'checkusertype:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    // Rute-rute lain yang hanya bisa diakses oleh admin
    Route::get('/armada', [ArmadaController::class, 'show'])->name('armada.show');
    Route::get('/armada/create', [ArmadaController::class, 'create'])->name('armada.create');
    Route::post('/armada/store', [ArmadaController::class, 'store'])->name('armada.store');
    Route::get('/armada/edit/{id}', [ArmadaController::class, 'edit'])->name('armada.edit');
    Route::put('/armada/update/{id}', [ArmadaController::class, 'update'])->name('armada.update');
    Route::delete('/armada/destroy/{id}', [ArmadaController::class, 'destroy'])->name('armada.destroy');

    // Rute untuk JenisKendaraanController
    Route::get('/jenis-kendaraan', [JenisKendaraanController::class, 'show'])->name('jenis_kendaraan.show');
    Route::get('/jenis-kendaraan/create', [JenisKendaraanController::class, 'create'])->name('jenis_kendaraan.create');
    Route::post('/jenis-kendaraan/store', [JenisKendaraanController::class, 'store'])->name('jenis_kendaraan.store');
    Route::get('/jenis-kendaraan/edit/{id}', [JenisKendaraanController::class, 'edit'])->name('jenis_kendaraan.edit');
    Route::put('/jenis-kendaraan/update/{id}', [JenisKendaraanController::class, 'update'])->name('jenis_kendaraan.update');
    Route::delete('/jenis-kendaraan/destroy/{id}', [JenisKendaraanController::class, 'destroy'])->name('jenis_kendaraan.destroy');
});
    // Rute untuk PeminjamanController
    Route::get('/peminjaman', [PeminjamanController::class, 'show'])->name('peminjaman.show');
    Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
    Route::post('/peminjaman/store', [PeminjamanController::class, 'store'])->name('peminjaman.store');
    Route::get('/peminjaman/edit/{id}', [PeminjamanController::class, 'edit'])->name('peminjaman.edit');
    Route::put('/peminjaman/update/{id}', [PeminjamanController::class, 'update'])->name('peminjaman.update');
    Route::delete('/peminjaman/destroy/{id}', [PeminjamanController::class, 'destroy'])->name('peminjaman.destroy');

    // Rute untuk PembayaranController
    Route::get('/pembayaran', [PembayaranController::class, 'show'])->name('pembayaran.show');
    Route::get('/pembayaran/create', [PembayaranController::class, 'create'])->name('pembayaran.create');
    Route::post('/pembayaran/store', [PembayaranController::class, 'store'])->name('pembayaran.store');
    Route::get('/pembayaran/edit/{id}', [PembayaranController::class, 'edit'])->name('pembayaran.edit');
    Route::put('/pembayaran/update/{id}', [PembayaranController::class, 'update'])->name('pembayaran.update');
    Route::delete('/pembayaran/destroy/{id}', [PembayaranController::class, 'destroy'])->name('pembayaran.destroy');





Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

require __DIR__.'/auth.php';

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('admin',[HomeController::class,'index'])->
    middleware(['auth','admin']);


// Rute untuk AdminController
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->
middleware(['auth','admin']);

// Rute untuk ArmadaController

