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

Route::get('/dang-nhap', 'App\Http\Controllers\Auth\LoginController@getLogin')->name('get_login');
Route::post('/dang-nhap', 'App\Http\Controllers\Auth\LoginController@postLogin')->name('post_login');
Route::get('/dang-xuat', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/quen-mat-khau', 'App\Http\Controllers\Auth\LoginController@getFormForgotPassword')->name('get_form_forgot_password');
Route::post('/quen-mat-khau', 'App\Http\Controllers\Auth\LoginController@getCodeForgotPassword')->name('get_code_forgot_password');
Route::get('/xac-minh', 'App\Http\Controllers\Auth\LoginController@getFormConfirmAcc')->name('get_form_confirm_account');
Route::post('/xac-minh', 'App\Http\Controllers\Auth\LoginController@postCodeConfirmAcc')->name('get_post_code_confirm_account');
Route::get('/lay-lai-mat-khau', 'App\Http\Controllers\Auth\LoginController@passwordRetrieval')->name('password_retrieval');
Route::post('/lay-lai-mat-khau', 'App\Http\Controllers\Auth\LoginController@changePassword')->name('change_password');
Route::get('/', function () {
    return view('test', []);
});
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('dashboard', 'App\Http\Controllers\Admin\DashboardController@index')->name('backend_get_dashboard');
        Route::prefix('khu-tro')->group(function () {
            Route::get('/', 'App\Http\Controllers\Admin\AreaController@index')->name('backend_get_list_area');
            Route::get('/tao-moi', 'App\Http\Controllers\Admin\AreaController@create')->name('backend_get_create_area');
            Route::post('/tao-moi', 'App\Http\Controllers\Admin\AreaController@store')->name('backend_get_post_create_area');
            Route::get('/{id}/cap-nhat', 'App\Http\Controllers\Admin\AreaController@edit')->name('backend_get_edit_area');
            Route::post('/{id}/cap-nhat', 'App\Http\Controllers\Admin\AreaController@update')->name('backend_get_post_edit_area');
            Route::get('/{id}/xoa', 'App\Http\Controllers\Admin\AreaController@delete')->name('backend_delete_area');

        });
        Route::prefix('dat-coc')->group(function () {
            Route::get('/', 'App\Http\Controllers\Admin\DepositController@index')->name('backend_get_list_deposit');
        });
        Route::prefix('lich-su-nap-tien')->group(function () {
            Route::get('/', 'App\Http\Controllers\Admin\RechargeController@index')->name('backend_get_list_recharge');
        });
    });
});


