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
            ['role' => 'Root User', 'permission' => 'root']
        );
        DB::table('roles')->insert([
            ['role' => 'Admin', 'permission' => 'admin']
        ]);
        DB::table('roles')->insert([
            ['role' => 'staff', 'permission' => 'staff']
        ]);
        DB::table('roles')->insert([
            ['role' => 'user', 'permission' => 'user']
        ]);
      
    }
}
