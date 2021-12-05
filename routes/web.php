<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.index');
    Route::resource('/product_type', '\App\Http\Controllers\Admin\ProductTypeController');
//    Route::resource('/columns', '\App\Http\Controllers\Admin\ColumnController');
//    Route::resource('/cards', '\App\Http\Controllers\Admin\CardController');
});
