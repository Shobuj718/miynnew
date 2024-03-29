<?php


Route::get('/', function () {

    return view('welcome');
});


Auth::routes(['verify' => true]);
/*======================================================================
    Register and login all route
========================================================================*/

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::get('/varifyEmail/{id}', 'Auth\RegisterController@varifyEmail')->name('varifyEmail');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password-change', 'HomeController@password_change')->name('password.change');
Route::post('/password-change-success/{id}', 'HomeController@password_change_success')->name('password.change.success');

/*======================================================================
    Onboarding all route
========================================================================*/
/*Route::get('/dashboard/onboardings', function () {
    return view('admin.onboarding.onboard_test');
});*/



Route::get('/dashboard/check', function () {
    return view('admin.onboarding.onboard_form');
});


Route::group(['prefix' => 'app', 'middleware' => ['auth', 'verified']], function(){

    Route::get('/dashboard/onboardings', 'Admin\DashboardController@dashboardCheck');
    Route::get('/profession/getProfession', 'Admin\DashboardController@getProfession')->name('getProfession');

    Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
    Route::post('/staff', 'Admin\DashboardController@staffAdd')->name('staff.add');
    Route::post('/serviceOnboard', 'Admin\DashboardController@serviceOnboard')->name('serviceOnboard');

    Route::get('/dashboard/onboarding', 'Admin\DashboardController@onboardingDashboard')->name('dashboard.onboarding');
    Route::get('/getOnboardStaffEmail', 'Admin\DashboardController@getOnboardStaffEmail');
    Route::get('/dashboard/modal', 'Admin\DashboardController@onboardingmodal');

});


Route::post('/business', 'Admin\BusinessProfileController@business')->name('business');
Route::post('/timezone', 'Admin\BusinessProfileController@timezone');




Route::group(['prefix' => 'app', 'middleware' => ['auth', 'verified']], function(){

    Route::get('/settings', 'Admin\SettingsController@settingPage')->name('settings');
    Route::get('/settings/calendar', 'Admin\SettingsController@availabilityAndCalendar')->name('availabilityAndCalendar');
    Route::get('/calendar', 'Admin\CalendarController@showCalendar')->name('showCalendar');
    Route::get('/inbox', 'Admin\InboxController@index')->name('inbox');


    Route::get('/booking-client', 'Admin\BookingClientController@index')->name('booking.client');
    Route::get('/booking-client-confirm/{id}/{confirm}', 'Admin\BookingClientController@bookingClentConfirm')->name('booking.client.confirm');
    Route::get('/booking-client-cancel/{id}/{confirm}', 'Admin\BookingClientController@bookingClentCancel')->name('booking.client.cancel');
    Route::get('/booking-reschedule/{id}', 'Admin\BookingClientController@bookingReschedule')->name('reschedule');
    Route::post('/booking-reschedule-confirm', 'Admin\BookingClientController@bookingRescheduleConfirm')->name('reschedule.confirmed');



    Route::get('/client-portal', 'Actions\ClientPortalController@index')->name('client.portal');
    Route::get('/website-widgets', 'Actions\WebsiteWidgetController@index')->name('website.widget');
    Route::get('/add-widgets', 'Actions\WebsiteWidgetController@add_widget')->name('add.widget');
    Route::post('/store-portal-actions', 'Actions\WebsiteWidgetController@store_widget_actions')->name('store.portal.actions');
    Route::post('/store-portal-invite', 'Actions\WebsiteWidgetController@store_portal_invite')->name('store.portal.invite');
    /*Route::get('/website-widgets', 'Actions\WebsiteWidgetController@index')->name('add.widget');*/


    // industry functionality (only for admin)
    Route::get('/all-industry', 'Actions\IndustryController@index')->name('industry.all');
    Route::get('/add-industry', 'Actions\IndustryController@create')->name('industry.add');
    Route::post('/industry', 'Actions\IndustryController@store')->name('industry.store');
    Route::get('/edit-industry-name/{slug}', 'Actions\IndustryController@edit')->name('industry.edit');
    Route::post('/update-industry-name/{slug}', 'Actions\IndustryController@update')->name('industry.update');
    Route::get('/active-industry-name/{slug}', 'Actions\IndustryController@active')->name('industry.active');
    Route::post('/active-industry-name/{slug}', 'Actions\IndustryController@change_status')->name('industry.status.change');
    Route::get('/delete-industry/{slug}', 'Actions\IndustryController@delete')->name('industry.delete');

    // professions functionality (only for admin)
    Route::get('/all-profession', 'Actions\ProfessionController@index')->name('profession.all');
    Route::get('/add-profession', 'Actions\ProfessionController@create')->name('profession.add');
    Route::post('/store-profession', 'Actions\ProfessionController@store')->name('profession.store');
    Route::get('/edit-profession/{slug}', 'Actions\ProfessionController@edit')->name('profession.edit');
    Route::post('/update-profession/{slug}', 'Actions\ProfessionController@update')->name('profession.update');
    Route::get('/delete-profession/{slug}', 'Actions\ProfessionController@delete')->name('profession.delete');
    Route::get('/status-change-profession/{slug}/{status}', 'Actions\ProfessionController@status')->name('profession.status');

    //category functionality (only for admin) 
    Route::get('/all-category', 'Actions\CategoryController@index')->name('category.all');
    Route::get('/edit-category/{slug}', 'Actions\CategoryController@edit')->name('category.edit');
    

});

/* =============================================================================
website widget route start
===============================================================================*/
Route::post('/testbooking', 'Admin\BookingClientController@testbooking');

Route::prefix('api')->group(function(){

    Route::get('/get-widget', 'Pages\WebsiteWidgetController@show');
    Route::get('/get-calendar', 'Pages\WebsiteWidgetController@getCalendar');
    Route::get('/get-calendar-settings', 'Pages\WebsiteWidgetController@getCalendarSettings');
    Route::get('/categories', 'Actions\WebsiteWidgetController@getCategoriesWithServices');
    Route::get('/staffs', 'Actions\WebsiteWidgetController@getStaffsForBusiness');
    
    Route::post('/save-booking-info', 'Actions\BookingController@save');
});
/*Route::get('/send_test_email', 'Actions\BookingController@testmail');*/

/* =============================================================================
website widget route end
===============================================================================*/


Route::group(['prefix' => 'app', 'middleware' => ['auth', 'verified']], function(){
    //Route::get('/clinent-services', 'Actions\ServiceController@client_services')->name('client.services');
    Route::get('/client-services', 'Actions\ServiceController@client_services')->name('client.services');
    Route::post('/client-service-add', 'Actions\ServiceController@client_service_add')->name('client.service.add');
    //Route::get('/clinent-all-services', 'Actions\ServiceController@client_all_services')->name('client.services.all');
    Route::get('/services', 'Actions\ServiceController@client_all_services')->name('client.services.all');
    Route::get('/client-services-edit/{slug}', 'Actions\ServiceController@client_services_edit')->name('client.services.edit');
    Route::get('/client-services-delete/{slug}', 'Actions\ServiceController@client_services_delete')->name('client.services.delete');
    Route::post('/client-service-update/{slug}', 'Actions\ServiceController@client_service_update')->name('client.service.update');

    Route::get('/client-appointments-view/{id}', 'Admin\BookingClientController@client_appointments_view')->name('appointments.view');
    Route::get('/view-accept-appointment/{id}', 'Admin\BookingClientController@view_accept_appointment')->name('view.accept.appointment');
    Route::post('/appointments_confirmed/{id}', 'Admin\BookingClientController@appointments_confirmed')->name('appointments.confirmed');
});

// message send from view appointment page
Route::group(['middleware' => ['auth', 'verified']], function(){
    Route::post('/message-send-from-admin', 'Admin\MessageController@message_send_from_admin')->name('message.send');
    Route::post('/message-send-from-client', 'Admin\MessageController@message_send_from_client')->name('message.send');
});

