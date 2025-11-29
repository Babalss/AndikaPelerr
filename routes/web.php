<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\AboutMeAdminController;
use App\Http\Controllers\Admin\ProductAdminController;

// ================== TAMPILAN (FRONT) ==================
Route::get('/', function () {
    return view('frontend.home');           // resources/views/frontend/home.blade.php
})->name('home');

Route::get('/product', function () {
    return view('frontend.product');        // resources/views/frontend/product.blade.php
})->name('product');

Route::get('/about-me', function () {
    return view('frontend.aboutme');        // resources/views/frontend/aboutme.blade.php
})->name('aboutme');

// pakai controller untuk about me
Route::get('/about-me', [AboutMeController::class, 'show'])->name('aboutme');

// pakai controller untuk home
Route::get('/', [HomeController::class, 'show'])->name('home');

// pakai controller untuk product
Route::get('/product', [ProductController::class, 'index'])->name('product');

// ================== ADMIN ==================
Route::prefix('admin')->name('admin.')->group(function () {

    // dashboard utama (tabel)
    Route::get('/dashboard', function () {
        return view('admin.dashboard');     // resources/views/admin/dashboard.blade.php
    })->name('dashboard');

    // menu Admin > Home
    Route::get('/home', function () {
        return view('admin.home.edit');     // resources/views/admin/home/edit.blade.php
    })->name('home');

    // menu Admin > Product
    Route::get('/product', function () {
        return view('admin.product.edit');  // resources/views/admin/product/edit.blade.php
    })->name('product');

    // menu Admin > About Me
    Route::get('/about-me', function () {
        return view('admin.aboutme.edit');  // resources/views/admin/aboutme/edit.blade.php
    })->name('aboutme');


    // ===== ABOUT ME ADMIN =====
    Route::get('/about-me', [AboutMeAdminController::class, 'edit'])->name('aboutme');
    Route::post('/about-me', [AboutMeAdminController::class, 'update'])->name('aboutme.update');
    Route::delete('/about-me', [AboutMeAdminController::class, 'destroy'])->name('aboutme.delete');
    // ⬆⬆⬆

      // HOME ADMIN
    Route::get('/home', [HomeAdminController::class, 'edit'])->name('home');
    Route::post('/home', [HomeAdminController::class, 'update'])->name('home.update');
    Route::delete('/home', [HomeAdminController::class, 'destroy'])->name('home.delete');

    // PRODUCT ADMIN
    Route::get('/product', [ProductAdminController::class, 'index'])->name('product');
    Route::get('/product/create', [ProductAdminController::class, 'create'])->name('product.create');
    Route::post('/product', [ProductAdminController::class, 'store'])->name('product.store');
    Route::get('/product/{product}/edit', [ProductAdminController::class, 'edit'])->name('product.edit');
    Route::put('/product/{product}', [ProductAdminController::class, 'update'])->name('product.update');
    Route::delete('/product/{product}', [ProductAdminController::class, 'destroy'])->name('product.delete');

});
