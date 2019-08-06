<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\BusinessProfile;
use App\Models\Staff;
use App\Models\BusinessHour;
use App\Models\OnboardStaff;
use App\Models\OnboardService;
use App\Models\User;
use App\Models\Industry;
use App\Models\Profession;
use App\Models\Role;


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

        /*$role_id = Auth::user()->role_id;
        $roles = Role::where('id', $role_id)->first();*/
        $role = Auth::user()->role->role;
     
      
        return view('admin.pages.dashboard', compact('role'));
        //return view('admin.onboarding.index', compact('user_type'));

    }

    public function dashboardCheck(){
        $industries = Industry::all();
        $professions = Profession::all();
        //dd($professions);
        return view('admin.onboarding.onboard_test', compact('industries', 'professions'));
    }

    public function getProfession(Request $request){
        //dd($request->all());
        $data = Profession::where('industry_id', $request->industry_id)->get();
        return $data;
    }

     public function getOnboardStaffEmail(Request $request){
        $onbardStaffEmail = OnboardStaff::where('id', $request->staff_name)->where('status', 1)->first();
        return $onbardStaffEmail;
    }

    public function onboardingDashboard(){

        $user = Auth::user();
        $user_auth_id = $user->id;

        $business_data = BusinessProfile::where('user_id', $user_auth_id)->first();
        $staff_data = Staff::where('user_id', $user_auth_id)->first();
        $OnboardService = OnboardService::where('user_id', $user_auth_id)->first();
        $onboardService2 = OnboardService::where('user_id', $user_auth_id)->get();
        $onboardStaff = OnboardStaff::where('user_id', $user_auth_id)->get();
        
        $business_profile_status = $business_data->status;
        //$onboardStaff = null;
        //dd($staff_data);
        // dd($business_profile_status);
        


        if($staff_data === null){
            $staff_status =  0;
        }else{
            $staff_status = 1;
        }
        if($OnboardService === null){
            $OnboardService =  0;
        }else{
            $OnboardService = 1;
        }

        return view('admin.onboarding.index', compact('business_profile_status', 'staff_status', 'OnboardService', 'onboardService2', 'onboardStaff'));

    }
    
    public function onboardingmodal(){
      
        return view('admin.onboarding.showModal');
    }

    public function staffAdd(Request $request){
        //dd($request->all());

        $staff = new Staff;

        $user = Auth::user();
        /*foreach ($request->staff_provide_service as $value) {
            $staff->slug    = md5(uniqid(time()));
            $staff->user_id = $user->id;
            $staff->staff_name = $request->staff_name;
            $staff->staff_email = $request->staff_email;
            $staff->staff_role = $request->staff_role;

            
                $staff->staff_provide_service = $value;
         
            //$staff->staff_provide_service = $request->staff_provide_service;
            $staff->send_email_with_inst = $request->send_email_with_inst;
        }*/
        foreach ($request->staff_provide_service as $data) {
            $onboard_staff_data[] = [
                'slug'    => md5(uniqid(time())),
                'user_id' => $user->id,
                'staff_name' => $request->staff_name,
                'staff_email' => $request->staff_email,
                'staff_role' => $request->staff_role,
                'staff_provide_service' => $data,
                'created_at' => NOW(),
            ];
        }

        DB::table('staff')->insert($onboard_staff_data);

            //$staff->save();
        $response = [
            'success' => 'ok',
            'message' => "Business profile created",
            'value' => $request->all()
        ];
        return response()->json($response);
    }

    public function serviceOnboard(Request $request){

        $businesshour = new BusinessHour;

        $user = Auth::user();

        $businesshour->slug    = md5(uniqid(time()));
        $businesshour->user_id = $user->id;

        $businesshour->sun_business_hours_am = $request->sun_business_hours_am;
        $businesshour->sun_business_hours_pm = $request->sun_business_hours_pm;
        
        $businesshour->mon_business_hours_am = $request->mon_business_hours_am;
        $businesshour->mon_business_hours_pm = $request->mon_business_hours_pm;
        
        $businesshour->tue_business_hours_am = $request->tue_business_hours_am;
        $businesshour->tue_business_hours_pm = $request->tue_business_hours_pm;
        
        $businesshour->wed_business_hours_am = $request->wed_business_hours_am;
        $businesshour->wed_business_hours_pm = $request->wed_business_hours_pm;
        
        $businesshour->thu_business_hours_am = $request->thu_business_hours_am;
        $businesshour->thu_business_hours_pm = $request->thu_business_hours_pm;
        
        $businesshour->fri_business_hours_am = $request->fri_business_hours_am;
        $businesshour->fri_business_hours_pm = $request->fri_business_hours_pm;
        
        $businesshour->sat_business_hours_am = $request->sat_business_hours_am;
        $businesshour->sat_business_hours_pm = $request->sat_business_hours_pm;

        $businesshour->save();

        /*============================================================
            onboard staff data insert into databse
        =============================================================*/
        $onboard_staff = new OnboardStaff;

        $c=array_combine($request->onboard_staff_name,$request->onboard_staff_email);

        $onboard_staff_data = [];
        foreach ($c as $key=>$data) {
            $onboard_staff_data[] = [
                'slug'    => md5(uniqid(time())),
                'user_id' => $user->id,
                'onboard_staff_name' => $key,
                'onboard_staff_email' => $data,
                'created_at' => NOW(),
            ];
        }

        DB::table('onboard_staff')->insert($onboard_staff_data);

        /*============================================================
            onboard staff data insert into databse
        =============================================================*/

        foreach ($request->service_name as $key => $value) {
            $service_name[] = $value;
        }

        foreach ($request->service_duration as $key => $value) {
            $service_duration[] = $value;
        }

        foreach ($request->service_price as $key => $value) {
            $service_price[] = $value;
        }

        /*$names[] = $request->service_name;
        $types[] = $request->service_duration;
        $prices[] = $request->service_price;*/

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
             $secArray['user_id'] = $user->id;
            $secArray['service_name'] = $value['service_name'];
            $secArray['service_duration'] = $value['service_duration'];
            $secArray['service_price'] = $value['service_price'];

            $tempArray[] = $secArray;

        }
        DB::table('onboard_services')->insert($tempArray);

         /*$serviceArr = [];
        foreach($result as $key=>$value){
            foreach ($value as $key2 => $value2) {
                $service->slug = md5(uniqid(time()));
                $service->user_id = $user->id;
                $service->service_name = $value2;
                $service->service_duration = $value2;
                $service->service_price = $value2;
                $service->save();
            }
        }*/



        $response = [
            'success' => 'ok',
            'message' => "Services created"
        ];
        return response()->json($response);
    }

}
