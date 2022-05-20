<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettingController;
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

Route::group(['middleware' => 'auth'], function () {
  Route::get('/', [DashboardController::class, 'index'])->name('index');
  Route::resource('/customers', CustomersController::class);
  Route::resource('/users', UsersController::class);
  Route::resource('/products', ProductsController::class);
  Route::resource('/categories', CategoriesController::class)->except('create');
  Route::resource('/orders', OrdersController::class);
  Route::get('/orders/{order}/invoice', [OrdersController::class, 'invoice'])->name('orders.invoice');
  Route::get('/orders/{order}/complete', [OrdersController::class, 'make_complete'])->name('orders.complete');
  Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
  Route::put('/setting', [SettingController::class, 'update'])->name('setting.update');
});

Route::group(['middleware' => 'guest'], function(){
  Route::get('/login', [AuthController::class, 'login'])->name('login.index');
  Route::post('/login', [AuthController::class, 'store'])->name('login.store');
});

// logout
Route::get('/logout', [AuthController::class, 'destroy'])->name('login.destroy');