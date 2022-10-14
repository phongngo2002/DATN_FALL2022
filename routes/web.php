<?php

use App\Http\Controllers\Admin\PlansController;
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


Route::get('/', 'App\Http\Controllers\Admin\DashboardController@index');


//  route crud quản lý các gói dịc vụ 
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/plans', [PlansController::class, 'index'])->name('plans.index');

    Route::get('/plans/create', [PlansController::class, 'create'])->name('plans.create');
    Route::post('/plans/store', [PlansController::class, 'store'])->name('plans.store');

    Route::get('/plans/update/{plan}/edit', [PlansController::class, 'edit'])->name('plans.edit');
    Route::put('/plans/update/{plan}', [PlansController::class, 'update'])->name('plans.update');

    Route::post('/plans/destroy/{plan}', [PlansController::class, 'destroy'])->name('plans.destroy');
});
// end quản lý các gói dịch vụ

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
        });
        Route::prefix('dat-coc')->group(function () {
            Route::get('/', 'App\Http\Controllers\Admin\DepositController@index')->name('backend_get_list_deposit');
        });
    });
});