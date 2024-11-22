<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('7products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::patch('/products/{product}/update', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');  
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');