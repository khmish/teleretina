<?php

use Illuminate\Database\Seeder;

class staffTableSeeder extends Seeder
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
	        DB::table('staff')->insert([
                'id' =>($index+1000000000),
                'user_id' =>$index,
                'clinic_id' =>$faker->numberBetween(1,50),
                'firstName' =>$faker->firstName(),
                'lastName' =>$faker->lastName(),
                'phone' =>'0500000000',
                'address' => $faker->address,
	        ]);
        }
    }
}
