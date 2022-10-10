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

    // Route::get('/data', [PlansController::class, 'data'])->name('plans.data');
    Route::resource('plans', PlansController::class);
});
// end quản lý các gói dịch vụ