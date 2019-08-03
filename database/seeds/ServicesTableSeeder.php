<?php

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = new Service;
        $service->slug = md5(uniqid(time()));
        $service->user_id = 2;
        $service->business_id = 1;
        $service->category_id = 1;
        $service->calendar_setting_id = 1;
        $service->name = 'In-office Appointment (20 Mins FREE)';
        $service->fee = 'Free';
        $service->description = 'Pop in and meet with a qualified lawyer for free to gain an understanding of your situation and options available to move forward.';
        $service->duration_hours = 0;
        $service->duration_minutes = 20;
        $service->image = 'http://127.0.0.1:8000/images/In-office-appointment.png';
        $service->save();

        $service = new Service;
        $service->slug = md5(uniqid(time()));
        $service->user_id = 2;
        $service->business_id = 1;
        $service->category_id = 1;
        $service->calendar_setting_id = 1;
        $service->name = 'Telephone Appointment (20mins FREE)';
        $service->fee = 'Free';
        $service->description = 'Speak with a knowledgeable lawyer over the phone for free and gain an understanding of your situation and options to move forward.';
        $service->duration_hours = 0;
        $service->duration_minutes = 20;
        $service->image = 'http://127.0.0.1:8000/images/Telephone-appionments.png';
        $service->save();

        $service = new Service;
        $service->slug = md5(uniqid(time()));
        $service->user_id = 2;
        $service->business_id = 1;
        $service->category_id = 1;
        $service->calendar_setting_id = 2;
        $service->name = 'Initial Advice Session';
        $service->fee = '$440 AUD';
        $service->description = 'Get initial advice on your legal matter with our set rate service and discover your pathway toward resolution.';
        $service->duration_hours = 1;
        $service->duration_minutes = 30;
        $service->image = 'http://127.0.0.1:8000/images/90-minute-initial--advice-session.png';
        $service->save();

        //new business admin
        $service = new Service;
        $service->slug = md5(uniqid(time()));
        $service->user_id = 4;
        $service->business_id = 2;
        $service->category_id = 5;
        $service->calendar_setting_id = 3;
        $service->name = 'Initial Advice Session 2';
        $service->fee = '$500 AUD';
        $service->description = 'Get initial advice on your legal matter with our set rate service and discover your pathway toward resolution 2.';
        $service->duration_hours = 0;
        $service->duration_minutes = 20;
        $service->image = 'http://127.0.0.1:8000/images/90-minute-initial--advice-session.png';
        $service->save();

        //new business admin
        $service = new Service;
        $service->slug = md5(uniqid(time()));
        $service->user_id = 5;
        $service->business_id = 3;
        $service->category_id = 6;
        $service->calendar_setting_id = 4;
        $service->name = 'Initial Advice Session 3';
        $service->fee = '$500 AUD';
        $service->description = 'Get initial advice on your legal matter with our set rate service and discover your pathway toward resolution 3.';
        $service->duration_hours = 1;
        $service->duration_minutes = 0;
        $service->image = 'http://127.0.0.1:8000/images/90-minute-initial--advice-session.png';
        $service->save();

        $service = new Service;
        $service->slug = md5(uniqid(time()));
        $service->user_id = 5;
        $service->business_id = 3;
        $service->category_id = 6;
        $service->calendar_setting_id = 4;
        $service->name = 'Initial Advice Session 4';
        $service->fee = '$100 AUD';
        $service->description = 'Get initial advice on your legal matter with our set rate service and discover your pathway toward resolution 4.';
        $service->duration_hours = 1;
        $service->duration_minutes = 0;
        $service->image = 'http://127.0.0.1:8000/images/90-minute-initial--advice-session.png';
        $service->save();
    }
}
