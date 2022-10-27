<?php

use App\Http\Controllers\Admin\MotelController;
use App\Http\Controllers\Admin\PlanHistoryController;
use App\Http\Controllers\Admin\RoleController;
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
Route::get('/phong-tro/{id}/edit/{idMotel}', [MotelController::class, "edit_motels"])->name("admin.motel.edit");
Route::get('/phong-tro/{id}/add',[MotelController::class,"add_motels"])->name("admin.motel.add");
Route::post('/phong-tro/{id}/create', [MotelController::class, "saveAdd_motels"])->name("admin.motel.create");
Route::get('/phong-tro/{id}', [MotelController::class, "index_motels"])->name("admin.motel.list");
Route::get('/phong-tro/{id}/detail/{idMotel}', [MotelController::class, "detail_motels"])->name("admin.motel.detail");
Route::get('/phong-tro/{id}/del/{idMotel}', [MotelController::class, "delete_motels"])->name("admin.motel.delete");
Route::get('/lich-su-nap-tien', [PlanHistoryController::class, "list"])->name("admin.plan-history.list");
Route::post('phong-tro/{id}/update',[MotelController::class,'saveUpdate_motels'])->name('saveUpdate_motel');


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