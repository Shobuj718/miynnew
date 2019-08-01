<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //Commands\DemoCron::class,
        'App\Console\Commands\SendBookingSms',
        'App\Console\Commands\AppointmentReminder',
        'App\Console\Commands\SendConfirmSmsToUser',
        //'App\Console\Commands\Log\ClearLogFile',
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        //$schedule->command('demo:cron')
        //        ->everyMinute();
        $schedule->command('sendbookingsms:users')
            ->everyMinute();
        $schedule->command('sendconfirmedsmstouser:users')
            ->everyMinute();
        $schedule->command('appointment:reminders')
            ->everyMinute();
        //$schedule->command('log:clear')
            //->everyTenMinutes();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
