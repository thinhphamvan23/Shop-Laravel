<?php

use App\Http\Controllers\Admin\adminCartController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Login\LoginController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\User\CartController;

use App\Http\Controllers\User\MainController;
use App\Http\Controllers\User\UserLoginController;
use App\Http\Middleware\CheckMiddleware;
use App\Http\Middleware\LoginMiddleware;
use App\Models\BannerModel;
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
//Admin   
 Route::get('login',[LoginController::class,'index'])->name('login')->middleware(CheckMiddleware::class) ;
 Route::get('admin/user/logout',[LoginController::class,'logout'])->name('logout');
 Route::post('admin/user/login/store',[LoginController::class,'store'])->name('login_store');
 Route::get('user/register',[LoginController::class,'register'])->name('user_register');
 Route::post('user/register/create',[LoginController::class,'create'])->name('user_create');
 
 
 
 Route::get('admin/home',[AdminController::class,'index'])->name('admin')->middleware(LoginMiddleware::class);


 // Danh mục
 Route::get('admin/category/add',[CategoryController::class,'create'])->name('category');
 Route::post('admin/category/store',[CategoryController::class,'store'])->name('category_add');
 Route::get('admin/category/list',[CategoryController::class,'display'])->name('category_list');
 Route::get('admin/category/edit/{id}',[CategoryController::class,'show'])->name('category_show');
 Route::post('admin/category/update/{id}',[CategoryController::class,'update'])->name('category_edit');
 Route::get('admin/category/delete/{id}',[CategoryController::class,'destroy'])->name('category_delete');

//Sản phẩm

Route::get('admin/product/add',[ProductController::class,'create'])->name('product');
Route::post('admin/product/add/store',[ProductController::class,'store'])->name('product_add');
Route::get('admin/product/list',[ProductController::class,'display'])->name('product_list');
Route::get('admin/product/edit/{id}',[ProductController::class,'edit'])->name('product_edit');
Route::post('admin/product/update/{id}',[ProductController::class,'update'])->name('product_update');
Route::get('admin/product/delete/{id}',[ProductController::class,'destroy'])->name('product_delete');

//Banner

Route::get('admin/banner/add',[BannerController::class,'create'])->name('banner');
Route::post('admin/banner/add/store',[BannerController::class,'store'])->name('banner_add');
Route::get('admin/banner/list',[BannerController::class,'display'])->name('banner_list');
Route::get('admin/banner/edit/{id}',[BannerController::class,'show'])->name('banner_show');
Route::post('admin/banner/update/{id}',[BannerController::class,'update'])->name('banner_update');
Route::get('admin/banner/delete/{id}',[BannerController::class,'destroy'])->name('banner_delete');



/// User view

Route::get('/',[MainController::class,'index'])->name('main');
Route::get('product/detail/{id}',[MainController::class,'detail'])->name('product_detail');


//User Cart

Route::get('product/cart',[CartController::class,'cart'])->name('cart');
Route::post('cart/add',[CartController::class,'add'])->name('cart_add');
Route::post('cart/update',[CartController::class,'update'])->name('update_cart');
Route::get('cart/delete/{id}',[CartController::class,'remove'])->name('cart_delete');
Route::post('cart/create/',[CartController::class,'create'])->name('cart_create');

// Admin Cart

Route::get('admin/cart/display',[adminCartController::class,'display'])->name('cart_display');
Route::get('admin/cart/delete/{id}',[adminCartController::class,'destroy'])->name('admin_cart_delete');
Route::get('admin/cart/show/{id}',[adminCartController::class,'show'])->name('admin_cart_show');
Route::post('admin/cart/update/{id}',[adminCartController::class,'update'])->name('admin_cart_update');

//product theo danh mục

Route::get('product/{id}',[MainController::class,'show_product'])->name('product_view');


