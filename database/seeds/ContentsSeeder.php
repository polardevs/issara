<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Content;

class ContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $theme = ['nightlife', 'food', 'animals', 'cats', 'transport'];
        $categories = Category::all();
        foreach ($categories as $category)
        {
            foreach (range(5, 10) as $index)
            {
                Content::create([
                    'name' => $faker->sentence(rand(4, 6), true),
                    'category_id' => $category->id,
                    'image' => 'http://lorempixel.com/640/480/' . $theme[rand(0,4)] . '/' . rand(1, 9),
                    'content' => $faker->paragraph(10, true),
                    'types' => 1,
                    'status' => 1,
                ]);
            }
        }
    }
}
