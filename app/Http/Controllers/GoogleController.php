<?php

namespace App\Http\Controllers;

use App\Mail\CreateAccountWithGoogle;
use App\Mail\ForgotOtp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use function PHPUnit\Framework\returnSelf;

class GoogleController extends Controller
{
    public function getGoogleSignInUrl()
    {
        try {
            $url = Socialite::driver('google')->stateless()
                ->redirect()->getTargetUrl();
            return response()->json([
                'url' => $url,
            ])->setStatusCode('200');
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    public function loginCallback(Request $request)
    {
        try {
            $state = $request->input('state');

            parse_str($state, $result);
            $googleUser = Socialite::driver('google')->stateless()->user();

            $user = User::where('email', $googleUser->email)->first();


            if ($user) {
                return redirect()->route('get_login', ['success' => 'gg_error_exit']);
            } else {
                $user = User::create(
                    [
                        'email' => $googleUser->email,
                        'name' => $googleUser->name,
                        'google_id' => $googleUser->id,
                        'password' => Hash::make('123456'),
                        'status' => 1,
                        'money' => 0,
                        'role_id' => 3,
                        'avatar' => 'https://yt3.ggpht.com/ytc/AMLnZu_LsaWhvhA9-Hbda7_l-pQJCN8wB6nbhYBiDW4C0A=s900-c-k-c0x00ffffff-no-rj'
                    ]
                );
                try {
                    Mail::to($googleUser->email)->send(new CreateAccountWithGoogle($googleUser->email));
                } catch (\Exception $e) {
                    return $e->getMessage();
                }
                Session::flash('gg_success', 'Tạo tài khoản thành công.Thông tin đăng nhập đã được gửi vào mail đăng ký.');
                return redirect()->route('get_login', ['success' => 'true']);
            }
        } catch (\Exception $exception) {
            Session::flash('gg_error', 'Có lỗi xảy ra vui lòng thử lại');
            return redirect()->route('get_login', ['success' => 'gg_error']);
        }
    }
}
