<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\CancelAppoint;
use App\Mail\NewAppoint;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    //
    private $v;

    public function __construct()
    {
        $this->v = [];
    }

    public function post_appointment(Request $request)
    {
        $model = new Appointment();

        $res = $model->insertRecord([
            'user_id' => Auth::id(),
            'motel_id' => $request->motel_id,
            'time' => $request->time,
            'status' => 0,
            'created_at' => Carbon::now()
        ]);
        try {
            $data =
                DB::table('appointments')
                    ->select(['email', 'users.name', 'areas.name as area_name',
                        'phone_number', 'room_number',
                        'time'])
                    ->join('motels', 'appointments.motel_id', '=', 'motels.id')
                    ->join('areas', 'motels.area_id', '=', 'areas.id')
                    ->join('users', 'areas.user_id', '=', 'users.id')
                    ->where('appointments.id', $res)->first();
            Mail::to($data->email)->send(new NewAppoint($data));
        } catch (\Exception $e) {
            return redirect()->back();
        }
        return redirect()->back()->with('success', 'Đặt lịch thành công');
    }

    public function history_appointment()
    {
        $model = new Appointment();
        $this->v['history'] = $model->client_get_history();


        return view('client.appointment.history', $this->v);
    }


    public function cancelAppoint(Request $request, $appoint_id)
    {
        $model = new Appointment();

        $res = $model->updateAppoint([
            'status' => 3,
        ], $appoint_id);
        try {
            $data =
                DB::table('appointments')
                    ->select(['email', 'users.name', 'areas.name as area_name',
                        'phone_number', 'room_number',
                        'time'])
                    ->join('motels', 'appointments.motel_id', '=', 'motels.id')
                    ->join('areas', 'motels.area_id', '=', 'areas.id')
                    ->join('users', 'areas.user_id', '=', 'users.id')
                    ->where('appointments.id', $appoint_id)->first();
            Mail::to($data->email)->send(new CancelAppoint($data));
        } catch (\Exception $e) {
            return redirect()->back();
        }
        return redirect()->back()->with('success', 'Hùy lịch hẹn thành công');
    }
}
