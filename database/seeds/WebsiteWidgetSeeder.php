<?php

use Illuminate\Database\Seeder;
use App\Models\WebsiteWidget;

class WebsiteWidgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $website_widget = new WebsiteWidget;
        $website_widget->slug = md5(uniqid(time()));
        $website_widget->user_id = 2;
        $website_widget->action_type = 'floating';
        $website_widget->schedule = 'BOOK AN APPOINTMENT NOW HERE';
        $website_widget->details = 'Drop us a line';
        $website_widget->contents = 'Customer Testimonials';
        $website_widget->call_us = 'Call Us';
        $website_widget->payment = 'Make Payment';
        $website_widget->invitation_lebel = 'Contact Us';
        $website_widget->invitation_title = 'HOW CAN WE HELP YOU TODAY? PICK A SERVICE';
        $website_widget->invitation_text = 'Thank you for visiting our site';
        $website_widget->save();

        $website_widget = new WebsiteWidget;
        $website_widget->slug = md5(uniqid(time()));
        $website_widget->user_id = 4;
        $website_widget->action_type = 'floating';
        $website_widget->schedule = 'BOOK AN APPOINTMENT NOW HERE 2';
        $website_widget->details = 'Drop us a line';
        $website_widget->contents = 'Customer Testimonials';
        $website_widget->call_us = 'Call Us';
        $website_widget->payment = 'Make Payment';
        $website_widget->invitation_lebel = 'Contact Us';
        $website_widget->invitation_title = 'HOW CAN WE HELP YOU TODAY? PICK A SERVICE 2';
        $website_widget->invitation_text = 'Thank you for visiting our site';
        $website_widget->save();

        $website_widget = new WebsiteWidget;
        $website_widget->slug = md5(uniqid(time()));
        $website_widget->user_id = 5;
        $website_widget->action_type = 'floating';
        $website_widget->schedule = 'BOOK AN APPOINTMENT NOW HERE 3';
        $website_widget->details = 'Drop us a line';
        $website_widget->contents = 'Customer Testimonials';
        $website_widget->call_us = 'Call Us';
        $website_widget->payment = 'Make Payment';
        $website_widget->invitation_lebel = 'Contact Us';
        $website_widget->invitation_title = 'HOW CAN WE HELP YOU TODAY? PICK A SERVICE 3';
        $website_widget->invitation_text = 'Thank you for visiting our site';
        $website_widget->save();
        
    }
}
