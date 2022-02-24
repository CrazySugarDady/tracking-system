<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LobbyController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [UserController::class,'loginIndex']);//使用者登入介面
Route::post('/', [UserController::class,'login']); //登入使用者

Route::get('/register', [UserController::class,'registerIndex'])->name('register');//使用者註冊介面
Route::post('/register',[UserController::class,'register']);//註冊使用者

Route::get('/lobby/{name}', [LobbyController::class, 'lobbyIndex'])->name('lobby'); //使用者大廳介面
Route::get('/lobby/{name}', [LobbyController::class, 'lobbyIndex'])->name('adminlobby'); //管理員大廳介面

Route::get('/logout', [UserController::class,'logout'])->name('logout'); //登出使用者

Route::get('/edit-password', [UserController::class,'editPasswordIndex'])->name('edit-password'); //修改密碼介面
Route::post('/edit-password', [UserController::class,'editPassword']); //修改密碼

Route::get('/add-order', [OrderController::class,'addOrderIndex'])->name('add-order'); //新增訂單介面
Route::post('/add-order', [OrderController::class,'addOrder']); //新增訂單

Route::get('/search-order', [OrderController::class,'searchOrderIndex'])->name('search-order'); //查詢訂單介面
Route::post('/search-order', [OrderController::class,'searchOrder']); //查詢訂單

Route::get('/edit-order/{order_number}', [OrderController::class,'editOrderIndex'])->name('edit-order'); //修改訂單介面
Route::post('/edit-order/{order_number}',[OrderController::class,'editOrder']);//修改訂單

Route::get('/edit-user', [UserController::class,'editUserIndex'])->name('edit-user'); //管理使用者介面
Route::post('/edit-user', [UserController::class,'editUser']); //管理使用者

Route::get('/show-order/{order_number}', [OrderController::class,'showOrderIndex'])->name('show-order'); //詳細訂單介面
Route::post('/show-order', [OrderController::class,'showOrder']); //詳細訂單

Route::get('/del-order/{order_number}', [OrderController::class,'delOrderIndex'])->name('del-order'); //刪除訂單介面
Route::post('/del-order/{order_number}', [OrderController::class,'delOrder']); //刪除訂單

Route::get('/del-user/{user_id}', [UserController::class,'delUserIndex'])->name('del-user'); //刪除訂單介面
Route::post('/del-user/{user_id}', [UserController::class,'delUser']); //刪除訂單
