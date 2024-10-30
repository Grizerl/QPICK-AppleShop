<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



Route::get('/', function () {
    return redirect(route('categories.index'));
});

Route::group(['prefix' => 'Qpick'], function() {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/subcategories/{subcategory}', [SubcategoryController::class, 'show'])->name('subcategories.show');
    Route::get('/subcategories/detaile/{id}', [App\Http\Controllers\ShowProductsDetaile\DetaileController::class, 'detaile'])->name('subcategories.detaile');
    Route::get('/subcategories/detaile/order/{id}', [App\Http\Controllers\Order\OrderController::class, 'order'])->name('subcategories.order');
    Route::post('/checkout/place-order/{id}',[App\Http\Controllers\Order\CheckOutController::class, 'checkout'])->name('checkout.order');
    Route::get('/checkout/detaile/order/placed/{order}',[App\Http\Controllers\Order\ReservedController::class, 'reserved'])->name('checkout.reserved');
    Route::post('/checkout/feedback',[App\Http\Controllers\ShowProductsDetaile\ClientReviewController::class, 'review'])->name('reviews.manage');
    // ---- Contacts ---- //
    Route::get('/contacts',[App\Http\Controllers\MediaInfo\ContactController::class,'contact'])->name('media.info');
     // ---- Basket/Orders ---- //
     Route::get('/basket/orders',[App\Http\Controllers\BasketOrder\BasketController::class, 'basket'])->name('basket.order');
});
