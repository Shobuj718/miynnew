<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            ['slug' => md5(uniqid(time())), 'role' => 'Root User', 'permission' => 'root']
        );
        DB::table('roles')->insert([
            ['slug' => md5(uniqid(time())), 'role' => 'Business Admin', 'permission' => 'business_admin']
        ]);
        DB::table('roles')->insert([
            ['slug' => md5(uniqid(time())), 'role' => 'staff', 'permission' => 'staff']
        ]);
        DB::table('roles')->insert([
            ['slug' => md5(uniqid(time())), 'role' => 'user', 'permission' => 'user']
        ]);
      
    }
}
