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
        $users = App\User::all();
        $categories = App\Category::all();

        foreach($users as $user){
            for($i = 0; $i < 5; $i++) {
                foreach ($categories as $category){
                $user->products()->save(
                    New Product([
                        'title' => $faker->sentence,
                        'image' => $faker->imageUrl(400,300, null, false),
                        'value' => $faker->randomDigit,
                        'description' => $faker->paragraph,
                        'category_id' => $category->id
                    ]));
                }
            }
        }
    }

}

