<?php

use App\Http\Controllers\Admin\PlanHistoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PlansController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Client\LiveTogetherController;
use App\Http\Controllers\Client\MotelController as ClientMotelController;
use App\Http\Controllers\Auth\registerController;

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
Route::get('/', [\App\Http\Controllers\Client\HomeController::class, 'index'])->name('home');
Route::get('/phong-tro', [\App\Http\Controllers\Client\HomeController::class, 'motels'])->name('motels');
Route::get('/test', function () {
    return view('test');
});


Route::get('/dang-nhap', 'App\Http\Controllers\Auth\LoginController@getLogin')->name('get_login');
Route::post('/dang-nhap', 'App\Http\Controllers\Auth\LoginController@postLogin')->name('post_login');
Route::get('/dang-xuat', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/quen-mat-khau', 'App\Http\Controllers\Auth\LoginController@getFormForgotPassword')->name('get_form_forgot_password');
Route::post('/quen-mat-khau', 'App\Http\Controllers\Auth\LoginController@getCodeForgotPassword')->name('get_code_forgot_password');
Route::get('/xac-minh', 'App\Http\Controllers\Auth\LoginController@getFormConfirmAcc')->name('get_form_confirm_account');
Route::post('/xac-minh', 'App\Http\Controllers\Auth\LoginController@postCodeConfirmAcc')->name('get_post_code_confirm_account');
Route::get('/lay-lai-mat-khau', 'App\Http\Controllers\Auth\LoginController@passwordRetrieval')->name('password_retrieval');
Route::post('/lay-lai-mat-khau', 'App\Http\Controllers\Auth\LoginController@changePassword')->name('change_password');

//Chi tiết phòng trọ
Route::get('/phong-tro/{id}', [ClientMotelController::class, 'detail'])->name('client.motel.detail');
Route::get('/lich-su-nap-tien', [PlanHistoryController::class, "list"])->name("admin.plan-history.list");

Route::get('/test', [ClientMotelController::class, 'test'])->name('client.motel.detail');

//Liên hệ
Route::get('/lien-he/{id}', [ClientMotelController::class, 'sendContact'])->name('client.contact.send');

//client các gói dịch vụ,đăng ký
Route::get('/goi-dich-vu', [\App\Http\Controllers\Client\PlanController::class, 'index_plan'])->name('frontend_get_plans');

Route::get('/dang-ky', [registerController::class, 'index_register'])->name('get_register');
Route::post('/dang-ky', [registerController::class, 'register_user'])->name('post_register');

Route::post('/xac-minh-email', [registerController::class, 'change_email'])->name('confirm_account_register');
Route::get('/xac-minh-email/{code}', [registerController::class, 'get_change_email'])->name('get_confirm_account_register');

// end client các gói dịch vụ,đăng ký


//Chi tiết tìm nguwoif ở ghép
Route::get('/tim-nguoi-o-ghep/{id}', [LiveTogetherController::class, 'detail'])->name('client.live-together.detail');

Route::middleware(['auth'])->group(function () {
    Route::get('/quan-ly-tai-khoan/nap-tien', 'App\Http\Controllers\Client\AccountManagementController@getRecharge')->name('getRecharge');
    Route::get('/quan-ly-tai-khoan/lich-su-nap-tien', 'App\Http\Controllers\Client\AccountManagementController@historyRecharge')->name('get_history_recharge');
    Route::get('/quan-ly-tai-khoan/roi-phong,{motelId}', 'App\Http\Controllers\Client\AccountManagementController@outMotel')->name('client_out_motel');

    Route::get('/quan-ly-tai-khoan/lich-su-mua-goi', 'App\Http\Controllers\Client\AccountManagementController@historyBuyPlan')->name('get_history_buy_plan');
    Route::get('/dashboard', 'App\Http\Controllers\Admin\DashboardController@index')->name('admin_home');
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
            Route::post('nhap-danh-sach', [\App\Http\Controllers\Admin\MotelController::class, "import"])->name("admin.motel.import");

            Route::post('{motelId}/xuat-hoa-don', [\App\Http\Controllers\Admin\MotelController::class, "print"])->name("admin.print.motel");

            Route::get('{id}/{idMotel}/lich-su-thue', [\App\Http\Controllers\Admin\MotelController::class, "history_motel"])->name("admin.motel.history");
            Route::get('{id}', [\App\Http\Controllers\Admin\MotelController::class, "index_motels"])->name("admin.motel.list");
            Route::get('{id}/create', [\App\Http\Controllers\Admin\MotelController::class, "add_motels"])->name("admin.motel.create");
            Route::post('{id}/create', [\App\Http\Controllers\Admin\MotelController::class, "saveAdd_motels"])->name("admin.motel.store");
            Route::get('{id}/{idMotel}', [\App\Http\Controllers\Admin\MotelController::class, "detail"])->name("admin.motel.detail");


            Route::get('/phong-tro/{id}/edit/{idMotel}', [\App\Http\Controllers\Admin\MotelController::class, "edit_motels"])->name("admin.motel.edit");
            Route::get('/phong-tro/{id}/detail/{idMotel}', [\App\Http\Controllers\Admin\MotelController::class, "detail_motels"])->name("admin.motel.detail");
            Route::get('/phong-tro/{id}/del/{idMotel}', [\App\Http\Controllers\Admin\MotelController::class, "delete_motels"])->name("admin.motel.delete");
            Route::post('phong-tro/{id}/update', [\App\Http\Controllers\Admin\MotelController::class, 'saveUpdate_motels'])->name('saveUpdate_motel');


            Route::get('{id}/{idMotel}/chi-tiet', [\App\Http\Controllers\Admin\MotelController::class, "info_user_motels"])->name("admin.motel.info");
            Route::post('{id}/{idMotel}/chi-tiet', [\App\Http\Controllers\Admin\MotelController::class, "add_peolpe_of_motels"])->name("admin.motel.add_people");
            Route::get('{id}/{idMotel}/dang-tin', [\App\Http\Controllers\Admin\MotelController::class, "create_post_motels"])->name("admin.motel.post");
            Route::post('{id}/{idMotel}/dang-tin', [\App\Http\Controllers\Admin\MotelController::class, "save_create_post_motels"])->name("admin.motel.post_post");
            Route::get('{id}/{idMotel}/dang-ky-o-ghep', [\App\Http\Controllers\Admin\MotelController::class, "contact_motel"])->name("admin.motel.contact");
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
    Route::prefix('client')->group(function () {
        // Thành viên
        Route::get('phong-tro-cua-toi/', 'App\Http\Controllers\Client\MotelController@currentMotel')->name('client_current_motel');
        Route::get('post-live-together/{motel_id}', 'App\Http\Controllers\Client\MotelController@postLiveTogether')->name("client_post_live_together");
        Route::post('post-live-together/{motel_id}', 'App\Http\Controllers\Client\MotelController@savePostLiveTogether')->name("client_save_post_live_together");
        Route::get('list-live-together', 'App\Http\Controllers\Client\MotelController@listLiveTogether')->name("client_list_live_together");
    });
});

Route::get('/403', function () {
    return view('error.403');
})->name('403');
