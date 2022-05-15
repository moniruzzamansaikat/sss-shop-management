<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\UsersController;
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

Route::get('/', [DashboardController::class, 'index'])->name('index');
Route::resource('/customers', CustomersController::class);
Route::resource('/users', UsersController::class);
Route::resource('/products', ProductsController::class);
Route::resource('/categories', CategoriesController::class)->except('create');
Route::resource('/orders', OrdersController::class);