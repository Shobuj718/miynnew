<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BusinessProfile;

class BusinessProfileController extends Controller
{
    public function business(Request $request)
    {        

		$business = new BusinessProfile;

    	$slug    = md5(uniqid(time()));

        //$user_id = Auth::user()->id;



        $business->slug    = md5(uniqid(time()));
        $business->user_id = $request->user_id;
        $business->industry_id = $request->industry_id;
        $business->profession_id = $request->profession_id;

        $business->country_with_code = $request->country_with_code;

        $str = $business->country_with_code;
        $ext = substr( strrchr($str, ' '), 1);

        $business->phone_number = $ext.$request->phone_number;

        $business->persons = $request->persons;
        $business->web_url = $request->web_url;
        $business->address = $request->address;

        if($request->present_number_address){
            $business->present_number_address = $request->present_number_address;
        }else{
            $business->present_number_address = 0;
        }
        if($request->manage_client_records){
            $business->manage_client_records = $request->manage_client_records;
        }else{
            $business->manage_client_records = 0;
        }
        if($request->send_email_sms_promotions){
            $business->send_email_sms_promotions = $request->send_email_sms_promotions;
        }else{
            $business->send_email_sms_promotions = 0;
        }
        if($request->send_email_sms_reminders){
            $business->send_email_sms_reminders = $request->send_email_sms_reminders;
        }else{
            $business->send_email_sms_reminders = 0;
        }
        if($request->add_online_scheduling){
            $business->add_online_scheduling = $request->add_online_scheduling;
        }else{
            $business->add_online_scheduling = 0;
        }
        if($request->invoices_estimates){
            $business->invoices_estimates = $request->invoices_estimates;
        }else{
            $business->invoices_estimates = 0;
        }
        if($request->accept_payments){
            $business->accept_payments = $request->accept_payments;
        }else{
            $business->accept_payments = 0;
        }    

        //$business->manage_client_records = $request->manage_client_records;
        //$business->send_email_sms_promotions = $request->send_email_sms_promotions;
        //$business->send_email_sms_reminders = $request->send_email_sms_reminders;
        //$business->add_online_scheduling = $request->add_online_scheduling;
        //$business->invoices_estimates = $request->invoices_estimates;
        //$business->accept_payments = $request->accept_payments;
        

    	$business->status = 1;
    	$business->save();

        /*$str = $business->country_with_code;
        $ext = substr( strrchr($str, ' '), 1);*/
    	
    	$response = [
    		'success' => 'ok',
    		'message' => "Business profile created",
            'slug' => $ext,
            'profession_id' => $request->all()
    	];
    	return response()->json($response);
    }
}
