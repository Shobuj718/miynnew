<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\BusinessProfile;
use App\Models\Staff;


class DashboardController extends Controller
{
	public function __construct()
	{
		$this->middleware(['auth', 'verified']);
	}

    public function index()
    {

        $user = Auth::user();
        $login_id =  Auth::user()->id;


        $businessProfileId = BusinessProfile::where('user_id', $login_id)->first();
        //var_dump($businessProfileId);
        if($businessProfileId == NULL){
            $businessId = 0;
        }else{
            $businessId = $businessProfileId->status;
        }
      
        return view('admin.pages.dashboard', compact('businessId'));
        //return view('admin.onboarding.index', compact('user_type'));

    }

    public function onboardingDashboard(){

        return view('admin.onboarding.index');

    }
    
    public function onboardingmodal(){
      
        return view('admin.onboarding.showModal');
    }

    public function staffAdd(Request $request){

        $staff = new Staff;

        $user = Auth::user();

        $staff->slug    = md5(uniqid(time()));
        $staff->user_id = $user->id;
        $staff->staff_name = $request->staff_name;
        $staff->staff_email = $request->staff_email;
        $staff->staff_role = $request->staff_role;
        $staff->staff_provide_service = $request->staff_provide_service;
        $staff->send_email_with_inst = $request->send_email_with_inst;
        $staff->save();

        $response = [
            'success' => 'ok',
            'message' => "Business profile created",
            'value' => $request->all()
        ];
        return response()->json($response);
    }



}
