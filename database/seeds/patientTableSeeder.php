<?php
use Faker\Generator as Faker;
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
	        DB::table('patients')->insert([
                'id' =>($index+1000000050),
                'user_id' =>$index+50,
                'firstName' =>$faker->firstName($gender = null|'male'|'female'),
                'lastName' =>$faker->lastName(),
                'phone' =>'0500000000',
                'address' => $faker->address,
	        ]);
        }
    }
}
