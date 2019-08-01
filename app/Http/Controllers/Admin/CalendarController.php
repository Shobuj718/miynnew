<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Booking;
use Calendar;
use Auth;

class CalendarController extends Controller
{
    public function showCalendar(){

	    //$booking = Booking::where('staff_id',Auth::user()->id)->where('status', 1)->get();
	    $booking = Booking::where('staff_id',Auth::user()->id)->get();

	    $events = [];

	     if($booking){

	        foreach ($booking as $key => $value) {

	        	$data = unserialize($value->requested_date);

	        	foreach($data as $date => $time){

		          $events[] = Calendar::event(

		              $value->service_name,
		              
		              true,

		              new \DateTime($date),

		              new \DateTime($date.' +1 day'),
		              
		              1, //optional event ID
		                [
		                  'color' => '#4680ff',
		                  //'color' => '#FC6180',
		                  'url' => 'http://127.0.0.1:8000//client-appointments-view/'.$value->id,
		                  //any other full-calendar supported parameters
		                ]

		          );

		        }
		    }

	     }

	    $calendar = Calendar::addEvents($events); 

    	return view('admin.pages.calendar.showCalendar', compact('calendar'));
    }
}
