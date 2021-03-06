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
        $this->call(UserSeeder::class);
        $this->call(CustomerTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(HotelStatusTableSeeder::class);
        $this->call(HotelTableSeeder::class);
        $this->call(RoomTypesTableSeeder::class);
    }
}
