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

class SendConfirmSmsToUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sendconfirmedsmstouser:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sms send to confirmed booking.';

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

    $booking = Booking::where('sms_id', 2)->first();
    
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
        
        $message = 'Dear '.$booking->first_name.', your appointments accept by '.$booking->staff_name.', date and time - '.$newDate.' '.$booking->message;
    
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
    
    }
}
