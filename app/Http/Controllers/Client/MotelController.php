<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\SendMailContact;
use App\Models\ContactMotelHistory;
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

    public function sendContact(Request $request, $id)
    {


        $model2 = new ContactMotelHistory();

        if ($model2->create_history([
            'id' => $id
        ])) {
            $model = new Motel();
            $data = [];
            $people = $model->info_motel($id);
            foreach ($people as $p) {
                $data[] = $p->email;
            }
            if (!empty($data)) {
                Mail::to($data)->send(new SendMailContact());
            }
        }

        return redirect()->back()->with('success', 'Đăng ký ở ghép thành công');
    }
}
