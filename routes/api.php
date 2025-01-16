<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/subcategories/{subcategory}', [App\Http\Controllers\ApiControllers\ApiController::class, 'show']);

Route::get('/subcategories/detaile/{id}',[App\Http\Controllers\ApiControllers\ApiController::class, 'detaile']);

Route::post('/feedback/created', [App\Http\Controllers\ApiControllers\ApiController::class, 'review']);

Route::get('/subcategories/detaile/order/{id}', [App\Http\Controllers\ApiControllers\CreateOrderController::class, 'order']);

Route::post('/checkout/{id}', [App\Http\Controllers\ApiControllers\CreateOrderController::class, 'checkout']);

Route::get('/track-Number', [App\Http\Controllers\ApiControllers\CreateOrderController::class, 'trackNumber']); 