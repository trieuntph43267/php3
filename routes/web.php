<?php

use App\Http\Controllers\ProductController;
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
//Method http
// +GET,POST,PUT,,PATCH,DELETE

// Base url
// 

Route::get('/test', function(){
    echo'hello';
});

Route::get('/',function(){
    echo'Trang chủ';
});

Route::get('list-product', [ProductController::class, 'showProduct']);

//Slug
//http://127.0.0.1:8000/list-product/1

Route::get('get-product/{id}', [ProductController::class, 'getProduct']);

//Params
//http://127.0.0.1:8000/list-product?id=1
Route::get('update-product', [ProductController::class, 'updateProduct']);

Route::get('list-sinhvien', [ProductController::class, 'listSinhvien']);





