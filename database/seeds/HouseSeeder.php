<?php

use Faker\Generator as Faker;

use App\House;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //inseriamo in db con dato che provengono da un nostro array
        // $houses = [
        //     [
        //         'name' => 'Villa in centro',
        //         'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa obcaecati quos, fuga minima distinctio accusamus? Minima, laudantium tempore architecto libero quod reprehenderit error ea commodi placeat dignissimos iste, esse nam?',
        //         'address' => 'via Tizio e Caio 10',
        //         'city' => 'Roma',
        //         'rooms' => 4,
        //         'mq' => 160,
        //         'level' => 2,
        //         'photo' => 'https://i.picsum.photos/id/101/2621/1747.jpg',
        //         'price' => 450000.00,
        //     ],
        //     [
        //         'name' => 'Appartamento 4 vani',
        //         'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa obcaecati quos, fuga minima distinctio accusamus? Minima, laudantium tempore architecto libero quod reprehenderit error ea commodi placeat dignissimos iste, esse nam?',
        //         'address' => 'via Pinco 5',
        //         'city' => 'Roma',
        //         'rooms' => 4,
        //         'mq' => 100,
        //         'level' => 1,
        //         'photo' => 'https://i.picsum.photos/id/101/2621/1747.jpg',
        //         'price' => 340000.00,
        //     ],
        //     [
        //         'name' => 'Monolocale',
        //         'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa obcaecati quos, fuga minima distinctio accusamus? Minima, laudantium tempore architecto libero quod reprehenderit error ea commodi placeat dignissimos iste, esse nam?',
        //         'address' => 'via Tizio e Caio 20',
        //         'city' => 'Roma',
        //         'rooms' => 1,
        //         'mq' => 160,
        //         'level' => 2,
        //         'photo' => 'https://i.picsum.photos/id/101/2621/1747.jpg',
        //         'price' => 180000.00,
        //     ],
        //     [
        //         'name' => 'Vista Mare',
        //         'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa obcaecati quos, fuga minima distinctio accusamus? Minima, laudantium tempore architecto libero quod reprehenderit error ea commodi placeat dignissimos iste, esse nam?',
        //         'address' => 'via Tizio e Caio 10',
        //         'city' => 'Napoli',
        //         'rooms' => 4,
        //         'mq' => 160,
        //         'level' => 2,
        //         'photo' => 'https://i.picsum.photos/id/101/2621/1747.jpg',
        //         'price' => 500000.00,
        //     ],
        // ];

        //qui proviamo ad inserire una sola House
        // $house = new House();
        // $house->name = 'Villa in centro';
        // $house->description = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa obcaecati quos, fuga minima distinctio accusamus? Minima, laudantium tempore architecto libero quod reprehenderit error ea commodi placeat dignissimos iste, esse nam?';
        // $house->address = 'via Tizio e Caio 10';
        // $house->city = 'Roma';
        // $house->rooms = 4;
        // $house->mq = 160;
        // $house->level = 2;
        // $house->photo = 'https://i.picsum.photos/id/101/2621/1747.jpg';
        // $house->price = 450000.00;

        // $house->save();

        //qui abbiamo inserito i dati da array
        // foreach ($houses as $house) {
        //     $newHouse = new House();
        //     // $newHouse->name = $house['name'];
        //     // $newHouse->description = $house['description'];
        //     // $newHouse->address = $house['address'];
        //     // $newHouse->city = $house['city'];
        //     // $newHouse->rooms = $house['rooms'];
        //     // $newHouse->mq = $house['mq'];
        //     // $newHouse->level = $house['level'];
        //     // $newHouse->photo = $house['photo'];
        //     // $newHouse->price = $house['price'];
        //     $newHouse->fill($house);
        //     $newHouse->save();
        // }

        // https://fakerphp.github.io
        //creiamo con un ciclo 100 righe nel nostro db con dati Fake
        for ($i = 0; $i < 100; $i++) {
            $newHouse = new House();
            $newHouse->name = $faker->words(4, true);
            $newHouse->description = $faker->text();
            $newHouse->address = $faker->streetAddress();
            $newHouse->city = $faker->city();
            $newHouse->rooms = $faker->randomDigit();
            $newHouse->mq = $faker->numberBetween(90, 200);;
            $newHouse->level = $faker->randomDigit();
            $newHouse->photo = $faker->imageUrl(640, 480, 'houses', true);
            $newHouse->price = $faker->numberBetween(100000, 900000);
            $newHouse->is_rent = $faker->numberBetween(0, 1);
            $newHouse->is_sale = $faker->numberBetween(0, 1);
            $newHouse->save();
        }
    }
}
