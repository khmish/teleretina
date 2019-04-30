<?php

use Illuminate\Database\Seeder;

class patientTableSeeder extends Seeder
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
            $idP=($index+1000000050);
            $userID=$index+50;
	        DB::table('patients')->insert([
                'id' =>$idP,
                'user_id' =>$userID,
                'firstName' =>$faker->firstName(),
                'lastName' =>$faker->lastName(),
                'phone' =>'0500000000',
                'address' => $faker->address,
            ]);
            
            
        }
    }
}
