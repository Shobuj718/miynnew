<?php

use Illuminate\Database\Seeder;
use App\Models\CalendarSettings;

class CalendarSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $calendar_setting = new CalendarSettings;
        $calendar_setting->slug = 'sdfg5r';
        $calendar_setting->user_id = 2;
        $calendar_setting->business_id = 1;
        $calendar_setting->week_start = 6;
        $calendar_setting->weekly_off = "a:1:{i:0;i:0;}";
        $calendar_setting->increment_hour = 0;
        $calendar_setting->increment_minute = 30;
        $calendar_setting->timezone = 'Asia/Dhaka';
        $calendar_setting->business_hour_start = '08:00 AM';
        $calendar_setting->business_hour_end = '4:30 PM';
        $calendar_setting->local_time = 1;
        $calendar_setting->save();

        $calendar_setting = new CalendarSettings;
        $calendar_setting->slug = '5c075dd0c57ad';
        $calendar_setting->user_id = 2;
        $calendar_setting->business_id = 1;
        $calendar_setting->week_start = 6;
        $calendar_setting->weekly_off = "a:1:{i:0;i:0;}";
        $calendar_setting->increment_hour = 1;
        $calendar_setting->increment_minute = 30;
        $calendar_setting->timezone = 'Asia/Dhaka';
        $calendar_setting->business_hour_start = '08:30 AM';
        $calendar_setting->business_hour_end = '4:30 PM';
        $calendar_setting->local_time = 1;
        $calendar_setting->save();

        $calendar_setting = new CalendarSettings;
        $calendar_setting->slug = md5(uniqid(time()));
        $calendar_setting->user_id = 4;
        $calendar_setting->business_id = 2;
        $calendar_setting->week_start = 6;
        $calendar_setting->weekly_off = "a:1:{i:0;i:0;}";
        $calendar_setting->increment_hour = 0;
        $calendar_setting->increment_minute = 20;
        $calendar_setting->timezone = 'Asia/Dhaka';
        $calendar_setting->business_hour_start = '08:00 AM';
        $calendar_setting->business_hour_end = '5:00 PM';
        $calendar_setting->local_time = 1;
        $calendar_setting->save();

        $calendar_setting = new CalendarSettings;
        $calendar_setting->slug = md5(uniqid(time()));
        $calendar_setting->user_id = 5;
        $calendar_setting->business_id = 3;
        $calendar_setting->week_start = 5;
        $calendar_setting->weekly_off = "a:1:{i:;i:2;}";
        $calendar_setting->increment_hour = 1;
        $calendar_setting->increment_minute = 0;
        $calendar_setting->timezone = 'Asia/Dhaka';
        $calendar_setting->business_hour_start = '10:00 AM';
        $calendar_setting->business_hour_end = '03:00 PM';
        $calendar_setting->local_time = 1;
        $calendar_setting->save();
    }
}
