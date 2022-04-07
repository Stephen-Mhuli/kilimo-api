<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ShipmentsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Public routes
Route::get('/products', [ProductsController::class, 'index'])->name('product.index'); //show all products
Route::get('/products/search/{name}', [ProductsController::class, 'search'])->name('product.search'); //search products by name
Route::get('/products/{id}', [ProductsController::class, 'show'])->name('product.show'); //show specific product by id
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::post('/login',[AuthController::class,'login'])->name('login');

//Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/products', [ProductsController::class, 'store'])->name('product.store'); //post new product
    Route::put('/products/{id}', [ProductsController::class, 'update'])->name('product.update'); //update a specific product by id
    Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('product.destroy'); //Delete a specific product by id
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
});


//Order routes
Route::get('/orders', [OrdersController::class, 'index']);
Route::post('/orders', [OrdersController::class, 'store']);
Route::get('/orders/{id}', [OrdersController::class, 'show']);
Route::put('/orders/{id}', [OrdersController::class, 'update']);
Route::delete('/orders/{id}', [OrdersController::class, 'destroy']);

//User routes
Route::get('/users', [UsersController::class, 'index']);
Route::post('/users', [UsersController::class, 'store']);
Route::get('/users/{id}', [UsersController::class, 'show']);
Route::put('/users/{id}', [UsersController::class, 'update']);
Route::delete('/users/{id}', [UsersController::class, 'destroy']);

//Payment routes
Route::get('/payments', [PaymentsController::class, 'index']);
Route::post('/Payments', [PaymentsController::class, 'store']);
Route::get('/Payments/{id}', [PaymentsController::class, 'show']);
Route::put('/Payments/{id}', [PaymentsController::class, 'update']);
Route::delete('/Payments/{id}', [PaymentsController::class, 'destroy']);


//Payment routes
Route::get('/shipments', [shipmentsController::class, 'index']);
Route::post('/shipments', [shipmentsController::class, 'store']);
Route::get('/shipments/{id}', [shipmentsController::class, 'show']);
Route::put('/shipments/{id}', [shipmentsController::class, 'update']);
Route::delete('/shipments/{id}', [shipmentsController::class, 'destroy']);