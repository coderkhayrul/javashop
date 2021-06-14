<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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

Route::get('/',[DashboardController::class, 'index'])->name('dashboard.index');

// Product Route
Route::resource('/products',ProductController::class);

// Order Route
Route::resource('/orders',OrderController::class);
Route::get('/confirm/{order}',[OrderController::class, 'confirm'])->name('order.confirm');
Route::get('/pending/{order}',[OrderController::class, 'pending'])->name('order.pending');
