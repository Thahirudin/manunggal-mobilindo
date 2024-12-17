<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\GambarMobilController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\PegawaiMiddleware;
use Illuminate\Support\Facades\Route;








Route::middleware([AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/dashboard', [PageController::class, 'adminDashboard'])->name('admin.dashboard');

    Route::get('/tambah-pegawai', function () {
        return view('admin.tambah-pegawai');
    })->name('admin.tambah-pegawai');

    Route::post('/store-pegawai', [UserController::class, 'store'])->name('admin.store-pegawai');

    Route::put('/update-pegawai/{id}', [UserController::class, 'update'])->name('admin.update-pegawai');

    Route::put('/change-admin/{id}', [UserController::class, 'changeAdmin'])->name('admin.change-admin');

    Route::delete('/delete-user/{id}', [UserController::class, 'destroy'])->name('admin.delete-pegawai');

    Route::get('/data-mobil', [PageController::class, 'adminDataMobil'])->name('admin.data-mobil');
    
    Route::get('/tambah-mobil', function () {
        return view('admin.tambah-mobil');
    })->name('admin.tambah-mobil');

    Route::post('/store-mobil', [MobilController::class, 'store'])->name('admin.store-mobil');

    Route::delete('/delete-mobil/{id}', [MobilController::class, 'destroy'])->name('admin.delete-mobil');

    Route::get('/edit-mobil/{id}', [PageController::class, 'adminEditMobil'])->name('admin.edit-mobil');
    
    Route::put('/edit-mobil/{id}', [MobilController::class, 'update'])->name('admin.update-mobil');
    
    Route::delete('/delete-gambar-mobil/{id}', [GambarMobilController::class, 'destroy'])->name('admin.delete-gambar-mobil');

    Route::post('/store-gambar-mobil', [GambarMobilController::class, 'store'])->name('admin.store-gambar-mobil');

    Route::get('/data-banner', [PageController::class, 'adminDataBanner'])->name('admin.data-banner');
    
    Route::get('/tambah-banner', function () {
        return view('admin.tambah-banner');
    })->name('admin.tambah-banner');
    
    Route::post('/store-banner', [BannerController::class, 'store'])->name('admin.store-banner');
    
    Route::get('/edit-banner/{id}', [PageController::class, 'adminEditBanner'])->name('admin.edit-banner');
    
    Route::put('/edit-banner/{id}', [BannerController::class, 'update'])->name('admin.update-banner');
    
    Route::get('/profil', [PageController::class, 'adminProfil'])->name('admin.profil');
    
    Route::get('/data-pegawai', [UserController::class, 'datapegawai'])->name('admin.data-pegawai');

    Route::delete('/delete-banner/{id}', [BannerController::class, 'destroy'])->name('admin.delete-banner');

    Route::get('/data-penjualan', [PenjualanController::class, 'datapenjualan'])->name('admin.data-penjualan');
    Route::get('/tambah-penjualan/{id}', [PenjualanController::class, 'tambahpenjualan'])->name('admin.tambah-penjualan');
    Route::get('/edit-penjualan/{id}', [PenjualanController::class, 'editpenjualan'])->name('admin.edit-penjualan');
    Route::post('/store-penjualan', [PenjualanController::class, 'storepenjualan'])->name('admin.store-penjualan');
    Route::put('/edit-penjualan/{id}', [PenjualanController::class, 'update'])->name('admin.update-penjualan');
    Route::delete('/delete-penjualan/{id}', [PenjualanController::class, 'destroy'])->name('admin.delete-penjualan');

});

Route::middleware([PegawaiMiddleware::class])->prefix('pegawai')->group(function () {
    Route::get('/dashboard', [PageController::class, 'pegawaiDashboard'])->name('pegawai.dashboard');

    Route::post('/store-pegawai', [UserController::class, 'store'])->name('pegawai.store-pegawai');

    Route::put('/update-pegawai/{id}', [UserController::class, 'update'])->name('pegawai.update-pegawai');

    Route::get('/data-mobil', [PageController::class, 'pegawaiDataMobil'])->name('pegawai.data-mobil');
    
    Route::get('/tambah-mobil', function () {
        return view('pegawai.tambah-mobil');
    })->name('pegawai.tambah-mobil');

    Route::post('/store-mobil', [MobilController::class, 'store'])->name('pegawai.store-mobil');

    Route::delete('/delete-mobil/{id}', [MobilController::class, 'destroy'])->name('pegawai.delete-mobil');

    Route::get('/edit-mobil/{id}', [PageController::class, 'pegawaiEditMobil'])->name('pegawai.edit-mobil');
    
    Route::put('/edit-mobil/{id}', [MobilController::class, 'update'])->name('pegawai.update-mobil');
    
    Route::delete('/delete-gambar-mobil/{id}', [GambarMobilController::class, 'destroy'])->name('pegawai.delete-gambar-mobil');

    Route::post('/store-gambar-mobil', [GambarMobilController::class, 'store'])->name('pegawai.store-gambar-mobil');

    Route::get('/data-banner', [PageController::class, 'pegawaiDataBanner'])->name('pegawai.data-banner');
    
    Route::get('/tambah-banner', function () {
        return view('pegawai.tambah-banner');
    })->name('pegawai.tambah-banner');
    
    Route::post('/store-banner', [BannerController::class, 'store'])->name('pegawai.store-banner');
    
    Route::get('/edit-banner/{id}', [PageController::class, 'pegawaiEditBanner'])->name('pegawai.edit-banner');
    
    Route::put('/edit-banner/{id}', [BannerController::class, 'update'])->name('pegawai.update-banner');
    
    Route::get('/profil', [PageController::class, 'pegawaiProfil'])->name('pegawai.profil');
    
    Route::get('/data-pegawai', [UserController::class, 'datapegawai'])->name('pegawai.data-pegawai');

    Route::delete('/delete-banner/{id}', [BannerController::class, 'destroy'])->name('pegawai.delete-banner');

});


Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
})->name('tentang-kami');

Route::get('/katalog', [PageController::class, 'katalogMobil'])->name('katalog');

Route::get('/detail-katalog/{id}', [PageController::class, 'detailKatalog'])->name('detail-katalog');

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [UserController::class, 'login'])->name('post-login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
