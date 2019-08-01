<?php

use Illuminate\Database\Seeder;
use App\Models\Business;

class BusinessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $business = new Business;
        $business->slug = md5(uniqid(time()));
        $business->user_id = 2;
        $business->industry_id = 1;
        $business->profession_id = 1;
        $business->secret_key = 1234567;
        $business->name = 'AYLWARD GAME SOLICITORS';
        $business->short_description = "FREE 20 MINUTES CONSULTATION";
        $business->save();

    }
}
