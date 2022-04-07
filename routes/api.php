<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\UsersController;
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
Route::post('/register',[UsersController::class,'register'])->name('register');
Route::post('/login',[UsersController::class,'login'])->name('login');

//Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/products', [ProductsController::class, 'store'])->name('product.store'); //post new product
    Route::put('/products/{id}', [ProductsController::class, 'update'])->name('product.update'); //update a specific product by id
    Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('product.destroy'); //Delete a specific product by id
    Route::post('/logout',[UsersController::class,'logout'])->name('logout');
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