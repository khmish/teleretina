<?php

use Illuminate\Database\Seeder;

class appointmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        foreach (range(1,100) as $index) {
	        DB::table('appointments')->insert([
                'patient_id' =>$faker->numberBetween(1,50),
                'doctor_id' =>$faker->numberBetween(1,25),
                'staff_id' =>$faker->numberBetween(26,50),
                'report_number' =>$faker->numberBetween(1,50),
                'appointment_date' =>$faker->date($format = 'Y/m/d'),
	        ]);
        }
    }
}
