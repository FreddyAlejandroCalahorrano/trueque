<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla articles.
        Product::truncate();
        $faker = \Faker\Factory::create();

            for ($j = 0; $j < 5; $j++) {
                Product::create([
                    'title' => $faker->sentence,
                    'image' => $faker->imageUrl(400,300, null, false),
                    'value' => $faker->randomDigit,
                    'description' => $faker->paragraph,
                ]);
            }
        }
    }

