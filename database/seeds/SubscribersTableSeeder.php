<?php

use Illuminate\Database\Seeder;
use App\Subscribe;

class SubscribersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subscribe::create([
            'email' => 'userEmail@abv.bg',
        ]);

        Subscribe::create([
            'email' => 'userOne@abv.bg',
        ]);

        Subscribe::create([
            'email' => 'userTwo@abv.bg',
        ]);

        Subscribe::create([
            'email' => 'userThree@abv.bg',
        ]);

        Subscribe::create([
            'email' => 'userFour@abv.bg',
        ]);

        Subscribe::create([
            'email' => 'userFive@abv.bg',
        ]);
    }
}
