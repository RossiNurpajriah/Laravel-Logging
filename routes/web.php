<?php

use App\Http\Controllers\MerchantController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect('/listproducts');
});

Route::get('/tambahproducts', [ProductController::class, 'tambahproduct'])->name('tambahproduct');
Route::get('/listproducts', [ProductController::class, 'index'])->name('query-builder.listproduct');
Route::post('/product', [ProductController::class, 'postrequestproses'])->name('postrequestproses');
Route::get('/admin', [ProductController::class, 'admin'])->name('admin');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('editproduct');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('hapusproduct');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('updateproduct');

Route::get('/merchant', [ProductController::class, 'merchant'])->name('merchant');
Route::get('/profile', [ProductController::class, 'profile'])->name('query-builder.profile');





