<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\MotelVote;
use App\Models\Vote;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    //

    public function sendVote(Request $request)
    {
        $id = Vote::insertGetId([
            'score' => $request->rating,
            'message' => $request->message,
            'question' => $request->question,
            'user_id' => Auth::id(),
            'created_at' => Carbon::now()
        ]);

        $res = MotelVote::insert([
            'vote_id' => $id,
            'motel_id' => $request->motel_id,
        ]);

        if ($res) {
            return redirect()->back()->with('success', 'Gửi đánh giá thành công');
        } else {
            return redirect()->back()->with('error', 'Có lỗi xảy ra vui lòng thử lại');
        }

    }
}
