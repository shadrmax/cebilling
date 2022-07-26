<?php

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

Auth::routes();
Route::get('/logout',[App\Http\Controllers\Auth\LoginController::class, 'logout']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/profile', [App\Http\Controllers\UserProfileController::class, 'index']);
/*Работа с аватарами*/
Route::get('/avatar', [App\Http\Controllers\AvatarController::class, 'index']);
/*Фрикасса роуты*/
Route::get('/pay', [App\Http\Controllers\FreeKassaController::class, 'index']);
Route::post('/pay/step2', [App\Http\Controllers\FreeKassaController::class, 'pay']);
/*Роуты заказов*/
Route::get('/user/orders', [App\Http\Controllers\UserOrderController::class, 'index']);
Route::get('/orders/new', [App\Http\Controllers\UserOrderController::class, 'new']);
