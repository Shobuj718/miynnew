<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMialInActiveUser;
use App\Mail\SendMailable;
use App\Models\User;
use App\Models\Booking;
use Twilio\Rest\Client;
use DateTime;

class SendBookingSms extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sendbookingsms:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sms send to instant booking user';

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

    $booking = Booking::where('sms_id', 0)->first();
    
    if($booking){
        
        $value = unserialize($booking->requested_date);
        $newDate = ' ';
        foreach($value as $key => $value){
    
            $new_date = new DateTime($key);
            $date = $new_date->format('d/m/Y');
    
            foreach ($value as $key2 => $val) {
                $newDate .= $val.' on '.$date.', ';
            }
        }
        
        $message = 'Dear '.ucfirst($booking->first_name).' '.ucfirst($booking->last_name).', Your appointment request has been received and your specified date and time(s) chosen was: '.$newDate.' We are currently checking our schedule and will revert with confirmation ASAP. For urgent assistance, please call 1800 217 217. We look forward to speaking with you soon. Aylward Game.';
    
        $sid    = env( 'TWILIO_SID' );
        $token  = env( 'TWILIO_TOKEN' );
        $client = new Client( $sid, $token );
        
        $client->messages->create(
            $booking->phone,
            [
                'from' => env( 'TWILIO_FROM' ),
                'body' => $message,
            ]
        );
        
    
        $booking->sms_id = 1;
        $booking->save();
        
    }
    
    
   /* $curr_date = date('Y-m-d h:i');
    $curr_time = date('h:i');
    //dd($curr_time);
    
    foreach ($booking as $key => $value) {

        $date = $value->created_at->format('Y-m-d h:i');
        $time = $value->created_at->format('h:i');
        
            if($date == $curr_date){
               // if($curr_time == $time){
                    $sid    = env( 'TWILIO_SID' );
                    $token  = env( 'TWILIO_TOKEN' );
                    $client = new Client( $sid, $token );
    
                    $message = 'Your booking request was sent 2';
                    $client->messages->create(
                        $value->phone,
                        [
                            'from' => env( 'TWILIO_FROM' ),
                            'body' => $message,
                        ]
                    );
               // }

                

            }
        }
        */
    }
}
