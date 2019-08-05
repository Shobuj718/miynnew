<?php

use Illuminate\Database\Seeder;
use App\Models\ContactInfo;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for secret key 1234567
        $contact_info = new ContactInfo;
        $contact_info->slug = md5(uniqid(time()));
        $contact_info->user_id = 2;
        $contact_info->phone = '+8801305105764';
        $contact_info->address = 'Bogura';
        $contact_info->website_url = 'https://test.miyn.net';
        $contact_info->save();

        // for secret key 1234568
        $contact_info = new ContactInfo;
        $contact_info->slug = md5(uniqid(time()));
        $contact_info->user_id = 4;
        $contact_info->phone = '+8801305105764';
        $contact_info->address = 'Bogura 2';
        $contact_info->website_url = 'https://test.miyn.net';
        $contact_info->save();

        // for secret key 1234568
        $contact_info = new ContactInfo;
        $contact_info->slug = md5(uniqid(time()));
        $contact_info->user_id = 5;
        $contact_info->phone = '+8801305105764';
        $contact_info->address = 'Bogura 3';
        $contact_info->website_url = 'https://test.miyn.net';
        $contact_info->save();
    }
}
