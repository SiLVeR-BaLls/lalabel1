<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::view('/', 'home');

Route::controller(ProductController::class)->group(function () {
    
    Route::get('/products', 'index')
        ->name('products.index');
    
    Route::get('/products/create', 'create')
        ->name('products.create');

    Route::post('/products/store', 'store')
        ->name('products.store');

    Route::get('/products/{product}', 'show')
        ->name('products.show');

    Route::get('/products/{product}/edit', 'edit')
        ->name('products.edit');

    Route::patch('/products/{product}', 'update')
        ->name('products.update');

    Route::delete('/products/{product}', 'destroy')
        ->name('products.destroy');
    
});
