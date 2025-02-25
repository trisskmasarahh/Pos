<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [POSController::class, 'home']);

Route::get('/products', [POSController::class, 'products']);

Route::get('/category/{category}', [POSController::class, 'productsCategory']);

Route::get('/user/{id}/{name}', [POSController::class, 'user']);

Route::get('/sales', [POSController::class, 'sales']);

Route::post('/processSale', [POSController::class, 'processSale'])->name('process.sale');


