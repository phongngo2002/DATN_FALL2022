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


Route::prefix('admin')->group(function () {
    Route::get('dashboard', 'App\Http\Controllers\Admin\DashboardController@index')->name('backend_get_dashboard');
    Route::prefix('khu-tro')->group(function () {
        Route::get('/', 'App\Http\Controllers\Admin\AreaController@index')->name('backend_get_list_area');
    });
    Route::prefix('dat-coc')->group(function () {
        Route::get('/', 'App\Http\Controllers\Admin\DepositController@index')->name('backend_get_list_deposit');
    });
});


