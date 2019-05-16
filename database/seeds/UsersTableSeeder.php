<?php

use Illuminate\Database\Seeder;
use App\User;

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
        $user->name = "Root";
        $user->email = "root@gmail.com";
        $user->email_verified_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User;
        $user->name = "Admin";
        $user->email = "admin@gmail.com";
        $user->email_verified_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User;
        $user->name = "User";
        $user->email = "user@gmail.com";
        $user->email_verified_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User;
        $user->name = "Client";
        $user->email = "client@gmail.com";
        $user->email_verified_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User;
        $user->name = "shobuj";
        $user->email = "shobuj@gmail.com";
        $user->email_verified_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $user->password = Hash::make('12345678');
        $user->save();

        /*$user = new User;
        $user->firstname = "Root";
        $user->lastname = "root";
        $user->email = "root@gmail.com";
        $user->slug = uniqid();
        $user->password = Hash::make('12345678');
        $user->email_verified_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $user->save();*/
    }
}
