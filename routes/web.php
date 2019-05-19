<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

/*======================================================================
	Onboarding all route
========================================================================*/
Route::get('/dashboard/onboardings', function () {
    return view('admin.onboarding.onboard_test');
});
Route::get('/dashboard/check', function () {
    return view('admin.onboarding.onboard_form');
});
Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
Route::post('/staff', 'Admin\DashboardController@staffAdd')->name('staff.add');
Route::post('/serviceOnboard', 'Admin\DashboardController@serviceOnboard')->name('serviceOnboard');

Route::get('/dashboard/onboarding', 'Admin\DashboardController@onboardingDashboard');
Route::post('/business', 'Admin\BusinessProfileController@business');

Route::get('/dashboard/modal', 'Admin\DashboardController@onboardingmodal');

Route::group(['middleware' => ['auth', 'verified']], function(){
	Route::get('/settings', 'Admin\SettingsController@settingPage')->name('settings');
	Route::get('/settings/calendar', 'Admin\SettingsController@availabilityAndCalendar')->name('availabilityAndCalendar');
});
