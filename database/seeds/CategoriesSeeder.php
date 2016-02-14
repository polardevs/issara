<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1, 10) as $index)
        {
            Category::create([
                'name' => $faker->word(),
                'order' => $index
            ]);
        }
    }
}
