<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});
// trang chủ
Route::get('index',[PageController::class,'index']); 
// chi tiết sản phẩm
Route::get('product',[PageController::class,'product']);
//sản phẩm
Route::get('product_type',[PageController::class,'product_type']);
//đăng ký của khách hàng
Route::get('dangky',[PageController::class,'getSignin'])->name('getsignin');
Route::post('dangky',[PageController::class,'postSignin'])->name('postsignin');
// Đặt hàng
Route::get('checkout',[PageController::class,'Checkout'])->name('banhang.getdathang');
Route::post('checkout',[PageController::class,'postCheckout'])->name('banhang.postdathang');
// giỏ hàng
Route::get('shopping_cart',[PageController::class,'shopping_cart']); 
// thêm sản phẩm vào giỏ hàng
Route::get('add-to-cart/{id}',[PageController::class,'addToCart'])->name('banhang.addToCart');
// xóa sản phẩm trong giỏ hàng
Route::get('del-cart/{id}',[PageController::class,'delCartItem'])->name('banhang.xoagiohang');
/*------ phần quản trị ----------*/
Route::get('admin/dangnhap',[UserController::class,'getLogin'])->name('admin.getLogin');
Route::post('admin/dangnhap',[UserController::class,'postLogin'])->name('admin.postLogin');
Route::get('admin/dangxuat',[UserController::class,'getLogout']);


Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
    Route::group(['prefix'=>'category'],function(){
        // admin/category/danhsach
        Route::get('danhsach',[CategoryController::class,'getCateList'])->name('admin.getCateList');
        // admin/category/them
        Route::get('them',[CategoryController::class,'getCateAdd'])->name('admin.getCateAdd');
        Route::post('them',[CategoryController::class,'postCateAdd'])->name('admin.postCateAdd');
        Route::get('xoa/{id}',[CategoryController::class,'getCateDelete'])->name('admin.getCateDelete');
        Route::get('sua/{id}',[CategoryController::class,'getCateEdit'])->name('admin.getCateEdit');
        Route::post('sua/{id}',[CategoryController::class,'postCateEdit'])->name('admin.postCateEdit');
    });
    //còn nữa các route về crud product,user,bill
});
    //////
    
