<?php

use Illuminate\Database\Seeder;

class userTableSeeder extends Seeder
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
	        DB::table('users')->insert([
                'email' => $faker->email(),
                'name' => $faker->firstName(),
                'password' => bcrypt('secret'),
	        ]);
        }
    }
}
