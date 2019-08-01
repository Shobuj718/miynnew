<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct(
        );
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        \Log::info("Cron is working fine.");
        $this->info('Demo:cron Command run successfully.');

        //$user = \DB::table('users')->where('id', 185)->first();
        //dd($totalUsers);
        //$email = $user->email;

        //$totalUsers = \DB::table('users')->where('id', 185)->count();

        Mail::to('shobujsa1993@gmail.com')->send(new SendMailable($user));
          
    }
}
