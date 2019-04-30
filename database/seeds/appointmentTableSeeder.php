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
        foreach (range(1,50) as $index) {
	        DB::table('appointments')->insert([
                'patient_id' =>($index+1000000050),
                'doctor_id' =>($index+1000000000),
                'staff_id' =>($index+1000000025),
                'report_number' =>$index,
                'clinic_id' => $faker->numberBetween(1,50),
                'appointment_date' =>$faker->date($format = 'Y/m/d'),
	        ]);
        }
    }
}
