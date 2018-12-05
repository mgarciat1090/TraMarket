<?php

use Illuminate\Database\Seeder;

class CandidatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Candidate::truncate();

        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++){
        	Job::create([
        		'title' => $faker->sentence,
        		'body' => $faker->paragraph
        	]);
        }
    }
}
