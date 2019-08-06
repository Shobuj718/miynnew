<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\BusinessProfile;
use App\Models\TimeZone;
use App\Models\OnboardService;
use App\Models\OnboardStaff;
use App\Models\BusinessHour;
use App\Models\BusinessNeed;
use Twilio\Rest\Client;

class BusinessProfileController extends Controller
{
    public function business(Request $request)
    {        

        $response = [
            'success' => 'ok',
            'message' => "Business and time zone created",
            'value' => $request->all()
        ];
        return response()->json($response);

        dd($request->all());


		$business = new BusinessProfile;

    	$slug    = md5(uniqid(time()));

        $user = Auth::user();
        $auth_name =  Auth::user()->firstname;



        $business->slug    = md5(uniqid(time()));
        $business->user_id = $request->user_id;
        $business->industry_id = $request->industry_id;
        $business->profession_id = $request->profession_id;

        $business->country_with_code = $request->country_with_code;

        $str = $business->country_with_code;
        $ext = substr( strrchr($str, ' '), 1);

        $business->phone_number = $ext.$request->phone_number;

        /*start to send sms*/
       /*$sid    = env( 'TWILIO_SID' );
       $token  = env( 'TWILIO_TOKEN' );
       $client = new Client( $sid, $token);

       $message = 'Thank\'s '.$auth_name.' to register our application';
       $client->messages->create(
                   $business->phone_number,
                   [
                       'from' => env( 'TWILIO_FROM' ),
                       'body' => $message,
                   ]
               );*/
       
           /*end to send sms*/

        $business->business_name = $request->business_name;
        $business->web_url = $request->web_url;
        $business->address = $request->address;        

    	$business->status = 1;
    	$business->save();

        /*insert time zone into time_zone table*/
        $timezone = new TimeZone;

        $slug    = md5(uniqid(time()));

        $timezone->slug    = md5(uniqid(time()));
        $timezone->user_id = $request->user_id;
        $timezone->time_zone = $request->time_zone;
        $timezone->time_format = $request->time_format;
        $timezone->start_weak_on = $request->start_weak_on;
        $timezone->save();

         /*end time zone model code*/

          /*insert onboard services  table*/

        foreach ($request->service_name as $key => $value) {
            $service_name[] = $value;
        }

        foreach ($request->service_duration as $key => $value) {
            $service_duration[] = $value;
        }

        foreach ($request->service_price as $key => $value) {
            $service_price[] = $value;
        }

        $service = new OnboardService;
        $result = array_map(function ($service_name, $service_duration, $service_price) {
          return array_combine(
            ['service_name', 'service_duration', 'service_price'],
            [$service_name, $service_duration, $service_price]
          );
        }, $service_name, $service_duration, $service_price);

        $tempArray = [];
        foreach($result as $key=>$value){
            $secArray = [];
            $secArray['slug'] = md5(uniqid(time()));
             $secArray['user_id'] = $request->user_id;
            $secArray['service_name'] = $value['service_name'];
            $secArray['service_duration'] = $value['service_duration'];
            $secArray['service_price'] = $value['service_price'];

            $tempArray[] = $secArray;

        }
        DB::table('onboard_services')->insert($tempArray);

         /* end onboard services model */

        /*============================================================
            onboard staff data insert into databse
        =============================================================*/
        $onboard_staff = new OnboardStaff;

        $c=array_combine($request->onboard_staff_name,$request->onboard_staff_email);

        $onboard_staff_data = [];
        foreach ($c as $key=>$data) {
            $onboard_staff_data[] = [
                'slug'    => md5(uniqid(time())),
                'user_id' => $request->user_id,
                'onboard_staff_name' => $key,
                'onboard_staff_email' => $data,
                'created_at' => NOW(),
            ];
        }

        DB::table('onboard_staff')->insert($onboard_staff_data);

        /*============================================================
            end onboard staff data insert into databse
        =============================================================*/

        /*============================================================
            Business hour data insert into databse
        =============================================================*/

        $business_hours = new BusinessHour;

        $business_hours->slug    = md5(uniqid(time()));
        $business_hours->user_id = $request->user_id;

        $business_hours->sun_business_hours_am = $request->sun_business_hours_am;
        $business_hours->sun_business_hours_pm = $request->sun_business_hours_pm;
        
        $business_hours->mon_business_hours_am = $request->mon_business_hours_am;
        $business_hours->mon_business_hours_pm = $request->mon_business_hours_pm;
        
        $business_hours->tue_business_hours_am = $request->tue_business_hours_am;
        $business_hours->tue_business_hours_pm = $request->tue_business_hours_pm;
        
        $business_hours->wed_business_hours_am = $request->wed_business_hours_am;
        $business_hours->wed_business_hours_pm = $request->wed_business_hours_pm;
        
        $business_hours->thu_business_hours_am = $request->thu_business_hours_am;
        $business_hours->thu_business_hours_pm = $request->thu_business_hours_pm;
        
        $business_hours->fri_business_hours_am = $request->fri_business_hours_am;
        $business_hours->fri_business_hours_pm = $request->fri_business_hours_pm;
        
        $business_hours->sat_business_hours_am = $request->sat_business_hours_am;
        $business_hours->sat_business_hours_pm = $request->sat_business_hours_pm;

        $business_hours->save();

        /*============================================================
            Business hour data insert into databse
        =============================================================*/

        /*============================================================
            Business need data insert into databse
        =============================================================*/

        $business_needs = new BusinessNeed;

        $business_needs->slug    = md5(uniqid(time()));
        $business_needs->user_id = $request->user_id;
        
        if($request->manage_client_records){
            $business_needs->manage_client_records = $request->manage_client_records;
        }else{
            $business_needs->manage_client_records = 0;
        }
        if($request->send_email_sms_promotions){
            $business_needs->send_email_sms_promotions = $request->send_email_sms_promotions;
        }else{
            $business_needs->send_email_sms_promotions = 0;
        }
        if($request->send_email_sms_reminders){
            $business_needs->send_email_sms_reminders = $request->send_email_sms_reminders;
        }else{
            $business_needs->send_email_sms_reminders = 0;
        }
        if($request->add_online_scheduling){
            $business_needs->add_online_scheduling = $request->add_online_scheduling;
        }else{
            $business_needs->add_online_scheduling = 0;
        }
        if($request->invoices_estimates){
            $business_needs->invoices_estimates = $request->invoices_estimates;
        }else{
            $business_needs->invoices_estimates = 0;
        }
        if($request->accept_payments){
            $business_needs->accept_payments = $request->accept_payments;
        }else{
            $business_needs->accept_payments = 0;
        } 

        $business_needs->save();
    	
        /*============================================================
            Business need data insert into databse
        =============================================================*/

    	$response = [
    		'success' => 'ok',
    		'message' => "Business and time zone created",
            'value' => $request->all()
    	];
    	return response()->json($response);
    }

    public function timezone(Request $request){

        $timezone = new TimeZone;

        $slug    = md5(uniqid(time()));

        $timezone->slug    = md5(uniqid(time()));
        $timezone->user_id = $request->user_id;
        $timezone->time_zone = $request->time_zone;
        $timezone->time_format = $request->time_format;
        $timezone->start_weak_on = $request->start_weak_on;
        $timezone->save();

        $response = [
            'success' => 'ok',
            'message' => "Time zone added",
            'value'   =>$request->all()
        ];
        return response()->json($response);
    }
}
