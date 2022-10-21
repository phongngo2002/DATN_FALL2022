<?php

use App\Http\Controllers\Admin\MotelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PlanHistoryController;
use App\Http\Controllers\Admin\PlansController;

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
            Route::get('/tao-moi', 'App\Http\Controllers\Admin\AreaController@create')->name('backend_get_create_area');
            Route::post('/tao-moi', 'App\Http\Controllers\Admin\AreaController@store')->name('backend_get_post_create_area');
            Route::get('/{id}/cap-nhat', 'App\Http\Controllers\Admin\AreaController@edit')->name('backend_get_edit_area');
            Route::post('/{id}/cap-nhat', 'App\Http\Controllers\Admin\AreaController@update')->name('backend_get_post_edit_area');
            Route::get('/{id}/xoa', 'App\Http\Controllers\Admin\AreaController@delete')->name('backend_delete_area');

        });
        Route::prefix('user')->group(function () {
            Route::get('/', 'App\Http\Controllers\Admin\UserController@getAll')->name('backend_user_getAll');
            Route::get('/detail/{id}/{used_to}', 'App\Http\Controllers\Admin\UserController@getUser')->name('backend_user_detail');
            Route::match(['get', 'post'], '/add', 'App\Http\Controllers\Admin\UserController@add')->name('backend_user_add');
            Route::post('/update/{id}', 'App\Http\Controllers\Admin\UserController@update')->name('backend_user_update');
        });


        Route::prefix('dat-coc')->group(function () {
            Route::get('/', 'App\Http\Controllers\Admin\DepositController@index')->name('backend_get_list_deposit');
        });
        Route::prefix('lich-su-nap-tien')->group(function () {
            Route::get('/', 'App\Http\Controllers\Admin\RechargeController@index')->name('backend_get_list_recharge');
        });
        Route::prefix('goi-dich-vu')->group(function () {
            Route::get('/', [PlansController::class, 'index'])->name('backend_admin_get_list_plans');
            Route::get('/tao-moi', [PlansController::class, 'create'])->name('backend_admin_create_plans');
            Route::post('/tao-moi', [PlansController::class, 'store'])->name('backend_admin_post_create_plans');
            Route::get('/{id}/cap-nhat', [PlansController::class, 'edit'])->name('backend_admin_edit_plans');
            Route::post('/{id}/cap-nhat', [PlansController::class, 'update'])->name('backend_admin_update_plans');
            Route::get('/{id}/xoa', [PlansController::class, 'destroy'])->name('backend_admin_delete_plans');
        });

    });
});
Route::get('/phong-tro/{id}', [MotelController::class, "list"])->name("admin.motel.list");
Route::get('/phong-tro/{id}/create', [MotelController::class, "create"])->name("admin.motel.create");
Route::post('/phong-tro/{id}/create', [MotelController::class, "store"])->name("admin.motel.store");

Route::get('/phong-tro/{id}/{idMotel}', [MotelController::class, "detail"])->name("admin.motel.detail");
Route::get('/phong-tro/{id}/{idMotel}/chi-tiet', [MotelController::class, "info_motel"])->name("admin.motel.info");
Route::post('/phong-tro/{id}/{idMotel}/chi-tiet', [MotelController::class, "add_people"])->name("admin.motel.add_people");
Route::get('/phong-tro/{id}/{idMotel}/dang-tin', [MotelController::class, "create_post"])->name("admin.motel.post");
Route::post('/phong-tro/{id}/{idMotel}/dang-tin', [MotelController::class, "post_post"])->name("admin.motel.post_post");

Route::get('/lich-su-nap-tien', [PlanHistoryController::class, "list"])->name("admin.plan-history.list");


