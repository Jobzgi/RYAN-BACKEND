<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('products/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::post('/save', [App\Http\Controllers\ProductController::class, 'save'])->name('product.save');

Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create']);
Route::get('/products',[App\Http\Controllers\ProductController::class, 'list']);
Route::put('/update/{id}',[App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
Route::get('/delete/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('product.delete');
Route::get('/product/{id}/detail',[App\Http\Controllers\ProductController::class, 'getOne'])->name('product.detail');;
