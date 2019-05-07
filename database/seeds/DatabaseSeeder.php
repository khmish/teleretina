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
        $this->call(userTableSeeder::class);
        $this->call(staffTableSeeder::class);
        $this->call(appointmentTableSeeder::class);
        $this->call(patientTableSeeder::class);
        $this->call(reportTableSeeder::class);
        
    }
}
