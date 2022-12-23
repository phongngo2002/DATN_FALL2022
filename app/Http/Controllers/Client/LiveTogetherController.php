<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\ConfirmContactMotel;
use App\Models\AreaLocation;
use App\Models\ContactMotelHistory;
use App\Models\Motel;
use App\Models\PlanHistory;
use App\Models\User;
use App\Models\Vote;
use App\Notifications\AppNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class LiveTogetherController extends Controller
{
    private $v;

    public function __construct()
    {
        $this->v = [];
    }

    public function detail($id)
    {
        $infoMotel = new Motel();

        $areaLocation = new AreaLocation();
        $vote = new Vote();
        try {

            $this->v['motel'] = $infoMotel->infoMotelLiveTogether($id);
            $this->v['locationNearMotel'] = $areaLocation->clientGetListLocationByAreaId($this->v['motel']->area_id);
//            dd($this->v['locationNearMotel']);
            $this->v['liveTogetherByArea'] = $infoMotel->getLiveTogethersByAreas($id, $this->v['motel']->motel_id);
            $this->v['liveTogethersHot'] = $infoMotel->getLiveTogethersHot($this->v['motel']->motel_id);
            $this->v['votes'] = $vote->client_get_list_vote_motel($id);
            return view('client.live-together.detail', $this->v);
        } catch (\Exception $e) {
            abort(404);
        }
    }

    public function historyContactMotel($motel_id, $area_id)
    {
        $model = new Motel();
        $this->v['history'] = $model->get_list_contact($motel_id, $area_id);
        return view('client.live-together.history_contact_motel', $this->v);
    }

    public function ConfirmContactMotel($motel_id, $area_id, $status, $contact_id)
    {
        $model = new ContactMotelHistory();

        $res = $model->confirmContact($motel_id, $area_id, $status, $contact_id);

        try {
            if ($status === 4) {
                return redirect()->route('get_history_contact_by_user');
            } else {
                $motel = Motel::select('areas.id', 'user_id', 'room_number', 'name')->join('areas', 'motels.area_id', '=', 'areas.id')->where('motels.id', $motel_id)->first();

                $user = User::find($motel->user_id);
                $userContact = ContactMotelHistory::select('name')->join('users', 'contact_motel_history.user_id', '=', 'users.id')->where('contact_motel_history.id', $contact_id)->first();
                $userLogin = Auth::user();
                if ($status === "1") {
                    $data1 = [
                        'title' => 'Bạn vừa có 1 thông báo mới',
                        'message' =>
                            Auth::user()->name . ' đã đồng ý cho ' . $userContact->name . ' ở ghép phòng ' . $motel->room_number . ' - ' . '<span class="font-weight-bold">' . $motel->name . '</span>',
                        'time' => Carbon::now()->format('h:i A d/m/Y'),
                        'avatar' => $userLogin->avatar ?? 'https://phunugioi.com/wp-content/uploads/2022/03/Avatar-Tet-ngau.jpg',
                        'href' => route('admin.motel.contact', ['id' => $area_id, 'idMotel' => $motel_id])];
                    $user->notify(new AppNotification($data1));
                } else if ($status === "2") {
                    $data1 = [
                        'title' => 'Bạn vừa có 1 thông báo mới',
                        'message' =>
                            Auth::user()->name . ' đã không đồng ý cho ' . $userContact->name . ' ở ghép phòng ' . $motel->room_number . ' - ' . '<span class="font-weight-bold">' . $motel->name . '</span>',
                        'time' => Carbon::now()->format('h:i A d/m/Y'),
                        'avatar' => $userLogin->avatar ?? 'https://phunugioi.com/wp-content/uploads/2022/03/Avatar-Tet-ngau.jpg',
                        'href' => route('admin.motel.contact', ['id' => $area_id, 'idMotel' => $motel_id])];
                    $user->notify(new AppNotification($data1));
                } else {
                    $data1 = [
                        'title' => 'Bạn vừa có 1 thông báo mới',
                        'message' =>
                            Auth::user()->name . ' đã thay đổi trạng thái đơn đăng ký ở ghép của ' . $userContact->name . ' phòng ' . $motel->room_number . ' - ' . '<span class="font-weight-bold">' . $motel->name . '</span>',
                        'time' => Carbon::now()->format('h:i A d/m/Y'),
                        'avatar' => $userLogin->avatar ?? 'https://phunugioi.com/wp-content/uploads/2022/03/Avatar-Tet-ngau.jpg',
                        'href' => route('admin.motel.contact', ['id' => $area_id, 'idMotel' => $motel_id])];
                    $user->notify(new AppNotification($data1));
                }

                Mail::to($res['email'])->send(new ConfirmContactMotel($res['actor']));
                return redirect()->back()->with('success', 'Thay đổi trạng thái thành công');
            }


        } catch (\Exception $err) {
            dd($err->getMessage());
        }

    }

    public function removePost(Request $request)
    {
        $plan = PlanHistory::where('id', $request->ID)->first();

        $motel = Motel::find($plan->motel_id);

        if ($motel->status === 7) {
            $motel->status = 2;
            $motel->save();
        }

        $plan->status = 7;

        $plan->save();

        return redirect()->back()->with('success', 'Gỡ bài đăng thành công');
    }

    public function activePost(Request $request)
    {
        $plan = PlanHistory::where('id', $request->ID)->first();
        $motel = Motel::find($plan->motel_id);
        if ($motel->status === 2) {
            $motel->status = 7;
            $motel->save();
        }

        $plan->status = 1;

        $plan->save();
        return redirect()->back()->with('success', 'Đăng lại tin thành công');
    }
}
