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
    Route::post('/plans/update/{plan}', [PlansController::class, 'update'])->name('plans.update');

    Route::post('/plans/destroy/{plan}', [PlansController::class, 'destroy'])->name('plans.destroy');
});
// end quản lý các gói dịch vụ