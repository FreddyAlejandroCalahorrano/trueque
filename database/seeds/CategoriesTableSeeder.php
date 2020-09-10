<?php

use App\Categorie;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciamos la tabla categories
        Categorie::truncate();
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 3; $i++) {
            Categorie::create([
                'name' => $faker->word
            ]);
        }
    }
}
