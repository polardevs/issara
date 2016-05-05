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
        $categories = ['JOURNEY BEYOND', 'PHOTOTELLER', 'TRAVEL MANIA', 'ตุ๊ดปักหมุด', 'เที่ยวติดดิน', 'COFFEELYSTM', 'BOOK REVIEW'];
        foreach ($categories as $index => $category)
        {
            Category::create([
                'name' => $category,
                'order' => $index+1
            ]);
        }

        $topics = ['topic 1', 'topic 2', 'topic 3'];
        foreach ($topics as $index => $topic)
        {
            Category::create([
                'name' => $topic,
                'order' => $index+1,
                'is_topic' => 1
            ]);
        }

        $advertise = ['ISSARA FESTIVAL', 'OTHER LINK', 'SPONSERS'];
        foreach ($advertise as $index => $ads)
        {
            Category::create([
                'name' => $ads,
                'order' => $index+1,
                'is_ads' => 1
            ]);
        }

        Category::create([
                'name' => 'banner',
                'order' => 1,
                'is_banner' => 1
            ]);
    }
}
