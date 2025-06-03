<?php

use App\Http\Controllers\ApiControllers\ApiController;
use App\Http\Controllers\ApiControllers\CreateOrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/subcategories/{subcategory}', [ApiController::class, 'show']);

Route::get('/subcategories/detaile/{id}', [ApiController::class, 'detaile']);

Route::post('/feedback/created', [ApiController::class, 'review']);

Route::get('/subcategories/detaile/order/{id}', [CreateOrderController::class, 'order']);

Route::post('/checkout/{id}', [CreateOrderController::class, 'checkout']);

Route::get('/track-Number', [CreateOrderController::class, 'trackNumber']);
