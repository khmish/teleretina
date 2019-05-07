<?php

use Illuminate\Database\Seeder;

class reportTableSeeder extends Seeder
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
	        DB::table('reports')->insert([
                'appointment_id' =>$index,
                'date' =>$faker->dateTimeBetween($startDate = 'now', $endDate = '+5 years'),
                'time' => $faker->time($format = 'H:i'),
	        ]);
        }
    }
}
