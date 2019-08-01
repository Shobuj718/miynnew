<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\Booking;
use App\Models\Service;
use App\Models\Category;
use App\Models\ContactInfo;
use App\Models\User;
use App\Models\Message;

use App\Models\Staff;
use Twilio\Rest\Client;
use Mail;
use App\Notifications\BookingConfirmedEmail;
use App\Notifications\BookingCancelEmail;
use App\Mail\ClientConfirmAppointmentMail;
use App\Mail\BusinessAdminConfirmAppointmentMail;
use App\Mail\BookingReScheduleEmail;
use App\Mail\BookingReScheduleEmailByClient;
use App\Mail\BookingCancelByAdmin;

use DateTime;


class BookingClientController extends Controller
{
    public function testbooking(Request $request){
        return response()->json([
            'status' => 'success',
            'booking' => $request->email
        ]);
    }
    public function index(){
        $user_id = Auth::user()->id;

        //dd($user_id);
        $staff = Booking::where('staff_id', $user_id)->first();
        $client = Booking::where('client_id', $user_id)->first();

        if($staff){
            $staff_id = $staff->staff_id;
            $booking = Booking::with('category','service')->where('staff_id', $staff_id)->where('status', 'upcoming')->orderBy('created_at', 'desc')->get();
            return view('admin.pages.booking_client.index', compact('booking'));
        }
        elseif($client){
            $client_id = $client->client_id;
            $booking = Booking::with('category','service')->where('client_id', $client_id)->where('status', 'upcoming')->orderBy('created_at', 'desc')->get();
            return view('admin.pages.client_single.index', compact('booking'));
        }
        /*else{
            $user = User::all();
            return view('admin.pages.admin.business_admin.index', compact('user'));
            //Session::Flash('error', "No Appointments right now");
            return redirect()->back();
        }*/
        else{
            $staff_id = Auth::user()->id;
            $booking = Booking::with('category','service')->where('staff_id', $staff_id)->where('status', 'upcoming')->orderBy('created_at', 'desc')->get();
            return view('admin.pages.booking_client.index', compact('booking'));
        }
        
    }

    public function getClientBooking(){
        $user_id = Auth::user()->id;

        $data = User::find($user_id);
        $data_id = $data->id;
        
        dd($data_id);


        $staff = Staff::all();
        //$booking = Booking::all();
        $booking = Booking::with('category','service')->where('status', 'upcoming')->orderBy('created_at', 'desc')->get();
        dd($booking);


        /*foreach($booking as $key=>$value){
                  \Carbon\Carbon::parse($key)->format('D, M d') }}
                foreach($value as $time){
                    {{ $time }}
                }
                }
            {{$key}}
        }
        dd($booking);*/
        //dd($booking);
        /*foreach($booking as $data){

        $booking['dateval'] = unserialize($data->requested_date);
        //dd($booking);
        }
        dd($booking);*/

        return view('admin.pages.booking_client.index', compact('booking'));
    }

    public function bookingClentConfirm($id, $confirm){
        Booking::where('id', $id)->update(['confirmed' => 1, 'status' => 'upcoming']);
        Session::Flash('success', "Client booking confirmed successfully also send email.");

        $booking = Booking::find($id);

        $booking2 = unserialize($booking->requested_date);

        $data = [
            'booking' => $booking,
            'booking2' => $booking2
        ];

        $booking->requested_date = unserialize($booking->requested_date);

        $booking->date = ' ';
        foreach ($booking->requested_date as $key => $value) {
            $booking->date .= $key.' ';
            foreach($value as $time){
                $booking->date .= $time.', ';
            }
        }

       

        $booking->notify(new BookingConfirmedEmail($booking));

        Mail::send('emails.booking.booking_confirmed', $data, function($message) {
         $message->to('shobujsa1993@gmail.com', 'Miyn')
         ->subject('FROM MIYN BOOKING APP');
        });

        $date = ' ';
        foreach($booking2 as $key => $value){
            $date .= $key;
            foreach ($value as $key2 => $val) {
                $date .= ' '.$val.', ';
            }
        }

         /*start to send sms*/
        $sid    = env( 'TWILIO_SID' );
        $token  = env( 'TWILIO_TOKEN' );
        $client = new Client( $sid, $token );

       $message = 'Dear '.$booking->first_name.', appointments approved by '.$booking->staff_name.', date and time - '.$date;
        $client->messages->create(
                    $booking->phone,
                    [
                        'from' => env( 'TWILIO_FROM' ),
                        'body' => $message,
                    ]
                );
        
            /*end to send sms*/
        //}
        return redirect()->back();
    }

    public function bookingClentCancel($id, $confirm){
        $user_id = Auth::user()->id;
        $staff = Booking::where('staff_id', $user_id)->first();
        $client = Booking::where('client_id', $user_id)->first();

        if($staff){
            Booking::where('id', $id)->update(['confirmed' => 0, 'status' => '1']);
            Session::Flash('error', "Client booking cancel successfully and also send email.");



            $booking = Booking::find($id);

            $booking2 = unserialize($booking->requested_date);
            $data = [
               'booking' => $booking,
               'booking2' => $booking2
            ];

            $booking->requested_date = $booking2;

            $booking->date = ' ';
            foreach ($booking->requested_date as $key => $value) {
               $booking->date .= $key.' ';
               foreach($value as $time){
                   $booking->date .= $time.', ';
               }
            }
            
            Mail::to($booking->email)->send(new BookingCancelByAdmin($booking));
            
            //$booking->notify(new BookingCancelEmail($booking));

            /*Mail::send('emails.booking.booking_cancel', $data, function($message) {
            $message->to('shobujsa1993@gmail.com', 'MIYN')
            ->subject('FROM MIYN BOOKING APP');
            });*/
           

                 
                 /*start to send sms*/
            $date = ' ';
            foreach($booking2 as $key => $value){
                $date .= $key;
                foreach ($value as $key2 => $val) {
                    $date .= ' '.$val.', ';
                }
            }

             /*start to send sms*/
            $sid    = env( 'TWILIO_SID' );
            $token  = env( 'TWILIO_TOKEN' );
            $client = new Client( $sid, $token );

           $message = 'Dear, '.$booking->first_name.' appointments cancel by '.$booking->staff_name.', date and time - '.$date;
            $client->messages->create(
                        $booking->phone,
                        [
                            'from' => env( 'TWILIO_FROM' ),
                            'body' => $message,
                        ]
                    );
                    /*end to send sms*/

        }
        else{
            Booking::where('id', $id)->update(['confirmed' => 0, 'status' => '1']);
            Session::Flash('error', "Your booking cancel successfully.");
        }
        

        return redirect()->route('booking.client');
    }

    public function bookingReschedule($id){

        $booking = Booking::find($id);

        $booking2 = unserialize($booking->requested_date);
        //dd($date);

        $date = ' ';
        foreach($booking2 as $key => $value){
            $date .= $key;
            foreach ($value as $key2 => $val) {
                $date .= ' '.$val.', ';
            }
            //$date .=' and ';
        }

        $user_id = Auth::user()->id;
        $staff = Booking::where('staff_id', $user_id)->first();
        $client = Booking::where('client_id', $user_id)->first();

        if($staff){
            return view('admin.pages.booking_client.reschedule', compact('booking', 'booking2', 'date'));
        }else{
            return view('admin.pages.client_single.reschedule', compact('booking', 'booking2', 'date'));
        }

        return redirect()->back();
    }

    public function bookingRescheduleConfirm(Request $request){
       // dd($request->all());
       
        $dob = $request->reschedule_date;
        $dd = substr($dob,0,2)."/";
        $mm = substr($dob,3,2)."/";
        $yyyy = substr($dob,6,4);
        $date = $mm.$dd.$yyyy;

        $user_id = Auth::user()->id;
        $staff = Booking::where('staff_id', $user_id)->first();
        $client = Booking::where('client_id', $user_id)->first();

        if($staff){
            if(!empty($request->reschedule_date) && !empty($request->reschedule_time)){
            //if(!empty($request->select_date) && !empty($request->select_time)){
                $requested_moments1[] = $date;
                $requested_moments2[] = $request->reschedule_time;
                $requested_moments = array_combine($requested_moments1, $requested_moments2);
                //dd($requested_moments);

                

                $requested_moments = serialize($requested_moments);
                $data = unserialize($requested_moments);

                $booking = Booking::where('id', $request->id)->first();
                $booking2 = unserialize($booking->requested_date);
                
                $booking->requested_date = $requested_moments;
                $booking->confirmed = $request->confirmed;
                //$booking->message  = $request->message;
                $booking->save();
                //dd($booking);
                
                //message store
                $message = new Message;
                $message->sender_id = Auth::user()->id;
                $message->recipient_id = $booking->client_id;
                $message->body = $request->message;
                $message->save();

                $booking->date = ' ';
                foreach ($data as $key => $value) {
                    $booking->date .= $key.' ';
                    foreach($value as $time){
                        $booking->date .= $time.', ';
                    }
                }

               
               $email = $booking->email;
               
                Mail::to($email)->send(new BookingReScheduleEmail($booking));

                //$booking->notify(new BookingReScheduleEmail($booking));


                $newDate = ' ';
                foreach($data as $key => $value){
        
                    $new_date = new DateTime($key);
                    $date = $new_date->format('d/m/Y');
        
                    foreach ($value as $key2 => $val) {
                        $newDate .= $val.' on '.$date.', ';
                    }
                }

                /*start to send sms*/
                $sid    = env( 'TWILIO_SID' );
                $token  = env( 'TWILIO_TOKEN' );
                $client = new Client( $sid, $token );

                $message = 'Dear '.$booking->first_name.', your appointments re-schedule by '.$booking->staff_name.', date and time - '.$newDate.' '.$booking->message;
                $client->messages->create(
                            $booking->phone,
                            [
                                'from' => env( 'TWILIO_FROM' ),
                                'body' => $message,
                            ]
                        );
                
                    /*end to send sms*/

                Session::Flash('success', "Appointment Re-schedule successfully.");
                return redirect()->back();
            }
            else{
                Session::Flash('error', "You did not change date or time, for re-schedule please edit date and time.");
                return redirect()->back();
            }
        }
        else{
            if(!empty($request->reschedule_date) && !empty($request->reschedule_time)){
            //if(!empty($request->select_date) && !empty($request->select_time)){
                $requested_moments1[] = $date;
                $requested_moments2[] = $request->reschedule_time;
                $requested_moments = array_combine($requested_moments1, $requested_moments2);
                //dd($requested_moments);

                

                $requested_moments = serialize($requested_moments);
                $data = unserialize($requested_moments);

                $booking = Booking::where('id', $request->id)->first();
                $booking2 = unserialize($booking->requested_date);
                
                $booking->requested_date = $requested_moments;
                $booking->confirmed = $request->confirmed;
                //$booking->message  = $request->message;
                $booking->save();
                //dd($booking);
                
                //message store
                $message = new Message;
                $message->sender_id = Auth::user()->id;
                $message->recipient_id = $booking->staff_id;
                $message->body = $request->message;
                $message->save();

                $booking->date = ' ';
                foreach ($data as $key => $value) {
                    $booking->date .= $key.' ';
                    foreach($value as $time){
                        $booking->date .= $time.', ';
                    }
                }

               

                $email = $booking->email;
               
                Mail::to($email)->send(new BookingReScheduleEmailByClient($booking));

                //$booking->notify(new BookingReScheduleEmail($booking));


                $newDate = ' ';
                foreach($data as $key => $value){
        
                    $new_date = new DateTime($key);
                    $date = $new_date->format('d/m/Y');
        
                    foreach ($value as $key2 => $val) {
                        $newDate .= $val.' on '.$date.', ';
                    }
                }

                /*start to send sms*/
                $sid    = env( 'TWILIO_SID' );
                $token  = env( 'TWILIO_TOKEN' );
                $client = new Client( $sid, $token );

                $message = 'Dear '.$booking->first_name.', appointments Re-schedule, date and time - '.$newDate.' '.$booking->message;
                $client->messages->create(
                            $booking->phone,
                            [
                                'from' => env( 'TWILIO_FROM' ),
                                'body' => $message,
                            ]
                        );
                
                    /*end to send sms*/

                Session::Flash('success', "Your Appointments Re-schedule successfully.");
                return redirect()->back();
            }
            else{
                Session::Flash('error', "You did not change date or time, for re-schedule please edit date and time.");
                return redirect()->back();
            }
        }
   
    }

    public function client_appointments_view($id){
        //dd($id);
        $booking = Booking::find($id);

        $booking2 = unserialize($booking->requested_date);
        //dd($date);

        /*$date = ' ';
        foreach($booking2 as $key => $value){
            $date .= $key;
            foreach ($value as $key2 => $val) {
                $date .= ' '.$val.', ';
            }
            //$date .=' and ';
        }*/

        //new date formate
        $date = ' ';
        foreach($booking2 as $key => $data2){

            $new_date = new DateTime($key);
            //echo $date->format('d/m/Y');
            $date .= $new_date->format('d/m/Y');

            foreach ($data2 as $key2 => $val) {
                $date .= ' '.$val.', ';
            }
        }

        $user_id = Auth::user()->id;
        $staff = Booking::where('staff_id', $user_id)->first();
        $client = Booking::where('client_id', $user_id)->first();

       if($staff){
            $messages = Message::where('sender_id', $booking->client_id)->orWhere('recipient_id', $booking->client_id)->get();
            //$messages = Message::where('sender_id', $booking->client_id)->where('recipient_id', $booking->staff_id)->get();
            return view('admin.pages.booking_client.view_appointments',compact('booking', 'date', 'messages'));
        }else{
            $messages = Message::where('sender_id', $booking->client_id)->orWhere('recipient_id', $booking->client_id)->get();
            return view('admin.pages.client_single.view_appointments',compact('booking', 'date', 'messages'));
        }
        
    }

    public function view_accept_appointment($id){
        //dd($id);
        $booking = Booking::find($id);

        $booking2 = unserialize($booking->requested_date);
        $booking['requested_date'] = unserialize($booking->requested_date);
        //dd($booking2);

        $date = ' ';
        foreach($booking2 as $key => $value){
            $date .= $key;
            foreach ($value as $key2 => $val) {
                $date .= ' '.$val.', ';
            }
            //$date .=' and ';
        }

        return view('admin.pages.booking_client.view_accept_appointments',compact('booking', 'booking2', 'date'));
    }

    public function appointments_confirmed(Request $request){

        //dd($request->all());
        $requested_moments1[] = $request->select_date;
        $requested_moments2[] = $request->select_time;
        $requested_moments = array_combine($requested_moments1, $requested_moments2);


        $requested_moments = serialize($requested_moments);
        //dd($requested_moments);
        $data = unserialize($requested_moments);
        //dd($data);
        $booking = Booking::where('id', $request->id)->first();
        $booking2 = unserialize($booking->requested_date);
        
        $booking->requested_date = $requested_moments;
        $booking->confirmed = $request->confirmed;
        //dd($request->confirmed);
        //$booking->message  = $request->message;
        $booking->save();
        //dd($booking);
        
        //message sent to client
        $message = new Message;
        $message->sender_id = Auth::user()->id;
        $message->recipient_id = $booking->client_id;
        $message->body = $request->message;
        $message->save();
        

        $booking2 = unserialize($booking->requested_date);

        $data = [
            'booking' => $booking,
            'booking2' => $booking2
        ];

        $service = Service::where('id', $booking->service_id)->first();
        $staff = User::where('id', $booking->staff_id)->first();
        $category = Category::where('id', $booking->category_id)->first();
        $contactInfo = ContactInfo::where('user_id', $staff->id)->first();
        
        $data = array();
        $data = [
            'booking' => $booking,
            'booking2' => $booking2,
            'staff' => $staff,
            'service' => $service,
            'category' => $category,
            'contactInfo' => $contactInfo,
        ];

        //dd($booking->email);
        $email = $booking->email;
        $staff_email = $staff->email;
        //$staff_email = 'shobujislam1989@gmail.com';
        //dd($staff_email);

        //$ics_all_date = '';
        foreach($booking2 as $ics_date => $ics_value){

            $ics_new_date = new DateTime($ics_date);
            $ics_new_date = $ics_new_date->format('m/d/Y');

            foreach ($ics_value as $ics_date2 => $ics_value2) {
                $ics_all_date = $ics_new_date.' '.$ics_value2;
            }
        }

        if($service->duration_hours == 1){
            $time2 = "01:30:00";
            $secs = strtotime($time2)-strtotime("00:00:00");
            $result = date("h:i A",strtotime($ics_value2)+$secs);
        }
        else{
            $time2 = "00:30:00";
            $secs = strtotime($time2)-strtotime("00:00:00");
            $result = date("h:i A",strtotime($ics_value2)+$secs);
        }
        

        
        $data['start_date'] = $ics_new_date.' '. $ics_value2;
        $data['end_date'] = $ics_new_date.' '. $result;
        $data['text'] = $booking->service_name;
        $data['sub'] = 'Appointment with '.$booking->staff_name;
        $data['mail'] = $email;
        $data['duration'] = $service->duration_hours.':'.$service->duration_minutes;
        $data['name'] = $booking->staff_name;
        $data['email'] = 'app@miyn.net';
        $data['location'] = 'Level 4, 183 Wickham Terrace Brisbane QLD 4001';

        $d = $data['start_date'];
        //dd($d);

        Mail::send('emails.booking.booking_confirmed', $data, function($message) use($data)
        {
            
            $filename = "invite.ics";
            $meeting_duration = $data['duration']; // 1/2 hours
            $start_time = strtotime( $data['start_date']);
            $end_time = strtotime( $data['end_date']);
            $dtstart = date('Ymd\THis', $start_time);
            $dtend =  date('Ymd\THis', $end_time);
            $todaystamp = date('Ymd\THis');
            $uid = uniqid();
            $description = strip_tags($data['text']);
            $location = $data['location'];
            $invite_text = "Introductory Phone Call (20 Mins Free)";
            $organizer = "CN=".$data['name'].":mailto:".$data['email'];
            
            // ICS
            // ICS
            $mail[0]  = "BEGIN:VCALENDAR";
            $mail[1] = "VERSION:2.0";
            $mail[2] = "PRODID:-//hacksw/handcal//NONSGML v1.0//EN";
            $mail[3] = "CALSCALE:GREGORIAN";
            $mail[4] = "BEGIN:VEVENT";
            $mail[5] = "ORGANIZER;" . $organizer;
            $mail[6] = "DESCRIPTION:" . $description;
            $mail[7] = "SUMMARY:" . $invite_text;
            $mail[8] = "URL;VALUE=URI:https://app.miyn.net/booking-client/";
            $mail[9] = "LOCATION:" . $location;
            $mail[10] = "DTSTART:" . $dtstart;
            $mail[11] = "DTEND:" . $dtend;
            $mail[12] = "DTSTAMP:" . $todaystamp;
            $mail[13] = "UID:" . $uid;
            $mail[14] = "END:VEVENT";
            $mail[15] = "END:VCALENDAR";
            
            
            $mail = implode("\r\n", $mail);
            //header("text/calendar");
            file_put_contents($filename, $mail);
            
            $message->subject($data['sub']);
            $message->to($data['mail']);
            $message->attach($filename, array('mime' => "text/calendar"));
        });

        //dd('send success');
        
         //admin email send

        $data['start_date'] = $ics_new_date.' '. $ics_value2;
        $data['end_date'] = $ics_new_date.' '. $result;
        $data['text'] = $booking->service_name;
        $data['sub'] = 'Appointment scheduled with '.$booking->first_name.' '.$booking->last_name;
        $data['mail'] = $staff_email;
        $data['duration'] = $service->duration_hours.':'.$service->duration_minutes;
        $data['name'] = $booking->first_name.' '.$booking->last_name;
        $data['email'] = 'app@miyn.net';
        $data['location'] = 'Level 4, 183 Wickham Terrace Brisbane QLD 4001';

        $d = $data['start_date'];
        //dd($d);

        Mail::send('emails.booking.client_appointment_confirm_business_admin', $data, function($message) use($data)
        {
            
            $filename = "invite.ics";
            $meeting_duration = $data['duration']; // 1/2 hours
            $start_time = strtotime( $data['start_date']);
            $end_time = strtotime( $data['end_date']);
            $dtstart = date('Ymd\THis', $start_time);
            $dtend =  date('Ymd\THis', $end_time);
            $todaystamp = date('Ymd\THis');
            $uid = uniqid();
            $description = strip_tags($data['text']);
            $location = $data['location'];
            $invite_text = "Introductory Phone Call (20 Mins Free)";
            $organizer = "CN=".$data['name'].":mailto:".$data['email'];
            
            // ICS
            // ICS
            $mail[0]  = "BEGIN:VCALENDAR";
            $mail[1] = "VERSION:2.0";
            $mail[2] = "PRODID:-//hacksw/handcal//NONSGML v1.0//EN";
            $mail[3] = "CALSCALE:GREGORIAN";
            $mail[4] = "BEGIN:VEVENT";
            $mail[5] = "ORGANIZER;" . $organizer;
            $mail[6] = "DESCRIPTION:" . $description;
            $mail[7] = "SUMMARY:" . $invite_text;
            $mail[8] = "URL;VALUE=URI:https://app.miyn.net/booking-client/";
            $mail[9] = "LOCATION:" . $location;
            $mail[10] = "DTSTART:" . $dtstart;
            $mail[11] = "DTEND:" . $dtend;
            $mail[12] = "DTSTAMP:" . $todaystamp;
            $mail[13] = "UID:" . $uid;
            $mail[14] = "END:VEVENT";
            $mail[15] = "END:VCALENDAR";
            
            
            $mail = implode("\r\n", $mail);
            //header("text/calendar");
            file_put_contents($filename, $mail);
            
            $message->subject($data['sub']);
            $message->to($data['mail']);
            $message->attach($filename, array('mime' => "text/calendar"));
        });

        

        //Mail::to($email)->send(new ClientConfirmAppointmentMail($booking));
       // Mail::to($staff_email)->send(new BusinessAdminConfirmAppointmentMail($booking));
       
       
       
        //dd('mail sent client and staff and client both of you...');

        /*Mail::send('emails.booking.booking_confirmed', $data, function($message) {
         $message->to('shobujsa1993@gmail.com', 'Miyn')
         ->subject('FROM MIYN BOOKING APP');
        });*/

        $data = unserialize($booking->requested_date);
        //dd($data);
        $booking->date = ' ';
        foreach ($data as $key => $value) {
            $booking->date .= $key.' ';
            foreach($value as $time){
                $booking->date .= $time.', ';
            }
        }

        //$booking->notify(new BookingReScheduleEmail($booking));


        /*$date = ' ';
        foreach($data as $key => $value){
            $date .= $key;
            foreach ($value as $key2 => $val) {
                $date .= ' '.$val.', ';
            }
        }*/

        //new date formate
        $newDate = ' ';
        foreach($data as $key => $value){

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

        $message = 'Dear '.$booking->first_name.', your appointments accept by '.$booking->staff_name.', date and time - '.$newDate.' '.$booking->message;
        $client->messages->create(
                    $booking->phone,
                    [
                        'from' => env( 'TWILIO_FROM' ),
                        'body' => $message,
                    ]
                );*/
                
        // sms send using cron job for phone number error
        $booking = Booking::where('id', $request->id)->first();
        $booking->sms_id = 2;
        $booking->save();
            /*end to send sms*/
            
        Session::Flash('success', "Appointment confirmed successfully.");
        //echo "<script>window.location='/booking-client'</script>";
        //return redirect()->route('appointments.view', $booking->id);
        return redirect()->back();
    }


}
