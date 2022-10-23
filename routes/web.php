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
Route::get('/phong-tro/{id}/del/{idMotel}', [MotelController::class, "delete_motel"])->name("admin.motel.delete");
Route::get('/lich-su-nap-tien', [PlanHistoryController::class, "list"])->name("admin.plan-history.list");
Route::post('phongtro/{id}/update',[MotelController::class,'saveUpdate'])->name('saveUpdate_motel');


Route::get('/create','App\Http\Controllers\Admin\RoleController@add_roles')->name('create_role');
Route::prefix('admin')->group(function(){
  Route::prefix('role')->group(function(){
       Route::get('/list',[RoleController::class, 'index_roles'])->name('list_role');
       Route::get('/create',[RoleController::class, 'add_roles'])->name('create_role');
       Route::post('/create',[RoleController::class, 'saveAdd_roles'])->name('saveAdd_role');
       Route::get('/update/{id}',[RoleController::class, 'update_roles'])->name('edit_role');
       Route::post('/update',[RoleController::class, 'saveUpdate_roles'])->name('saveEdit_role');
       Route::get('/delete/{id}',[RoleController::class, 'delete_roles'])->name('del_role');
  });
  
});