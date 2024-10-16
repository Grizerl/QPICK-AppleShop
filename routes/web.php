<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect(route('categories.index'));
});

Route::group(['prefix' => 'Qpick'], function() {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/subcategories/{subcategory}', [SubcategoryController::class, 'show'])->name('subcategories.show');
    Route::get('/subcategories/detaile/{id}', [App\Http\Controllers\ShowProductsDetaile\DetaileController::class, 'detaile'])->name('subcategories.detaile');
    Route::get('/subcategories/detaile/order/{id}', [App\Http\Controllers\Order\OrderController::class, 'order'])->name('subcategories.order');
    // Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
});

