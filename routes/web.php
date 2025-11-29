<?php

use Illuminate\Support\Facades\Route;

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
});
