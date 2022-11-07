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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
