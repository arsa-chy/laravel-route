<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/delete/{id}', [ProductController::class, 'destroy'])->name('produkDelete');
Route::get('/product/create', [ProductController::class, 'create'])->name('produkCreate');
Route::post('/product/store', [ProductController::class, 'store'])->name('produkStore');

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('deleteCategory');

Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/customer/delete/{id}', [CustomerController::class, 'destroy'])->name('deleteCustomer');
