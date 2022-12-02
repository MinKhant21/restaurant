<?php

use App\Http\Controllers\api\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/categories', [IndexController::class, 'getCategories']);
Route::get('/categories/{id}', [IndexController::class, 'getItems']);

// Route::post('/order/complete', [IndexController::class, 'orderComplete']);
Route::post('/order', [IndexController::class, 'order']);
Route::get('/{table_id}/order/confirmed', [IndexController::class, 'getConfirmedItems']);