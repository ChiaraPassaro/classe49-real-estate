<?php

use Faker\Generator as Faker;
use App\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $dates = [
            '2022/02/21 13:30:00',
            '2022/02/21 16:30:00',
            '2022/02/21 10:30:00',
            '2022/02/21 8:30:00'
        ];

        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->codice = $faker->ean8();
            $train->stazione_partenza = $faker->word();
            $train->stazione_arrivo =
                $faker->word();
            $train->ora_partenza = $dates[rand(0, 3)];
            $train->ora_arrivo =  $dates[rand(0, 3)];
            $train->save();
        }
    }
}
