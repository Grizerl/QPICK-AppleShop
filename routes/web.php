<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Redirect the root URL to the categories index
Route::get('/', function () {
    return redirect(route('categories.index'));
});

// Group routes under the prefix 'Qpick'
Route::group(['prefix' => 'Qpick'], function() {
    // Route for the main category index page
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');

    // Route to show a specific subcategory
    Route::get('/subcategories/{subcategory}', [SubcategoryController::class, 'show'])->name('subcategories.show');

    // Route to show details of a specific product under a subcategory
    Route::get('/subcategories/detaile/{id}', [App\Http\Controllers\ShowProductsDetaile\DetaileController::class, 'detaile'])->name('subcategories.detaile');

    // Route to place an order for a specific product
    Route::get('/subcategories/detaile/order/{id}', [App\Http\Controllers\Order\OrderController::class, 'order'])->name('subcategories.order');

    // Route to checkout and place an order
    Route::post('/checkout/place-order/{id}', [App\Http\Controllers\Order\CheckOutController::class, 'checkout'])->name('checkout.order');

    // Route to view the details of a placed order
    Route::get('/checkout/detaile/order/placed/{order}', [App\Http\Controllers\Order\ReservedController::class, 'reserved'])->name('checkout.reserved');

    // Route to submit client feedback
    Route::post('/checkout/feedback', [App\Http\Controllers\ShowProductsDetaile\ClientReviewController::class, 'review'])->name('reviews.manage');

    // ---- Contacts ---- //
    // Route for the contacts page
    Route::get('/contacts', [App\Http\Controllers\MediaInfo\ContactController::class, 'contact'])->name('media.info');

    // ---- Basket/Orders ---- //
    // Route to view the basket orders
    Route::get('/basket/orders', [App\Http\Controllers\BasketOrder\BasketController::class, 'basket'])->name('basket.order');
});
