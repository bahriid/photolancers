<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $count = Blog::count();
        if ($count === 0) {
            foreach (range(1, 10) as $item) {
                $blog = new Blog();
                $blog['title'] = $faker->sentence();
                $blog['slug'] = \Str::slug($blog['title']);
                $blog['user_id'] = 1;
                $blog['description'] = $faker->realTextBetween($minNbChars = 160, $maxNbChars = 200, $indexSize = 2);
                $blog['banner'] = $faker->imageUrl();
                $blog['category'] = 'News';

                $blog->save();
            }
        }
    }
}
