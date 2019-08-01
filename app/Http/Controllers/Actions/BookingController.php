<?php

namespace App\Http\Controllers\Actions;

use App\Models\Booking;
use App\Models\Service;
use App\Models\Category;
use App\Models\ContactInfo;
use App\Models\User;
use App\Models\Message;

use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

use App\Notifications\ClientBookingInfo;
use App\Notifications\BookingProposalSendClent;
use Twilio\Rest\Client;
use Mail;
use App\Mail\ClientAccountInformation;
use App\Mail\BookingProposalEmail;
use App\Mail\BookingProposalEmailForAdmin;

use DateTime;


class BookingController extends Controller {
    
    public function getInbox() {
        $bookings = Booking::all();
        
        return response()->json([
            'appointments' => $bookings
        ]);
    }
    
    public function save(Request $request) {
        
        $slug = '';
        do{
            $slug = uniqid().uniqid().uniqid().uniqid().uniqid();
        } while(Booking::where('slug', $slug)->count());
        
        $service_slug = $request->service_slug;
        //$staff_slug = $request->staff_slug;
        $staff_slug = "5c04a3a1cfcc3";
        $service = Service::where('slug', $service_slug)->first();
        $staff = User::where('slug', $staff_slug)->first();
        $category = Category::find($service->category_id);
        $contactInfo = ContactInfo::where('user_id', $staff->id)->first();
        $requested_moments = serialize($request->except('key', 'subject', 'message', 'first_name', 'last_name', 'phone', 'email', 'service_slug', 'staff_slug', 'country_code'));
        
        //dd($request->all());
        
        $user = User::where('email', $request->email)->first();

        $old_user_email = $user['email'];
        
        $phone = $request->country_code;
        $phone .= $request->phone;

        if(empty($old_user_email)){
            $user = new User;
            
            $password = mt_rand();
            
            $user = User::create([
                'firstname' => $request->first_name,
                'lastname' => $request->last_name,
                'display_name' => $request->first_name,
                'slug' => md5(uniqid(time())),
                'role_id' => 5,
                'email_verified_at' => date("Y-m-d H:i:s"),
                'color' => '#07EAD4',
                'phone' => $phone,
                'email' => $request->email,
                'password' => Hash::make($password),
            ]);
            
            $user['password'] = $password;

            Mail::to($user->email)->send(new ClientAccountInformation($user));

        }


        $booking = new Booking;
        
        $booking->category_id = $service->category_id;
        $booking->service_id = $service->id;
        $booking->staff_id = $staff->id;
        $booking->client_id = $user->id;
        $booking->service_name = $service->name;
        $booking->staff_name = $staff->display_name;
        $booking->first_name = $request->first_name;
        $booking->last_name = $request->last_name;

        $booking->phone = $phone;

        $booking->email = $request->email;
        $booking->subject = $request->subject;
        //$booking->message = $request->message;
        $booking->requested_date = $requested_moments;
        
        $booking->slug = $slug;
        
        
        $booking->save();
        
        //message store
        $message = new Message;
        $message->sender_id = $booking->client_id;
        $message->recipient_id = $booking->staff_id;
        $message->body = $request->message;
        $message->save();

        Mail::to($booking->email)->send(new BookingProposalEmail($booking));
        
        $admin = User::where('id', $booking->staff_id)->first();
        $admin_email = $admin->email;
        
        //mail send to admin
        Mail::to($admin_email)->send(new BookingProposalEmailForAdmin($booking));

        $booking['requested_date'] = unserialize($requested_moments);
        
        $booking['staff_phone'] = $staff->phone;


        
        $data = [
            'booking' => $booking,
            'staff' => $staff,
            'service' => $service,
            'category' => $category,
            'contactInfo' => $contactInfo,
            'dateAndTimes' => $request->except('key', 'subject', 'message', 'first_name', 'last_name', 'phone', 'email', 'service_slug', 'staff_slug')
        ];

        $value = unserialize($requested_moments);

        //new date formate
        $newDate = ' ';
        foreach($value as $key => $value){

            $new_date = new DateTime($key);
            $date = $new_date->format('d/m/Y');

            foreach ($value as $key2 => $val) {
                $newDate .= $val.' on '.$date.', ';
            }
        }
        
        /*start to send sms*/
        
       /*$sid    = env( 'TWILIO_SID' );
       $token  = env( 'TWILIO_TOKEN' );
       $client = new Client( $sid, $token );
       
       $message = 'Dear '.ucfirst($staff->display_name).', '.ucfirst($request->first_name).' '.ucfirst($request->last_name).' has requested an appointment with you at '.$newDate.' Please Login https://app.miyn.net/login to Accept or Deny this request';
       $client->messages->create(
                   $staff->phone,
                   [
                       'from' => env( 'TWILIO_FROM' ),
                       'body' => $message,
                   ]
               );

       //client sms send
       
       $message = 'Dear '.ucfirst($request->first_name).' '.ucfirst($request->last_name).', Your appointment request has been received and your specified date and time(s) chosen was: '.$newDate.' We are currently checking our schedule and will revert with confirmation ASAP. For urgent assistance, please call 1800 217 217. We look forward to speaking with you soon. Aylward Game.';
       $client->messages->create(
                   $phone,
                   [
                       'from' => env( 'TWILIO_FROM' ),
                       'body' => $message,
                   ]
               );*/
       
        /*end to send sms*/

       
        return response()->json([
            'status' => 'success',
            'booking' => $booking
        ]);
        
    }
}