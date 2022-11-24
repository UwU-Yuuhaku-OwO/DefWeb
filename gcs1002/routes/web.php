<?php

use App\Http\Controllers\ProductsController;
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

route::get('product-list', [ProductsController::class, 'index2']);

route::get('Shopping', [ProductsController::class, 'shopping']);
route::get('HomePage', [ProductsController::class, 'HomePage']);
route::get('ShoppingPage', [ProductsController::class, 'ShoppingPage']);
route::get('product-add', [ProductsController::class, 'add2']);
route::post('product-save', [ProductsController::class, 'save']);

route::get('product-edit/{id}', [ProductsController::class, 'edit']);
route::post('product-update', [ProductsController::class, 'update']);
route::get('product-delete/{id}', [ProductsController::class, 'delete']);
