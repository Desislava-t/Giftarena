<?php

use Illuminate\Database\Seeder;
use App\PostToHomePage;

class PostToHomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostToHomePage::create([
            'title' => 'GoldenstroyMB продава апартаменти',
            'content' => 'Lorem ipsum dolor sit amet, 
            consectetur adipisicing elit.'
        ]);

        PostToHomePage::create([
            'title' => 'Нов офис на GoldenstroyMB',
            'content' => 'Заповядайте на откриването ще бъде на 24.10.2020г в град Варна'
        ]);
    }
}
