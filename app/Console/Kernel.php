<?php

namespace App\Console;

use App\Models\PlanHistory;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $plan_history = PlanHistory::where('status', 1)->get();
            foreach ($plan_history as $plan) {
                if ($plan->day - 1 > 0) {
                    PlanHistory::where('id', $plan->id)->update(['day' => $plan->day - 1]);
                } else {
                    PlanHistory::where('id', $plan->id)->update(['status' => 5]);
                }
            }

        })->daily();
        $schedule->command('motel:cron')->withoutOverlapping()->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
