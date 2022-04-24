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

            $aziende = ['Trenitalia', 'Trenord', 'Italo', 'Thello', ];

            $train->azienda = $faker->randomElement($aziende);
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno= $faker->bothify('#####??');
            $train->numero_carrozze = $faker->numberBetween(3,8);
            $train->prezzo_biglietto = $faker->randomFloat(2,1,1000);
           
            $train->save();
        }
    }
}
