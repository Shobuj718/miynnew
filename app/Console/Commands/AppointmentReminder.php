<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailAppointmentReminder;
use App\Mail\EmailReminderToAdmin;
use App\Mail\SendMailable;
use App\Models\User;
use App\Models\Booking;
use Twilio\Rest\Client;

use DateTime;

class AppointmentReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'appointment:reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email for appointment reminders';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        
        $users = User::all();
        $user = 1;
        //$booking = Booking::all();
        $booking = Booking::where('confirmed', 1)->get();
        //dd($booking);
        /*date_default_timezone_set('Asia/Dhaka');*/
        date_default_timezone_set('Australia/Melbourne');
        $curr_date = date('m/d/Y', time());
        $curr_time = date('h:i A', time());

        //a:1:{s:10:"06/13/2019";a:2:{i:0;s:8:"17:50 PM";i:1;s:8:"01:30 PM";}}
        ///usr/local/bin/php/name/your_user_name/public_html/your_website_folder_name/artisan notify:email 1>>/dev/null 2>&1
        // /usr/local/bin/ea-php71 /home/vcita/test.miyn.net/artisan notify:email 1>>/dev/null 2>&1 
        //ea-php71

        foreach($users as $user)
        {
           $email=$user->email;
           //Mail::to($email)->send(new SendMialInActiveUser($user));
        }
        //Mail::to('shobujsa1993@gmail.com')->send(new SendMialInActiveUser($user));
        
        //Mail::to('shobujsa1993@gmail.com')->send(new SendMialInActiveUser($user));

        foreach ($booking as $key => $value) {
            $requested_date = $value->requested_date;
            $email = $value->email;
            $requested_date = unserialize($requested_date);
            //dd($requested_date);

            foreach($requested_date as $date => $value2){

                if($date == $curr_date){
                    
                    $this->info('db date is equal to today');
                    //Mail::to('shobujsa1993@gmail.com')->send(new SendMialInActiveUser($user));
                    //Mail::to('shobujsa1993@gmail.com')->send(new SendMailable($user));
                    //a:1:{s:10:"06/13/2019";a:1:{i:0;s:8:"05:30 PM";}}
                    foreach ($value2 as $time) {
                        
                        $admin = User::where('id', $value->staff_id)->first();
                        $admin_email = $admin->email;
                        
                        $time = strtotime($time);
                        $time2 = date('h:i A', $time);
                        $time = $time - (15 * 60);
                        $time = date('h:i A', $time);
                        if($time == $curr_time){
                            $value['date'] = $date;
                            $value['time'] = $time2;
                            
                            $new_date = new DateTime($date);
                            $date = $new_date->format('d/m/Y');
                            $value['date'] = $date;
                            
                            //Mail::to('shobujsa1993@gmail.com')->send(new SendMialInActiveUser($user));
                            Mail::to($email)->send(new SendMailAppointmentReminder($value));
                            Mail::to($admin_email)->send(new EmailReminderToAdmin($value));
                            
                            $sid    = env( 'TWILIO_SID' );
                           $token  = env( 'TWILIO_TOKEN' );
                           $client = new Client( $sid, $token );
                           //admin sms send
            $message = 'Dear '.strtoupper($value->staff_name).', your appointment with '.strtoupper($value->first_name).' '.strtoupper($value->last_name).' is scheduled to take place in 15 minutes at '.$time2.' on '.$date.'. Aylward Game.';
                            $client->messages->create(
                                   $admin->phone,
                                   [
                                       'from' => env( 'TWILIO_FROM' ),
                                       'body' => $message,
                                   ]
                               );
                             //client sms send
            $message = 'Dear '.strtoupper($value->first_name).' '.strtoupper($value->last_name).', your appointment with '.strtoupper($value->staff_name).' is scheduled to take place in 15 minutes at '.$time2.' on '.$date.'. For urgent assistance, please call 1800 217 217. We look forward to speaking with you soon. Aylward Game.';
                            $client->messages->create(
                                   $value->phone,
                                   [
                                       'from' => env( 'TWILIO_FROM' ),
                                       'body' => $message,
                                   ]
                               );
                               
                        }
                    }
                }

            }
        }

    }
}
