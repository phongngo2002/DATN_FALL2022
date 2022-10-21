<?php

use App\Http\Controllers\Admin\MotelController;
use App\Http\Controllers\Admin\PlanHistoryController;
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

Route::get('/phong-tro/{id}', [MotelController::class, "list"])->name("admin.motel.list");
Route::get('/phong-tro/{id}/{idMotel}', [MotelController::class, "detail"])->name("admin.motel.detail");

Route::get('/lich-su-nap-tien', [PlanHistoryController::class, "list"])->name("admin.plan-history.list");
