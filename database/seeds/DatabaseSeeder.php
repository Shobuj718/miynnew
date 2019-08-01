<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(IndustryProfessionSeeder::class);
        $this->call(BusinessTableSeeder::class);
        $this->call(WebsiteWidgetSeeder::class);
        $this->call(CalendarSettingSeeder::class);
        $this->call(ContactInfoSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(ServicesTableSeeder::class);
    }
}
