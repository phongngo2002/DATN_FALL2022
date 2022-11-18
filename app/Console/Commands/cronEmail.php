<?php

namespace App\Console\Commands;

use App\Mail\MailNotify;
use App\Models\Motel;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class cronEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send mail remider';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // lấy ngày hiện tại +7 để truyền vào  $user_motel
        $dateNow = date('Y-m-j');
        $dateAfter7day = strtotime('+7 day', strtotime($dateNow));
        $dateAfter7day = date('Y-m-j', $dateAfter7day);

        // lấy đối tượng $user_motel
        $user_motel = DB::table('motels')
            ->select('users.name', 'users.email', 'user_id', 'motel_id', 'motels.start_time', 'motels.end_time', 'motels.room_number', 'motel_id')
            ->join('user_motel', 'motels.id', '=', 'user_motel.motel_id')
            ->join('users', 'user_motel.user_id', '=', 'users.id')
            ->where('motels.end_time', '=', $dateAfter7day)
            ->get();

        $user_motel->map(function ($item) use ($dateAfter7day,) {

            if ($dateAfter7day == $item->end_time) {
                $this->sendEmailToUser($item->user_id, $item);
                Motel::where('id', $item->motel_id)->update(['status' => 4]);
            }
        });

    }

    private function sendEmailToUser($id, $dataMail)
    {
        $user = User::find($id);
        Mail::to($user)->send(new MailNotify($dataMail));
    }


}
