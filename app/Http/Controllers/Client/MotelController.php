<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\SendMailContact;
use App\Models\Motel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MotelController extends Controller
{
    private $v;

    public function __construct()
    {
        $this->v = [];
    }

    public function detail($id)
    {
        $motel = new Motel();
        $this->v['motel'] = $motel->detailMotel($id);

        return view('client.motel.detail', $this->v);
    }

    public function sendContact(Request $request)
    {
        $data = $request->only([
            'full_name',
            'phone_number',
            'email_address',
            'message'
        ]);
        if(Auth::user()){
            Mail::to("tranggpt03@gmail.com")->send(new SendMailContact($data));
            Session::flash('error','Gửi Liên hệ thành công');
            return redirect()->back();
        }
        else{
            Session::flash('error','Bạn phải đăng nhập để gửi Liên hệ');
            return redirect()->back();
        }
    }
}
