<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\UserController;

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

//Log/reg
Route::get('/login',[CustomAuthController::class,'login'])->name('login_page');
Route::get('/register',[CustomAuthController::class,'register']);
Route::get('/logout',[CustomAuthController::class,'logout'])->name('logout');
Route::post('/register-user',[CustomAuthController::class,'registeruser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class,'login_user'])->name('login-user');

Route::middleware('login.check', 'role.check')->group(function () {
    route::get('product-list', [ProductsController::class, 'index2']);

    route::get('Shopping', [ProductsController::class, 'shopping']);

    route::get('product-add', [ProductsController::class, 'add2']);
    route::post('product-save', [ProductsController::class, 'save']);

    route::post('cat-save', [ProductsController::class, 'CatSave']);
    route::get('cat-edit/{id}', [ProductsController::class, 'CatEdit']);


    route::get('product-edit/{id}', [ProductsController::class, 'edit']);
    route::post('product-update', [ProductsController::class, 'update']);
    route::get('product-delete/{id}', [ProductsController::class, 'delete']);

    route::get('dashboard', [DashboardController::class, 'index']);
    route::get('dashboard/delete/{id}', [DashboardController::class, 'delete'])->name('delete_product');
    route::get('admin/user', [AdminUserController::class, 'index']);
    route::get('admin/user/delete/{id}', [AdminUserController::class, 'delete'])->name('delete_user');
    route::get('admin/cat', [AdminCategoryController::class, 'index']);
    route::get('admin/cat/delete/{id}', [AdminCategoryController::class, 'delete'])->name('delete_cat');
});



route::get('HomePage', [ProductsController::class, 'HomePage']);
route::get('ShoppingPage', [ProductsController::class, 'ShoppingPage']);
route::get('LoginPage', [ProductsController::class, 'LoginPage']);
route::get('RegisterPage', [ProductsController::class, 'RegisterPage']);
route::get('AddPage', [ProductsController::class, 'AddPage']);
route::get('EditPage/{id}', [ProductsController::class, 'edit2'])->name('update_product');
route::get('UserPage',[userinforController::class,'UserPage']);
route::get('CatAddPage', [ProductsController::class, 'CatAddPage']);
