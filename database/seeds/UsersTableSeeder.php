<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->first_name = "Admin";
        $user->slug = md5(uniqid(time()));
        $user->role_id = 1;
        $user->category_id = 0;
        $user->business_id = 0;
        $user->email = "shobujsa1993@gmail.com";
        $user->email_verified_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User;
        $user->first_name = "Business_Admin";
        $user->slug = md5(uniqid(time()));
        $user->role_id = 2;
        $user->category_id = 1;
        $user->business_id = 1;
        $user->email = "shobujislam1989@gmail.com";
        $user->email_verified_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User;
        $user->first_name = "Staff";
        $user->slug = md5(uniqid(time()));
        $user->role_id = 3;
        $user->category_id = 0;
        $user->business_id = 0;
        $user->email = "staff@gmail.com";
        $user->email_verified_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User;
        $user->first_name = "User";
        $user->slug = md5(uniqid(time()));
        $user->role_id = 4;
        $user->category_id = 0;
        $user->business_id = 0;
        $user->email = "user@gmail.com";
        $user->email_verified_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $user->password = Hash::make('12345678');
        $user->save();

    }
}
