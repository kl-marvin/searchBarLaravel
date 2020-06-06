<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // création de 30 produits aléatoire avec Faker pour peupler la bd
        for($i=0; $i < 30; $i++){
            Product::create([
                'title' => $faker->word(),
                'slug' => $faker->slug,
                'subtitle' => $faker->sentence(5),
                'description' => $faker->text(45),
                'price' => $faker->numberBetween(15, 300) * 100, // prix en centime de 15 à 300e
                'image' => 'https://via.placeholder.com/200x250'

            ]);
        }
    }
}
