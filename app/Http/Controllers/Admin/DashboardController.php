<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
	public function __construct()
	{
		$this->middleware(['auth', 'verified']);
	}

    public function index()
    {

        $user_type = 'user';
      
        return view('admin.pages.dashboard');
        //return view('admin.onboarding.index', compact('user_type'));

    }

    public function onboardingDashboard(){

        return view('admin.onboarding.onboard_dash');

    }
    
    public function onboardingmodal(){
      
        return view('admin.onboarding.showModal');
    }

    public function staffAdd(Request $request)
    {
    	$response = [
    		'success' => 'ok',
    		'message' => "Business profile created",
    		'input' => $request->all()
            
    	];
    	return response()->json($response);
    }

}
