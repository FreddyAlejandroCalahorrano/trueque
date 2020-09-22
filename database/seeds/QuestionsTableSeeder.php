<?php

use App\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciamos la tabla Questions
        Question::truncate();
        $faker = \Faker\Factory::create();
        $users = App\User::all();

        foreach($users as $user){
            for($i = 0; $i < 3; $i++) {
                $products = $user->products;
                foreach ($products as $product) {
                    $user->questions()->save(
                        New Question([
                            'question' => $faker->word,
                            'product_id' => $product->id
                        ]));
                }
            }
        }
    }
}
