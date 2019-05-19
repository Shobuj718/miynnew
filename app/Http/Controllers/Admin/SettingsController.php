<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{

    public function settingPage(){
    	return view('admin.pages.settings.index');
    }
    public function availabilityAndCalendar(){
    	return view('admin.pages.settings.availability_and_calendar');
    }
}
