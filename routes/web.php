<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

// User Route
Route::resource('/users', UserController::class);


// Admin Route List
Route::get('/admin/login',[AdminUserController::class, 'index'])->name('login.index');
Route::post('/admin/save',[AdminUserController::class, 'store'])->name('login.store');
