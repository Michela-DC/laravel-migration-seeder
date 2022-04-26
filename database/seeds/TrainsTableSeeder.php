<?php

use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i < 50; $i++){

            $train = new Train(); 

            $companies = ['Amtrak', 'Central Railway', 'Southern Railway', 'Northern Railway', ];
             // will give you only Australian states

            $train->company = $faker->randomElement($companies);
            $train->departure_station = $faker->city();
            $train->departure_date = $faker->dateTimeBetween('now', '+2 weeks');
            $train->departure_time = $faker->time();
            $train->arrival_station = $faker->city();
            $train->arrival_date = $faker->dateTimeBetween('now', '+2 weeks');
            $train->arrival_time = $faker->time();
            $train->train_code= $faker->bothify('#####??');
            $train->carriages_number = $faker->numberBetween(3,10);
            $train->ticket_price = $faker->randomFloat(2,1,300);
            $train->in_time = $faker->boolean();
            $train->canceled = $faker->numberBetween(0,1);
           
            $train->save();
        }
    }
}
