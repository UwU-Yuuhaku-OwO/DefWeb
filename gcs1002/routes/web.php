<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userinforController;

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






//Log/reg
Route::get('/login',[CustomAuthController::class,'login'])->name('login_page');
Route::get('/register',[CustomAuthController::class,'register']);
Route::get('/logout',[CustomAuthController::class,'logout'])->name('logout');
Route::post('/register-user',[CustomAuthController::class,'registeruser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class,'login_user'])->name('login-user');
Route::post('/login-admin',[CustomAuthController::class,'login_admin'])->name('login-admin');




Route::middleware('login.check', 'role.check')->group(function () {
    route::get('product-list', [ProductsController::class, 'index2']);

    route::get('Shopping', [ProductsController::class, 'shopping']);

    route::get('product-add', [ProductsController::class, 'AddPage']);
    route::post('product-save', [ProductsController::class, 'save']);
//product list
    route::get('product-edit/{id}', [ProductsController::class, 'edit']);
    route::post('product-update', [ProductsController::class, 'update']);
    route::get('product-delete/{id}', [ProductsController::class, 'delete']);
    route::get('dashboard', [DashboardController::class, 'index']);
    route::get('admin', [DashboardController::class, 'index2']);

    route::get('dashboard/delete/{id}', [DashboardController::class, 'delete'])->name('delete_product');
    route::get('EditPage/{id}', [ProductsController::class, 'edit2'])->name('update_product');
    route::get('AddPage', [ProductsController::class, 'AddPage']);
//category list
    route::post('cat-save', [CategoryController::class, 'CatSave']);
    route::post('cat-edit', [CategoryController::class, 'CatEdit']);
    route::get('CatAddPage', [CategoryController::class, 'CatAddPage']);
    route::get('CatEditPage/{id}', [CategoryController::class, 'CatEditPage'])->name('update_cat');
    route::get('admin/cat', [AdminCategoryController::class, 'index']);
    route::get('admin/cat/delete/{id}', [AdminCategoryController::class, 'delete'])->name('delete_cat');
//admin list
    route::post('ad-save', [AdminUserController::class, 'AdminSave']);
    route::post('ad-edit', [AdminUserController::class, 'AdminEdit']);
    route::get('AdAddPage', [AdminUserController::class, 'AdminAddPage']);
    route::get('AdEditPage/{id}', [AdminUserController::class, 'AdminEditPage'])->name('update_admin');
    route::get('Admindelete/{id}',[AdminUserController::class, 'Admindelete'])->name('delete_admin');
    route::get('admin/admin',[UserinforController::class, 'index']);

//user list
    route::post('user-edit', [AdminUserController::class, 'UserEdit']);
    route::get('UserEditPage/{id}', [AdminUserController::class, 'UserEditPage'])->name('update_user');
    route::get('admin/user/delete/{id}', [AdminUserController::class, 'delete'])->name('delete_user');
    route::get('admin/user', [AdminUserController::class, 'index']);








});



route::get('HomePage', [ProductsController::class, 'HomePage']);
route::get('ShoppingPage', [ProductsController::class, 'ShoppingPage']);
route::get('LoginPage', [ProductsController::class, 'LoginPage']);
route::get('RegisterPage', [ProductsController::class, 'RegisterPage']);
route::get('AdLogPage',[ProductsController::class,'AdLogPage']);


// testing
Route::get('UserPage/{id}',[CustomAuthController::class,'user_page'])->name('user_page');
// Route::get('userpage',[CustomAuthController::class,'userpage']);

