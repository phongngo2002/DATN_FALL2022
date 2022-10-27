<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\MotelController;
use App\Http\Controllers\Admin\PlansController;
use App\Http\Controllers\Admin\PlanHistoryController;
use App\Http\Controllers\Auth\registerController;
use App\Http\Controllers\Client\PlanController as clientPlanController;

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


Route::get('/', 'App\Http\Controllers\Client\HomeController@index')->name('home');

Route::get('/dang-nhap', 'App\Http\Controllers\Auth\LoginController@getLogin')->name('get_login');
Route::post('/dang-nhap', 'App\Http\Controllers\Auth\LoginController@postLogin')->name('post_login');
Route::get('/dang-xuat', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/quen-mat-khau', 'App\Http\Controllers\Auth\LoginController@getFormForgotPassword')->name('get_form_forgot_password');
Route::post('/quen-mat-khau', 'App\Http\Controllers\Auth\LoginController@getCodeForgotPassword')->name('get_code_forgot_password');
Route::get('/xac-minh', 'App\Http\Controllers\Auth\LoginController@getFormConfirmAcc')->name('get_form_confirm_account');
Route::post('/xac-minh', 'App\Http\Controllers\Auth\LoginController@postCodeConfirmAcc')->name('get_post_code_confirm_account');
Route::get('/lay-lai-mat-khau', 'App\Http\Controllers\Auth\LoginController@passwordRetrieval')->name('password_retrieval');
Route::post('/lay-lai-mat-khau', 'App\Http\Controllers\Auth\LoginController@changePassword')->name('change_password');


//client các gói dịch vụ,đăng ký
Route::get('/goi-dich-vu', [clientPlanController::class, 'index_plan'])->name('frontend_get_plans');
Route::get('/dang-ky', [registerController::class, 'index_register'])->name('get_register');

// end client các gói dịch vụ,đăng ký


Route::middleware(['auth'])->group(function () {
    Route::get('/quan-ly-tai-khoan/nap-tien', 'App\Http\Controllers\Client\AccountManagementController@getRecharge')->name('getRecharge');
    Route::prefix('admin')->group(function () {
        // Màn thống kê
        // Chủ trọ và admin
        Route::get('dashboard', 'App\Http\Controllers\Admin\DashboardController@index')->name('backend_get_dashboard');
        Route::get('thong-tin-tai-khoan', 'App\Http\Controllers\Admin\DashboardController@profile')->name('backend_get_profile');
        // Lịch sửa mua gói dịch vụ
        Route::get('/lich-su-mua-goi', [PlanHistoryController::class, "index_plan_history"])->name("admin.plan-history.list");
        // Lịch sử đặt cọc
        Route::prefix('dat-coc')->group(function () {
            Route::get('/', 'App\Http\Controllers\Admin\DepositController@index_deposits')->name('backend_get_list_deposit');
        });
        // Lịch sử nạp tiền
        Route::prefix('lich-su-nap-tien')->group(function () {
            Route::get('/', 'App\Http\Controllers\Admin\RechargeController@index_recharges')->name('backend_get_list_recharge');
        });
        Route::prefix('nap-tien')->group(function () {
            Route::get('/', 'App\Http\Controllers\Admin\RechargeController@get_form_recharge')->name('backend_get_form_recharge');
        });
        // Chỉ chủ trọ
        Route::prefix('khu-tro')->group(function () {
            Route::get('/', 'App\Http\Controllers\Admin\AreaController@index_areas')->name('backend_get_list_area');
            Route::get('/tao-moi', 'App\Http\Controllers\Admin\AreaController@add_areas')->name('backend_get_create_area');
            Route::post('/tao-moi', 'App\Http\Controllers\Admin\AreaController@saveAdd_areas')->name('backend_get_post_create_area');
            Route::get('/{id}/cap-nhat', 'App\Http\Controllers\Admin\AreaController@update_areas')->name('backend_get_edit_area');
            Route::post('/{id}/cap-nhat', 'App\Http\Controllers\Admin\AreaController@saveUpdate_areas')->name('backend_get_post_edit_area');
            Route::get('/{id}/xoa', 'App\Http\Controllers\Admin\AreaController@delete_areas')->name('backend_delete_area');
        });

        // Quản lý phòng trọ
        Route::prefix('phong-tro')->group(function () {
            Route::post('{motelId}/xuat-hoa-don', [MotelController::class, "print"])->name("admin.print.motel");

            Route::get('{id}/{idMotel}/lich-su-thue', [MotelController::class, "history_motel"])->name("admin.motel.history");
            Route::get('{id}', [MotelController::class, "index_motels"])->name("admin.motel.list");
            Route::get('{id}/create', [MotelController::class, "add_motels"])->name("admin.motel.create");
            Route::post('{id}/create', [MotelController::class, "saveAdd_motels"])->name("admin.motel.store");
            Route::get('{id}/{idMotel}', [MotelController::class, "detail"])->name("admin.motel.detail");

            Route::get('{id}/{idMotel}/chi-tiet', [MotelController::class, "info_user_motels"])->name("admin.motel.info");
            Route::post('{id}/{idMotel}/chi-tiet', [MotelController::class, "add_peolpe_of_motels"])->name("admin.motel.add_people");
            Route::get('{id}/{idMotel}/dang-tin', [MotelController::class, "create_post_motels"])->name("admin.motel.post");
            Route::post('{id}/{idMotel}/dang-tin', [MotelController::class, "save_create_post_motels"])->name("admin.motel.post_post");
            Route::get('{id}/{idMotel}/dang-ky-o-ghep', [MotelController::class, "contact_motel"])->name("admin.motel.contact");
        });

        // Chỉ có admin
        // Quản lý gói dịch vụ
        Route::prefix('goi-dich-vu')->group(function () {
            Route::get('/', [PlansController::class, 'index_plans'])->name('backend_admin_get_list_plans');
            Route::get('/tao-moi', [PlansController::class, 'add_plans'])->name('backend_admin_create_plans');
            Route::post('/tao-moi', [PlansController::class, 'saveAdd_plans'])->name('backend_admin_post_create_plans');
            Route::get('/{id}/cap-nhat', [PlansController::class, 'update_plans'])->name('backend_admin_edit_plans');
            Route::post('/{id}/cap-nhat', [PlansController::class, 'saveUpdate_plans'])->name('backend_admin_update_plans');
            Route::get('/{id}/xoa', [PlansController::class, 'delete_plans'])->name('backend_admin_delete_plans');
        });

        // Quản lý quyền
        Route::prefix('quyen')->group(function () {
            Route::get('/', [RoleController::class, 'index_roles'])->name('list_role');
            Route::get('/tao-moi', [RoleController::class, 'add_roles'])->name('create_role');
            Route::post('/tao-moi', [RoleController::class, 'saveAdd_roles'])->name('saveAdd_role');
            Route::get('/cap-nhat/{id}', [RoleController::class, 'update_roles'])->name('edit_role');
            Route::post('/cap-nhat', [RoleController::class, 'saveUpdate_roles'])->name('saveEdit_role');
            Route::get('/xoa/{id}', [RoleController::class, 'delete_roles'])->name('del_role');
        });

        Route::prefix('tai-khoan')->group(function () {
            Route::get('/', 'App\Http\Controllers\Admin\UserController@index_users')->name('backend_user_getAll');
            Route::get('/chi-tiet/{id}/{used_to}', 'App\Http\Controllers\Admin\UserController@update_users')->name('backend_user_detail');
            Route::match(['get', 'post'], '/add', 'App\Http\Controllers\Admin\UserController@add')->name('backend_user_add');
            Route::post('/update/{id}', 'App\Http\Controllers\Admin\UserController@saveUpdate_users')->name('backend_user_update');
        });
        Route::get('pay', 'App\Http\Controllers\PayPalPaymentController@pay')->name('make.payment');
        Route::get('error', 'App\Http\Controllers\PayPalPaymentController@error')->name('cancel.payment');
        Route::get('success/{id}', 'App\Http\Controllers\PayPalPaymentController@success')->name('success.payment');
    });
});

Route::get('/403', function () {
    return view('error.403');
})->name('403');
