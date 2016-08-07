q<?php
use Faker\Factory as Faker;

class CommentTableSeeder extends Seeder {

    public function run()
    {
        DB::table('comments')->truncate();
        $faker = Faker::create();
        $users = User::all()->lists('id');
        $products = Product::all()->lists('id');
        foreach(range(1, 100) as $index)
        {
            Comment::create([
                'product_id' => $faker->randomElement($products),
                'user_id' => $faker->randomElement($users),
                'comment' => $faker->text
            ]);
        }
    }

}