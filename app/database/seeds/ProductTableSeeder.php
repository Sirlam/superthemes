q<?php
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder {

    public function run()
    {
        DB::table('products')->truncate();
        $faker = Faker::create();
        $users = User::all()->lists('id');
        $categories = Category::all()->lists('id');
        foreach(range(1, 50) as $index)
        {
            Product::create([
                'category_id' => $faker->randomElement($categories),
                'user_id' => $faker->randomElement($users),
                'title' => $faker->word,
                'description' => $faker->text,
                'new_price' => $faker->unique()->numberBetween($min = 1000, $max = 10000),
                'image' => $faker->imageUrl($width = 640, $height = 480),
                'upload_link' => $faker->fileExtension
            ]);
        }
    }

}