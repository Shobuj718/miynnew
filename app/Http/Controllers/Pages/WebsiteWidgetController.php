<?php

namespace App\Http\Controllers\Pages;

use App\Models\WebsiteWidget;
use App\Models\CalendarSettings;
use App\Models\Business;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebsiteWidgetController extends Controller
{
    /*
    * Get calendar full HTML
    */
    function getCalendar(Request $request){
    
        // dd($request);
        $year = $request->year;
        $month = $request->month;

        $dateYear = ($year != '')?$year:date("Y");
        $dateMonth = ($month != '')?$month:date("m");
        $date = $dateYear.'-'.$dateMonth.'-01';
        
        $currentMonthFirstDay = date("N",strtotime($date));
        $totalDaysOfMonth = cal_days_in_month(CAL_GREGORIAN,$dateMonth,$dateYear);
        
        $totalDaysOfMonthDisplay = ($currentMonthFirstDay == 7)?($totalDaysOfMonth):($totalDaysOfMonth + $currentMonthFirstDay);
        $boxDisplay = ($totalDaysOfMonthDisplay <= 35)? 35 : 42;
        
        ?>
        <div id="calender_section">
            <div class="cal-nav">
                <?php 
                $curMonth =  $dateYear.'-'.$dateMonth.'-'.date('d');
                if(strtotime($curMonth) >  strtotime(date("Y-m-d")) ): 
                ?>
                <a class="prev" href="javascript:void(0);" onclick="getCalendar('calendar_div','<?php echo date("Y",strtotime($date.' - 1 Month')); ?>','<?php echo date("m",strtotime($date.' - 1 Month')); ?>');">&lt;&lt;</a>
                <?php else: ?>
                <a class="next" href="javascript:void(0);" style="opacity: 0.7">&lt;&lt;</a>
                <?php endif; ?>
                <span name="month_dropdown" class="month_dropdown dropdown"><?php echo date("F", mktime(0, 0, 0, $dateMonth+1, 0, 0)); ?></span>
                <span name="year_dropdown" class="year_dropdown dropdown"><?php echo $dateYear; ?></span>
                <a class="next" href="javascript:void(0);" onclick="getCalendar('calendar_div','<?php echo date("Y",strtotime($date.' + 1 Month')); ?>','<?php echo date("m",strtotime($date.' + 1 Month')); ?>');">&gt;&gt;</a>
            </div>
            <div id="calender_section_top">
                <ul>
                    <li>Sun</li>
                    <li>Mon</li>
                    <li>Tue</li>
                    <li>Wed</li>
                    <li>Thu</li>
                    <li>Fri</li>
                    <li>Sat</li>
                </ul>
            </div>
            <div id="calender_section_bot">
                <ul>
                <?php 
                    $dayCount = 1; 
                    for($cb=1;$cb<=$boxDisplay;$cb++){
                        if(($cb >= $currentMonthFirstDay+1 || $currentMonthFirstDay == 7) && $cb <= ($totalDaysOfMonthDisplay)){
                            //Current date
                            $currentDate = $dateYear.'-'.$dateMonth.'-'.$dayCount;
                            //Define date cell color
                            if(strtotime($currentDate) == strtotime(date("Y-m-d"))){
                                echo '<li date="'.$currentDate.'" class="current-date date_cell">';
                            } else if(strtotime($currentDate) < strtotime(date("Y-m-d"))){
                                echo '<li class="date_cell past-date">';
                            }else{
                                echo '<li date="'.$currentDate.'" class="date_cell">';
                            }
                            //Date cell
                            echo '<span>';
                            echo $dayCount;
                            echo '</span>';
                            
                            echo '</li>';
                            $dayCount++;
                ?>
                <?php }else{ ?>
                    <li class="date_cell past-date"><span>&nbsp;</span></li>
                <?php } } ?>
                </ul>
            </div>
        </div>
    <?php
    }
    
    public function getCalendarSettings(Request $request) {

        $data = Service::where('slug', $request->slug)->first();
        $calendar_id = $data->calendar_setting_id;
        $calendarSettings = CalendarSettings::where('id', $calendar_id)->first();

        return response()->json([
            'business_hour_end' => $calendarSettings->business_hour_end,
            'business_hour_start' => $calendarSettings->business_hour_start,
            'business_id' => $calendarSettings->business_id,
            'increment_hour' => $calendarSettings->increment_hour,
            'increment_minute' => $calendarSettings->increment_minute,
            'week_start' => $calendarSettings->week_start,
            'weekly_off' => $calendarSettings->weekly_off
        ]);
    }

    
    function show(Request $request){
        $business = Business::where('secret_key', $request->key)->first();
        $user = $business->user;
        //dd($user);
        $user_id = $business->user->id;
        $webWidgetData = WebsiteWidget::where('user_id', $user_id)->first();
        // dd($webWidgetData->schedule);
        ?>
        
        <div id="miyn-client-widget">
        <input type="hidden" name="selected_service" id="selected_service" value="">
        <input type="hidden" name="selected_staff" id="selected_staff" value="">
        <input type="hidden" name="selected_date_times" id="selected_date_times" value="">
        <!-- APPOINTMENT BUTTON -->
        <div class="booking-button">
            <!--<a href="#button-content">Talk To Lawyer</a>-->
            <a href="#appointment-box">
                <?php 
                    echo $webWidgetData->schedule;
                    //echo 'BOOK AN APPOINTMENT NOW';
                ?>
            </a>
        </div>

        <!-- APPOINTMENT BUTTON -->
        <div class="sidebar-widget">
        <ul>
            <!-- <li>
                <a href="#appointment-box"><i class="far fa-calendar-alt"></i><span>Schedule Appointment</span></a>
                <a href="#appointment-box"><i class="far fa-calendar-alt"></i><span>
                    <?php echo $webWidgetData->schedule; ?>
                </span></a>
            </li>
            <li>
                <a href="tel:1800 662 535"><i class="fas fa-phone"></i><span><?php echo $webWidgetData->call_us; ?></span></a>
            </li>
            <li>
                <a href="#send-information"><i class="far fa-envelope"></i><span><?php echo $webWidgetData->details; ?></span></a>
            </li>
            <li>
                <a href="#send-file"><i class="far fa-file"></i><span><?php echo $webWidgetData->content; ?></span></a>
            </li> -->
        </ul>
        </div>

        <!-- APPOINTMENT BUTTON CONTENT BOX -->
        <div class="button-content">
            <div class="full-mode">
                <a class="close" href="#close">X</a>
                <!-- <div class="title"> -->
                <!-- <a target="_blank" href="https://familylaw.aylwardgame.com.au/">
                    <img src="<?php echo $business->logo; ?>" alt="logo">
                </a> -->
                <h2>AYLWARD GAME SOLICITORS.</h2>
                <h2><?php echo $webWidgetData->invitation_title; ?></h2>
                <!-- </div> -->
                <div class="button-text">
                    <?php echo $webWidgetData->invitation_text; ?>
                <p>Thank You For Visiting familylaw aylwardgame. We're here to help, please don't hesitate to reach out and book a free 20-Minute <strong><a href="https://familylaw.aylwardgame.com.au/">Family Law Appointment</a></strong> or Seek a set-rate, low-fee initial advice today.</p>
                </div>
                <div class="popup-button">
               <!--  <a class="appointment-button" href="#appointment-box">Schedule Appointment</a> -->
                <a class="appointment-button" href="#appointment-box">
                    <?php echo $webWidgetData->schedule; ?>
                </a>
                <div class="toggle-button">
                    <span></span>
                    <div class="hover-content">
                    <a href="#appointment-box"><?php echo $webWidgetData->schedule; ?></a>
                    <a href="tel:1800 662 535"><?php echo $webWidgetData->call_us; ?></a>
                    <a href="#send-information"><?php echo $webWidgetData->details; ?></a>
                    <a href="#send-file"><?php echo $webWidgetData->content; ?></a>
                    </div>
                </div>
                </div>
            </div>
            <div class="inline-mode d-none">
                <div class="inline-button-section">
                <a href="#">Get this FREE widget</a>
                <a class="close" href="#close">X</a>
                </div>
                <div class="button-text">
                <h4>Free 20 Minute Family Law Appointment</h4>
                <p>Thank you for stopping by! </p>
                <p>Our team of experts is here to help you grow your business online! </p>
                <p>Please don't hesitate to contact us</p>
                <a class="btn btn-primary" href="#intro-call">Book a FREE intro call</a>
                </div>
                <div class="inline-mode-menu">
                <ul>
                    <li>
                    <a href="#intro-call"><i class="far fa-calendar-alt"></i></a>
                    </li>
                    <li>
                    <a href="#send-information"><i class="far fa-envelope"></i></a>
                    </li>
                    <li>
                    <a href="tel:1800 662 535"><i class="fas fa-phone"></i></a>
                    </li>
                    <li>
                    <a href="#"><i class="far fa-file"></i></a>
                    </li>
                </ul>
                </div>
            </div>
        </div>

        <!-- STAFF BOX -->
        <div class="intro-call popup-box">
            <div class="appointment-box-content">
                <a class="close" href="#close">X</a>
                <div class="appointment-box-heading">
                <div class="left-logo">
                    <a href="https://aylwardgame.com.au/" target="_blank">
                    <img src="<?php echo $business->logo; ?>" alt="<?php echo $business->name; ?>">
                </a>
                </div>
                <div class="headings">
                    <h2><a href="https://familylaw.aylwardgame.com.au/" target="_blank"><?php echo $business->name; ?></a></h2>
                    <p><?php echo $business->short_description; ?></p>
                </div>
                <div class="web-logo">
                    <img src="<?php echo $user->avatar; ?>" alt="image">
                </div>
                </div>
                <div class="appointment-items services">
                    <i class="fas fa-spin spinner"></i>
                </div>
            </div>
        </div>


        <!-- APPOINTMENT BOX -->
        <div class="appointment-box popup-box">
            <div class="appointment-box-content" style="background-color: transparent;">
                <div class="modal-header">
                    <a class="popup-logo" href="https://aylwardgame.com.au/" target="_blank">
                        <img src="https://aylwardgame.com.au/wp-content/themes/aylwardgame/assets/img/logo.png" alt="<?php echo $business->name; ?>">
                    </a>
                </div>
                <div class="popup-content-body">
                    <div class="headings header-custom-text text-center">
                        <a class="close" href="#close">X</a>
                    
                    <div class="appointment-box-heading">
                        <h2><a style="" href="https://www.aylwardgame.com.au" target="_blank"><?php echo $business->name ?></a></h2>
                        <p style="font-family: 'Open Sans', sans-serif;font-size: 16px!important;color: #031E3A"><?php echo $webWidgetData->invitation_title; ?></p>
                    </div>
                    
                </div>
                <div class="appointment-items services">
                    <ul>
                        <li>
                            <a data-pre="appointment-box" data-id="in-office" data-title="In-office Appointment (20mins FREE) (20 minutes)" href="#staff-box">
                                <div class="icon"><i class="far fa-user"></i></div>
                                <div class="list-title">
                                    <p><strong>In-office Appointments (20mins FREE)</strong> Pop in and meet with a family lawyer for free and gain an understanding of your situation and options to move forward.</p>
                                </div>
                                <div class="list-time">
                                    <i class="far fa-clock"></i>
                                    <span class="ng-binding">20 minutes</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a data-pre="appointment-box" data-id="telephone-appointment" data-title="Telephone Appointment (20mins FREE) (20 minutes)" href="#staff-box">
                                <div class="icon"><i class="fas fa-phone"></i></div>
                                <div class="list-title">
                                    <p><strong>Telephone Appointment (20mins FREE)</strong> Speak with a Brisbane family lawyer over the phone for free and gain an understanding of your situation and options to move forward.</p>
                                </div>
                                <div class="list-time">
                                    <i class="far fa-clock"></i>
                                    <span class="ng-binding">20 minutes</span>
                                </div>
                            </a>
                        </li>
                        <li class="pre-appointment">
                            <a data-pre="appointment-box" data-id="initial-advice" data-title="Initial Advice Session (1 hour 30 minutes)" href="#staff-box">
                                <div class="icon"><i class="fas fa-users"></i></div>
                                <div class="list-title">
                                    <p><strong>Initial Advice Session</strong> Get a set-rate, low-fee initial advice on your family law matter with our experienced Brisbane Family Law team.
                                    </p>
                                </div>
                                <div class="pre-amount">
                                    <i class="far fa-credit-card"></i>
                                    <span class="ng-binding">$440 AUD</span>
                                </div>
                                <div class="list-time">
                                    <i class="far fa-clock"></i>
                                    <span class="ng-binding">1 hour 30 minutes</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>

        <!-- STAFF BOX -->
       <div class="staff-box popup-box">
            <div class="appointment-box-content" style="background-color: transparent;">
                <div class="modal-header">
                    <a class="popup-logo" href="https://aylwardgame.com.au/" target="_blank">
                        <img src="https://aylwardgame.com.au/wp-content/themes/aylwardgame/assets/img/logo.png" alt="<?php echo $business->name; ?>">
                    </a>
                </div>
                <div class="popup-content-body">
                    <div class="headings header-custom-text text-center">
                        <a class="close" href="#close">X</a>
                        <div class="custom-popup-content">
                            <div class="popup-title">SELECT ONE STAFF</div>
                            <p class="fs-22">Suggest Up to 3 Suitable Times</p>
                        </div>
                    </div>
                <div class="appointment-items">
                    <textarea disabled class="service-text"></textarea>
                    <div class="selected-service"></div>
                    <p><strong>Please Select:</strong></p>
                    <ul class="staff-list">
                        <i class="fas fa-spin spinner"></i>
                    </ul>
                </div>
                <div class="button-section"><a style="margin: 15px; margin-left: -28px;" class="back-button" href="#">Back</a></div>
            </div>
        </div>
        </div>

        <!-- CALENDAR BOX -->
       <div class="calendar-box popup-box">
            <div class="appointment-box-content" style="background-color: transparent;">
                <div class="modal-header">
                    <a class="popup-logo" href="https://aylwardgame.com.au/" target="_blank">
                        <img src="https://aylwardgame.com.au/wp-content/themes/aylwardgame/assets/img/logo.png" alt="<?php echo $business->name; ?>">
                    </a>
                </div>
                <div class="popup-content-body">
                    <div class="headings header-custom-text text-center">
                        <a class="close" href="#close">X</a>
                        <div class="custom-popup-content">
                            <p>When can we help you?</p>
                            <div class="popup-title">YOUR PREFERRED TIMES</div>
                            <p class="fs-22">Suggest Up to 3 Suitable Times</p>
                        </div>
                    </div>
                    <div class="appointment-items">
                        <input type="hidden" id="userAvatar" value="<?php echo $user->avatar; ?>">
                        <textarea disabled class="service-text"></textarea>
                        <div class="selected-service"></div>
                        <p><strong>Your preferred times (suggest up to 3):</strong></p>
                        <div class="schedule-content row">
                            <div class="col-md-6 calendar-schedule-box p-0">
                                <div id="calendar_div">
                                    <input id="selected-date-array" type="hidden" class="dateArray">
                                </div>
                            </div>
                            <div class="col-md-6 time-schedule-box p-0">
                                <div id="screen-date" class="cal-nav"></div>
                                <div id="available-times" class="schedule-time">
                                   
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                <div class="button-section" style="margin: 15px; margin-left: 0px;">
                    <a class="back-button" href="#">Back</a>
                    <a class="continue-button" data-box="send-information" href="#send-information">Continue</a>
                    <!-- <a class="continue-button" data-box="send-file" href="#send-file">Continue</a> -->
                </div>
            </div>
        </div>
        </div>

        <!-- SEND INFORMATION BOX -->
        <div class="send-information popup-box">
            <div class="appointment-box-content" style="background-color: transparent;">
                <div class="modal-header">
                    <a class="popup-logo" href="https://aylwardgame.com.au/" target="_blank">
                        <img src="https://aylwardgame.com.au/wp-content/themes/aylwardgame/assets/img/logo.png" alt="<?php echo $business->name; ?>">
                    </a>
                </div>
                <div class="popup-content-body">
                    <div class="headings header-custom-text text-center">
                        <a class="close" href="#close">X</a>
                        <div class="appointment-box-heading">
                        <h2><a style="" href="https://www.aylwardgame.com.au" target="_blank">AYLWARD GAME SOLICITORS</a></h2>
                        <p style="font-family: 'Open Sans', sans-serif;font-size: 16px!important;color: #031E3A">HOW CAN WE HELP YOU TODAY? PICK A SERVICE</p>
                    </div>
                    </div>
            <div class="appointment-items">
            <textarea disabled class="service-text"></textarea>
            <div class="information-fields">
                <form action="">
                    <!--<h3 style="color:red;text-align:center;">All field are required !!!</h3>
                    <p style="color:#000;text-align:center;">Please fill up all the field</p>-->
                    <div class="form-group">
                        <label for="subject"></label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                        <span id="subject_error"></span>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" id="message" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required="">
                    </div>
                    
                    <div class="row">
                        <div class="col-md-2">
                           <select name="country_code" id="country_code"> 
                                <option value="+88">BD(+88)</option>
                                <option value="+61">AUS(+61)</option>
                            </select> 
                        </div>
                        
                        <div class="col-md-10">
                           <div class="form-group">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone: 411 234 567" required="">
                            </div> 
                        </div>
                    </div>
                    
                   <!-- <div class="form-group">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone: 411 234 567" required="">
                    </div>-->
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                        <span class="email_error"></span>
                    </div>
                    
                    
                </form>

                <!--<a style="border: 1px solid #666666;color: #806868; " class="back-button" href="#calendar-box">Back</a>-->
                <a class="continue-button" data-box="send-information2" href="#calendar-box">Back</a>
                <a id="book-service" class="continue-button" data-box="send-information2" href="#send-information2">Continue</a>
            </div>
            </div>
        </div>
        </div>
        </div>

         <!--welcome page after signing-->

        <div class="send-information2 popup-box">
            <div class="appointment-box-content">
                <a class="close" href="#close">X</a>
                
                <div class="appointment-items2 services2">
                    <!-- <div class="loader"></div> -->
                    <div class="ring">
                        Sending...
                        <span></span>
                    </div>
                </div>
            </div>
        </div>

        <!--end welcome page after signing-->

        <!-- SEND FILE BOX -->
        <div class="send-file popup-box">
        <div class="appointment-box-content">
            <a class="close" href="#close">X</a>
            <div class="appointment-box-heading">
            <div class="left-logo">
                <a href="https://familylaw.aylwardgame.com.au/" target="_blank">
                <img src="<?php echo $business->logo; ?>" alt="<?php echo $business->name; ?>">
            </a>
            </div>
            <div class="headings">
                <h2><a href="https://familylaw.aylwardgame.com.au/" target="_blank"><?php echo $business->name; ?></a></h2>
                <p><?php echo $business->short_description; ?></p>
            </div>
            <div class="web-logo">
                <img src="<?php echo $user->avatar; ?>" alt="<?php echo $user->first_name." ".$user->last_name; ?>">
            </div>
            </div>
            <div class="appointment-items">
            <textarea disabled class="service-text"></textarea>
            <div class="information-fields">
                <form action="">
                    <!-- <div class="form-group">
                        <label>Document</label>
                        <input type="file" class="form-control" id="file" name="file">
                    </div>
                    <div class="form-group">
                        <label>Document Title</label>
                        <input type="text" class="form-control" id="doc-title" name="doc-title" placeholder="Document Title">
                    </div> -->
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="message" name="message" placeholder="Message" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required="">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                    </div>
                    
                    <a style="border: 1px solid #666666;color: #806868; " class="back-button" href="#calendar-box">Back</a>
                    <a id="book-service" class="continue-button" data-box="send-information2" href="#send-information2">Continue</a>
                    <button  id="book-service" class="continue-button" data-box="send-information2" href="#send-information2">Upload2</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
            </div>
        </div>
        </div>
        </div>
        
        <?php
    }
}
