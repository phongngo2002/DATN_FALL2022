<?php

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

Route::post('/get-google-sign-in-url', [\App\Http\Controllers\GoogleController::class, 'getGoogleSignInUrl'])->name('login_with_gg');
Route::get('/callback', [\App\Http\Controllers\GoogleController::class, 'loginCallback']);
Route::post('/quan-ly-tai-khoan-upload-anh', [\App\Http\Controllers\Admin\UserController::class, 'uploadImg'])->name('upload_img');
Route::post('/search', [\App\Http\Controllers\Client\HomeController::class, 'search'])->name('search');
Route::post('/tim-kiem-phong-tro', [\App\Http\Controllers\Client\HomeController::class, 'filter_motel_by_area'])->name('filter_motel_by_area');

Route::post('/lay-ma-rut-tien', 'App\Http\Controllers\WithdrawController@getCode')->name('backend_get_code_withdraw');
Route::post('/ket-toan-phan-thuong', 'App\Http\Controllers\Admin\TicketController@post_wheel_luck')->name('post_wheel_luck');
Route::get('/lay-lich-quay-thuong', 'App\Http\Controllers\Admin\TicketController@get_history_wheel_luck')->name('get_history_whell_luck');

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
