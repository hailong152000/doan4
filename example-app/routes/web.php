<?php

use App\Customer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\SiteController;
use App\Http\Controllers\productController;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\subController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\defaultController;
use App\Http\Controllers\CustomerController;

// use App\Http\Controllers\productController as ControllersProductController;

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

Route::prefix('home')->group(function(){
    Route::get('logina',[defaultController::class, 'logina'])->name('logina');

    Route::get('registera',[defaultController::class, 'registera'])->name('registera');

    Route::resource('product', SanphamController::class);
    
    Route::get('/',[defaultController::class, 'home'])->name('home');

    Route::get('/Addtocart',[cartController::class, 'Addtocart'])->name('Addtocart');

    // Route::resource('Id',IDController::class);

    Route::get('user/{id}',[CustomerController::class, 'user'])->name('user');

    Route::post('post_user/{id}',[CustomerController::class, 'update'])->name('post_user');

    Route::get('password/{id}',[CustomerController::class, 'password'])->name('password');

    Route::post('post_password/{id}',[CustomerController::class, 'postpass'])->name('post_password');

    Route::get('products',[SanPhamController::class, 'index'])->name('products');

    Route::get('GetdatabyID/{id}',[SanphamController::class, 'getdatabyID'])->name('getdatabyID');

    Route::get('GetdatabyID/Addtocart',[cartController::class, 'Addtocart'])->name('Addtocart');

    Route::get('service',[subController::class, 'service'])->name('service');

    Route::get('cart/{id}',[cartController::class, 'cart'])->name('cart');
    
    Route::get('Addcart/{id}',[cartController::class, 'Addcart'])->name('Addcart');

    Route::get('aboutUs',[defaultController::class, 'aboutUs'])->name('aboutUs');

    Route::get('random',[defaultController::class, 'random'])->name('random');

    Route::get('ran',[defaultController::class, 'ran'])->name('ran');

    Route::get('Contact',[defaultController::class, 'Contact'])->name('Contact');

    Route::get('GetdatabyLoaiSp/{id}',[SanphamController::class, 'getdatabyLoaisp'])->name('getdatabyLoaiSp');

    Route::get('relatetype/{id}',[defaultController::class, 'relatetype'])->name('relatetype');

    Route::get('relate/{id}',[defaultController::class, 'relate'])->name('relate');

    Route::get('relatencc/{id}',[defaultController::class, 'relatencc'])->name('relatencc');
    
    Route::get('GetdatabyNCC/{id}',[SanphamController::class, 'getdatabyNCC'])->name('getdatabyNCC');

    Route::get('GetdatabyLoaiSp/Addcart/{id}',[cartController::class, 'Addcart'])->name('Addcart');

    Route::get('GetdatabyNCC/Addcart/{id}',[cartController::class, 'Addcart'])->name('Addcart');

    Route::post('Addtocart/{id}',[cartController::class,'Addtocart'])->name('Addtocart');
 
    Route::post('updatecart/{id}',[cartController::class,'updatecart'])->name('updatecart');

    Route::get('deletecart/{id}',[cartController::class,'deletecart'])->name('deletecart');

    Route::post('updatequantitycart/{id}',[cartController::class,'updatequantitycart'])->name('updatequantitycart');

    Route::get('logincus',[defaultController::class, 'logincus'])->name('logincus');

    Route::get('registercus',[defaultController::class, 'registercus'])->name('registercus');

    Route::get('logoutcus',[defaultController::class, 'logoutcus'])->name('logoutcus');

    Route::post('post_registercus',[defaultController::class, 'post_registercus'])->name('post_registercus');//dùng để đưa dữ liệu người dùng nhập vào database
    
    Route::post('post_logincus',[defaultController::class, 'post_logincus'])->name('post_logincus');

    Route::get('checkout/{id}',[defaultController::class, 'checkout'])->name('checkout');
     
    Route::post('adddetail/{id}',[defaultController::class, 'adddetail'])->name('adddetail');

    Route::get('searchtype/{id}',[SanphamController::class, 'searchtype'])->name('searchtype');

    Route::get('searchncc/{NCC_id}',[SanphamController::class, 'searchncc'])->name('searchncc');

    Route::get('Cart1/{id}',[CustomerController::class, 'Cart1'])->name('Cart1');

    Route::get('Cart2/{id}',[CustomerController::class, 'Cart2'])->name('Cart2');

    Route::get('Cart3/{id}',[CustomerController::class, 'Cart3'])->name('Cart3');

    Route::get('Cartdetail/{id}',[CustomerController::class, 'Cartdetail'])->name('Cartdetail');
 
    Route::post('deletedetail/{id}',[CustomerController::class,'deletedetail'])->name('deletedetail');
    // Route::get('a',[defaultController::class,'product_type'])->name('product_type');

    // Route::Post('GetdatabyID/{id}',[SanphamController::class, 'getdatabyIDPost'])->name('getdatabyIDPost');
});
// Route::resource('product', SanphamController::class);


Route::prefix('admin')->group(function(){

    Route::resource('product', productController::class);

    Route::get('delete/{id}',[productController::class, 'delete'])->name('delete');

    Route::get('Getupdate/{id}',[productController::class, 'getUpdate'])->name('getUpdate');

    Route::post('update/{id}',[productController::class, 'update'])->name('update');
    
    Route::get('login',[SiteController::class, 'login'])->name('login');

    Route::get('register',[SiteController::class, 'register'])->name('register');

    Route::get('logout',[SiteController::class, 'logout'])->name('logout');

    Route::get('dashboard',[SiteController::class, 'index'])->name('dashboard')->middleware('auth');

    Route::post('post_register',[SiteController::class, 'post_register'])->name('post_register');//dùng để đưa dữ liệu người dùng nhập vào database

    Route::post('post_login',[SiteController::class, 'post_login'])->name('post_login');

    Route::get('product',[productController::class, 'index'])->name('product');

    Route::get('addproduct',[SiteController::class, 'addproduct'])->name('addproduct');

    Route::post('post_addproduct',[SiteController::class, 'post_addproduct'])->name('post_addproduct');

    Route::get('Customer',[CustomerController::class, 'index'])->name('Customer');

    Route::get('Cartoff5',[CartController::class, 'Cartoff1'])->name('Cartoff1');

    Route::get('Cartoff2',[CartController::class,'Cartoff2'])->name('Cartoff2');

    Route::get('Carton',[CartController::class, 'Carton'])->name('Carton');

    Route::get('CartGiao',[CartController::class, 'CartGiao'])->name('CartGiao');

    Route::post('updatecart1/{id}',[cartController::class,'updatecart1'])->name('updatecart1');

    Route::post('updatecart2/{id}',[cartController::class,'updatecart2'])->name('updatecart2');

    Route::post('updatecart3/{id}',[cartController::class,'updatecart3'])->name('updatecart3');

    Route::get('Getdetail/{id}',[cartController::class, 'getdetailbyID'])->name('getdetailbyID');

    Route::get('Getdetail1/{id}',[cartController::class, 'getdetail1byID'])->name('getdetail1byID');

    Route::get('Getdetail2/{id}',[cartController::class, 'getdetail2byID'])->name('getdetail2byID');

    Route::post('updatecartdetail/{id}',[cartController::class,'updatecartdetail'])->name('updatecartdetail');
});