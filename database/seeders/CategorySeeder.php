<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            'Travel & Honeymoon',
            'Pre-Wedding',
            'Wedding',
            'Engagement',
            'Maternity',
            'Babies & Kids',
            'Family',
            'Beauty & Fashion',
            'Birthday',
            'Graduation',
            'Events Photography',
            'Conceptor Service',
            'Product Photography',
            'Budget Tour',
            'Deluxe Tour',
        ];

        $faker = \Faker\Factory::create('id_ID');
        $count = Category::count();
        if ($count === 0) {
            foreach ($categories as $item) {
                Category::create([
                    'name' => $item,
                    'description' => 'Lorem Ipsum dolor amet',
                    'image' => $faker->imageUrl(category: $item),
                ]);
            }
        }
    }
}
