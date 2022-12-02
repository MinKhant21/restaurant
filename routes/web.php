<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\setup\CategoriesController;
use App\Http\Controllers\admin\setup\ItemsController;
use App\Http\Controllers\admin\setup\TablesController;
use App\Http\Controllers\OrderHistoryController;
use App\Http\Controllers\user\UIController;
use Illuminate\Support\Facades\Route;


Route::get('/result',[DashboardController::class,'result']);
Route::get('/test',[DashboardController::class,'test']);
Route::group(['prefix' => 'admin', 'middleware' => 'admin'],function(){

    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::group(['prefix' =>'order'],function(){
        Route::get('{id}', [DashboardController::class, 'orderDetail'])->name('order.detail');
        Route::get('{id}/complete',[DashboardController::class, 'orderComplete'])->name('order.complete');
    });

    Route::resource('order_history', OrderHistoryController::class, ['as'=>'admin']);

    Route::group(['prefix' => 'setup'],function(){
        Route::resource('items', ItemsController::class,['as' => 'admin']);
        Route::resource('categories', CategoriesController::class,['as' => 'admin']);
        Route::resource('tables', TablesController::class,['as' => 'admin']);
    });
    Route::get('/logout',[AuthController::class, 'logout'])->name('admin.logout');
});
Route::get('/', function(){
    return redirect(url('/admin.login'));
});

Route::get('admin/login',[AuthController::class,'loginView']);
Route::post('admin/login',[AuthController::class,'login'])->name('admin.login');

